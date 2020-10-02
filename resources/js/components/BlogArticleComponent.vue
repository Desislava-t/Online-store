<template>
    <div class="container container-mt">
        <div v-for="blogProduct in blogProducts">
            <div class="content-blog mt-5 mb-2">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog-gallery">
                        <div class="blog-gallery-img">
                            <img v-bind:src="blogProduct.image" alt="blog img faker">
                        </div>
                    </div>
                    <div class="content-item-blog">
                        <a href="./blog-information"class="link-article"
                           aria-label="article blog">
                            <h5 class="blog-item">{{blogProduct.title}}</h5>
                            <p class="blog-item">{{blogProduct.created_at}}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <span class="clearfix mb-5 d-block"></span>
    </div>

</template>

<script>
    export default {
        name: "BlogArticleComponent",
        data() {
            return {
                blogProducts: [],
            }
        },
        mounted() {
            this.getBlogArticles();
        },
        methods: {
            getBlogArticles() {
                const self = this;
                axios.get('./api/blog')
                    .then(function (response) {
                        self.blogProducts = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
        }
    }
</script>

<style scoped>

</style>