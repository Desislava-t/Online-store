<?php
//Route::get('/', 'WebstoreController@index');

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/', 'WebstoreController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');

Route::get('/view-product', 'HomeController@store')->name('view-product');

Route::get('/add/{product}', 'WebstoreController@addToCart')->name('add');

Route::get('/remove/{productId}', 'WebstoreController@removeProductFromCart')->name('remove');

Route::get('/empty', 'WebstoreController@destroyCart')->name('empty');

# PayPal checkout
//Route::get('checkout', 'PaypalController@payWithpaypal')->name('checkout');
//
//# PayPal status callback
//Route::get('status', 'PaypalController@getPaymentStatus');

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Auth::routes();
