<template>
    <!--<div class="container" style="margin-top: 6em">-->
        <!--<div class="row justify-content-center">-->
            <!--<div class="col-md-8">-->
                <!--<div class="card">-->
                    <!--<div class="card-header">Example Component</div>-->

                    <!--<div class="card-body">-->
                        <!--I'm an example component.ssssssssssssss-->
                        <!--<p>-->
                            <!--lorem*20-->
                        <!--</p>-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <div id="carouselIndicators" class="carousel slide swiper-container" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselIndicators" data-slide-to="1"></li>
            <li data-target="#carouselIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a class="swiper-textOffer" href="#" aria-label="swiper text offer">Up to 50% of</a>
                <img class="swiperImg d-block w-100" src="banners-swiper/1.jpg" alt="Main banner 1">
            </div>
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="swiper text offer">View our new collection</a>
                <img class="swiperImg d-block w-100" src="banners-swiper/2.jpg" alt="Main banner 2">
            </div>
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="swiper text offer">20% off</a>
                <img class="swiperImg d-block w-100" src="banners-swiper/3.jpg" alt="Main banner 3">
            </div>
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="swiper text offer"></a>
                <img class="swiperImg d-block w-100" src="banners-swiper/4.jpg" alt="Main banner 4">
            </div>
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="swiper text offer"></a>
                <img class="swiperImg d-block w-100" src="banners-swiper/5.jpg" alt="Main banner 5">
            </div>
            <div class="carousel-item">
                <a class="swiper-textOffer" href="#" aria-label="swiper text offer"></a>
                <img class="swiperImg d-block w-100" src="banners-swiper/6.jpg" alt="Main banner 6">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev"
           aria-label="carousel control">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next"
           aria-label="carousel control">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
