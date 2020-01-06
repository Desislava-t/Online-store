<?php
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/blog-information', function () {
    return view('blog.blog-information');
});

//Route::get('/checkout', function () {
//    return view('checkout');
//});

Route::get('/', 'WebstoreController@index')->name('index');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/women', 'ProductController@index')->name('women');
Route::get('/women-dress', 'ProductController@womanDress')->name('women-dress');
Route::get('/women-blouses', 'ProductController@womanBlouses')->name('women-blouses');
Route::get('/women-jeans', 'ProductController@womanJeans')->name('women-jeans');
Route::get('/men', 'ProductController@men')->name('men');
Route::get('/men-shirts', 'ProductController@menShirts')->name('men-shirts');
Route::get('/men-sweaters', 'ProductController@menSweaters')->name('men-sweaters');
Route::get('/men-pants', 'ProductController@menPants')->name('men-pants');
Route::get('/accessories', 'ProductController@accessories')->name('accessories');
Route::get('/accessories-sunglasses', 'ProductController@accessoriesSunglasses')->name('accessories-sunglasses');

Route::get('/checkout', 'CheckoutController@index')->name('checkout');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

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

Route::get('admin/subscriber/subscriber-edit/{id}', 'SubscriberController@edit')->name('subscriber-edit');

Route::post('admin/subscriber/subscriber-update/{id}', 'SubscriberController@update')->name('subscriber-update');

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Auth::routes();


