<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\StaffDepartmentController;

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

Route::get('/',[HomeController::class, 'home'] );
Route::get('/service/{id}',[HomeController::class,'service_detail']);
Route::get('/services',[HomeController::class,'services']);
Route::get('page/about-us',[PageController::class,'about_us']);
Route::get('page/contact-us',[PageController::class,'contact_us']);


Route::get('/admin', function () {
    return view('dashboard');
});
//admin login
Route::get('admin/login',[AdminController::class, 'login'] );
Route::post('admin/login',[AdminController::class, 'check_login'] );
Route::get('admin/logout',[AdminController::class, 'logout'] );
//admin dashboard
Route::get('admin',[AdminController::class, 'dashboard'] );

//roomtype
Route::get('admin/room-type/{id}/delete',[RoomTypeController::class, 'destroy'] );
Route::resource('/admin/room-type',RoomTypeController::class );
Route::get('admin/room-type-image/{roomType_image_id}/delete',[RoomTypeController::class, 'destroyImg']);
//room
Route::get('admin/rooms/{id}/delete',[RoomController::class, 'destroy'] );
Route::resource('/admin/rooms',RoomController::class );
//customer
Route::get('admin/customer/{id}/delete',[CustomerController::class, 'destroy'] );
Route::resource('admin/customer',CustomerController::class );

//department
Route::get('admin/department/{id}/delete',[StaffDepartmentController::class, 'destroy'] );
Route::resource('admin/department',StaffDepartmentController::class );

//staff
Route::get('admin/staff/{id}/delete',[StaffController::class, 'destroy'] );
Route::resource('admin/staff',StaffController::class );

//staff payment
Route::get('admin/staff/payments/{id}',[StaffController::class, 'all_payments'] );
Route::get('admin/staff/payment/{id}/add',[StaffController::class, 'add_payment'] );
Route::post('admin/staff/payment/{id}',[StaffController::class,'save_payment'] );
Route::get('admin/staff/payment/{id}/{staff_id}/delete',[StaffController::class,'delete_payment']);

// Booking
Route::get('admin/booking/{id}/delete',[BookingController::class,'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}',[BookingController::class,'available_rooms']);
Route::resource('admin/booking',BookingController::class);


Route::get('login',[CustomerController::class,'login']);
Route::post('customer/login',[CustomerController::class,'customer_login']);
Route::get('register',[CustomerController::class,'register']);
Route::post('customer/register',[CustomerController::class,'customer_register']);

Route::get('logout',[CustomerController::class,'logout']);



//Route::get('booking', [BookingController::class, 'front_booking']);
Route::post('booking/save-booking', [HomeController::class, 'frontend_booking']);


// service
Route::get('admin/service/{id}/delete',[ServiceController::class,'destroy']);
Route::resource('admin/service',ServiceController::class);



// testimonial
Route::get('customer/add-testimonial',[HomeController::class,'add_testimonial']);
Route::post('customer/save-testimonial',[HomeController::class,'save_testimonial']);
Route::get('admin/testimonial/{id}/delete',[AdminController::class,'destroy_testimonial']);
Route::get('admin/testimonials',[AdminController::class,'testimonials']);

Route::post('save-contactus',[PageController::class,'save_contactus']);

// banner
Route::get('admin/banner/{id}/delete',[BannerController::class,'destroy']);
Route::resource('admin/banner',BannerController::class);
