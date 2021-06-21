<template>
<div>
   <div class="container">
 	   <div class="row my-4">
 		   <div class="col-md-10 mx-auto">
 			   <div class="card">
 				
 				  <div class="card-body bg-light">
                     <router-link to="/newRendezVous" tag="button" class="btn btn-sm btn-primary mr-2 mb-2" name="submit"> 
                        <i class="fas fa-plus"></i>
                    </router-link>
                    <router-link to="/accv" tag="button" class="btn btn-sm btn-primary mr-2 mb-2" name="submit"> 
                        <i class="fas fa-home"></i>
                    </router-link>
                    <table class="table table-hover">
                        <thead>
					    <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Horaire</th>
                            <th scope="col">Type</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17/07/1999</td>
                                <td>12:00</td>
                                <td>ffff</td>
                                <td class="d-flex flex-row">
                                    <router-link to="/newRendezVous" tag="button" class="btn btn-sm btn-warning" name="submit"> 
                                    <i class="fa fa-edit">
					       				
					       			</i>
                                    </router-link>
                                    <router-link to="/newRendezVous" tag="button" class="btn btn-sm btn-danger" name="submit"> 
                                   <i class="fa fa-trash">
					       				
					       			</i>
                                    </router-link>
                                </td>
                            </tr>
                        </tbody>
                        </table>

                 
                 
    </div>
       </div>
           </div>
               </div>
                   </div>
</div>
</template>
<script>
export default {
    name :'ourReservation'
}
</script>
<style scoped>

</style>