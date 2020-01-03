<template>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark text-white pt-5">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 mx-auto">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Webstote</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, voluptate, voluptatum. Amet
                        debitis
                        expedita natus possimus quidem recusandae, sunt temporibus. Architecto atque eveniet
                        exercitationem
                        fugit itaque quasi sed velit voluptatem?</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Information</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a class="text-white" href="#" aria-label="link About us">About us</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="link Delivery Information">Delivery
                                Information</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="link Privacy Policy">Privacy Policy</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="link Terms & Conditions">Terms & Conditions</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact Us</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a class="text-white" href="#" aria-label="addres"><i class="fas fa-map-marker-alt"></i>Away
                                Bahams,Shirley House
                                #50 Shirley Street
                                P. O. Box N-532
                                Nassau, N.P., The Bahamas</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="phone"><i class="mr-1 fas fa-phone-volume"></i>089
                                772 2275</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="meil"><i class="mr-1 far fa-envelope-open"></i>officedesislava@gmail.com</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Partnership</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a class="text-white" href="#" aria-label="partners service">Dropshipping</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="partners service">Affiliate</a>
                        </li>
                        <li>
                            <a class="text-white" href="#" aria-label="partners service">Get wholesale</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->
                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 mx-auto">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Bulletin</h5>

                    <form action="./api/subscribe" method="POST" @submit.prevent="subscribeUser()"
                          enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="inputEmail1">Email address</label>
                            <input type="email" v-model="email" class="form-control" id="inputEmail1"
                                   aria-describedby="emailHelp"
                                   placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.
                            </small>
                        </div>
                        <button type="submit" class="btn" style="background-color: #8E2A36;color: #fff">Subscribe
                        </button>
                    </form>

                    <!--Subscription message-->
                    <div class="form-group">
                        <div v-if="hasErrors" class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ errors.email[0] }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div v-if="hasSuccess" class="alert alert-success alert-dismissible fade show" role="alert">
                            You have successfully subscribed
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!--Subscription message-->

            </div>
            <!-- Grid row -->

        </div>

        <!-- Footer Links -->

        <hr>

        <!-- Call to action -->
        <ul class="list-unstyled list-inline text-center py-2">
            <li class="list-inline-item">
                <h5 class="mb-1">Register for free</h5>
            </li>
            <li class="list-inline-item">
                <a href="./register" class="btn" aria-label="register btn"
                   style="background-color: #8E2A36; color: #fff">Register!</a>
            </li>
        </ul>
        <!-- Call to action -->

        <hr>

        <!-- Social buttons -->
        <ul class="list-unstyled list-inline text-center">
            <li class="list-inline-item">
                <a class="btn-floating btn-fb mx-1 text-white" href="#" aria-label="social media btn">
                    <i class="fab fa-facebook-f"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-tw mx-1 text-white" href="#" aria-label="social media btn">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-gplus mx-1 text-white" href="#" aria-label="social media btn">
                    <i class="fab fa-google-plus-g"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-li mx-1 text-white" href="#" aria-label="social media btn">
                    <i class="fab fa-linkedin-in"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-dribbble mx-1 text-white" href="#" aria-label="social media btn">
                    <i class="fab fa-dribbble"> </i>
                </a>
            </li>
        </ul>
        <!-- Social buttons -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a class="text-white" href="#" aria-label="template">Demo template </a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</template>

<script>
    export default {
        name: "SubscriberComponent",
        data() {
            return {
                email: '',
                errors: [],
                hasSuccess: false,
                hasErrors: false,
            }
        },
        methods: {
            subscribeUser() {
                const self = this;
                axios.post('./api/subscribe', {
                    email: self.email
                })
                    .then(function (response) {
                        if (response.status === 200) {
                            self.email = '';
                            self.hasSuccess = true;
                            self.hasErrors = false;
                        }
                        // console.log(response);
                    })
                    .catch(function (error) {
                        self.errors = error.response.data.errors;
                        self.hasErrors = true;
                        self.hasSuccess = false;
                        // console.log(self.errors);
                    })
            }
        }

    }
</script>

<style scoped>
    .alert-dismissible {
        padding-right: 7em;
    }
</style>