<template>
    <section id="content" class="content">
        <div class="content__boxed">
            <div class="content__wrap">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Registro de Configuración</h5>
                                <!-- Inline Form -->
                                <div class="row row-cols-md-auto g-3 align-items-center">
                                    <div class="col-md-4">
                                        <label for="_dm-name" class="col-form-label form-label">Nombre Cliente</label>
                                        <input type="text" v-model="data.name" class="form-control" id="_dm-name"
                                               placeholder="Nombre Completo">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="_dm-inputHost" class="col-form-label form-label">Host</label>
                                        <input type="text" v-model="data.host" class="form-control" id="_dm-inputHost"
                                               placeholder="Host">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="_dm-inputPort" class="col-form-label form-label">Puerto</label>
                                        <input type="text" v-model="data.port" class="form-control" id="_dm-inputPort"
                                               placeholder="Port">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="_dm-inputDataBase" class="col-form-label form-label">Base de datos</label>
                                        <input type="text" v-model="data.database" class="form-control" id="_dm-inputDataBase"
                                               placeholder="Base de Datos">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="_dm-inputUser" class="col-form-label form-label">Usuario</label>
                                        <input type="text" v-model="data.username" class="form-control" id="_dm-inputUser"
                                               placeholder="Usuario">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="_dm-inputPassword" class="col-form-label form-label">Contraseña</label>
                                        <input type="password" v-model="data.password" class="form-control" id="_dm-inputPassword"
                                               placeholder="Contraseña">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button @click="send" type="submit" class="btn btn-primary">Actualizar</button>
                                    </div>
                                </div>
                                <!-- END : Inline Form -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Swal from 'sweetalert2';
  export default {
    components:{Swal},
    props:['data_config'],
    name:  "createConfiguration",
    data() {
      return {
        data:       {
          id:     '',
          name:     '',
          host:    '',
          port:    '',
          database:    '',
          username:    '',
          password:    ''
        },
        'dataConfig': []
      }
    },
    created() {
this.dataConfig = JSON.parse(this.data_config)
      this.data.id =this.dataConfig.id;
      this.data.name =this.dataConfig.name;
      this.data.host =this.dataConfig.host;
      this.data.port =this.dataConfig.port;
      this.data.database =this.dataConfig.database;
      this.data.username =this.dataConfig.username;
      this.data.password =this.dataConfig.password;
    },
    methods:{
      send(){
        axios.put("/update-configuration/"+this.data.id,this.data).then(response=>{
          if(response.data.success) {
            Swal.fire('Excelente', response.data.message, 'success')
          }else{
            Swal.fire('Atención',response.data.message,'warning')
          }
        });
      }
    }

  }
</script>

<style scoped>

</style>
