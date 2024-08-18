<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\OperationController;
use App\Models\Student;
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
    return view('Home');
});
Route::get('/about', function () {
    return view('About');
});
Route::get('/services', function () {
    return view('Services');
});
Route::get('/blog', function () {
    return view('Blog');
});
Route::get('/contact', function () {
    return view('Contact');
});

//----------------------------------------------------------------------------------------------

Route::resource('Student',StudentController::class);

Route::resource('Course',CourseController::class);

Route::resource('Video',VideoController::class);

Route::resource('Comment',CommentController::class);

//----------------------------------------------------------------------------------------------

Route::controller(OperationController::class)->group(function(){
    Route::get('index','index')->name('Operation.index');
    Route::get('Subscriptions','Subscriptions')->name('Operation.Subscriptions');
    Route::post('index/sp','subscrip')->name('Operation.subscrip');
    Route::post('index/LikeVideo','LikeVideo')->name('Operation.LikeVideo');
    Route::post('index/LikeComment','LikeComment')->name('Operation.LikeComment');
    Route::post('index/showAllVideos','showAllVideos')->name('Operation.showAllVideos');
    Route::post('index/showVideo','showVideo')->name('Operation.showVideo');
    Route::post('index/showComment','showComment')->name('Operation.showComment');
});

//----------------------------------------------------------------------------------------------

Route::controller(AdminController::class)->group(function(){
    //Route::get('index','index')->name('Operation.index');
    Route::post('Admin.Subscriptions','Subscriptions')->name('Admin.Subscriptions')->middleware(['auth','Admin']);
    //Route::post('index/sp','subscrip')->name('Operation.subscrip');
    //Route::post('index/LikeVideo','LikeVideo')->name('Operation.LikeVideo');
    //Route::post('index/LikeComment','LikeComment')->name('Operation.LikeComment');
    Route::post('Admin.showVideos_of_Course','showVideos_of_Course')->name('Admin.showVideos_of_Course')->middleware(['auth','Admin']);
    Route::post('Admin.updateVideo','updateVideo')->name('Admin.updateVideo')->middleware(['auth','Admin']);
    Route::post('Admin.showComments_of_Video','showComments_of_Video')->name('Admin.showComments_of_Video')->middleware(['auth','Admin']);
    Route::post('Admin.Add_Video','Add_Video')->name('Admin.Add_Video')->middleware(['auth','Admin']);
    Route::post('Admin.destroy_Comment','destroy_Comment')->name('Admin.destroy_Comment')->middleware(['auth','Admin']);
    Route::get('Admin.showAllComment','showAllComment')->name('Admin.showAllComment')->middleware(['auth','Admin']);
    //Route::get('Admin.Profile','Profile')->name('Admin.Profile');
    //Route::post('index/showVideo','showVideo')->name('Operation.showVideo');
    //Route::post('index/showComment','showComment')->name('Operation.showComment');
});

//----------------------------------------------------------------------------------------------

Route::get('redirects',[HomeController::class,'index']);

//----------------------------------------------------------------------------------------------

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Operation.dashboard');
    })->name('dashboard');
});
