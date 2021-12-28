<?php

use Illuminate\Support\Facades\Route;
use admin\OccasionController;
use admin\WeddingController;
use admin\UserController;

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

// Route::get('/', function () {
//     //return view('index');
//     return view('auth.login');
// });
Route::get('/', 'HomeController@index')->name('home');
Auth::routes();
Route::post('user/login', '\App\Http\Controllers\Auth\LoginController@login')->name('user.login');

Route::get('Wedding-Invitation/{random_id}/{wedding_id}', 'WeddingController@view')->name('view_wedding_invitation');
//Route::get('/home', 'HomeController@index')->name('home');

/* admin route start */

Route::prefix('admin')->group(function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');
    Route::post('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

    Route::get('/dashboard', '\App\Http\Controllers\admin\DashboardController@index')->name('dashboard')->middleware(['auth']);

    Route::get('change-password', '\App\Http\Controllers\admin\ChangePasswordController@index')->middleware(['auth']);
    Route::post('change-password', '\App\Http\Controllers\admin\ChangePasswordController@changePassword')->name('change.password')->middleware(['auth']);
    //Route::resource('occasions', OccasionController::class)->middleware(['auth']);

    Route::get('occasions/create/{id}','\App\Http\Controllers\admin\OccasionController@create')->name('occasions.create')->middleware(['auth']);
    Route::post('occasions/store','\App\Http\Controllers\admin\OccasionController@store')->name('occasions.store')->middleware(['auth']);
    Route::get('occasions/edit/{id}','\App\Http\Controllers\admin\OccasionController@edit')->name('occasions.edit')->middleware(['auth']);
    Route::put('occasions/update/{id}','\App\Http\Controllers\admin\OccasionController@update')->name('occasions.update')->middleware(['auth']);
    Route::delete('occasions/destroy/{id}','\App\Http\Controllers\admin\OccasionController@destroy')->name('occasions.destroy')->middleware(['auth']);
    Route::post('occasion_sortable','\App\Http\Controllers\admin\OccasionController@occasion_sortable')->middleware(['auth']);
    Route::get('show_occasion/{id}','\App\Http\Controllers\admin\OccasionController@show_occasion')->name('occasions.show_occasion')->middleware(['auth']);

    Route::resource('weddings', WeddingController::class)->middleware(['auth']);
    Route::get('clone/{id}','\App\Http\Controllers\admin\WeddingController@clone')->name('weddings.clone')->middleware(['auth']);
    Route::resource('users',UserController::class)->middleware(['auth','is_admin']);

    Route::get('add/gallery/{id}','\App\Http\Controllers\admin\GalleryController@add')->name('add.gallery')->middleware(['auth']);
    Route::post('store/gallery/{id}','\App\Http\Controllers\admin\GalleryController@store')->name('store.gallery')->middleware(['auth']);
    Route::post('delete/gallery','\App\Http\Controllers\admin\GalleryController@delete')->name('delete.gallery')->middleware(['auth']);
    Route::post('gallery_sorting','\App\Http\Controllers\admin\GalleryController@gallery_sorting')->middleware(['auth']);


    Route::get('groom/{id}','\App\Http\Controllers\admin\BoyFamilyDetailsController@index')->name('groom.index')->middleware(['auth']);
    Route::get('groom/create/{id}','\App\Http\Controllers\admin\BoyFamilyDetailsController@create')->name('groom.create')->middleware(['auth']);
    Route::post('groom/store','\App\Http\Controllers\admin\BoyFamilyDetailsController@store')->name('groom.store')->middleware(['auth']);
    Route::get('groom/edit/{id}','\App\Http\Controllers\admin\BoyFamilyDetailsController@edit')->name('groom.edit')->middleware(['auth']);
    Route::put('groom/update/{id}','\App\Http\Controllers\admin\BoyFamilyDetailsController@update')->name('groom.update')->middleware(['auth']);
    Route::delete('groom/destroy/{id}','\App\Http\Controllers\admin\BoyFamilyDetailsController@destroy')->name('groom.destroy')->middleware(['auth']);
    Route::get('groom/view/{id}','\App\Http\Controllers\admin\BoyFamilyDetailsController@show')->name('groom.view')->middleware(['auth']);
    Route::post('groom_sortable','\App\Http\Controllers\admin\BoyFamilyDetailsController@groom_sortable')->middleware(['auth']);

    Route::get('bride/{id}','\App\Http\Controllers\admin\GirlFamilyDetailsController@index')->name('bride.index')->middleware(['auth']);
    Route::get('bride/create/{id}','\App\Http\Controllers\admin\GirlFamilyDetailsController@create')->name('bride.create')->middleware(['auth']);
    Route::post('bride/store','\App\Http\Controllers\admin\GirlFamilyDetailsController@store')->name('bride.store')->middleware(['auth']);
    Route::get('bride/edit/{id}','\App\Http\Controllers\admin\GirlFamilyDetailsController@edit')->name('bride.edit')->middleware(['auth']);
    Route::put('bride/update/{id}','\App\Http\Controllers\admin\GirlFamilyDetailsController@update')->name('bride.update')->middleware(['auth']);
    Route::delete('bride/destroy/{id}','\App\Http\Controllers\admin\GirlFamilyDetailsController@destroy')->name('bride.destroy')->middleware(['auth']);
    Route::get('bride/view/{id}','\App\Http\Controllers\admin\GirlFamilyDetailsController@show')->name('bride.view')->middleware(['auth']);
    Route::post('bride_sortable','\App\Http\Controllers\admin\GirlFamilyDetailsController@bride_sortable')->middleware(['auth']);

    Route::get('video/{id}','\App\Http\Controllers\admin\VideoGalleryController@index')->name('video.index')->middleware(['auth']);
    Route::get('video/create/{id}','\App\Http\Controllers\admin\VideoGalleryController@create')->name('video.create')->middleware(['auth']);
    Route::post('video/store','\App\Http\Controllers\admin\VideoGalleryController@store')->name('video.store')->middleware(['auth']);
    Route::get('video/edit/{id}','\App\Http\Controllers\admin\VideoGalleryController@edit')->name('video.edit')->middleware(['auth']);
    Route::put('video/update/{id}','\App\Http\Controllers\admin\VideoGalleryController@update')->name('video.update')->middleware(['auth']);
    Route::delete('video/destroy/{id}','\App\Http\Controllers\admin\VideoGalleryController@destroy')->name('video.destroy')->middleware(['auth']);
    Route::get('video/view/{id}','\App\Http\Controllers\admin\VideoGalleryController@show')->name('video.view')->middleware(['auth']);
    Route::post('video_sortable','\App\Http\Controllers\admin\VideoGalleryController@video_sortable')->middleware(['auth']);
});

/* admin route end */