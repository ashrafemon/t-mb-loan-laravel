<?php

use App\Http\Controllers\Admin\AppointmentController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ComplainController;
use App\Http\Controllers\Admin\ConfigureController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\LoanController;
use App\Http\Controllers\Admin\OfficeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\WhyController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Client\Calculator\BorrowingPowerController;
use App\Http\Controllers\Client\Calculator\MortgageController;
use App\Http\Controllers\Client\Calculator\RepaymentController;
use App\Http\Controllers\Client\Calculator\SavingController;
use App\Http\Controllers\Client\Calculator\StampDutyController;
use App\Http\Controllers\Client\GetInTouchController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\WhyUsController;
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

// General Pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/why-us', [WhyUsController::class, 'index'])->name('why_us');
Route::get('/get-in-touch', [GetInTouchController::class, 'index'])->name('get_in_touch');

// Dynamic Pages
Route::get('/loan/{slug}', [\App\Http\Controllers\Client\LoanController::class, 'show'])->name('loan.show');
Route::get('/post/{slug}', [\App\Http\Controllers\Client\PostController::class, 'show'])->name('loan.post.show');
Route::post('/appointment', [\App\Http\Controllers\Client\LoanController::class, 'appointment'])->name('loan.appointment.create');

// Calculator Pages
Route::prefix('calculators')->group(function () {
    Route::get('/mortgage', [MortgageController::class, 'index'])->name('calculator.mortgage.index');
    Route::get('/borrow_power', [BorrowingPowerController::class, 'index'])->name('calculator.borrow.index');
    Route::get('/repayment', [RepaymentController::class, 'index'])->name('calculator.repayment.index');
    Route::get('/savings', [SavingController::class, 'index'])->name('calculator.savings.index');
    Route::get('/stamp_duty', [StampDutyController::class, 'index'])->name('calculator.stamp.index');
});

// Auth Pages
Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'loginView'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.create');
    Route::get('/register', [AuthController::class, 'registerView'])->name('register.index');
});


Route::prefix('admin')->middleware('auth')->group(function () {
    // Logout
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    // Hero
    Route::get('/hero', [HeroController::class, 'index'])->name('admin.hero.index');
    Route::get('/hero/create', [HeroController::class, 'create'])->name('admin.hero.create');
    Route::post('/hero', [HeroController::class, 'store'])->name('admin.hero.store');
    Route::get('/hero/{id}', [HeroController::class, 'edit'])->name('admin.hero.edit');
    Route::patch('/hero/{id}', [HeroController::class, 'update'])->name('admin.hero.update');
    Route::delete('/hero/{id}', [HeroController::class, 'delete'])->name('admin.hero.delete');

    // Loan
    Route::get('/loan', [LoanController::class, 'index'])->name('admin.loan.index');
    Route::get('/loan/create', [LoanController::class, 'create'])->name('admin.loan.create');
    Route::post('/loan', [LoanController::class, 'store'])->name('admin.loan.store');
    Route::get('/loan/{id}', [LoanController::class, 'edit'])->name('admin.loan.edit');
    Route::patch('/loan/{id}', [LoanController::class, 'update'])->name('admin.loan.update');
    Route::delete('/loan/{id}', [LoanController::class, 'delete'])->name('admin.loan.delete');

    // Post
    Route::get('/post', [PostController::class, 'index'])->name('admin.post.index');
    Route::get('/post/create', [PostController::class, 'create'])->name('admin.post.create');
    Route::post('/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::get('/post/{id}', [PostController::class, 'edit'])->name('admin.post.edit');
    Route::patch('/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::delete('/post/{id}', [PostController::class, 'delete'])->name('admin.post.delete');

    // Client
    Route::get('/client', [ClientController::class, 'index'])->name('admin.client.index');
    Route::get('/client/create', [ClientController::class, 'create'])->name('admin.client.create');
    Route::post('/client', [ClientController::class, 'store'])->name('admin.client.store');
    Route::get('/client/{id}', [ClientController::class, 'edit'])->name('admin.client.edit');
    Route::patch('/client/{id}', [ClientController::class, 'update'])->name('admin.client.update');
    Route::delete('/client/{id}', [ClientController::class, 'delete'])->name('admin.client.delete');

    // Appointment
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('admin.appointment.index');
    Route::delete('/appointment/{id}', [AppointmentController::class, 'delete'])->name('admin.appointment.delete');

    // Office
    Route::get('/office', [OfficeController::class, 'index'])->name('admin.office.index');
    Route::get('/office/create', [OfficeController::class, 'create'])->name('admin.office.create');
    Route::post('/office', [OfficeController::class, 'store'])->name('admin.office.store');
    Route::get('/office/{id}', [OfficeController::class, 'edit'])->name('admin.office.edit');
    Route::patch('/office/{id}', [OfficeController::class, 'update'])->name('admin.office.update');
    Route::delete('/office/{id}', [OfficeController::class, 'delete'])->name('admin.office.delete');

    // Complain
    Route::get('/complain', [ComplainController::class, 'index'])->name('admin.complain.index');
    Route::get('/complain/{id}', [ComplainController::class, 'show'])->name('admin.complain.show');
    Route::patch('/complain/{id}', [ComplainController::class, 'update'])->name('admin.complain.update');
    Route::delete('/complain/{id}', [ComplainController::class, 'delete'])->name('admin.complain.delete');

    // Configure
    Route::get('/configure/create', [ConfigureController::class, 'create'])->name('admin.configure.create');
    Route::post('/configure', [ConfigureController::class, 'store'])->name('admin.configure.store');
    Route::get('/configure', [ConfigureController::class, 'edit'])->name('admin.configure.edit');
    Route::patch('/configure/{id}', [ConfigureController::class, 'update'])->name('admin.configure.update');

    // Why
    Route::get('/why', [WhyController::class, 'edit'])->name('admin.why.edit');
    Route::patch('/why/{id}', [WhyController::class, 'update'])->name('admin.why.update');
});
