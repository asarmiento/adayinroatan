<template>
    <div name="contact-form" id="contactForm">
        <form action="" method="POST">

            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <input type="text" name="name" class=" form-control" id="name" v-model="data.name">
                        <label for="name">Name</label>
                    </div>

                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="input-field">
                        <label for="email">Email</label>
                        <input id="email" type="email" name="email" class=" form-control" required v-model="data.email">
                    </div>
                </div><!-- /.col-md-6 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <input id="phone" type="number" name="phone" class=" form-control" v-model="data.phone"
                               required>
                        <label for="phone">Phone Number</label>
                    </div>
                </div><!-- /.col-md-6 -->

                <div class="col-md-6">
                    <div class="input-field">
                        <select id="terminal" name="terminal" class="form-control" v-model="data.terminal">
                            <option v-for="term in dterminal" :value="term.value">{{term.label}}</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <input id="adults" type="number" name="adults" v-model="data.adults" class=" form-control"
                               required>
                        <label for="adults">Adults</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-field">
                        <input id="kids" type="number" name="kids" class="validate form-control" v-model="data.kids"
                               required>
                        <label for="kids">Kids</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="input-field">
                        <select id="tour" name="tour" class="form-control"  v-model="data.tour" required>
                            <option value="">Choose Tour</option>
                            <option value="Roatan West Bay Beach">Roatan West Bay Beach</option>
                            <option value="Roatan West End Village">Roatan West End Village</option>
                            <option value="Mayan Jungle Zipline and West Bay Beach">Mayan Jungle Zipline &amp; West Bay
                                Beach
                            </option>
                            <option value="Daniel Johnson's Monkey & Sloth Hang Out">Daniel Johnson's Monkey &amp; Sloth
                                Hang Out
                            </option>
                            <option value="Glass Bottom Boat & Roatan Island Tour">Glass Bottom Boat &amp; Roatan Island
                                Tour
                            </option>
                            <option value="Horseback Riding & West Bay Beach">Horseback Riding &amp; West Bay Beach
                            </option>
                            <option value="All Inclusive Roatan Snorkeling Tour">All Inclusive Roatan Snorkeling Tour
                            </option>
                            <option value="Roatan East End & Mangrove Tour">Roatan East End &amp; Mangrove Tour</option>
                            <option value="Pirates Of The Caribbean Zipline & Las Palmas Beach">Pirates Of The Caribbean
                                Zipline &amp; Las Palmas Beach
                            </option>
                            <option value="Roatan East End & Mangrove Tour">Day In Little French Key Paradise
                                Excursion
                            </option>
                            <option value="Roatan Free-Style/Custom Tour">Roatan Free-Style/Custom Tour</option>
                            <option value="Discover Roatan Buggy Tour">Discover Roatan Buggy Tour</option>
                            <option value="Discover Roatan Buggy Tour All-Inclusive">Discover Roatan Buggy Tour
                                All-Inclusive
                            </option>
                            <option value="Buggy Tour At Sol Y Mar">Buggy Tour At Sol Y Mar</option>
                            <option value="Roatan Island Brewing Tour">Roatan Island Brewing Tour</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="input-field">
                        <input type="date" class="form-control" v-model="data.date" name="date" id="Arrival" required>
                        <label for="Arrival">Arrival Date</label>
                    </div>
                </div>
            </div>

            <div class="input-field">
                <textarea name="message" id="message" v-model="data.message" class="materialize-textarea "></textarea>
                <label for="message">Message</label>
            </div>

            <button type="submit" @click="send" name="submit"
                    class="waves-effect waves-light btn pull-right text-medium mt-30 mb-sm-30">Send <i
                    class="material-icons right">send</i></button>
        </form>
    </div>
</template>

<script>
  import Swal from 'sweetalert2'

  export default {
    name:       "contacts",
    components: {Swal},
    data() {
      return {
        data:      {
          name:     '',
          email:    '',
          phone:    '',
          date:     '',
          message:  '',
          tour:     '',
          terminal: '',
          adults:   '',
          kids:     '',
        },
        dterminal: [{value: '', label: 'Choose Port Terminal'},
          {value: 'Mahogany Bay Port', label: 'Mahogany Bay Port'},
          {value: 'Town Center / Roatan Village Port', label: 'Town Center / Roatan Village Port'}]
      }
    },
    methods:    {
      send() {

        axios.post('/store-reservation', this.data).then(response => {
          this.name=     '';
          this.email=    '';
          this.phone=    '';
          this.date=     '';
          this.message=  '';
          this.tour=     '';
          this.terminal= '';
          this.adults=   '';
          this.kids=     '';
          Swal.fire('Excellent', 'The data was saved successfully', 'success');
        })
      }
    }
  }
</script>

<style scoped>
    select {
        background: transparent;
        border: none;
        border-bottom: #9b9b9b 1px solid;
        font-size: 14px;
        height: 30px;
        padding: 5px;
        width: 100%;
    }
    select:hover {
        border-bottom: #ffb000 1px solid;
        box-shadow: 0 1px 0 0 #ffb000;
    }

    .form-date {
        padding: 16px;
        display: flex;
        flex-direction: column;
    }
    .form-date__label {
        font-family: “Helvetica”, arial, sans-serif;
        font-size: 18px;
        line-height: 24px;
        padding-bottom: 8px;
    }
    .form-date__input[type=”date”] {
        appearance: none;
        color: #1D1D1D;
        font-family: “Helvetica”, arial, sans-serif;
        font-size: 18px;
        border:1px solid #ECF0F1;
        background:#ECF0F1;
        padding: 4px;
        display: inline-block;
        visibility: visible;
        width: 140px;
    }
    .form-date__input[type=”date”]:focus {
        color: #495057;
        background-color: #FFFFFF;
        border-color: #80BDFF;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }
</style>
