<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/order',[UserController::class,'store'])->name('order.store');
Route::get('/order',[UserController::class,'index'])->name('order.index');
// Route::get('/register/view/{id}',[UserController::class,'show']);
// Route::put('/register/edit/{id}',[UserController::class,'update']);
Route::delete('/register/delete/{id}',[UserController::class,'destroy']);

Route::post('/franchise-enquiry',[CommonController::class,'franchiseStore'])->name('franchise.store');
Route::get('/franchise-enquiry',[CommonController::class,'franchiseIndex'])->name('franchise.index');
// Route::get('/franchise-enquiry/view/{id}',[CommonController::class,'show']);
// Route::put('/franchise-enquiry/edit/{id}',[CommonController::class,'update']);
// Route::delete('/franchise-enquiry/delete/{id}',[CommonController::class,'destroy']);
// Route::get('/franchise-enquiry/trash',[CommonController::class,'trash']);
// Route::delete('/franchise-enquiry/forceDelete/{id}',[CommonController::class,'forceDelete']);
// Route::patch('/franchise-enquiry/restore/{id}',[CommonController::class,'restore']);

Route::post('/blog',[CommonController::class,'blogStore'])->name('blog.store');
Route::get('/blog',[CommonController::class,'blogIndex'])->name('blog.index');
// Route::get('/blog/view/{id}',[CommonController::class,'show']);
// Route::put('/blog/edit/{id}',[CommonController::class,'update']);
// Route::delete('/blog/delete/{id}',[CommonController::class,'destroy']);
// Route::get('/blog/trash',[CommonController::class,'trash']);
// Route::delete('/blog/forceDelete/{id}',[CommonController::class,'forceDelete']);
// Route::patch('/blog/restore/{id}',[CommonController::class,'restore']);

Route::post('/book-event',[CommonController::class,'eventBooking'])->name('book.event.store');
Route::get('/book-event',[CommonController::class,'eventIndex'])->name('book.event.index');

Route::post('/rating',[CommonController::class,'ratingStore'])->name('rate.store');
Route::get('/rating',[CommonController::class,'ratingIndex'])->name('rate.index');
Route::put('/rating/edit/{id}',[CommonController::class,'updateRating']);
Route::get('/rating/view/{id}',[CommonController::class,'showRating']);

Route::post('/career',[CareerController::class,'careerStore'])->name('career.store');
Route::get('/career',[CareerController::class,'careerIndex'])->name('career.index');

Route::post('/job-applied',[CareerController::class,'jobAppliedStore'])->name('job.applied.store');
Route::get('/job-applied',[CareerController::class,'jobAppliedIndex'])->name('job.applied.index');

Route::post('/needy',[CommonController::class,'needyStore'])->name('needy.store');
Route::get('/needy',[CommonController::class,'needyIndex'])->name('needy.index');

Route::post('/donation',[CommonController::class,'donationStore'])->name('donation.store');
Route::get('/donation',[CommonController::class,'donationIndex'])->name('donation.index');

// auth work

// Route::post('login', [AuthController::class, 'login']);
// Route::post('logout', [AuthController::class, 'logout']);
// Route::get('user', [AuthController::class, 'getAuthenticatedUser'])->middleware('auth:api');

// Route::group(['middleware' => ['auth:api', 'admin']], function() {
//     Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
// });

Route::group(['middleware'=>'api'],function($routes){

    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/profile',[AuthController::class,'profile']);
});

