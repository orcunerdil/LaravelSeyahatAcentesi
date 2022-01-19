<?php

use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
});
//anasayfa diye bir şey tanımlıyoruz onu yazdıgında home a gitsin
Route::redirect('/anasayfa', '/home')->name('anasayfa');

Route::get('/', function () {
    return view('home.index');
});

Route::get('/', [HomeController::class, 'index'])->name('home');



Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::post('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/getproduct/{search}', [HomeController::class, 'productlist'])->name('productlist');

Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');
/*Route::get('/addtocart/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');*/

//ADMIN
Route::middleware('auth')->prefix('admin')->group(function () {

    #Admin role

    Route::middleware('admin')->group(function (){



    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');
        #Category
    Route::get('category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
    Route::get('category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
    Route::get('category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
        #Product
    Route::prefix('product')->group(function(){

        Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
        Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
        Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');

        });
    # Message
    Route::prefix('messages')->group(function(){

        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');

    });

    #Product Image Gallery
    Route::prefix('image')->group(function(){

        Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
        Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');

    });
    #Setting
    Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    Route::prefix('order')->group(function (){

        Route::get('/', [\App\Http\Controllers\Admin\OrderController::class, 'index'])->name('admin_orders');
        Route::post('create', [\App\Http\Controllers\Admin\OrderController::class, 'create'])->name('admin_order_add');
        Route::post('store', [\App\Http\Controllers\Admin\OrderController::class, 'store'])->name('admin_order_store');
        Route::get('edit/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('admin_order_edit');
        Route::post('update/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'update'])->name('admin_order_update');
        Route::post('itemupdate/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'itemupdate'])->name('admin_order_item_update');
        Route::get('delete/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('admin_order_delete');
        Route::get('show/{id}', [\App\Http\Controllers\Admin\OrderController::class, 'show'])->name('admin_order_show');
    });

    #User
        Route::prefix('user')->group(function(){

            Route::get('/',[\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin_users');
            Route::post('create',[\App\Http\Controllers\Admin\UserController::class,'create'])->name('admin_user_add');
            Route::post('store',[\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin_user_store');

            Route::get('userrole/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_roles'])->name('admin_user_roles');
            Route::post('userrolestore/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_role_store'])->name('admin_user_role_add');
            Route::get('userroledelete/{userid}/{roleid}',[\App\Http\Controllers\Admin\UserController::class,'user_role_delete'])->name('admin_user_role_delete');


        });
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){

    Route::get('/',[UserController::class, 'index'])->name('myprofile');

});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function(){

    Route::get('/profile',[UserController::class, 'index'])->name('userprofile');

    #Order
    Route::prefix('order')->group(function (){

    Route::get('/', [OrderController::class, 'index'])->name('user_orders');
    Route::post('create', [OrderController::class, 'create'])->name('user_order_add');
    Route::post('store', [OrderController::class, 'store'])->name('user_order_store');
    Route::get('edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
    Route::post('update/{id}', [OrderController::class, 'update'])->name('user_order_update');
    Route::get('delete/{id}', [OrderController::class, 'destroy'])->name('user_order_delete');
    Route::get('show/{id}', [OrderController::class, 'show'])->name('user_order_show');
});

});



Route::get('/admin/login', [HomeController::class, 'login'])->name('adminlogin');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('adminlogincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
