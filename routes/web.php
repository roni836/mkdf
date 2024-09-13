<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('home.index');
});
Route::get('/our-story', function () {
    return view('home.our-story');
});
Route::get('/volunteer', function () {
    return view('home.volunteer');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/donate-kind', function () {
    return view('home.donate-kind');
});
Route::get('/dry-ration', function () {
    return view('home.dry-ration');
});

Route::get('/donar', function () {
    return view('home.donar');
});

Route::get('/event', function () {
    return view('home.event');
});

Route::get('/left-over-food', function () {
    return view('home.left-over-food');
});

Route::get('/left-over-medicine', function () {
    return view('home.left-over-medicine');
});

Route::get('/time-contribution', function () {
    return view('home.time-contribution');
});

Route::get('/medical-equipment', function () {
    return view('home.medical-equipment');
});

Route::get('/about-needy', function () {
    return view('home.about-needy');
});

Route::get('/hindu-samman', function () {
    return view('home.hindu-samman');
});

// Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/gallery-page',[HomeController::class,'photo']);
Route::get('/video-index',[HomeController::class,'videoIndex'])->name('video.index.all');
Route::get('/donation-index',[HomeController::class,'donationIndex'])->name('donation.index.all');
Route::get('/news-index',[HomeController::class,'newsHomeIndex'])->name('news.home.all');

Route::get('/career-applied/{id}',[HomeController::class,'appliedCareer']);


Route::get('/admin/dashboard',[AdminController::class,'dashboard']);
Route::get('/admin/manage-order/insert',[AdminController::class,'insertOrder']);
Route::get('/admin/manage-franchise',[AdminController::class,'manageFranchise']);
Route::get('/admin/manage-franchise/insert',[AdminController::class,'insertFranchise']);
Route::get('/admin/manage-event',[AdminController::class,'manageEvent']);
Route::get('/admin/manage-event/insert',[AdminController::class,'insertEvent']);
Route::get('/admin/manage-career',[AdminController::class,'manageCareer']);
Route::get('/admin/manage-career/insert',[AdminController::class,'insertCareer']);
Route::get('/admin/manage-job-form',[AdminController::class,'manageJobForm']);
Route::get('/admin/manage-job-form/insert',[AdminController::class,'insertJobForm']);
Route::get('/admin/manage-rating',[AdminController::class,'viewRating']);

Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::get('/admin',[AdminController::class,'manageNeedy']);
Route::get('/admin/manage-needy/insert',[AdminController::class,'insertNeedy']);
Route::get('/admin/manage-donation/insert',[AdminController::class,'insertDonation']);
Route::get('/admin/manage-donation-page/insert',[AdminController::class,'insertDonationPage']);
Route::get('/admin/manage-donation-page',[AdminController::class,'manageDonationPage']);
Route::get('/admin/manage-donation',[AdminController::class,'manageDonation']);
Route::get('/admin/manage-donating-event/insert',[AdminController::class,'insertDonatingEvent']);
Route::get('/admin/manage-donating-event',[AdminController::class,'manageDonatingEvent']);
Route::get('/admin/manage-photos',[AdminController::class,'managePhotos']);
Route::get('/admin/manage-photos/insert',[AdminController::class,'insertPhotos']);
Route::get('/admin/manage-videos',[AdminController::class,'manageVideos']);
Route::get('/admin/manage-videos/insert',[AdminController::class,'insertVideos']);
Route::get('/admin/manage-event',[AdminController::class,'manageEvents']);
Route::get('/admin/manage-event/insert',[AdminController::class,'insertEvents']);
Route::get('/admin/manage-news',[AdminController::class,'manageNews']);
Route::get('/admin/manage-news/insert',[AdminController::class,'insertNews']);



Route::group(['middleware' => ['auth', 'admin']], function() {
    // Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    // Other admin routes
});
