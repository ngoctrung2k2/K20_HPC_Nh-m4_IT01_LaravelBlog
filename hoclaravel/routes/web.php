<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Middleware;

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
//Route cơ bản (Basic routing)
Route::get('/ngoctrung', function () {
    return 'Nguyễn Ngọc Trung_IT01_K20';
});

Route::get('/', function () {
    return view('welcome');
});


//Route 
Route::get('test-route', function () {
    return view('welcome to HPC');
});

Route::get('masinhvien', function ($id) {
    return '20012030043' .$id;
});


Route::get('/home', function () {
    return view('home');
});

Route::get('user', function () {
    $user = new User();
    $allUsers = $user::all();
    dd($allUsers);
});


Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog-post', function () {
    return view('blog-post');
});Route::get('/blog-post2', function () {
    return view('blog-post2');
});Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});

//-----------------------------------------
//Route::get('/admin', [App\Http\Middleware\AdminMiddeware:: class]);

//Route::get('/admins', function () {
   // return view('admins');
//}) ->middleware('admins');
//admins
Route::prefix('adminx')->group(function(){
    Route::get('/', function(){
        return view('admins');
    });
    Route::get('/layouts', function(){
        return view('layouts-without-menu');
    });
    Route::get('/layouts-without-navbar', function(){
        return view('layouts-without-navbar');
    });
    Route::get('/layouts-container', function(){
        return view('layouts-container');
    });
    Route::get('/layouts-fluid', function(){
        return view('layouts-fluid');
    });
    Route::get('/layouts-blank', function(){
        return view('layouts-blank');
    });
    Route::get('/pages-account-settings-account', function(){
        return view('pages-account-settings-account');
    });
    Route::get('/pages-account-settings-notifications', function(){
        return view('pages-account-settings-notifications');
    });
    Route::get('/pages-account-settings-connections', function(){
        return view('pages-account-settings-connections');
    });
    Route::get('/auth-login-basic', function(){
        return view('auth-login-basic');
    });
    Route::get('/auth-register-basic', function(){
        return view('auth-register-basic');
    });
    Route::get('/auth-forgot-password-basic', function(){
        return view('auth-forgot-password-basic');
    });
    Route::get('/pages-misc-error', function(){
        return view('pages-misc-error');
    });
    Route::get('/pages-misc-under-maintenance', function(){
        return view('pages-misc-under-maintenance');
    });
    Route::get('/cards-basic', function(){
        return view('cards-basic');
    });
    Route::get('/ui-accordion', function(){
        return view('ui-accordion');
    });
    Route::get('/ui-alerts', function(){
        return view('ui-alerts');
    });
    Route::get('/ui-badges', function(){
        return view('ui-badges');
    });
    Route::get('/ui-buttons', function(){
        return view('ui-buttons');
    });
    Route::get('/ui-carousel', function(){
        return view('ui-carousel');
    });
    Route::get('/ui-collapse', function(){
        return view('ui-collapse');
    });
    Route::get('/ui-dropdowns', function(){
        return view('ui-dropdowns');
    });
    Route::get('/ui-footer', function(){
        return view('ui-footer');
    });
    Route::get('/ui-list-groups', function(){
        return view('ui-list-groups');
    });
    Route::get('/ui-modals', function(){
        return view('ui-modals');
    });
    Route::get('/ui-navbar', function(){
        return view('ui-navbar');
    });
    Route::get('/ui-offcanvas', function(){
        return view('ui-offcanvas');
    });
    Route::get('/ui-pagination-breadcrumbs', function(){
        return view('ui-pagination-breadcrumbs');
    });
    Route::get('/ui-progress', function(){
        return view('ui-progress');
    });
    Route::get('/ui-spinners', function(){
        return view('ui-spinners');
    });
    Route::get('/ui-tabs-pills', function(){
        return view('ui-tabs-pills');
    });
    Route::get('/ui-toasts', function(){
        return view('ui-toasts');
    });
    Route::get('/ui-tooltips-popovers', function(){
        return view('ui-tooltips-popovers');
    });
    Route::get('/ui-typography', function(){
        return view('ui-typography');
    });
    Route::get('/extended-ui-perfect-scrollbar', function(){
        return view('extended-ui-perfect-scrollbar');
    });
    Route::get('/extended-ui-text-divider', function(){
        return view('extended-ui-text-divider');
    });
    Route::get('/icons-boxicons', function(){
        return view('icons-boxicons');
    });
    Route::get('/forms-basic-inputs', function(){
        return view('forms-basic-inputs');
    });
    Route::get('/forms-input-groups', function(){
        return view('forms-input-groups');
    });
    Route::get('/form-layouts-vertical', function(){
        return view('form-layouts-vertical');
    });
    Route::get('/form-layouts-horizontal', function(){
        return view('form-layouts-horizontal');
    });
    Route::get('/tables-basic', function(){
        return view('tables-basic');
    });
    Route::get('/auth-login-basic', function(){
        return view('auth-login-basic');
    });
});