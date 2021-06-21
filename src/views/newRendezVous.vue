<template>
    <div>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Ajouter Rendez Vous
                                </div>
                                <div class="card-body bg-light">
                                     <form action="" method="post">
                                        <div class="form-group">
                                            <label for="cin">Date:* </label>
                                            <input type="date" name="date" class="form-control">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="cin">Horaire:*</label>
                                            <input type="time" name="horaire" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="cin">text:*</label>
                                            
                                            <input type="textareat" name="text"  class="form-control">
                                        </div>
                            
                           
                                            <router-link to="/ourReservation" tag="button"  class="btn btn-primary"> 
                                            Send
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
     name:'newRendezVous'
}
</script>
<style scoped>

</style>