<template>

    <div class="container" style="margin-top: 6em">
        <div class="col-md-3 d-inline-block" v-for="getProduct in womenProducts">
            <div class="card mb-2">
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                    <li data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <img class="card-img-top"
                     v-bind:src="getProduct.image"
                     alt="Card image cap">


            </div>
        </div>
    </div>

</template>

<style scoped>

</style>

<script>
    export default {
        data() {
            return {
                womenProducts: [],
            }
        },
        mounted() {
            this.getWomenProduct();
        },
        methods: {
            getWomenProduct() {
                const self = this;
                axios.get('./api/women')
                    .then(function (response) {
                        self.womenProducts = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
        }
    }

</script>
