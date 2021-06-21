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
                                            <input type="text" name="cin" class="form-control">
                                            </div>
                                                <router-link to="/ourReservation" tag="button" class="btn btn-primary"> 
                                                            Login
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
    name:'rdv'
}
</script>