<template>
    <div>
        <div class="container">
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
 		<div class="card-header">Ajouter Utilisateure
 				</div>
                 <div class="card-body bg-light">
                     <form action="" method="post">
                         <div class="form-group">
                             <label for="cin"> Cin:*</label>
                                <input type="text" name="cin" class="form-control" placeholder="Cin">
                                </div>
         <div class="form-group">
             <label for="nom">Nom:*</label>
             <input type="text" name="nom" class="form-control" placeholder="Nom">
         </div>
          <div class="form-group">
              <label for="prenom"> Prenom:*</label>
         <input type="text" name="prenom" class="form-control" placeholder="Prenom">
         </div> 
         <div class="form-group">
             <label for="age">Age:*</label>
           <input type="text" name="age" class="form-control" placeholder="Age">
           </div>
             <div class="form-group">
                 <label for="email">Email:*</label>
            <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="tele">Télé:*</label>
             <input type="text" name="telephone" class="form-control" placeholder="Télé">
             </div>
          <router-link to="/ourReservation" tag="button" class="btn  btn-primary" name="submit"> 
           Send
        </router-link>
                     </form>
        <!-- <button type="submit" class="btn  btn-primary" name="submit">Valider</button> -->
             </div></div></div></div></div></div>
  
</template>
<script>
export default {
     name:'newuser'
}
</script>
<style scoped>

</style>