<?php

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
      
Route::post('/password-request', 'UserController@resetPassword')->name('password-request');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');

Route::get('/', 'DeshboardController@index')->name('/');

Route::get('user-login', 'DeshboardController@userLogin')->name('user-login');
Route::get('user-registration', 'DeshboardController@userReg')->name('user-ragistration');
Route::post('save-user-info', 'DeshboardController@saveUserInfo')->name('save-user-info');

Route::get('jobs', 'JobController@jobs')->name('jobs');
Route::get('my-job', 'JobController@myJobs')->name('my-job');
Route::get('training', 'TrainingController@training')->name('training');
Route::get('employer', 'TrainingController@training')->name('employer');



Route::group(['middleware' => ['auth']], function () {
    
    Route::get('user/profile', 'UserController@userProfile')->name('user-profile');
    Route::get('user/profile/edit', 'UserController@editUserProfile')->name('edit-profile');
    Route::get('user/password-change', 'UserController@changePassword')->name('password-change');
    Route::post('user/update-password', 'UserController@updatePassword')->name('update-password');
    Route::post('user/update-profile', 'UserController@updateProfile')->name('update-profile');

        Route::group(['middleware' => 'role:Admin'], function () {

            
            
        });
  


});
// Auth::routes(['verify' => true]);
Auth::routes();
