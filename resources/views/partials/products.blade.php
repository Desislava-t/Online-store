<div class="container">
    <div class="content">
        <div class="content__image">
            <div class="content__image__gallery">
                <img src="product-img/1.jpg" alt="item demo"/>
            </div>
            <div class="content-item">
                <h4>Office Dress</h4>
                <button class="btn btn-item" type="button" aria-label="Demo btn item">08 ITEM</button>
            </div>
        </div>
        <div class="content__image">
            <div class="content__image__gallery">
                <img src="product-img/2.jpg" alt="item demo"/>
            </div>
            <div class="content-item">
                <h4>Flirty Dress</h4>
                <button class="btn btn-item" type="button" aria-label="Demo btn item">03 ITEM</button>
            </div>
        </div>
        <div class="content__image">
            <div class="content__image__gallery ">
                <img src="product-img/3.jpg" alt="item demo"/>
            </div>
            <div class="content-item">
                <h4>T-shirt</h4>
                <button class="btn btn-item" type="button" aria-label="Demo btn item">06 ITEM</button>
            </div>
        </div>
    </div>

    {{--Our products btn demo--}}
    <div class="container mt-5">
        <h2 class="text-center">Our products</h2>
        <div class="btn-group center-btn-our-products" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-our-products" aria-label="btn our products">
                <span>Party</span>
            </button>
            <button type="button" class="btn btn-our-products" aria-label="btn our products">
                <span>Christmas</span>
            </button>
            <button type="button" class="btn btn-our-products" aria-label="btn our products">
                <span>Prom</span>
            </button>
            <button type="button" class="btn btn-our-products" aria-label="btn our products">
                <span>Black friday</span>
            </button>
        </div>
    </div>

    {{--Add faker products--}}

    {{--{{ var_dump(session()->get('cart')) }}--}}

    @foreach($products as $key=>$product)
        <div class="responsive mt-5">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img class="image" src="{{$product->image}}" alt="img product faker" aria-label="img faker">
                <div class="btn-center_add-view">
                    <!-- The button for adding the products to the cart -->
                    <a href="{{ route('add', [ $product->getRouteKey() ])}}" aria-label="link add to cart">
                        <button class="btn" title="Add to cart">
                            <i class="fas fa-shopping-cart"></i>
                        </button>
                    </a>|
                    <a href="{{route('view-product')}}" target="_blank" aria-label="view-product link">
                        <button class="btn" title="View" aria-label="view product btn">
                            <i class="far fa-eye"></i>
                        </button>
                    </a>
                </div>
                <div class="desc">{{$product->name}}</div>
                <div class="desc">{{$product->price}} лв.</div>
            </div>
        </div>
    @endforeach

</div>
<span class="clearfix"></span>