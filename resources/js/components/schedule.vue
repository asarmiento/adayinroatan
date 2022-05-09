<template>
   <div>
       <div class="row">
           <div class="col-lg-2 p-1">
               <h2>Reservaciones Pendientes</h2>
               <ul class="list-group">
                   <li v-for="reservation in histories">
                       {{reservation.name}}
                       Fecha: {{reservation.date}}
                       Adultos: {{reservation.adults}}
                       Niños: {{reservation.kids}}
                       <a class="btn btn-success btn-xs " @click="successReservation(reservation.id)" style="margin: 0  10px 0 15px" title="Aprobar reservación">
                           <i class="fa fa-check" aria-hidden="true"></i>
                       </a>
                       <a class="btn btn-danger btn-xs" @click="dangerReservation(reservation.id)" title="Rechazar reservación">
                           <i class="fa fa-remove" aria-hidden="true"></i>
                       </a>
                       <h2 style="border-bottom: 1px #000000 solid; width: 100%; margin: 15px 0 15px 0"></h2>
                   </li>

               </ul>
           </div>
           <div class="col-lg-8">
               <div class="ibox">
                   <!--<div class="col-md-12 text-center"><a class="btn btn-success" data-toggle="modal"
                                                         data-target="#myModal">Nuevo registro</a></div>-->
                   <div class="row calendar">
                       <div class="calendar__info">
                           <div class="calendar__prev" @click="lastMonth" id="prev-month">&#9664</div>
                           <div class="calendar__month" id="month">{{month}}</div>
                           <div class="calendar__year" id="year">{{year}}</div>
                           <div class="calendar__next" @click="nextMonth" id="next-month">&#9654</div>
                       </div>
                       <ol>
                           <li class="day-name">Domingo</li>
                           <li class="day-name">Lunes</li>
                           <li class="day-name">Martes</li>
                           <li class="day-name">Miercoles</li>
                           <li class="day-name">Jueves</li>
                           <li class="day-name">Viernes</li>
                           <li class="day-name">Sábado</li>
                           <template v-for="day in dates">
                               <li class="day-date prev-dates" v-if="day === ''">
                                   <strong  class="label label-danger">Reservations {{details.length}}</strong>

                               </li>
                               <li class="day-date today" data-toggle="modal" data-target="#contentShedule"
                                   v-else-if="day === currentDay"
                                   @click="setScheduleDay(day,monthNumber,year)">
                                   <p>{{day}}</p>
                                   <!--<p>{{ year+'-'+dayDataFormat(monthNumber+1)+'-'+dayDataFormat(day)}}</p>-->
                                   <strong v-if="getDate(year+'-'+dayDataFormat(monthNumber+1)+'-'+dayDataFormat(day))"  class="label label-danger">Reservations {{getDate(year+'-'+dayDataFormat(monthNumber+1)+'-'+dayDataFormat(day))}}</strong>
                               </li>
                               <li class="day-date" data-toggle="modal" data-target="#contentShedule" v-else
                                   @click="setScheduleDay(day,monthNumber,year)"><p>{{day}}</p>
                                   <!--<p>{{ year+'-'+dayDataFormat(monthNumber+1)+'-'+dayDataFormat(day)}}</p>-->
                                   <strong  v-if="getDate(year+'-'+dayDataFormat(monthNumber+1)+'-'+dayDataFormat(day))"  class="label label-danger">Reservations {{getDate(year+'-'+dayDataFormat(monthNumber+1)+'-'+dayDataFormat(day))}}</strong>
                               </li>
                           </template>
                       </ol>

                   </div>

               </div>
               <div class="row mb-4">
                   <div class="col-md-12 text-center">
                       <a :href="'/reports-excel/'+(this.monthNumber+1)" class="btn btn-success m-2"><i class="fa fa-file-excel-o fa-2x"></i> Descargar Reporte del Mes</a>
                       <a :href="'/reports-pdf/'+(this.monthNumber+1)" target="_blank" class="btn btn-danger m-2"><i class="fa fa-file-pdf-o  fa-2x"></i> Descargar Reporte del Mes</a>
                   </div>
               </div>
           </div>

           <div class="col-lg-2 p-1">
               <h2>Reservaciones Aceptadas</h2>
               <ul class="list-group text-black text-justify" >
                   <li v-for="reservation in details">
                       {{reservation.name}}
                       <strong>Fecha:</strong> {{reservation.date}}
                       <strong>Adultos:</strong> {{reservation.adults}}
                       <strong>Niños:</strong> {{reservation.kids}}
                       <strong>Tour:</strong> {{reservation.tour}}
                       <strong>Terminal:</strong> {{reservation.terminal}}
                       <strong>Obsercación:</strong> {{reservation.message}}

                       <h2 style="border-bottom: 1px #000000 solid; width: 100%; margin: 15px 0 15px 0"></h2>
                   </li>

               </ul>
           </div>


       </div>

   </div>
</template>

<script>
  import vSelect from "vue-select";
  import Swal from "sweetalert2";
  import Spinner from "./spinner.vue";

  export default {
    props:      [
      "data_customer",
      "redirecction",
      "url",
      "name_button",
      "title"
    ],
    components: {vSelect, Spinner, Swal},
    data() {
      return {
        data:             {
          name:           '',
          phone:          '',
          date:          '',
          identification: '',
          type_card:      '',
          all_day:        false,
          init_date:      "",
          init_time:      "",
          end_date:       "",
          description:    "",
        },
        histories:        [],
        detailsHistories: [],
        currentDate:      '',
        monthNames:       ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
          'Octubre', 'Noviembre', 'Diciembre'],
        currentDay:       '',
        year:             '',
        monthNumber:      '',
        month:            '',
        dates:            [],
        message:          '',
        timesMonday:      ['07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30',
          '12:00', '12:30', '13:00', '13:30', '14:00', '14:30'],
        details:[]
      }

    },
    computed:   {

      selectDay() {

      }
    },
    mounted() {
    //  this.timesMonday.filter()

      this.data.date = this.year + '-' + (this.monthNumber+1) + '-' + this.day;
    },
    created() {


      this.currentDate = new Date();
      this.currentDay  = this.currentDate.getDate();
      this.day  = this.dayDataFormat(this.currentDate.getDate());
      this.monthNumber = this.currentDate.getMonth();
      this.year        = this.currentDate.getFullYear();
console.log(this.currentDay)
      this.month = this.monthNames[this.monthNumber];
      this.data.date = this.year + '-' + this.dayDataFormat(this.monthNumber+1) + '-' + this.day;
      axios.post('/search-reservations-date', this.data).then(response=>{
        this.details = response.data
      });
      this.writeMonth()
      axios.get('/list-reservation').then(response => {
        this.histories = response.data
      });
    },
    methods:    {
      getDate(date){
       var dataV =0
        const  response = axios.get('/search-date-count/'+date.toString()).then(response=>{
          dataV=   response.data
          console.log(dataV)
        }).catch(error=>{
          dataV = 0
        })
return dataV

      },
      donwloadPdf(){

        axios.get('/reports-pdf/'+(this.month+1)).then(response=>{
          this.histories = response.data.data
          Swal.fire('Excelente',response.data.message,'success')
        })
      },
      donwloadExcel(){
        axios.get('/reports-excel/'+(this.month+1)).then(response=>{
          this.histories = response.data.data;
          Swal.fire('Excelente',response.data.message,'success')
        })
      },
      dangerReservation(){
        axios.get('/rejecting-reservation/'+id).then(response=>{
          this.histories = response.data.data
          Swal.fire('Excelente',response.data.message,'success')
        })
      },
      successReservation(id){
        axios.get('/accept-reservation/'+id).then(response=>{
          this.histories = response.data.data
          Swal.fire('Excelente',response.data.message,'success')
        })
      },
dayDataFormat(day){
        if(day < 10){
          return "0"+day
        }
        return day
},
      writeMonth() {
        this.dates = []
        let month  = this.monthNumber ;
        if (month === -1) month = 11;
        for (let i = this.starDay(); i > 0; i--) {
         // console.log('PrevMonth', this.starDay(), this.monthNames[month], this.getTotalDays(month) - (i - 1))

          this.dates.push('')

        }

        for (let i = 0; i < this.getTotalDays(this.monthNumber); i++) {
       //   console.log('NextMonth', this.starDay(), this.month, this.getTotalDays(this.monthNumber))

          this.dates.push(i + 1)
        }

       // console.log('resultado', this.dates)
      },
      getTotalDays(month) {

        if (month === -1) month = 11;
        if (month == 0 || month == 2 || month == 4 || month == 6 || month == 7 || month == 9 || month == 11) {
          return 31;
        } else if (month == 3 || month == 5 || month == 8 || month === 10) {
          return 30;
        } else {
          return this.isleap() ? 29 : 28;
        }
      },
      isleap() {
        return ((this.year % 100 !== 0) && (this.year % 4 === 0) || (this.year % 400 === 0));
      },
      starDay() {
        let start = new Date(this.year, this.monthNumber, 1)
        return ((start.getDate()) === -1) ? 6 : start.getDay();
      },
      lastMonth() {
        if (this.monthNumber !== 0) {
          this.monthNumber--
        } else {
          this.monthNumber = 11;
          this.year--
        }
        this.setNewDate();
        this.writeMonth()
      },
      nextMonth() {
        if (this.monthNumber !== 11) {
          this.monthNumber++
        } else {
          this.monthNumber = 0;
          this.year++
        }
        this.setNewDate();
        this.writeMonth()
      },
      setNewDate() {
        this.currentDate.setFullYear(this.year, this.monthNumber, this.currentDay)
        this.month = this.monthNames[this.monthNumber]
        this.year  = this.currentDate.getFullYear();
      },

      setScheduleDay(day, month, year) {
//console.log(month)
        this.data.date = year + '-' + (month+1) + '-' + day;
        axios.post('/search-reservations-date', this.data).then(response=>{
          this.details = response.data
        //  Swal.fire('Excelente','hola',"success")
        })
        //this.$store.dispatch('setTodayhistoriesAction', {day: day, month: month, year: year})

      },
      selectRegister(time, date) {
        this.data.init_date = date;
        this.data.init_time = time
        console.log(this.data.init_time)

      },
      send() {
        var self = this;

        axios.post('/store-shedule', self.data).then(response => {
          if (response.data.success
          ) {

            this.message             = response.data.message;
            this.data.name           = "";
            this.data.email          = "";
            this.data.identification = "";
            this.data.description    = "";
            this.data.init_date      = "";
            this.data.phone          = "";
            this.data.init_time      = "";
            this.data.title          = "";
            this.histories           = response.data.data
            this.message             = ''

          }
        }).catch(function (error) {

          Swal("!Ooop", error.data.response.message, "error");

        })
      },
      sendChange(id) {

        axios.put('/update-shedule/' + id).then(response => {
          this.histories = response.data.data
        })
      },
      sendRemove(id) {
        axios.put('/remove-shedule/' + id).then(response => {
          this.histories = response.data.data
        })
      }


    }
  };
</script>

<style lang="scss" scoped>
    .modal-dialog {
        width: 800px;
    }

    ul {
        list-style: none;
    }

    .schedule-lists {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        margin: 0.5em;
        border-bottom: 1px solid #2C2B7C;
    }

    .schedule-lists div {
        padding: 5px;
    }

    .schedule-lists input {
        background-color: #FFFFFF;
        background-image: none;
        border-bottom: 1px solid #2c2b7c;
        border-radius: 1px;
        color: #444447;
        display: block;
        padding: 6px 12px;
        transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
        width: 100%;
        margin: 0.5em;
    }

    .calendar {
        background-color: white;
        width: 100%;
        max-width: 800px;
        margin: 1em auto;
        padding: .5em 0;

        &__info {
            padding: 0 2em;
            text-align: center;
            display: flex;
            font-size: 1.2em;
            text-transform: uppercase;
        }

        &__prev, &__next {
            color: #2C2B7C;
            cursor: pointer;
            font-size: 1.4em;
        }

        &__prev {
            margin-right: auto;
        }

        &__next {
            margin-left: auto;
        }

        &__month, &__year {
            padding: .5em 1em;
        }

        &__month > input, &__month > input:hover {
            border: 0px;
        }
    }

    .day-date:hover {
        background-color: #2C2B7C;
        color: white;
        cursor: pointer;
    }

    .headers-lists {
        background-color: #2C2B7C;
        color: white;
        text-align: center;
        padding: 5px;
    }

    ol {
        list-style: none;
        display: grid;
        grid-template-columns: repeat(7, 1fr);
        padding: 0px;
        border: 0.5px solid #2C2B7C;
    }

    .day-date {
        border: 0.5px solid #2C2B7C;
        padding: 5px;
        height: 100px;
    }

    .today {
        background-color: rgba(28, 179, 16, 0.55);
    }

    .day-date:first-child {
        grid-column-start: 5;
    }

    .day-name {
        border: 0.3px solid white;
        background-color: #2C2B7C;
        color: white;
        align-items: center;
        font-weight: bold;
        text-align: center;
        padding: 15px;
    }

    .prev-dates, .prev-dates:hover {
        background-color: rgba(78, 77, 92, 0.48);
        cursor: auto !important;
    }

    th, td {
        max-width: 50px !important;
        min-width: 50px !important;
    }
</style>
