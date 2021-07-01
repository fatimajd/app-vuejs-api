<template>
<div>
     <div class="container">
            <div class="row my-4">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Entrer Votre CIN
                                </div>
                                <div class="card-body bg-light">
                                     <form action="" method="post">
                                         <div class="form-group">
                                            <input type="text" name="cin" class="form-control" v-model="cin">
                                            </div>
                                                
                                                        <button c class="btn btn-primary" v-on:click.prevent="onsub">Login</button>
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
    name:'rdv',
    data(){
        return{
        cin:''
        }
    },
    methods: {
    async onsub(){
            const response = await fetch( "http://localhost/API/api/User/edit/"+this.cin);
            const data= await response.json();
            console.log(data);
             if(!(data.message)){

                this.$router.push("/ourReservation/"+this.cin);
            }else{
                alert('Reference incorrecte');
            }


    },
    
    }
}
</script>


            // this.$router.push("/Rendezvous/"+this.reference);
    //     fetch("http://localhost/API/api/User/edit/"+this.cin,
    //     {
    //         mode: 'no-cors',
    //         method: "GET",
    //         headers: {
    //             "Content-Type": "application/json",
    //         },
    //     }
    //   )
      
    // .then(
    //     function(res){
    //         return res.json();
    //     }
    // )
    //     .then((data) => {
    //         console.log("kjkjj");
    //         if(data==1){
    //             this.$route.push("/ourReservation/"+this.cin);
    //         }else{
    //             alert('Reference incorrecte');
    //         }
    //     console.log(data);
    //     })
    //     .catch((err) => {
    //       console.log(err);
    //     }); 
    //     }