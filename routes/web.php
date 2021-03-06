<?php

use App\Http\Controllers\Admin\ContactController;
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
        $adminRoute->resource('widget', 'WidgetController');
        $adminRoute->get('/filter/getdata', 'WidgetController@getAjaxData')->name('widget.data');

        //Skills module
        $adminRoute->resource('skill', 'SkillsController');
        $adminRoute->get('/skilldata', 'SkillsController@getData')->name('skill.data');
        $adminRoute->post('/destroyPosition', 'SkillsController@destroyPosition')->name('destroy.position');

        $adminRoute->resource('partner', 'PartnerController');
        $adminRoute->get('/getpartenerdata', 'PartnerController@getPartnerData')->name('partner.data');


        $adminRoute->get('contact-us', 'ContactController@index')->name('contact.index');
        $adminRoute->get('contact-us-data', 'ContactController@getContactUsData')->name('contact.data');
        $adminRoute->DELETE('contact/destroy', 'ContactController@destroy')->name('contact/destroy');

        $adminRoute->get('contact/{id}/edit', 'ContactController@edit')->name('contact.edit');
        $adminRoute->post('contact/update/{id}', 'ContactController@update')->name('contact.update');

        //User module route
        $adminRoute->resource('user', 'UserController');
        $adminRoute->get('/getUserData', 'UserController@getAjaxData');

        //Job module route
        $adminRoute->resource('job', 'JobController');
        $adminRoute->get('/getdata/jobdata', 'JobController@getAjaxJobData')->name('job.data');

        //Gallery Module Route
        $adminRoute->resource('gallery', 'GalleryController');
        $adminRoute->get('/getdata', 'GalleryController@getAjaxData')->name('gallery.data');
        $adminRoute->get('/getstatus', 'GalleryController@getUpdateStatus')->name('gallery.update-status');
        $adminRoute->get('/getGalleryData', 'GalleryController@getAjaxData');
    });
});

//frontend route list

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function ($frontRoute) {

    $frontRoute->get('/', 'HomeController@userDashboard')->name('dashboard');

    $frontRoute->post('addnewsletter', 'HomeController@addNewsletter')->name('addnewsletter');

    $frontRoute->post('manager/store', 'ManagerController@storeData')->name('manager.store');
    $frontRoute->post('update-profile', 'ManagerController@updateProfile')->name('update-profile');
    $frontRoute->get('account-setting', 'ManagerController@accountSetting')->name('account-setting');


    $frontRoute->get('manager', 'ManagerController@index')->name('manager');
    $frontRoute->get('registration', 'RegistrationController@index')->name('registration');
    $frontRoute->post('registration', 'RegistrationController@saveRegistration')->name('registration.save');
    $frontRoute->get('email-verify/{email}', 'RegistrationController@getEmailVerify')->name('email.verify');

    $frontRoute->get('manager/email-verify/{email}', 'ManagerController@getEmailVerify')->name('manager.email.verify');
    $frontRoute->get('manager-register-step-two/{id}', 'ManagerController@managerRegisterStepTwo')->name('manager-register-step-two');
    $frontRoute->post('manager-register-step-two-insert', 'ManagerController@managerRegisterStepTwoInsert')->name('manager-register-step-two-insert');
    //start profile route step
    $frontRoute->get('candidate-profile/{userid}', 'RegistrationController@candidateProfileStep')->name('candidate.profile');
    $frontRoute->get('candidate/resumedownaload/{userid}', 'RegistrationController@candidateDownloadResume')->name('candidate.resume');
    $frontRoute->get('candidate/welcome/{userid}', 'RegistrationController@getWelcomePage')->name('candidate.welcome');
    $frontRoute->get('candidate/success/{userid}', 'RegistrationController@candidateProfileLogin')->name('candidate.login');
    $frontRoute->post('uploadcv', 'RegistrationController@uploadCv')->name('uploadcv');

    //end profile route step
    $frontRoute->get('add-establishment', 'EstablishmentController@index')->name('add-establishment');
    $frontRoute->post('store-establishment', 'EstablishmentController@store')->name('store-establishment');

    $frontRoute->post('user-auth', 'HomeController@userLogin')->name('user-auth');
    $frontRoute->post('manager/store', 'ManagerController@storeData')->name('manager.store');
    $frontRoute->get('manager', 'ManagerController@index')->name('manager');
    // $frontRoute->get('registration', 'RegistrationController@index')->name('registration');
    // $frontRoute->post('registration', 'RegistrationController@saveRegistration')->name('registration.save');
    $frontRoute->post('contact-us', 'ContactUsController@storeContact')->name('contact-us');


    $frontRoute->get('addjob/{id}', 'JobController@index')->name('addjob');
    $frontRoute->post('/email', 'JobController@emailunique');
    $frontRoute->post('addorupdatejob/{id}', 'JobController@addOrUpdateJob')->name('addorupdatejob');
    $frontRoute->get('joblist/{id}', 'JobController@showJob')->name('joblist');
    $frontRoute->post('holdJobData', 'JobController@holdJobData')->name('holdJobData');
    $frontRoute->get('users/restore/{id}', 'JobController@restoreUser')->name('users.restore');



    $frontRoute->get('editjob/{id}', 'JobController@editJob')->name('editjob');
    $frontRoute->delete('destroy/{id}', 'JobController@destroy')->name('destroy');
    $frontRoute->get('see-applicants/{id}', 'JobController@viewApplcants')->name('see-applicants');
    $frontRoute->get('edit-applicants/{id}', 'JobController@viewApplcants')->name('edit-applicants');
    $frontRoute->get('find-candidate', 'JobController@showAllCandidate')->name('showallcandidate');
    $frontRoute->get('candidate-filter-data','JobController@candidateData')->name('candidate.data');

    $frontRoute->post('getAjaxSkill', 'HomeController@getAjaxSkill')->name('getAjaxSkill');

    $frontRoute->get('establishment-dashborad', 'EstablishmentController@dashborad')->name('establishment-dashborad');
    $frontRoute->post('send-forgot-password-mail', 'HomeController@forgotPassword')->name('send-forgot-password-mail');
    $frontRoute->get('forgotpassword-user/{email}', 'HomeController@resetPassword')->name('forgotpassword-user');
    $frontRoute->post('user-reset-password','HomeController@updatePassword')->name('user-reset-password');
    $frontRoute->get('abouts-us', 'HomeController@aboutUs')->name('about-us');
});

Route::middleware(['auth:web'])->group(function ($route) {
    $route->group(['namespace' => 'App\Http\Controllers\Frontend'], function ($frontRoute) {

        $frontRoute->get('manager-profile', 'ManagerController@profile')->name('profile');
        $frontRoute->post('update-profile', 'ManagerController@updateProfile')->name('update-profile');
        $frontRoute->get('account-setting', 'ManagerController@accountSetting')->name('account-setting');
        $frontRoute->post('update-password', 'ManagerController@updatePassowrd')->name('update-password');
        $frontRoute->post('update-email', 'ManagerController@updateEmail')->name('update-email');
        $frontRoute->post('update-notifications-flag', 'ManagerController@updateNotificationsFlag')->name('update-notifications-flag');
        $frontRoute->post('update-delete-flag', 'ManagerController@updateDeleteAccountFlag')->name('update-delete-flag');
        $frontRoute->get('manager-message', 'ManagerController@chatIndex')->name('manager-message');
        $frontRoute->get('manager-message-list-ajax', 'ManagerController@messageListAjax')->name('manager-message-list-ajax');

        $frontRoute->get('add-establishment', 'EstablishmentController@index')->name('add-establishment');
        $frontRoute->post('store-establishment', 'EstablishmentController@store')->name('store-establishment');
        $frontRoute->get('view-establishment-account/{id}', 'EstablishmentController@show')->name('view-establishment-account');
        $frontRoute->get('edit-establishment/{id}', 'EstablishmentController@edit')->name('edit-establishment');
        $frontRoute->post('update-establishment/{id}', 'EstablishmentController@update')->name('update-establishment');
        $frontRoute->post('upload-image', 'EstablishmentController@uploadImage')->name('upload-image');
        $frontRoute->post('upload-cv', 'EstablishmentController@uploadCv')->name('upload-cv');
        $frontRoute->post('remove-image', 'EstablishmentController@removeImage')->name('remove-image');

        $frontRoute->get('mycandidate-profile', 'CandidateController@index')->name('mycandidate-profile');
        $frontRoute->get('candidate-profile-edit', 'CandidateController@edit')->name('candidate-profile-edit');
        $frontRoute->post('update-candidate-profile', 'CandidateController@update')->name('update-candidate-profile');
        $frontRoute->get('candidate-message', 'CandidateController@chatIndex')->name('candidate-message');
        $frontRoute->get('candidate-message-list-ajax', 'CandidateController@messageListAjax')->name('candidate-message-list-ajax');
        $frontRoute->get('last-mesage', 'CandidateController@lastMessageCheck')->name('last-mesage');
        $frontRoute->get('candidate-details/{id}', 'CandidateController@showCandidateDetails')->name('candidate-details');

        $frontRoute->post('candidate-sendmessage', 'CandidateController@sendmessage')->name('candidate-sendmessage');
        $frontRoute->post('user/logout', 'HomeController@logout')->name('user-logout');
        $frontRoute->any('search-job', 'SearchAdController@index')->name('searchjob');
        $frontRoute->post('store-jobType', 'SearchAdController@store')->name('store-jobType');
        $frontRoute->post('getDocumentName', 'SearchAdController@getDocumentName')->name('getDocumentName');
        $frontRoute->post('store-savedjobs', 'SearchAdController@insertPosts')->name('store-savedjobs');
        $frontRoute->get('seeJob', 'SearchAdController@showJob')->name('seeJob');
        $frontRoute->get('details-job/{id}', 'SearchAdController@showJob')->name('details-job');
        $frontRoute->get('details-company/{id}', 'SearchAdController@showCompany')->name('details-company');
        $frontRoute->post('accept-applicants', 'JobController@storeApplicants')->name('acceptJobDetails');
        $frontRoute->get('establishment-portfolio-candidate/{id}', 'JobController@candidatePortfolio')->name('candidatePortfolio');
        $frontRoute->get('get_ajax_data/{id}', 'SearchAdController@get_ajax_data')->name('get_ajax_data');
        $frontRoute->get('job-details/{id}', 'SearchAdController@jobDetails')->name('job-details');
    });
});
