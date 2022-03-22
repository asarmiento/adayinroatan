<template>
    <section id="content" class="content">
        <div class="content__boxed">
            <div class="content__wrap">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Lista de Usuarios</h5>

                                <!-- Striped rows -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Email</th>
                                            <th>Acción</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr v-for="user in listUser">
                                            <td><a href="#" class="btn-link">{{user.name}}</a></td>
                                            <td>{{user.email}}</td>
                                            <td><a  :href="'edit/'+user.id+'/user'"  class=""><i class="demo-pli-pencil btn btn-primary btn-sm"></i></a></td>
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
    props: ['users'],
    name: "listsUsers",
    data(){
      return {
        'listUser':[]
      }
    },
    created() {
      this.listUser = JSON.parse(this.users);
      console.log(this.listUser[0])
    }
  }
</script>

<style scoped>

</style>
