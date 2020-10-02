<div class="container container-mt mb-5">
    <div class="card">
        <div class="modal-body">
            <div class="text-center text-uppercase font-weight-bold p-3">
                Your cart
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
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            <form action="{{ route('checkout.store') }}" method="post" enctype="multipart/form-data"
                  class="needs-validation">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" name="customer_first_name" class="form-control form-control-border"
                               id="firstName"
                               placeholder="Please, enter your first name" required>
                        <div class="invalid-feedback">
                            Valid first name is required.
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" name="customer_last_name" class="form-control form-control-border"
                               id="lastName"
                               placeholder="Please, enter your last name" required>
                        <div class="invalid-feedback">
                            Valid last name is required.
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" name="customer_email" class="form-control form-control-border" id="email"
                           placeholder="Please, enter an email address"
                           required>
                    <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Address</label>
                    <input type="text" name="customer_shipping_address" class="form-control form-control-border"
                           id="address"
                           placeholder="Please, enter your shipping address" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100 form-control-border" name="customer_country"
                                id="country" required>
                            <option value="Bulgarian">Bulgarian</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="state">City</label>
                        <select class="custom-select d-block w-100 form-control-border" name="customer_city" id="state"
                                required>
                            <option value="Sofia">Sofia</option>
                            <option value="Plovdiv">Plovdiv</option>
                            <option value="Varna">Varna</option>
                            <option value="Burgas">Burgas</option>
                            <option value="Ruse">Ruse</option>
                            <option value="Stara Zagora">Stara Zagora</option>
                            <option value="Pleven">Pleven</option>
                            <option value="Sliven">Sliven</option>
                            <option value="Dobrich">Dobrich</option>
                            <option value="Shumen">Shumen</option>
                            <option value="Pernik">Pernik</option>
                            <option value="Haskovo">Haskovo</option>
                            <option value="Yambol">Yambol</option>
                            <option value="Pazardzhik">Pazardzhik</option>
                            <option value="Blagoevgrad">Blagoevgrad</option>
                            <option value="Veliko Turnovo">Veliko Turnovo</option>
                            <option value="Vratsa">Vratsa</option>
                            <option value="Gabrovo">Gabrovo</option>
                            <option value="Asenovgrad">Asenovgrad</option>
                            <option value="Vidin">Vidin</option>
                            <option value="Kazanlak">Kazanlak</option>
                            <option value="Kyustendil">Kyustendil</option>
                            <option value="Kardzhali">Kardzhali</option>
                            <option value="Montana">Montana</option>
                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" name="country_code" class="form-control form-control-border" id="zip"
                               placeholder="Please, enter an zip code" required>
                        <div class="invalid-feedback">
                            Zip code required.
                        </div>
                    </div>
                </div>

                <hr class="mb-4">

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="customer_information" id="save-info">
                    <label class="custom-control-label form-control-border" for="save-info">
                        Save this information for next time
                    </label>
                </div>
                <hr class="mb-4">

                <h4 class="mb-3">Payment</h4>

                <div class="d-block my-3">
                    <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio"
                               class="custom-control-input form-control-border" checked=""
                               required>
                        <label class="custom-control-label" for="credit">
                            Cash on Delivery
                        </label>
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-cart btn-lg btn-block btn-color" type="submit">
                    Continue to checkout
                </button>
                @if(session('message'))
                    <div class="alert alert-info mt-5">
                        {{session('message')}}
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
