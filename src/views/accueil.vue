<template>
   <div>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Bienvenue !
                                </div>
                                <div class="card-body bg-light">
                                     <form action="" method="post">
                                            <router-link to="/newuser" tag="button" class="btn btn-primary btn-lg btn-block"> 
                                            Nouveau Utilisateur
                                        </router-link>
                                        <router-link to="/rdv" tag="button" class="btn btn-warning btn-lg btn-block"> 
                                            Rendez Vous
                                        </router-link>
                                     </form>
                                     
                                </div>
                         </div>
                     </div>
            </div>
        </div>
 
   </div>

</template>
<script>
export default {
    name:'acc'

}
</script>
<style scoped>

</style>