<template>

    <div class="container container-mt">
        <div class="row">
            <div class="col-4">

                <!--Navigate-->
                <nav>
                    <h5 class="text-uppercase">Categories</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-uppercase font-weight-bold"
                               href="./women" aria-label="product categories Women">
                                Women
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active text-lowercase"
                               href="./women-dress" aria-label="product categories dress">
                                dress
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-lowercase"
                               href="./women-blouses" aria-label="product categories blouses">
                                blouses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-lowercase active"
                               href="./women-jeans" aria-label="product categories jeans">
                                jeans
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase font-weight-bold"
                               href="./men" aria-label="product categories Men">
                                Men
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-lowercase"
                               href="./men-shirts" aria-label="product categories shirts">
                                shirts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-lowercase"
                               href="./men-sweaters" aria-label="product categories sweaters">
                                sweaters
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-lowercase"
                               href="./men-pants" aria-label="product categories pants">
                                pants
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-uppercase font-weight-bold"
                               href="./accessories" aria-label="product categories Accessories">
                                Accessories
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-lowercase"
                               href="./accessories-sunglasses" aria-label="product categories Sunglasses">
                                Sunglasses
                            </a>
                        </li>
                    </ul>
                </nav>

                <!--/.Navigate-->

            </div>

            <!--Description -> about us-->
            <div class="col-8 mb-3">
                <h5 class="text-uppercase mb-3 text-center">Our store</h5>
                <img src="our-store-banners/1.png" alt="our store banners" class="w-100">
                <p class="p-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium beatae debitis
                    deserunt dolorem doloremque eum facilis nemo nobis optio praesentium, quis quod reiciendis tenetur
                    voluptates. Accusantium doloribus quod unde.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab culpa, deserunt dignissimos dolorum
                    esse fuga id impedit ipsum laboriosam quae voluptate, voluptates? Architecto atque deserunt fuga
                    hic, minima natus ratione!
                </p>
            </div>

            <!--/.Description -> about us-->
        </div>

    </div>

</template>

<script>
    export default {
        name: "AboutUsComponent",

    }
</script>

<style scoped>

    /*Categories*/
    h5 {
        color: grey;
        opacity: 0.6;
    }

    /*./Categories*/

    /*Link*/
    a {
        color: #000;
    }

    a:hover {
        color: #8E2A36;
    }

    /*./Link*/

</style>