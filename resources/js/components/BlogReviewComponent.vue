<template>
    <div class="container">
        <!--Blog-->
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100 circle-img" src="from-blog/1.jpg"
                                         alt="Main blog article 1">
                                    <div class="carousel-caption d-md-block">
                                        <h2 class="date d-inline-block">08 </h2>
                                        <span class="text-uppercase">December, 2019</span>
                                        <a class="text-decoration-none" href="./blog-information" target="_blank"
                                           aria-label="link blog=information">
                                            <h5 class="text-uppercase">The 90s are back</h5></a>
                                        <p class="blogArticleText">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. A accusamus atque, cupiditate deleniti dolor dolores ea enim, esse
                                            inventore iure laudantium libero magni minus nemo quas quidem sequi
                                            voluptate voluptates?
                                        </p>
                                    </div>
                                    <a class="text-center text-uppercase d-block w-100 ml-auto mr-auto p-4"
                                       href="./blog-information" target="_blank" aria-label="link blog=information">
                                        Read more
                                    </a>
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100 circle-img" src="from-blog/2.jpeg"
                                         alt="Main blog article 2">
                                    <div class="carousel-caption d-md-block">
                                        <h2 class="date d-inline-block">24 </h2>
                                        <span class="text-uppercase">September, 2019</span>
                                        <a class="text-decoration-none" href="./blog-information" target="_blank"
                                           aria-label="link blog=information">
                                            <h5 class="text-uppercase">The colors of summer in the fall</h5>
                                        </a>
                                        <p class="blogArticleText">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur
                                            consequuntur cum debitis exercitationem explicabo magni quidem unde!
                                            Accusamus consectetur numquam omnis quae repellendus, sint vel veniam.
                                            Earum nam natus quaerat!
                                        </p>
                                    </div>
                                    <a class="text-center text-uppercase d-block w-100 ml-auto mr-auto p-4"
                                       href="./blog-information" target="_blank" aria-label="link blog=information">
                                        Read more
                                    </a>
                                </div>

                                <div class="carousel-item">
                                    <img class="d-block w-100 circle-img" src="from-blog/3.jpeg"
                                         alt="Main blog article 3">
                                    <div class="carousel-caption d-md-block">
                                        <h2 class="date d-inline-block">24 </h2>
                                        <span class="text-uppercase">September, 2019</span>
                                        <a class="text-decoration-none" href="./blog-information" target="_blank"
                                           aria-label="link blog=information">
                                            <h5 class="text-uppercase">The colors of summer in the fall</h5>
                                        </a>
                                        <p class="blogArticleText">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Consectetur consequuntur cum debitis exercitationem explicabo magni quidem
                                            unde!
                                            Accusamus consectetur numquam omnis quae repellendus, sint vel veniam.
                                            Earum nam natus quaerat!
                                        </p>
                                    </div>
                                    <a class="text-center text-uppercase d-block w-100 ml-auto mr-auto p-4"
                                       href="./blog-information" target="_blank" aria-label="link blog=information">
                                        Read more
                                    </a>
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button"
                               data-slide="prev" aria-label="btn control prev">
                                <span>
                                    <i class="fas fa-chevron-left carousel-control-prev-icon-blog"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls2" role="button"
                               data-slide="next" aria-label="brn contol next">
                                <span>
                                    <i class="fas fa-chevron-right carousel-control-next-icon-blog"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
            <!--Blog-->

            <!--Reviews-->
            <div class="col-sm-6">
                <div class="img-background" :style="{'background-image':'url(from-blog/7.jpg)'}">
                    <div class="card card-width">
                        <div class="card-body card-body-container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner carousel-height">
                                    <div class="carousel-item active">
                                        <div class="d-blog w-100 text-center">
                                            <img class="img-circle" src="from-blog/4.jpg" alt="photo">
                                            <p class="pt-4 ml-5 mr-5">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                Asperiores atque doloremque dolorum eligendi, expedita fugit, inventore
                                                ipsam iste, itaque nesciunt sapiente totam voluptate. Dolor doloribus ex
                                                hic pariatur, quos veritatis?
                                            </p>
                                            <h5>John Smit</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="d-blog w-100 text-center">
                                            <img class="img-circle" src="from-blog/5.jpg" alt="photo">
                                            <p class="pt-4 ml-5 mr-5">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                                                atque doloremque dolorum eligendi, expedita fugit, inventore ipsam iste,
                                                itaque..
                                            </p>
                                            <h5>Peter Augsel</h5>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="d-blog w-100 text-center">
                                            <img class="img-circle" src="from-blog/6.jpg" alt="photo">
                                            <p class="pt-4 ml-5 mr-5">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </p>
                                            <h5>Michele Peterson</h5>
                                        </div>
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                   data-slide="prev">
                                    <span><i class="fas fa-chevron-left icon-left"></i></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls"
                                   role="button"
                                   data-slide="next">
                                    <span>
                                        <i class="fas fa-chevron-right icon-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Reviwes-->
        </div>
    </div>

</template>

<script>
    export default {
        name: "BlogReviewComponent"
    }
</script>

<style scoped>
    .container {
        margin-top: 5rem;
    }

    .card {
        border: none;
    }

    /*Blog*/
    .date {
        color: grey;
        opacity: 0.6;
    }

    a h5 {
        color: #000;
        text-decoration: none;
    }

    a {
        color: #000;
        text-decoration: underline;
    }

    h5 {
        font-weight: 800;
    }

    a h5:hover,
    a:hover {
        color: #8E2A36;
    }

    .carousel-control-prev-icon-blog,
    .carousel-control-next-icon-blog {
        font-size: 2em;
        color: #000;
        position: relative;
        bottom: 135px;
    }

    /*Reviews*/
    .carousel-caption {
        position: initial;
        width: 100%;
        height: 250px;
        background-color: white;
        color: #000;
    }

    .card-body-container {
        height: 620px;
    }

    .carousel-height {
        height: 580px;
    }

    .icon-left, .icon-right {
        font-size: 2em;
        color: #000;
    }

    .img-background {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-clip: border-box;
    }

    .img-circle {
        border-radius: 50%;
    }

    .card-body {
        padding: 0.75em;
    }

    .card-width {
        width: 75%;
    }

    @media only screen and (min-width: 800px) {
        /*Reviews*/
        .icon-left {
            position: relative;
            top: 67px;
        }

        .icon-right {
            position: relative;
            top: 67px;
        }
    }

    @media only screen and (max-width: 350px) {
        .img-circle {
            width: 175px;
        }
    }
</style>