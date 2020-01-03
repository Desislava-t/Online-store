<form action="" method="POST" enctype="multipart/form-data"></form>
@csrf
<div class="container container-margin-checkout">
    <div class="card">
        <div class="modal-body">
            <div class="text-center text-uppercase font-weight-bold p-3">
                Your card
            </div>
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
                        <td>{{ $cartItem->price }} BGN</td>
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
    </div>

    <div class="row mt-5">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">Billing address</h4>
            <form class="needs-validation" novalidate="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" required="">
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                            <option value="">Choose...</option>
                            <option>Bulgarian</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                            <option value="">Choose...</option>
                            <option>Sofia</option>
                            <option>Varna</option>
                            <option>Plovdiv</option>
                            <option>Veliko Turnovo</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="same-address">
                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing
                        address</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="save-info">
                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Payment</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked=""
                               required="">
                        <label class="custom-control-label" for="credit">Cash on Delivery</label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-cart btn-lg btn-block" style="background-color: #8E2A36; color: #fff"
                        type="submit">Continue
                    to checkout
                </button>
            </form>
        </div>
    </div>
    </div>
    <style>
        .row input:focus,
        .custom-select:focus {
            border-color: #8E2A36;
            box-shadow: inherit;
        }

        .container-margin-checkout {
            margin-top: 7rem;
            margin-bottom: 4rem;
        }

    </style>