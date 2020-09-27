<header class="header-nav">

    <div class="pos-f-t">
        <nav class="navbar bg-white" id="navbar">

            {{--Menu--}}
            <button class="navbar-toggler btn-style-menu" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" title="Menu"
                    aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            {{--Account--}}
            <button class="navbar-toggler btn-account" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContentAccount"
                    aria-controls="navbarToggleExternalContentAccount"
                    aria-expanded="false" aria-label="Toggle navigation" title="Your profile">
                <i class="far fa-user"></i>

            </button>

            {{--Logo--}}
            <div class="navbar-toggler logo-style">
                <a class="navbar-brand" title="Home page" href="{{ url('/') }}">
                    Webstore
                    {{--{{ config('app.name', 'Laravel') }}--}}
                </a>
            </div>

            {{--Search--}}
            <button class="navbar-toggler btn-search" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContentSearch"
                    aria-controls="navbarToggleExternalContentSearch"
                    aria-expanded="false" aria-label="Toggle navigation" title="Search">
                <i class="fas fa-search"></i>
            </button>

            {{--Card--}}

            <button type="button" class="navbar-toggler btn-cart" data-toggle="modal"
                    data-target="#shoppingCartModal"
                    aria-label="Cart button" title="Shopping cart">
                <span>
                    <i class="fab fa-opencart pr-1"></i>
                </span>
            </button>

            <!-- Shopping cart modal -->
            <div class="modal fade shoping-cart" id="shoppingCartModal" tabindex="-1" role="dialog"
                 aria-labelledby="shoppingCartModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="shoppingCartModalTitle">Shopping cart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::content() as $cartItem)
                                    <tr>
                                        <td>
                                            <!-- Remove product button -->
                                            <a href="{{ route('remove', [ $cartItem->rowId ]) }}">x</a>
                                        </td>
                                        <td>{{ $cartItem->name }}</td>
                                        <td>{{ $cartItem->qty }}</td>
                                        <td>{{ $cartItem->price }} лв.</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <!-- Total price of whole cart -->
                                    <td class="uk-text-bold">Total: {{{ Cart::SubTotal() }}} .лв</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <!-- Clear shopping cart button -->
                            <a href="{{ route('empty') }}" class="btn btn-cart-empty" aria-label="btn-cart-empty">
                                Empty
                            </a>
                            <!-- Proceed to checkout button -->
                            <a href="{{ route('checkout') }}" class="btn btn-color" aria-label="chechout">
                                Checkout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        {{--Menu--}}
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-white p-4">
                <div class="dropdown">
                    <div class="nav-link dropdown-categories hover-effect">
                        <a href="{{ route('women') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Women
                        </a>
                        <i class="fas fa-chevron-down dropdown-icon"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ route('women-dress') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Dress
                        </a>
                        <a href="{{ route('women-blouses') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Blouses
                        </a>
                        <a href="{{ route('women-jeans') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Jeans
                        </a>
                    </div>
                </div>

                <div class="dropdown">
                    <div class="nav-link dropdown-categories hover-effect">
                        <a href="{{ route('men') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Men
                        </a>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="{{ route('men-shirts') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Shirts
                        </a>
                        <a href="{{ route('men-sweaters') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Sweaters
                        </a>
                        <a href="{{ route('men-pants') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Pants
                        </a>
                    </div>
                </div>
                <div class="dropdown">
                    <div class="nav-link dropdown-categories hover-effect">
                        <a href="{{ route('accessories') }}" class="hover-effect"
                           aria-label="Your dropdown categories">
                            Accessories
                        </a>
                        <i class="fas fa-chevron-down"></i>
                    </div>

                    <div class="dropdown-content">
                        <a href="{{ route('accessories-sunglasses') }}" class="hover-effect"
                           aria-label="Your dropdown
                        categories">
                            Sunglasses
                        </a>
                    </div>
                </div>
                <a href="about-us" class="nav-link hover-effect"
                   aria-label="Your categories">
                    About us
                </a>
                <a href="blog" class="nav-link hover-effect"
                   aria-label="Your categories">
                    Blog
                </a>
            </div>
        </div>

        {{--Account--}}
        <div class="collapse" id="navbarToggleExternalContentAccount">
            <div class="bg-white p-5">
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link hover-effect" aria-label="Login"
                               href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link hover-effect" aria-label="Register"
                                   href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle hover-effect" href="#"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                               aria-label="User">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="nav-link hover-effect" aria-label="Logout" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

        {{--Search--}}
        <div class="collapse" id="navbarToggleExternalContentSearch">
            <div class="bg-white p-4">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline my-2 my-sm-0 btn-style-search" type="submit"
                            aria-label="Search button">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>