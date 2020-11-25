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
Route::get('/browseProperties', [App\Http\Controllers\PropertyBookController::class, 'browseProperties'])->name('browseProperties');
Route::get('/bookings' , [App\Http\Controllers\BookingController::class, 'index'])->name('bookings');

Route::post('/buyer/make-booking/{id}', [App\Http\Controllers\PropertyBookController::class, 'makeBooking']);
Route::prefix('admin')->group(function() {
    Route::get('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/register', [App\Http\Controllers\Auth\AdminRegisterController::class, 'showRegForm'])->name('admin.register');
    Route::post('/register', [App\Http\Controllers\Auth\AdminRegisterController::class, 'register'])->name('admin.register.submit');
    Route::get('/addproperties', [App\Http\Controllers\PropertyController::class, 'showAddForm'])->name('admin.addproperties');
    Route::post('/addproperties', [App\Http\Controllers\PropertyController::class, 'addProperties'])->name('admin.addproperties.submit');
    Route::get('/viewproperties', [App\Http\Controllers\PropertyController::class, 'viewProperties'])->name('admin.viewproperties');
    Route::match(['get','post'],'/edit-properties/{id}', [App\Http\Controllers\PropertyController::class, 'editProperties'])->name('admin.editproperties');
    // Route::post('/edit-properties/{id}/done', [App\Http\Controllers\PropertyController::class, 'editProperties'])->name('admin.editproperties.submit');
    Route::get('/delete-property/{id}', [App\Http\Controllers\PropertyController::class, 'deleteProperty'])->name('admin.deleteproperty');
    Route::get('/buyer-details/{id}', [App\Http\Controllers\BookingController::class, 'buyerDetails'])->name('admin.buyerdetails');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
});
