<template>
    <div>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
 		<div class="card-header">Ajouter Utilisateure
 				</div>
                 <div class="card-body bg-light">
                     <form>
                         <div class="form-group">
                             <label for="cin"> Cin:*</label>
                                <input type="text" name="cin" class="form-control" placeholder="Cin"  v-model="cin">
                                </div>
         <div class="form-group">
             <label for="nom">Nom:*</label>
             <input type="text" name="nom" class="form-control" placeholder="Nom"  v-model="nom">
         </div>
          <div class="form-group">
              <label for="prenom"> Prenom:*</label>
         <input type="text" name="prenom" class="form-control" placeholder="Prenom"  v-model="prenom">
         </div> 
         <div class="form-group">
             <label for="age">Age:*</label>
           <input type="text" name="age" class="form-control" placeholder="Age"  v-model="age">
           </div>
             <div class="form-group">
                 <label for="email">Email:*</label>
            <input type="text" name="email" class="form-control" placeholder="Email"  v-model="email">
            </div>
            <div class="form-group">
                <label for="tele">Télé:*</label>
             <input type="text" name="telephone" class="form-control" placeholder="Télé"  v-model="telephone">
             </div>
         
              <button class="btn btn-primary BTN1 col-10 ms-5 mb-3"  v-on:click.prevent="ajouter"> Add</button>
                     </form>
        <!-- <button type="submit" class="btn  btn-primary" name="submit">Valider</button> -->
             </div></div></div></div></div></div>
  
</template>

<script>
export default {
    name:'newuser',
    data() {
        return {
            cin: "",
            nom :"",
            prenom: "",
            age: "",
            email: "",
            telephone: ""
        }
    },

    methods:{
        //ajouter un rendez voous par reference:
        async ajouter(){

            await fetch("http://localhost/API/api/User/add",{
                
                method: "POST",
             
                body: JSON.stringify({
                    cin:this.cin,
                    nom:this.nom,
                    prenom:this.prenom,
                    age:this.age,
                    email:this.email,
                    telephone:this.telephone

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