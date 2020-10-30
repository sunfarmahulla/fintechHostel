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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'user', 'middleware' => 'basicUser'], function(){

});

Route::group(['prefix' => 'employee', 'middleware' => 'employee'], function(){


});

Route::group(['prefix' => 'htl', 'middleware' => 'hostelProvider', 'middleware' => 'auth'], function(){
	Route::view('/', 'hostelProvider.home');
});

Route::group(['prefix' => 'ad', 'middleware' => 'admin', 'middleware' => 'auth'], function(){

	Route::view('/', 'admin.home');
	Route::resource('/user', App\Http\Controllers\Admin\User\RegisterController::class);
	Route::post('u/activate/{id}',[App\Http\Controllers\Admin\User\RegisterController::class, 'activation']);
	Route::resource('/employee', App\Http\Controllers\Admin\Employee\RegisterController::class);
	Route::post('e/activate/{id}',[App\Http\Controllers\Admin\Employee\RegisterController::class, 'activation']);
	Route::resource('/hostel', App\Http\Controllers\Admin\Hostel\RegisterController::class);
	Route::post('h/activate/{id}',[App\Http\Controllers\Admin\Hostel\RegisterController::class, 'activation']);

	Route::resource('/clg-state', App\Http\Controllers\Admin\Employee\ServiceController::class);

	Route::resource('/clg-registration', App\Http\Controllers\Admin\Employee\CollegeRegistrationController::class);

	Route::view('/clg-registration-form', 'admin.employee.collegeRegistrationForm');
	Route::get('/college-list',  [App\Http\Controllers\Admin\Employee\ClgListController::class, 'index']);

	// hostel requirement registration 
	Route::resource('/htl', App\Http\Controllers\Admin\Hostel\HostelRegistrationController::class);
	Route::get('/hostel-list',[App\Http\Controllers\Admin\Hostel\HostelRegistrationController::class, 'hostelList'] );
	Route::view('/hostel-list-view', 'admin.hostel.hostelRegistration.searchBox');

	Route::get('htl/complete-registartion/{id}',[App\Http\Controllers\Admin\Hostel\HostelRegistrationController::class, 'viewHostelRegistartionSettings' ]);
	Route::get('htl/complete-registartion-image/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'index' ] );

	Route::post('htl/complete-registartion-image/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'uploadImage' ] );

	Route::get('htl/complete-registartion-image-trash/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'deleteImage' ] );

	Route::get('htl/complete-registartion-facility/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'facilityIndex' ] );

	Route::post('htl/complete-registartion-facility/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'facilityUpload' ] );

	Route::get('htl/complete-registartion-facility-trash/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'facilityDelete' ] );
	
	Route::get('htl/complete-registartion-price/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'priceIndex' ] );

	Route::post('htl/complete-registartion-price/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'priceUpload' ] );

	Route::get('htl/complete-registartion-price-edit/{id}',[App\Http\Controllers\Admin\Hostel\HostelRequirementController::class, 'priceEdit' ] );
	//End of hostel requirement registration 

	

	//hostel_provider_user area

	Route::view('hp', 'hostelProvider.hostelRegistration.registration');

});