<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> {{  showTitle }}</div>

                    <div class="card-body">

                        I'm  Home component.
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
     computed:{
showTitle(){

    return this.$store.getters.showTitle
}



     }
    }
</script>
