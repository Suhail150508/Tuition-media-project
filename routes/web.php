<?php

use App\Http\Controllers\Places1;
use Illuminate\Console\Application;
use App\Http\Controllers\NewStudent;
use App\Http\Controllers\ShowTution;
use App\Http\Controllers\ShowStudent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TuitionHomeController;

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

//--------------- Language-----------
// Route::get('lang',[LangController::class,'lang']);


//------------- Frontend Section from here------------
// Route::get('/search',[HomeController::class,'search']);
// Route::get('/view-details{id}',[HomeController::class,'view_details']);
// Route::get('/product_by_cat{id}',[HomeController::class,'product_by_cat']);
// Route::get('/product_by_subCat{id}',[HomeController::class,'product_by_subCat']);
// Route::get('/product_by_brand{id}',[HomeController::class,'product_by_brand']);


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';




//------------- Admin Section from here------------

// Route::get('/admin_login',[adminController::class,'login']);
// Route::post('/admin_login_store',[adminController::class,'login_store'])->name('admin_login_store');

// Route::get('/admins',[SuperAdminController::class,'dashboard'])->name('admins');
// Route::get('/admin_logout',[SuperAdminController::class,'logout'])->name('admin_logout');

// Route::resource('/categories',CategoryController::class);
// Route::get('/cat_status{id}',[CategoryController::class,'status']);

// Route::resource('/sub_categories',SubCategoryController::class);
// Route::get('/subCat-status{id}',[SubCategoryController::class,'status']);



// Route::resource('/brands',BrandController::class);
// Route::get('/brands{id}',[BrandController::class,'status']);



// Route::resource('/units',UnitController::class);
// Route::get('/units{id}',[UnitController::class,'status']);


// Route::resource('/sizes',SizeController::class);
// Route::get('/sizes{id}',[SizeController::class,'status']);


// Route::resource('/colors',ColorController::class);
// Route::get('/colors{id}',[ColorController::class,'status']);


// Route::resource('/products',ProductController::class);
// Route::get('/products{id}',[ProductController::class,'status']);


// Route::get('/order',[OrderController::class,'order']);
// Route::get('/order_details/{id}',[OrderController::class,'order_details']);

// Route::get('/invoice/{id}',[OrderController::class,'invoice']);


// Route::post('add-to-cart',[CartController::class,'add_to_cart']);
// Route::get('/all_carts',[CartController::class,'index']);
// Route::get('/delete_item{id}',[CartController::class,'delete']);

// Route::post('wishlist',[CartController::class,'wishlist']);
// Route::get('/all_wishlist',[CartController::class,'wishlist_index']);
// Route::get('/delete_wishlist{id}',[CartController::class,'delete_wishlist']);

// Route::post('/quantity_update{id}',[CartController::class,'update']);
// Route::get('/checkout',[CartController::class,'checkout']);
// Route::get('/login_check',[CartController::class,'login_check']);
// // Route::post('/login',[CartController::class,'login']);
// Route::get('/register',[CustomerController::class,'register']);
// Route::post('/registration',[CustomerController::class,'register_store']);
// Route::get('/login',[CustomerController::class,'login'])->name('login');
// Route::post('/login_store',[CustomerController::class,'login_store'])->name('login_store');
// Route::get('/logout',[CustomerController::class,'logout']);
// Route::post('/shipping_address',[CustomerController::class,'shipping']);
// Route::get('/payment',[CustomerController::class,'payment']);
// Route::post('/order_place{id}',[CustomerController::class,'order_place']);



Route::get('/lang/change',[LangController::class,'lang_change'])->name('lang.change');

Route::get('/download-pdf-teacher/{id}',[LangController::class,'downloadPDFTeacherInfo']);
Route::get('/download-pdf-student/{id}',[LangController::class,'downloadPDFStudentInfo']);

Route::get('/',[HomeController::class,'index']);

Route::get('/students_image',[NewStudent::class,'create_image']);
Route::post('/students_image',[NewStudent::class,'store_image']);


Route::get('/places1',[Places1::class,'places1']);
Route::post('/places1',[Places1::class,'store']);
Route::get('/student_details/{id}',[Places1::class,'student_details']);
Route::get('/all_tuitions',[ShowTution::class,'tuition'])->name('all_tuition');
Route::get('/all_students',[ShowTution::class,'all_students'])->name('all_students');
Route::post('/find_tuition',[ShowTution::class,'findTuition']);

Route::post('/application_tuition',[ShowTution::class,'applicationTuition']);



Route::get('/places2',[Places1::class,'places2']);
Route::get('/locations/{district}',[Places1::class,'location']);
// Route::post('/places2',[Places1::class,'store']);


Route::get('/mirpur',[ShowTution::class,'show']);

Route::get('/details/{id}',[ShowTution::class,'details_show']);
Route::get('/teacher_info',[ShowTution::class,'teacherInfo']);
Route::post('/teachers-store-info',[ShowTution::class,'teacherStoreInfo']);
Route::get('/teacher_details/{id}',[ShowTution::class,'teacher_details']);
Route::get('/all_teachers',[ShowTution::class,'all']);
Route::post('/search_tutor',[ShowTution::class,'search_tutor']);
Route::get('/search-tuition',[ShowTution::class,'searchTuition']);
Route::get('/search-tutors',[ShowTution::class,'searchTutors']);

Route::post('/opinions',[ShowTution::class,'opinion']);
Route::get('/test/{id}',[ShowTution::class,'test']);

Route::get('/application-tutors/{id}',[ShowTution::class,'applicationTutor']);
Route::get('/application-tuition/{id}',[ShowTution::class,'applicationTuition']);

Route::get('/login-tutor',[ShowTution::class,'loginTutor']);
Route::get('/login-tuition',[ShowTution::class,'loginTuition']);
Route::post('/login-store-tutor',[ShowTution::class,'loginStoreTutor']);
Route::post('/login-tuition-store',[ShowTution::class,'loginStoreTuition']);
Route::get('/resister-user',[ShowTution::class,'resisterUser']);
Route::post('/resister-user-store',[ShowTution::class,'resisterStoreUser']);
Route::post('/logout',[ShowTution::class,'logOut']);



Route::post('/application-tutor',[ApplicationController::class,'manualApplicationTutor']);
Route::post('/application-tuition',[ApplicationController::class,'manualApplicationTuition']);

Route::get('/profile/{id}',[ApplicationController::class,'profile']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// -----------Notification start
Route::get('/sent-notification',[NotificationController::class,'notification']);
Route::get('/change-password',[NotificationController::class,'changePassword']);
Route::post('/change-password-store',[NotificationController::class,'changePasswordStore']);

