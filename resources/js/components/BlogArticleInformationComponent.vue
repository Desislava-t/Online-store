<template>

    <div class="container container-mt">

        <!--Blog nav-->
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column" role="tablist" aria-orientation="vertical">
                    <h5 class="text-uppercase">Categories</h5>
                    <a class="nav-link text-decoration-none" href="#" aria-label="Profile" role="tab">
                        Profile
                    </a>
                    <a class="nav-link text-decoration-none" href="#" aria-label="Messages" role="tab">
                        Messages
                    </a>
                    <a class="nav-link text-decoration-none" href="#" aria-label="Settings" role="tab">
                        Settings
                    </a>
                    <a class="nav-link text-decoration-none"
                       href="#" aria-label="Fashion" role="tab">
                        Fashion
                    </a>
                    <!--./Blog nav-->

                    <!--Feature product-->
                    <a href="#" class="text-decoration-none">
                        <h5 class="text-uppercase pt-3">Feature products</h5>
                    </a>

                    <a href="#" class="text-decoration-none">
                        <img src="feature-products/1.jpg" class="featureProductImg" alt="Feature products">
                        <ul class="list-unstyled borderFeatureProduct">
                            <li>Scarf</li>
                        </ul>
                    </a>
                    <ul class="list-unstyled borderFeatureProduct">
                        <li class="sale">35 лв.</li>
                        <li>15 лв.</li>
                    </ul>

                    <a href="#" class="text-decoration-none">
                        <img src="feature-products/2.jpg" class="featureProductImg" alt="Feature products">
                        <ul class="list-unstyled borderFeatureProduct">
                            <li>Soft blouse</li>
                        </ul>
                    </a>
                    <ul class="list-unstyled borderFeatureProduct">
                        <li class="sale">75 лв.</li>
                        <li>40 лв.</li>
                    </ul>

                    <a href="#" class="text-decoration-none">
                        <img src="feature-products/3.jpg" class="featureProductImg" alt="Feature products">
                        <ul class="list-unstyled borderFeatureProduct">
                            <li>High heels</li>
                        </ul>
                    </a>
                    <ul class="list-unstyled borderFeatureProduct">
                        <li class="sale">200 лв.</li>
                        <li>150 лв.</li>
                    </ul>

                    <a href="#" class="text-decoration-none">
                        <img src="feature-products/4.jpg" class="featureProductImg" alt="Feature products">
                        <ul class="list-unstyled borderFeatureProduct">
                            <li>Hot dress</li>
                        </ul>
                    </a>
                    <ul class="list-unstyled borderFeatureProduct">
                        <li class="sale">170 лв.</li>
                        <li>120 лв.</li>
                    </ul>
                </div>
            </div>
            <!--./Feature product-->


            <div class="col-9">
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel">

                        <!--Blog article-->
                        <div class="card">
                            <img src="from-blog/1.jpg" class="w-100" alt="article blog image">
                            <div class="card-body">
                                <h4 class="text-center">The 90`s are back</h4>
                                <p class="textOverflow">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad asperiores at atque
                                    aut cumque dolore
                                    earum eos, error, et ipsum minima odit optio quaerat quasi quos, soluta temporibus
                                    veniam?
                                </p>
                            </div>
                        </div>
                        <!--./Blog article-->

                        <!--Add comment form-->
                        <form action="./api/blog-commentary" method="post" enctype="multipart/form-data"
                              @submit.prevent="blogCommentUsers()">
                            <div class="card">

                                <div class="card-header text-uppercase text-center">
                                    Add comment
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="author" class="requiredInput">Author: </label>
                                        <input type="text" class="form-control" id="author" v-model="author_name">
                                    </div>

                                    <div class="form-group">
                                        <label for="author_email" class="requiredInput">Email address: </label>
                                        <input type="email" class="form-control" id="author_email"
                                               v-model="author_email">
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">Comment</label>
                                        <textarea class="form-control" type="input" id="comment"
                                                  v-model="author_comment"
                                                  rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn d-block ml-auto mr-auto btn-color">
                                        Add comment
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--./Add comment form-->

                        <!--Blog comment message-->
                        <div class="form-group">
                            <div class="form-group">
                                <div v-for="commentError in errors"
                                     class="alert alert-danger alert-dismissible fade show" role="alert">

                                    <div v-for="elem in commentError">
                                        {{ elem }}
                                    </div>

                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div v-if="commentSuccess" class="alert alert-success alert-dismissible fade show"
                                     role="alert">
                                    You have successfully commentaries!
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--./Blog comment message-->

                        <!--Comments-->
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header text-uppercase text-center">
                                        Your comment
                                    </div>
                                    <div class="card-body">
                                        <ul class="list-unstyled">
                                            <li v-for="blogComment in blogCommentaries" class="text-center p-5">

                                                <h4 class="d-inline">Author: {{ blogComment.author_name }}</h4>
                                                <br>
                                                <h4 class="d-inline">Comment:</h4> {{ blogComment.author_comment }}
                                                <span class="ml-5"> <h4 class="d-inline">Date added:</h4></span>
                                                {{ blogComment.created_at }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--./Comments-->
                    </div>
                </div>
            </div>
        </div>

    </div>


</template>

<script>
    export default {
        name: "BlogArticleInformationComponent",
        data() {
            return {
                author_name: '',
                author_email: '',
                author_comment: '',
                errors: [],
                commentSuccess: false,
                commentError: false,
                blogCommentaries: [],
            }
        },
        mounted() {
            this.getBlogComments();
        },
        methods: {
            blogCommentUsers() {
                const self = this;
                axios.post('./api/blog-commentary', {
                    author_name: self.author_name,
                    author_email: self.author_email,
                    author_comment: self.author_comment,
                })
                    .then(function (response) {
                        if (response.status === 200) {
                            self.author_name = '';
                            self.author_email = '';
                            self.author_comment = '';
                            self.commentSuccess = true;
                            self.commentError = false;
                            self.getBlogComments();
                        }
                    })

                    .catch(function (error) {
                        self.errors = error.response.data.errors;
                        self.commentError = true;
                        self.commentSuccess = false;
                    })

            },

            getBlogComments() {
                const self = this;
                axios.get('./api/blog-commentary')
                    .then(function (response) {
                        self.blogCommentaries = response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                    })
            },
        }
    }
</script>

<style scoped>
    .card {
        border: none;
    }

    .card-header {
        background-color: transparent;
    }

    h4 {
        padding: 0.65em;
        color: grey;
    }

    /*Navigate*/
    a {
        color: #000;
    }

    a:hover {
        color: #8E2A36;
    }

    .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
        color: #000;
        background-color: transparent;
    }

    /*Navigate*/

    /*Form*/
    .requiredInput::before {
        content: '*';
        color: #F00;
        font-weight: 800;
    }

    li {
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    /*Form*/

    /*Feature product*/
    .borderFeatureProduct li {
        border-bottom: none;
    }

    .featureProductImg {
        width: 150px;
    }

    .sale {
        text-decoration: line-through;
    }

    /*Feature product*/


    /*Blog article*/
    .textOverflow {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
        padding: 1em;
    }

    .textOverflow:hover {
        white-space: normal;
        overflow: visible;
    }

    /*Blog article*/

    /*.col-9 {*/
        /*flex: 0;*/
        /*max-width: 0;*/
    /*}*/

    @media only screen and (max-width: 520px) {
        .col-3 {
            display: none;
        }

        .col-9 {
            max-width: 100%;
            flex:0 0 100%;

        }
    }
</style>