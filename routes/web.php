<?php
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

Route::get('/admin/subscriber/subscribers', 'SubscriberController@index')->name('subscribers');

Route::get('admin/subscriber/subscribers/delete/{id}', 'SubscriberController@destroy')->name('subscriber.delete');

Route::post('/', 'SubscriberController@store');

Route::post('view-product','SubscriberController@store');

Route::get('admin/subscriber/subscriber-edit/{id}', 'SubscriberController@edit')->name('subscriber-edit');

Route::post('admin/subscriber/subscriber-update/{id}', 'SubscriberController@update')->name('subscriber-update');

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Auth::routes();


