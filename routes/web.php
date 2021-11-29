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


Route::get('', function () {
    return view('welcome');
});


//admin without login route

Route::group(['namespace' => 'App\Http\Controllers\Admin'], function ($normalAdminRoute) {
    $normalAdminRoute->get('administrator', 'LoginController@index')->name('admin.login');
    $normalAdminRoute->post('administrator/login', 'LoginController@adminLogin')->name('admin.auth');
    $normalAdminRoute->get('forgot-password', 'ForgotPasswordController@index')->name('forgot.password');
    $normalAdminRoute->post('forgot-password', 'ForgotPasswordController@store')->name('password.save');
    $normalAdminRoute->get('reset-password/{token}', 'ForgotPasswordController@ResetPasswordForm')->name('reset.password');
    $normalAdminRoute->post('reset-password', 'ForgotPasswordController@ResetPassword')->name('reset.save');
});

//admin with login route access
Route::middleware(['auth:admin'])->group(function ($route) {
    $route->group(['namespace' => 'App\Http\Controllers\Admin'], function ($adminRoute) {
        $adminRoute->get('languagee/{locale}', 'LocalizationController@index');

        $adminRoute->get('admin/dashborad', 'LoginController@adminDashboard')->name('admin.dashboard');
        $adminRoute->post('admin/logout', 'LoginController@adminlogout')->name('admin.logout');

        //Widget module
        $adminRoute->resource('widget','WidgetController');
        $adminRoute->get('/getdata','WidgetController@getAjaxData')->name('widget.data');

        //Skills module
        $adminRoute->resource('skill','SkillsController');
        $adminRoute->get('/skilldata','SkillsController@getData')->name('skill.data');

        $adminRoute->resource('widget', 'WidgetController');
        $adminRoute->get('/getdata', 'WidgetController@getAjaxData')->name('widget.data');

        $adminRoute->resource('partner', 'PartnerController');
        $adminRoute->get('/getpartenerdata', 'PartnerController@getPartnerData')->name('partner.data');


        $adminRoute->get('contact', 'ContactController@index')->name('contact.data');
        $adminRoute->get('contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
        $adminRoute->post('contact/update/{id}', 'ContactController@update')->name('contact.update');
    });
});

Route::middleware(['auth:web', 'verified'])->group(function ($route) {
    $route->group(['namespace' => 'App\Http\Controllers\Admin'], function ($adminRoute) {
        $adminRoute->get('/home', 'LoginController@userDashboard')->name('dashboard');
        $adminRoute->post('user/logout', 'LoginController@logout')->name('logout');
    });
});