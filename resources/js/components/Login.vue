<template>

                <section id="content" class="content" >
                    <div class="content__boxed " style="display: flex; justify-content: center; ">
                        <div class="content__wrap" style="    width: 400px;">
                            <!-- Login card -->
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="text-center">
                                        <h1 class="h3">A day in Roatan</h1>
                                        <p>Inicio de sesión</p>
                                    </div>
                                    <form method="post" class="mt-4">
                                        <div class="mb-3">
                                            <input type="text" v-model="data.email" class="form-control" placeholder="Correo Electrónico" required autofocus>
                                        </div>

                                        <div class="mb-3">
                                            <input type="password" v-model="data.password" class="form-control" required placeholder="Contraseña">
                                        </div>


                                        <div class="d-grid mt-5">
                                            <a @click="send" class="btn btn-primary btn-lg" type="submit">Iniciar Sesión</a>
                                        </div>
                                    </form>

                                    <div class="d-flex justify-content-between mt-4">
                                        <a href="/password/reset" class="btn-link text-decoration-none">Recuperar contraseña ?</a>
                                    </div>

                                </div>
                            </div>
                            <!-- END : Login card -->
                        </div>
                    </div>
                </section>

</template>

<script>

    export default {

      data() {
        return{
        data:{
          'email':'',
          'password':''
        }
        }
      },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
          send(){
            axios.post('/login',this.data).then(response=>{
              document.location='/home'
            })
          }
        }
    }
</script>
