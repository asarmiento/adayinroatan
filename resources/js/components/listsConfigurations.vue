<template>
    <section id="content" class="content">
        <div class="content__boxed">
            <div class="content__wrap">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Lista de Bases de datos</h5>

                                <!-- Striped rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Host</th>
                                            <th>Puerto</th>
                                            <th>Base de Datos</th>
                                            <th>Acción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="sysconf in listConfigurations">
                                            <td>{{sysconf.name}}</td>
                                            <td>{{sysconf.username}}</td>
                                            <td>******</td>
                                            <td>{{sysconf.host}}</td>
                                            <td>{{sysconf.port}}</td>
                                            <td>{{sysconf.database}}</td>
                                            <td><a  :href="'edit/'+sysconf.id+'/configuration'"  class=""><i class="demo-pli-pencil btn btn-primary btn-sm"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END : Striped rows -->

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</template>

<script>
  export default {
    props: ['configurations'],
    name: "listsUsers",
    data(){
      return {
        'listConfigurations':[]
      }
    },
    created() {
      this.listConfigurations = JSON.parse(this.configurations);
      console.log(this.listConfigurations[0])
    }
  }
</script>

<style scoped>

</style>
