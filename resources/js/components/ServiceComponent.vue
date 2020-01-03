<template>

    <div class="container mt-5">
        <div class="row">
            <div class="column">
                <h4 class="service-title">Free Delivery</h4>
                <span class="service-icon"><i class="fas fa-truck"></i></span>
                <p>On order over 100</p>
            </div>
            <div class="column">
                <h4 class="service-title">Money back guarantee</h4>
                <span class="service-icon"><i class="fas fa-hand-holding-usd"></i></span>
                <p>Return within 30 days</p>
            </div>
            <div class="column">
                <h4 class="service-title">Best online support</h4>
                <span class="service-icon"><i class="fas fa-headset"></i></span>
                <p>24 hours a day</p>
            </div>
            <div class="column">
                <h4 class="service-title">Get promo code</h4>
                <span class="service-icon"><i class="fas fa-gift"></i></span>
                <p>Get membership</p>
            </div>
        </div>
    </div>


</template>

<script>
    export default {
        name: "ServiceComponent"
    }
</script>

<style scoped>
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    .column {
        margin-left: auto;
        margin-right: auto;
        flex: 25%;
        padding: 1.2em;
    }

    @media screen and (max-width: 992px) {
        .row {
            flex-direction: column;
        }
    }

    .service-title {
        text-align: center;
        text-transform: uppercase;
    }

    .service-icon {
        display: block;
        text-align: center;
        font-size: 2em;
    }

    .service-title:hover,
    .service-icon:hover {
        color: #8E2A36;
    }

    .column > p {
        text-align: center;
    }

    @media screen and (min-width: 700px) {
        .column p {
            font-size: 1.5em;
        }
    }
</style>