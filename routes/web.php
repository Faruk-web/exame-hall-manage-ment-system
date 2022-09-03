<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController as ControllersHistoryController;
use App\Http\Controllers\ClientDueAmount\ClientDueAmountController;
use App\Http\Controllers\Customer\CustomerInfoController;
use App\Http\Controllers\Building\BuildingInfoController;
use App\Http\Controllers\Land\LandInfoController;
use App\Http\Controllers\Registration\RegistrationInfoController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboardTest');
//======================================= ClientDueAmount All Route Group List End ==================================//
Route::prefix('client/due/amount')->group(function () {
  Route::get('/flat/payment/list', [ClientDueAmountController::class, 'ClientDueAmount'])->name('client.due.amount');
  Route::post('/store', [ClientDueAmountController::class, 'DuePaymentStore'])->name('duepayment.store');
  Route::get('/delete/{id}', [ClientDueAmountController::class, 'DuePaymentDelete'])->name('duepayment.delete');
  Route::get('/delete/{id}', [ClientDueAmountController::class, 'RegistrationDelete'])->name('registrationpayment.delete');
  Route::get('/detail/{id}', [ClientDueAmountController::class, 'RegistrationDetails'])->name('registrati.details');
  Route::get('/regitrstion/payment/list', [ClientDueAmountController::class, 'RegistrationAmountPayment'])->name('client.due.amount.test');
});
//======================================= ClientDueAmount All Route Group List End ==================================//
//======================================= Customer All Route Group List End ==================================//
Route::prefix('customer')->group(function () {
  Route::get('/list', [CustomerInfoController::class, 'CustomerList'])->name('customer.list');
  Route::post('/store', [CustomerInfoController::class, 'CustomerStore'])->name('customer.store');
  Route::get('/delete/{id}', [CustomerInfoController::class, 'CustomerDelete'])->name('customer.delete');
});
//======================================= Customer All Route Group List End ==================================//
//======================================= Bulding All Route Group List End ==================================//
Route::prefix('building')->group(function () {
  Route::get('/list', [BuildingInfoController::class, 'BuildingList'])->name('building.list');
  Route::post('/store', [BuildingInfoController::class, 'BuildingStore'])->name('building.store');
  Route::get('/delete/{id}', [BuildingInfoController::class, 'BuildingDelete'])->name('building.delete');
});
//======================================= Bulding All Route Group List End ==================================//
//======================================= Bulding All Route Group List End ==================================//
Route::prefix('Land')->group(function () {
  Route::get('/list', [LandInfoController::class, 'LandList'])->name('land.list');
  Route::post('/store', [LandInfoController::class, 'LandStore'])->name('land.store');
  Route::get('/delete/{id}', [LandInfoController::class, 'LandDelete'])->name('land.delete');
});
//======================================= Bulding All Route Group List End ==================================//
//======================================= Bulding All Route Group List End ==================================//
Route::prefix('registration')->group(function () {
  Route::get('/list', [RegistrationInfoController::class, 'RegistrationList'])->name('registration.list');
  Route::post('/store', [RegistrationInfoController::class, 'RegistrationStore'])->name('regitration.store');
  Route::get('/delete/{id}', [RegistrationInfoController::class, 'RegistrationDelete'])->name('registration.delete');
});
//======================================= Bulding All Route Group List End ==================================//