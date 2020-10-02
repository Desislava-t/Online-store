<div class="container container-mt">
    <div class="card mb-4 w-100">
        <div class="row">
            @foreach($viewProduct as $product)
                <div class="col-md-4">
                    <img src="{{$product->image}}" class="card-img" alt="product-image">
                </div>
                <div class="col-md-8">
                    <div class="card-body mt-3">
                        <h2 class="card-title">{{$product->name}}</h2>
                        <div class="dropdown-divider"></div>
                        <ul>
                            <li>
                                Brand : random
                            </li>
                            <li>
                                Product code: 04
                            </li>
                            <li>
                                Availability: In Stock
                            </li>
                        </ul>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam
                            debitis error, et eveniet itaque minus ullam ut! Assumenda delectus earum eligendi et
                            hic, inventore maxime pariatur reiciendis repellat tempora tempore.
                        </p>
                        <p class="card-text">
                        <h2 class="text-muted">{{$product->price}} лв.</h2>
                        </p>
                        <!-- The button for adding the products to the cart -->
                        <a href="{{ route('add', [ $product->getRouteKey() ]) }}" aria-label="add to cart btn">
                            <button class="btn btn-color">
                                Add to cart
                            </button>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
