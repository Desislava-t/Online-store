<div class="container container-margin-blog">
    @foreach($blogArticles as $key=>$product)
        <div class="content-blog mt-5 mb-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="blog-gallery">
                    <div class="blog-gallery-img">
                        <img class="" src="{{$product->image}}" alt="img product faker">
                    </div>
                </div>
                <div class="content-item-blog"><a href="#blog-articles" class="link-article" aria-label="article blog">
                        <h5 class="blog-item">{{$product->title}}</h5>
                        <p class="blog-item">{{$product->created_at}}</p>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<span class="clearfix mb-5 d-block"></span>