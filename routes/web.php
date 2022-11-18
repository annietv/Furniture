<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\modelsController;
use App\Http\Controllers\sliderController;
use App\Http\Controllers\featureBannerController;
use App\Http\Controllers\teamController;
use App\Http\Controllers\editteamController;
use App\Http\Controllers\socialMediaController;
use App\Http\Controllers\mediaController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\statementController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\generalController;
use App\Http\Controllers\seoController;
use App\Http\Controllers\mailConttroller;
use App\Http\Controllers\productController;
use App\Http\Controllers\viewteamController;
use App\Http\Controllers\departmentController;
use App\Http\Controllers\MainAboutController;
use App\Http\Controllers\MainContactController;
use App\Http\Controllers\moredepartController;
use App\Http\Controllers\morelistingController;
use App\Http\Controllers\cashoutController;
use App\Http\Controllers\contactFormController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\contactDetailsController;
use App\Http\Controllers\congratContoller;

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
//     return view('welcome');
// });

Route::get('/', function(){
    return view('home.index');
})->name('home.index');
// Route::get('/', function () {
//     $users = DB::table('sliders')->select('id','title','postedBy', 'content')->get();
//     return view('home.index', compact('users'));
// });
// Route::get('/', function () {
//     $generals=DB::table('generals')->select('id','businessName','websiteName', 'countrys')->get();
//     return view('admin.page.general', compact('generals'));
// });


Route::get('/admin', function(){
    return view('admin.dashboard');
})->name('admin.dashboard');
Route::get('/admin/page/models',  [modelsController::class, 'models'])->name('models');
Route::post('/admin/page/models', [modelsController::class, 'process_models'])->name('models.process');
Route::get('/admin/page/slider', [sliderController::class, 'slider'])->name('slider');
Route::post('/admin/page/slider', [sliderController::class, 'process_slider'])->name('slider.process');
Route::get('/admin/views/viewslider', [sliderController::class, 'viewslider'])->name('viewslider');
Route::get('/admin/views/deleteslider/{id}', [sliderController::class, 'destroyslider'])->name('destroyslider');
Route::get('/admin/views/editslider/{id}', [sliderController::class, 'editslider'])->name('editslider');
Route::post('/admin/views/editslider/{id}', [sliderController::class, 'updateslider'])->name('updateslider');
Route::get('/admin/page/featurebanner', [featureBannerController::class, 'featurebanner'])->name('featurebanner');
Route::post('/admin/page/success', [successController::class, 'process_success'])->name('success.process');
Route::get('/admin/page/team', [teamController::class, 'team'])->name('team');
Route::get('/home/team', [teamController::class, 'mainteam'])->name('mainteam');
Route::get('/home/moreteam/{id}', [teamController::class, 'moreteam'])->name('moreteam');
Route::get('/admin/views/editteam/{id}', [editteamController::class, 'editteam'])->name('editteam');
Route::post('/admin/views/editteam/{id}', [editteamController::class, 'updateteam'])->name('updateteam');
Route::get('/admin/views/deleteteam/{id}', [editteamController::class, 'destroy'])->name('destroy');
Route::get('/admin/views/viewteam', [viewteamController::class, 'viewteams'])->name('viewteams');
Route::post('/admin/page/team', [teamController::class, 'process_team'])->name('team.process');
Route::get('/admin/page/socialMedia', [socialmediaController::class, 'socialMedia'])->name('socialMedia');
Route::post('/admin/page/socialMedia', [socialMediaController::class, 'process_social'])->name('social_process');
Route::get('/admin/page/media', [mediaController::class, 'media'])->name('media');
Route::get('/admin/page/about', [aboutController::class, 'about'])->name('about');
Route::post('/admin/page/about', [aboutController::class, 'process_about'])->name('about_process');
Route::get('/admin/page/statement', [statementController::class, 'statement'])->name('statement');
Route::post('/admin/page/statement', [statementController::class, 'process_statement'])->name('statement_process');
Route::get('/admin/page/terms', [termsController::class, 'terms'])->name('terms');
Route::get('/admin/page/general/', [generalController::class, 'general'])->name('general');
Route::post('/admin/page/general/', [generalController::class, 'update'])->name('general.process');
Route::get('/admin/page/seo', [seoController::class, 'seo'])->name('seo');
Route::post('/admin/page/seo', [seoController::class, 'process_seo'])->name('seo_process');
Route::get('/admin/page/mail', [mailConttroller::class, 'emails'])->name('emails');
Route::post('/admin/page/mail', [mailConttroller::class, 'process_mail'])->name('mail_process');
Route::get('/admin/products/product', [productController::class, 'product'])->name('product');
Route::get('/admin/products/viewproduct', [productController::class, 'viewproduct'])->name('viewproduct');
Route::post('/admin/products/product', [productController::class, 'process_product'])->name('product_process');
Route::get('/admin/products/editproduct/{id}', [productController::class, 'editproduct'])->name('editproduct');
Route::post('/admin/products/editproduct/{id}', [productController::class, 'update_product'])->name('update_product');
Route::get('/admin/products/deleteproduct/{id}', [productController::class, 'destroyproduct'])->name('destroyproduct');
Route::get('/admin/products/department/', [departmentController::class, 'department'])->name('department');
Route::post('/admin/products/department/', [departmentController::class, 'process_department'])->name('process_department');
Route::get('/admin/products/editdepartment/{id}', [departmentController::class, 'editdepartment'])->name('editdepartment');
Route::post('/admin/products/editdepartment/{id}', [departmentController::class, 'update_department'])->name('update_department');
Route::get('/admin/products/deletedepartment/{id}', [departmentController::class, 'destroydepartment'])->name('destroydepartment');
Route::get('/admin/products/viewdepartment/', [departmentController::class, 'viewdepartment'])->name('viewdepartment');
Route::get('/home/about', [MainAboutController::class, 'Mainabout'])->name('Mainabout');
Route::get('/home/contact', [MainContactController::class, 'contactus'])->name('contactus');
Route::get('/home/moredepart/{depart_name}', [moredepartController::class, 'moredepart'])->name('moredepart');
Route::get('/home/morelisting/{id}', [morelistingController::class, 'morelisting'])->name('morelisting');
Route::get('/home/cashout/{id}', [cashoutController::class, 'cashout'])->name('cashout');
Route::get('/home/cashout/', [cashoutController::class, 'backcashout'])->name('backcashout');
Route::get('/admin/order/newoder', [cashoutController::class, 'neworder'])->name('neworder');
Route::post('/home/cashout', [cashoutController::class, 'process_cash'])->name('process_cash');
Route::get('/home/contact', [contactFormController::class, 'contact'])->name('contact_form');
Route::get('/admin/page/contact', [contactFormController::class, 'viewcontact'])->name('viewcontact');
Route::post('/home/contact', [contactFormController::class, 'process_form'])->name('process_form');
Route::get('/admin/order/deleteorder/{id}', [cashoutController::class, 'destroyorder'])->name('destroyorder');
Route::get('/admin/payment/payment', [paymentController::class, 'payment'])->name('payment');
Route::get('/home/congrat', [congratContoller::class, 'congrat'])->name('congrat');
Route::post('/admin/payment/payment', [paymentController::class, 'process_payment'])->name('process_payment');
Route::get('/admin/page/contactdetails', [contactDetailsController::class, 'contactdetails'])->name('contactdetails');
Route::post('/admin/page/contactdetails', [contactDetailsController::class, 'process_contact_dteails'])->name('process_contact_dteails');Route::group(['middleware' => ['guest']], function() {
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});