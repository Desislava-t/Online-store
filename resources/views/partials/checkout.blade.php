<form action="" method="POST" enctype="multipart/form-data"></form>
@csrf
<div class="container container-margin-checkout">
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
                    <td>{{ $cartItem->price }} BGN</td>
                </tr>
            @endforeach
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <!-- Total price of whole cart -->
                <td class="uk-text-bold">Total: {{{ Cart::SubTotal() }}} BGN</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-8 order-md-1">
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
                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
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
                <button class="btn btn-cart btn-lg btn-block" style="background-color: #8E2A36;," type="submit">Continue
                    to checkout
                </button>
            </form>
        </div>
    </div>
    <form class="was-validated">
        <div class="mb-3">
            <label for="validationTextarea">Textarea</label>
            <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <div class="invalid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>

        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
            <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
            <div class="invalid-feedback">Example invalid feedback text</div>
        </div>

        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
        </div>
        <div class="custom-control custom-radio mb-3">
            <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
            <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
            <div class="invalid-feedback">More example invalid feedback text</div>
        </div>

        <div class="form-group">
            <select class="custom-select" required>
                <option value="">Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
        </div>

        <div class="custom-file">
            <input type="file" class="custom-file-input" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
    </form>
</div>
<style>
    .row input:focus,
    .custom-select:focus {
        border-color: #8E2A36;
        box-shadow: inherit;
    }

    .container-margin-checkout {
        margin-top: 5rem;
        margin-bottom: 4rem;
    }

</style>