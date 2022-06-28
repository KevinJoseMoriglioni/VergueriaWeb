<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

    Route::get('/',  [ClientsController::class, "Home"])->name('Web.HomeClients');
    Route::get('/pastelofre',  [ClientsController::class, "Productos"])->name('Web.ProductosClients');
    Route::get('/sucursal/{sucursal}',  [ClientsController::class, "Sucursal"])->name('Web.SucursalClients');
    Route::get('/eventos',  [ClientsController::class, "Eventos"])->name('Web.EventosClients');
    Route::get('/nosotros',  [ClientsController::class, "WhoWeAre"])->name('Web.WhoWeAreClients');
    Route::get('/abreTuFranquicia',  [ClientsController::class, "AbrirFranquicia"])->name('Web.FranquiciaClients');
    Route::get('/contacto',  [ClientsController::class, "Contacto"])->name('Web.ContactoClients');
    Route::get('/legal/{legal}',  [ClientsController::class, "Legal"])->name('Web.LegalClients');

    Route::get('/admin', [HomeController::class, 'Home'])->name('Web.HomeAdmins');
    Route::get('/home', [HomeController::class, 'Home'])->name('Web.HomeAdmins');

    Route::get('login', [LoginController::class, "showLoginForm"])->name('login');
    Route::post('login',[LoginController::class, "login"]);
    Route::post('logout',[LoginController::class, "logout"])->name('logout');

    Route::group(['middleware' => ['permission:AdminRoutes']], function () {
        Route::get('register', [RegisterController::class, "showRegistrationForm"])->name('register');
        Route::post('register', [RegisterController::class, "register"]);
    });


// // Password Reset Routes...
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
// Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
// Route::get('email/resend.
