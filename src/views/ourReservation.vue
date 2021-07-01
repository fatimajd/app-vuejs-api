<template>
        <div>
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-10 mx-auto">
                        <div class="card">
                            
                            <div class="card-body bg-light">
                                <p> Cin :{{ $route.params.cin }}</p>
                                <!-- <router-link to="/newRendezVous" tag="button" class="btn btn-sm btn-primary mr-2 mb-2" name="submit"> 
                                    <i class="fas fa-plus"></i>
                                    
                                </router-link> -->
                                <router-link class="btn btn-sm btn-primary mr-2 mb-2" :to="{path: '/newRendezVous/' + $route.params.cin }"> <i class="fas fa-plus"></i></router-link>
                                <router-link to="/accv" tag="button" class="btn btn-sm btn-primary mr-2 mb-2" name="submit"> 
                                    <i class="fas fa-home"></i>
                                </router-link>
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Horaire</th>
                                        <th scope="col">Type</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="result in results" :key="result.id">
                                                <th scope="row">{{result.id}}</th>
                                                <td>{{result.date}}</td>
                                                <td>{{result.horaire}}</td>
                                                <td>{{result.type}}</td>
                                                <td class="d-flex flex-row">
                                                    <button type="submit" class="btn btn-warning" name="update" v-on:click = "edit_appointment=true;getid(result.id);edit()">
                                                        Update &nbsp;<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </button>
                                                    
                                                    <!-- <router-link to="/newRendezVous" tag="button" class="btn btn-sm btn-warning" name="submit">  -->
                                                    <!-- <i class="fa fa-edit">
                                                        
                                                    </i>
                                                    </router-link> -->
                                                    
                                                    <button  class="btn btn-sm btn-danger"  v-on:click="getid(result.id);del()" name="submit"> 
                                                        <i class="fa fa-trash">
                                                                
                                                            </i>
                                                    </button>
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>

                            
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!----------------------------------------------------------------->
            <!-- Edit appointment -->
            <!----------------------------------------------------------------->
            <div class="overlay" v-if="edit_appointment==true">

                <div class="card">
                    <div class = "d-flex justify-content-around">
                        <h2 class="card-title">Edit your appointment</h2> 
                        <button type="button" class="close" v-on:click ="edit_appointment=false">
                            <span aria-hidden="true">&times;</span>
                        </button> 
                    </div>

                    <div class="card-body d-flex justify-content-center align-items-center">
                        <form class="text-center align-items-center">

                            <input class="form-control" v-model="date" placeholder="Date" type="Date">
                            <input class="form-control" v-model="horaire" placeholder="horaite" type="time">
                            <input class="form-control" v-model="type" placeholder="Type de Consultation" type="text">

                            <button type="button" class="submit-btn" @click="Update">
                                Update
                            </button> 
                        </form>
                    </div>
                </div>
            </div>
















        </div>


        

</template>
<script>
export default {
    name :'ourReservation',
    data(){
    return {
      results :[],

      idR :'',
      cin:this.$route.params.cin,

      add_appointment: false,
      edit_appointment: false,
      delete_appointment: false,

            id:"",
            date :"",
            horaire :"",
            type:"",

    }
  },
  mounted(){
  this.getAll();
},
methods:{
    
  //affichage rendezvous par reference:
    getAll(){
      fetch("http://localhost/API/api/RendezVous/index/"+this.cin)
         .then(res => res.json())
         .then(data => this.results = data)
         .catch(err =>console.log(err.message))
        
    },

    getid(x){
      this.idR=x;
      console.log(this.idR);

    },
    async del(){
       fetch("http://localhost/API/api/RendezVous/delete/"+this.idR,{
         method: "DELETE",

      })
      .then(this.getAll())

    },

    async edit(){

        console.log(this.idR+"edit")
;            const response= await fetch ("http://localhost/API/api/RendezVous/edit",{
                method: "POST",

                body: JSON.stringify({
                    id:this.idR,

                }),

            });
            const data=await response.json();
            console.log(data);
            this.id=data.id;
            this.date =data.date;
            this.horaire =data.horaire;
            this.type=data.type;

        },
        async Update(){
            const response = await fetch("http://localhost/API/api/RendezVous/update",{
                method:"PUT",
                body:JSON.stringify({
                     id:this.id,
                    "date":this.date,
                    horaire:this.horaire,
                    type:this.type
                }),
            });
        
            const data = await response.json();
            console.log("update"+data);
            this.edit_appointment=false;
            this.getAll();
           
        },
    
}
}
</script>
<style scoped>

</style>