<div class="container container-mt">

    {{--description of position by category--}}
    <div class="p-5 text-center">
        <a href="{{ url('/') }}" class="text-decoration-none" title="Home">
            <i class="fas fa-home icon-home"></i>
        </a> >>
        <a href="{{ route('men-pants') }}" class="text-decoration-none hover-effect" aria-label=">men-pants">
            men-pants
        </a>
    </div>
    {{--./description of position by category--}}

    <div class="row">
        <div class="col-4">
            {{--Navigate--}}
            <nav>
                <h5 class="text-uppercase title-style">Categories</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase font-weight-bold hover-effect product-categories"
                           href="{{ route('women') }}" aria-label="product categories Women">
                            Women
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-lowercase hover-effect"
                           href="{{ route('women-dress') }}" aria-label="product categories dress">
                            dress
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lowercase hover-effect"
                           href="{{ route('women-blouses') }}" aria-label="product categories blouses">
                            blouses
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lowercase active hover-effect"
                           href="{{ route('women-jeans') }}" aria-label="product categories jeans">
                            jeans
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase font-weight-bold hover-effect product-categories"
                           href="{{ route('men') }}" aria-label="product categories Men">
                            Men
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lowercase hover-effect"
                           href="{{ route('men-shirts') }}" aria-label="product categories shirts">
                            shirts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lowercase hover-effect"
                           href="{{ route('men-sweaters') }}" aria-label="product categories sweaters">
                            sweaters
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lowercase hover-effect"
                           href="{{ route('men-pants') }}" aria-label="product categories pants">
                            pants
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase font-weight-bold hover-effect product-categories"
                           href="{{ route('accessories') }}" aria-label="product categories Accessories">
                            Accessories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-lowercase hover-effect"
                           href="{{ route('accessories-sunglasses') }}" aria-label="product categories Sunglasses">
                            Sunglasses
                        </a>
                    </li>
                </ul>
            </nav>
            {{--./Navigate--}}

            {{--Top product--}}
            <a href="#top-product" class="text-decoration-none">
                <h5 class="text-uppercase m-3 title-style">Top product</h5>
            </a>
            @foreach($getProducts as $key=>$getProduct)
                <img src="{{ $getProduct->image }}" class="img-top-product" alt="top product">
                <a href="#product" class="text-decoration-none hover-effect" aria-label="product">
                    <h4 class="card-title">{{ $getProduct->product_name }}</h4>
                </a>
                <p class="card-text">{{ $getProduct->product_price }} лв.</p>
        @endforeach
        {{--./Top product--}}

        <!--Feature product-->
            <a href="#" class="text-decoration-none" aria-label="Feature products">
                <h5 class="text-uppercase pt-3 title-style">Feature products</h5>
            </a>

            <div>
                <img src="feature-products/1.jpg" class="featureProductImg" alt="Feature products">
                <a href="#scarf" class="text-decoration-none hover-effect" aria-label="scarf">
                    <h4 class="card-title">Scarf</h4>
                </a>
                <ul class="list-unstyled borderFeatureProduct">
                    <li class="sale">35 лв.</li>
                    <li>15 лв.</li>
                </ul>
            </div>

            <div>
                <img src="feature-products/2.jpg" class="featureProductImg" alt="Feature products">
                <a href="#soft-blouse" class="text-decoration-none hover-effect" aria-label="soft-blouse">
                    <h4 class="card-title">Soft blouse</h4>
                </a>
                <ul class="list-unstyled borderFeatureProduct">
                    <li class="sale">75 лв.</li>
                    <li>40 лв.</li>
                </ul>
            </div>

            <div>
                <img src="feature-products/3.jpg" class="featureProductImg" alt="Feature products">
                <a href="#High-heels" class="text-decoration-none hover-effect" aria-label="High-heels">
                    <h4 class="card-title">High heels</h4>
                </a>
                <ul class="list-unstyled borderFeatureProduct">
                    <li class="sale">200 лв.</li>
                    <li>150 лв.</li>
                </ul>
            </div>

            <div>
                <img src="feature-products/4.jpg" class="featureProductImg" alt="Feature products">
                <a href="#Hot-dress" class="text-decoration-none hover-effect" aria-label="Hot-dress">
                    <h4 class="card-title">Hot dress</h4>
                </a>
                <ul class="list-unstyled borderFeatureProduct">
                    <li class="sale">170 лв.</li>
                    <li>120 лв.</li>
                </ul>
            </div>

        </div>

        <!--./Feature product-->


        {{--Product--}}
        <div class="col-8 mb-3">
            <div class="row">
                <div class="w-100">
                    {{ $men -> links() }}
                </div>
                @foreach($men as $key=>$product)
                    <div class="col-sm-4">
                        <div class="card border-0">
                            <div class="img-hover-zoom">
                                <img src="{{ $product->image }}" alt="img product faker" class="w-100">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->price }}лв.</p>
                                <div class="text-center pt-4">
                                    <!-- The button for adding the products to the cart -->
                                    <a href="{{ route('add', [ $product->getRouteKey() ])}}"
                                       class="text-decoration-none" aria-label="link add to cart">
                                        <button class="btn" title="Add to cart">
                                            <i class="fas fa-shopping-cart"></i>
                                        </button>
                                    </a>|
                                    <a href="{{ route('view-product') }}" target="_blank"
                                       aria-label="view-product link">
                                        <button class="btn" title="View" aria-label="view product btn">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="w-100">
                    {{ $men -> links() }}
                </div>
            </div>
        </div>


    </div>
    {{--./Product--}}


</div>


<span class="clearfix"></span>