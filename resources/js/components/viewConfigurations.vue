<template>
    <section id="content" class="content">
        <div class="content__boxed">
            <div class="content__wrap">
                <div class="row mt-3">
                    <div v-for="sysconf in listConfigurations" class="col-sm-6 col-md-4 col-xl-3 mb-3">
                        <div class="card">
                            <div class="card-body pt-2">

                                <!-- Favorite button and option dropdown -->
                                <div class="d-flex justify-content-end gap-1">
                                    <button type="button" class="btn btn-sm btn-icon btn-hover btn-white shadow-none text-orange add-tooltip" data-bs-original-title="Remove from Favorites">
                                        <i class="demo-psi-star fs-5"></i>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-icon btn-hover btn-light shadow-none" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="demo-pli-dot-horizontal fs-4"></i>
                                            <span class="visually-hidden">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a :href="'edit/'+sysconf.id+'/configuration'" class="dropdown-item">
                                                    <i class="demo-pli-pen-5 fs-5 me-2"></i> Edit
                                                </a>
                                            </li>
                                           <!-- <li>
                                                <a href="#" class="dropdown-item text-danger">
                                                    <i class="demo-pli-recycling fs-5 me-2"></i> Remove
                                                </a>
                                            </li>
-->
                                        </ul>
                                    </div>
                                </div>
                                <!-- END : Favorite button and option dropdown -->

                                <!-- Profile picture and short information -->
                                <div class="text-center position-relative">
                                    <div class="pb-3">
                                        <img class="img-lg rounded-circle" src="../../../public/assets/img/profile-photos/3.png" alt="Profile Picture" loading="lazy">
                                    </div>
                                    <a :href="/reports-database/+sysconf.id" class="h5 stretched-link btn-link">{{sysconf.name}}</a>
                                    <p class="text-muted">{{sysconf.database}}</p>
                                </div>
                                <p class="text-center">{{sysconf.host}}</p>
                                <!-- END : Profile picture and short information -->


                                <!-- END : Social media buttons -->

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
