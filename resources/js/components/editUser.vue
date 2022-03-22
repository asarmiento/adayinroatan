<template>
    <section id="content" class="content">
        <div class="content__boxed">
            <div class="content__wrap">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">

                                <h5 class="card-title">Edición de Usuarios</h5>

                                <!-- Inline Form -->
                                <div class="row row-cols-md-auto g-3 align-items-center">
                                    <div class="col-12">
                                        <label for="_dm-name" class="visually-hidden">Nombre Completo</label>
                                        <input type="text" v-model="data.name" class="form-control" id="_dm-name"
                                               placeholder="Nombre Completo">
                                    </div>
                                    <div class="col-12">
                                        <label for="_dm-inputEmail" class="visually-hidden">Correo Electrónico</label>
                                        <input type="text" v-model="data.email" class="form-control" id="_dm-inputEmail"
                                               placeholder="Email">
                                    </div>
                                    <div class="col-12">
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
    props: ['data_user'],
    name:  "listsUsers",
    data() {
      return {
        data:       {
          id:     '',
          name:     '',
          email:    ''
        },
        'dataUser': []
      }
    },
    created() {
      this.dataUser      = JSON.parse(this.data_user);
      this.data.id     = this.dataUser.id;
      this.data.name     = this.dataUser.name;
      this.data.email    = this.dataUser.email;
      this.data.password = this.dataUser.password
    },
    methods:{
      send(){
        axios.put("/update-user/"+this.data.id,this.data).then(response=>{
          Swal.fire('Excelente','Se actualizo con éxito','success')
        });
      }
    }

  }
</script>

<style scoped>

</style>
