<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerCountroller;
use App\Http\Controllers\HomeCountroller;
use App\Http\Controllers\HoneyController;
use App\Http\Controllers\OthersController;
use App\Http\Controllers\ProfileCountroller;
use App\Http\Controllers\QueenController;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

///----------------------------------------------//


// 



Route::get('/', [HomeCountroller::class,'indexpage']);

Route::get('/about', [HomeCountroller::class,'aboutpage'])->name('pageabout');

Route::get('/contact', [HomeCountroller::class,'contactpage'])->name('pagecontact');

Route::post('/contact/send', [HomeCountroller::class,'contactpagestore'])->name('pagecontactstore');

Route::get('/shop', [HomeCountroller::class,'shoppage'])->name('pageshop');
//Routing CustomerAuth  Start 

Route::prefix('customer')->group(function(){

  Route::get('/login', [CustomerCountroller::class,'logincustomer'])->name('logincustomer');

  Route::get('/register', [CustomerCountroller::class,'registercustomer'])->name('registercustomer');

  Route::get('/home', [CustomerCountroller::class,'homepagesc'])->name('homepage')->middleware('customer');
  
  Route::get('/cart', [CartController::class,'cartpage'])->name('pagecart')->middleware('customer');

  Route::post('/cart/add-to-cart', [CartController::class, 'addMovieToCart'])->name('add-movie-to-shopping-cart')->middleware('customer');

  Route::get('/logout', [CustomerCountroller::class,'logoutcustomer'])->name('customlogout')->middleware('customer');

  Route::post('/login', [CustomerCountroller::class,'custlogin'])->name('logincustm');

  Route::post('/register', [CustomerCountroller::class,'postregister'])->name('postregister');   
  
  Route::get('/myprofile',[CustomerCountroller::class,'editmyprofile'])->name('myprofile')->middleware('customer');

  Route::post('/myprofile/edit',[CustomerCountroller::class,'storeeyprofile'])->name('myprofilestor')->middleware('customer');

});  

//Routing CustomerAuth  End  

//Routing Admin Panel Start 

Route::prefix('admin')->group(function(){

    Route::get('/login', [AdminController::class,'login'])->name('login');

    Route::post('/login', [AdminController::class,'postlogin'])->name('postlogin');
    
    Route::get('/dashbrad', [AdminController::class,'home'])->name('home')->middleware('admin');

    Route::get('/logout', [AdminController::class,'logout'])->name('logout')->middleware('admin');

  // start bee route

    Route::get('/bee', [BeeController::class,'indexbee'])->name('bee')->middleware('admin');

    Route::get('/bee/create', [BeeController::class,'createbee'])->name('beecreate')->middleware('admin');

    Route::post('/bee/store', [BeeController::class,'storebee'])->name('beestore')->middleware('admin');

    Route::get('/bee/edit/{id}', [BeeController::class,'editbee'])->name('beeedit')->middleware('admin');

    Route::post('/bee/update/{id}', [BeeController::class,'updatebee'])->name('beeupdate')->middleware('admin');

    Route::get('/bee/delete/{id}', [BeeController::class,'destroybee'])->name('beedelete')->middleware('admin');

     Route::get('/bee/active/{id}',[BeeController::class,'stutaccpet'])->name('beestutaccpet')->middleware('admin');

     Route::get('/bee/pending/{id}',[BeeController::class,'stutasremove'])->name('beestutasremove')->middleware('admin');

  // end bee route

 // start honey Route

    Route::get('/honey', [HoneyController::class,'indexhoney'])->name('honey')->middleware('admin');

    Route::get('/honey/create', [HoneyController::class,'createhoney'])->name('honeycreate')->middleware('admin');

    Route::post('/honey/store', [HoneyController::class,'storehoney'])->name('honeystore')->middleware('admin');

    Route::get('/honey/edit/{id}', [HoneyController::class,'edithoney'])->name('honeyedit')->middleware('admin');

    Route::post('/honey/update/{id}', [HoneyController::class,'updatehoney'])->name('honeyupdate')->middleware('admin');

    Route::get('/honey/delete/{id}', [HoneyController::class,'destroyhoney'])->name('honeydelete')->middleware('admin');

     Route::get('/honey/active/{id}',[HoneyController::class,'stutaccpet'])->name('honeystutaccpet')->middleware('admin');

     Route::get('/honey/pending/{id}',[HoneyController::class,'stutasremove'])->name('honeystutasremove')->middleware('admin');

     // End honey Route

    // Start Route Queen

    Route::get('/queen', [QueenController::class,'indexqueen'])->name('queen')->middleware('admin');

    Route::get('/queen/create', [QueenController::class,'createqueen'])->name('queencreate')->middleware('admin');

    Route::post('/queen/store', [QueenController::class,'storequeen'])->name('queenstore')->middleware('admin');

    Route::get('/queen/edit/{id}', [QueenController::class,'editqueen'])->name('queenedit')->middleware('admin');

    Route::post('/queen/update/{id}', [QueenController::class,'updatequeen'])->name('queenupdate')->middleware('admin');

    Route::get('/queen/delete/{id}', [QueenController::class,'destroyqueen'])->name('queendelete')->middleware('admin');

     Route::get('/queen/active/{id}',[QueenController::class,'stutaccpet'])->name('queenstutaccpet')->middleware('admin');

     Route::get('/queen/pending/{id}',[QueenController::class,'stutasremove'])->name('queenstutasremove')->middleware('admin');

    // End Route Queen

    //Start Route Others

    Route::get('/others', [OthersController::class,'indexothers'])->name('others')->middleware('admin');

    Route::get('/others/create', [OthersController::class,'createothers'])->name('otherscreate')->middleware('admin');
    
    Route::post('/others/store', [OthersController::class,'storeothers'])->name('othersstore')->middleware('admin');

    Route::get('/others/edit/{id}', [OthersController::class,'editothers'])->name('othersedit')->middleware('admin');

    Route::post('/others/update/{id}', [OthersController::class,'updateothers'])->name('othersupdate')->middleware('admin');

    Route::get('/others/delete/{id}', [OthersController::class,'destroyothers'])->name('othersdelete')->middleware('admin');

    Route::get('/others/active/{id}',[OthersController::class,'stutaccpet'])->name('othersstutaccpet')->middleware('admin');
    
    Route::get('/others/pending/{id}',[OthersController::class,'stutasremove'])->name('othersstutasremove')->middleware('admin');

    //End Route Others

    //Start Route Usere

    Route::get('/user', [UserController::class,'indexuser'])->name('nameuser')->middleware('admin');

    Route::get('/contactus', [UserController::class,'indexContactUs'])->name('ContactUsindex')->middleware('admin');
   
    //End Route Usere
 
   //Start Route Profile

    Route::get('/profile',[ProfileCountroller::class,'my_account'])->name('my_account')->middleware('admin');

    Route::post('/profile/edit',[ProfileCountroller::class,'my_account_stor'])->name('my_account_stor')->middleware('admin');

    //End Route Profile


    //Start Route Static Pages

     
    Route::get('/staticpages/create', [StaticController::class,'createsaticpages'])->name('saticpagescreate')->middleware('admin');

    Route::post('/staticpages/store', [StaticController::class,'storestaic'])->name('staicstore')->middleware('admin');

    Route::get('/staticpages', [StaticController::class,'indexsaticpages'])->name('staticpages')->middleware('admin');
   
    Route::get('/staticpages/delete/{id}', [StaticController::class,'destroystatic'])->name('staticdelete')->middleware('admin');

    Route::delete('/delete-cart-item', [CartController::class, 'deleteItem'])->name('delete.cart.item')->middleware('admin');
     //End Route Static Pages
 

     // Start Route Orders
     Route::get('/order',[CartController::class,'indexorder'])->name('orderindex')->middleware('admin');

     Route::get('/order/active/{id}',[CartController::class,'stutaccpet'])->name('orderstutaccpet')->middleware('admin');

      // End Route Orders
});
