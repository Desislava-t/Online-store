<div class="container">
    {{--Our products demo--}}
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

    {{--./Our products demo--}}

    {{--Add faker products--}}


    @foreach($products as $key=>$product)
        <div class="responsive mt-5">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <img class="image" src="{{$product->image}}" alt="img product faker">
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