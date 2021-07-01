<template>
    <div>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Ajouter Rendez Vous
                                </div>
                                <div class="card-body bg-light">
                                     <form>
                                        <div class="form-group">
                                            <label for="cin">Date:* </label>
                                            <input type="date" name="date" class="form-control" v-model="date">
                                           
                                        </div>
                                        <div class="form-group">
                                            <label for="cin">Horaire:*</label>
                                            <input type="time" name="horaire" class="form-control" v-model="horaire">
                                        </div>
                                        <div class="form-group">
                                            <label for="cin">Type:*</label>
                                            
                                            <input type="textareat" name="text"  class="form-control" v-model="type">
                                        </div>
                            
                           
                                            
      <button class="btn btn-primary BTN1 col-10 ms-5 mb-3" type="submit" @click.prevent="ajouter"> Add</button>
 
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
    name:'newRendezVous',
    data() {
        return {
            date: "",
            horaire :"",
            Type: "",
         cin:this.$route.params.cin
        }
    },

    methods:{
        //ajouter un rendez voous par reference:
        async ajouter(){

            await fetch("http://localhost/API/api/Rendezvous/add",{
                
                method: "POST",
             
                body: JSON.stringify({
                    date: this.date,
                    horaire: this.horaire,
                    type: this.type,
                    cin:this.cin

                }),

            }).then(() => {
              this.$router.push("/ourReservation/"+this.cin);
        })

        .catch(function (err) {
           console.log(err);
        });
        
     
    },

  },
};



</script>

<style scoped>

</style>