<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\dishdetails;
use App\Http\Controllers\OrderForm;
use App\Http\Controllers\AdminDetailsController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\UserOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {  //home page
    return view('home');
});

 
Route::get('/about', function () { //about page
    return view('about');
});


Route::get('/contact', function () {  //Contact page
    return view('contact');
});


Route::get('/foot', function () {  //Contact page
    return view('footer');
});




Route::get('/admin', function () {   //admin page
    return view('admin');
});

// Route::get('/login', function () {    //login page
//         return view('onlylogin');
//     });


    Route::get('/login',[LoginController::class,'OnlyLogin'])->name('login');
    Route::get('/create',[LoginController::class,'CreateAc'])->name('create');



    // dishes routtes

 Route::get('/smallguj', [CreateUserController::class, 'showForm']);

    Route::get('/mediumguj', function () {   //medium dish menu
    return view('mediumguj');
});
    Route::get('/largeguj', function () {   //large dish menu
    return view('largeguj');
});


// rediect for button to menu detials thali

// This is a gujarati thali routes details
    Route::get('/small',[dishdetails::class,'SG'])->name('small');
    Route::get('/medium',[dishdetails::class,'MG'])->name('medium');
    Route::get('/large',[dishdetails::class,'LG'])->name('large');


// This is a Punjabi thali routes details
    Route::get('/smallp',[dishdetails::class,'SP'])->name('smallp');
    Route::get('/mediump',[dishdetails::class,'MP'])->name('mediump');
    Route::get('/largep',[dishdetails::class,'LP'])->name('largep');

 
// this is a user order route

 Route::get('/smallgujform', function () {   //small gujarati dish order form
    return view('smallgujform');
});
 Route::get('/mediumgujform', function () {   //mediym gujarati dish order form
    return view('mediumgujform');
});
 Route::get('/largegujform', function () {   //large gujarati dish order form
    return view('largegujform');
});



 Route::get('/smallpunform', function () {   //small punjabi dish order form
    return view('smallpunform');
});
 Route::get('/mediumpunform', function () {   //mediym punjabi dish order form
    return view('mediumpunform');
});
 Route::get('/largepunform', function () {   //large punjabi dish order form
    return view('largepunform');
});


// Gujarti thali form to (order now click and redirect on form page)

    Route::get('/small_g_form',[OrderForm::class,'SGO'])->name('small_g');
    Route::get('/medium_g_form',[OrderForm::class,'MGO'])->name('medium_g');
    Route::get('/large_g_form',[OrderForm::class,'LGO'])->name('large_g');

// Punjabi thali form to (order now click and redirect on form page)
    
    Route::get('/small_p_form',[OrderForm::class,'SPO'])->name('small_p');
    Route::get('/medium_p_form',[OrderForm::class,'MPO'])->name('medium_p');
    Route::get('/large_p_form',[OrderForm::class,'LPO'])->name('large_p');






   
    Route::post('store',[CreateUserController::class,'store']);



    // this is a admin authentication Route

Route::post('/authing', [App\Http\Controllers\AdminDetailsController::class, 'authing'])->name('authing');




Route::get('/userhome', function () {  
    return view('userhome');
})->name('userhome');





//login authorntiacations route
Route::post('userlogin', [CreateUserController::class, 'userlogin']);




//feedback form route

    Route::post('create', [FeedbackController::class, 'create']);

    

    //logout

Route::get('logout', 'App\Http\Controllers\CreateUserController@logout')->name('logout');

// user order submit
    Route::post('storeorder', [UserOrderController::class, 'storeorder']);


 

// payment route

Route::get('/payment', function () {  //userhome page
    return view('payment');
});





Route::get('/fatchdata', function () {
    return view('adminorders'); 
});


Route::get('/adminorders', [AdminDetailsController::class, 'showAdminOrders'])->name('adminorders');




Route::post('/handlePayment', [CreateUserController::class, 'handlePayment'])->name('handlePayment');






//users dishes order to redirect adminorders
Route::post('fatchdata', [AdminDetailsController::class, 'authing']);

//delete data from admin (red button delete)

Route::delete('/orders/{id}', [AdminDetailsController::class, 'deleteOrder'])->name('delete-order');





//confirms order admin 

Route::get('/confirms', function () {
    return view('confirms');
});



//delete order admin 

Route::get('/deletes', function () {
    return view('deletes');
});

Route::get('/adminorders', [AdminDetailsController::class, 'allOrders'])->name('adminorders');
Route::get('/confirmed-orders', [AdminDetailsController::class, 'confirmedOrders'])->name('confirmed-orders');
Route::post('/confirmm-order/{user_id}', [AdminDetailsController::class, 'confirmOrderr'])->name('confirmm-order');
Route::get('/deleted-orders', [AdminDetailsController::class, 'deletedOrders'])->name('deleted-orders');
Route::delete('/deletes-order/{user_id}', [AdminDetailsController::class, 'deleteOrder'])->name('deletes-order');






//logout
Route::post('/admin/logout', [AdminDetailsController::class, 'Adminlogout'])->name('admin.logout');







//my orders activtity
Route::post('/storeorder', [UserOrderController::class, 'storeorder'])->name('storeorder');
Route::get('/myorders', [UserOrderController::class, 'showOrders'])->name('myorders');


