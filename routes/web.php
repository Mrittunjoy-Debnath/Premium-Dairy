<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','ContactController@home');

//admin
Route::group(['prefix'=>'admin','middleware' => 'is_admin'],function(){

    Route::get('/home', 'HomeController@adminIndex')->name('admin.home')->middleware('is_admin');

    Route::get('/ckeditor','HomeController@ckEditor');

    Route::get('/email', 'Admin\EmailController@index');

    Route::get('/useremail','Admin\EmailController@userEmail');

    //Product
    Route::get('/addproduct','Admin\ProductController@addProduct')->name('add-product');
    Route::post('/saveproduct','Admin\ProductController@saveProduct')->name('save-product');

    Route::get('/manageproduct','Admin\ProductController@manageProduct')->name('manage-product');

    Route::delete('/productdestroy/{id}','Admin\ProductController@productDestroy')->name('product-destroy');

    Route::get('/editproduct/{id}','Admin\ProductController@editProduct')->name('edit-product');

    Route::post('/updateproduct/{id}','Admin\ProductController@updateProduct')->name('update-product');

    //Order
    Route::get('/showorders','Admin\OrderController@showOrders')->name('show-orders');
    Route::get('/orderdone/{phone}','Admin\OrderController@orderDone')->name('order-done');
    Route::get('/downloadpdf/{phone}','Admin\OrderController@downloadPdf')->name('download-pdf');
    Route::get('/ordermovedownloadpdf/{phone}','Admin\OrderController@orderMoveDownloadPdf')->name('order-move-download-pdf');
    Route::get('/ordermove/{phone}','Admin\OrderController@orderMove')->name('order-move');
    Route::get('/doneorder','Admin\OrderController@doneOrder')->name('done-order');
    Route::get('/ordermovedone/{phone}','Admin\OrderController@orderMoveDone')->name('order-move-done');
    Route::get('/ordermovedelete/{phone}','Admin\OrderController@orderMoveDelete')->name('order-move-delete');


    // Offer
    Route::get('/addoffer','Admin\OfferController@addOffer')->name('add-offer');
    Route::post('/saveproductoffer','Admin\OfferController@saveProductOffer')->name('save-product-offer');

    Route::get('/manageoffer','Admin\OfferController@manageOffer')->name('manage-offer');

    //Search
    Route::post('/search','Admin\SearchController@search')->name('search');

});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact','ContactController@index')->name('contact');

Route::get('/home','ContactController@home')->name('home');

Route::post('/save/feedback','FeedbackController@index')->name('feedback');

Route::get('/feedback/successful','FeedbackController@success')->name('feedback-success');

Route::get('/about','ContactController@about')->name('about');

Route::get('/offer','ContactController@offer')->name('offer');

//Cart
Route::post('/addcart/{id}','CartController@addCart')->name('add-cart')->middleware('auth');
Route::get('/showcart/{id}','CartController@showCart')->name('show-cart')->middleware('auth');
Route::get('/remove/{id}','CartController@removeCart')->name('remove')->middleware('auth');
Route::post('/addoffercart/{id}','CartController@addOfferCart')->name('add-offer-cart')->middleware('auth');
//Order
Route::post('/orderconfim','OrderController@orderConfirm')->name('order-confirm');
Route::get('/productdesc/{id}/{count_total}','OrderController@productDesc')->name('product-desc');
