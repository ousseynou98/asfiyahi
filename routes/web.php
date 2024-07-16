<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
            
Route::resource('subscriptions', SubscriptionController::class)->names([
	'index' => 'subscriptions.index',
	'create' => 'subscriptions.create',
	'store' => 'subscriptions.store',
	'show' => 'subscriptions.show',
	'edit' => 'subscriptions.edit',
	'update' => 'subscriptions.update',
	'destroy' => 'subscriptions.destroy'
]);

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', function () {return view('welcome');});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify'); 
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::group(['middleware' => 'auth'], function () {


	// Route::resource('users', UserController::class)->name('users');
	Route::resource('users', UserController::class)->names([
		'index' => 'users.index',
		'create' => 'users.create',
		'store' => 'users.store',
		'show' => 'users.show',
		'edit' => 'users.edit',
		'update' => 'users.update',
		'destroy' => 'users.destroy'
	]);
	// Route::resource('gallery', GalleryController::class);
	Route::resource('gallery', GalleryController::class)->names([
		'index' => 'gallery.index',
		'create' => 'gallery.create',
		'store' => 'gallery.store',
		'show' => 'gallery.show',
		'edit' => 'gallery.edit',
		'update' => 'gallery.update',
		'destroy' => 'gallery.destroy'
	]);

	Route::post('subscribe', [SubscriptionController::class, 'store'])->name('subscription.store');
	// Route::resource('subscriptions', SubscriptionController::class);
	


	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	Route::get('tables', function () {
		return view('pages.tables');
	})->name('tables');
	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-management', function () {
		return view('pages.laravel-examples.user-management');
	})->name('user-management');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});