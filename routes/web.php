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
require __DIR__.'/auth.php';

Route::get('/', [App\Http\Controllers\Web\HomeController::class,'index'] )->name('home');
Route::get('/portfolio', [App\Http\Controllers\Web\PortfolioController::class,'index'] )->name('portfolio');
Route::get('/services', [App\Http\Controllers\Web\serviceController::class,'index'] )->name('services');
Route::get('/about', [App\Http\Controllers\Web\aboutController::class,'index'] )->name('about');
Route::get('/blog', [App\Http\Controllers\Web\blogController::class,'index'] )->name('blog');
Route::get('/fetch-Comments',[App\Http\Controllers\Web\CommentController::class,'php'] )->name('fetchComment');
Route::post('/comments',[App\Http\Controllers\Web\CommentController::class,'store'] )->name("comment.store");
Route::get('/blog/singleBlog/{id}', [App\Http\Controllers\Web\blogController::class,'show'] )->name('singleBlog');
Route::get('/services/singleService/{id}', [App\Http\Controllers\Web\serviceController::class,'show'] )->name('singleService');
Route::get('/portfolio/singlePortfolio/{id}', [App\Http\Controllers\Web\PortfolioController::class,'show'] )->name('singlePortfolio');
Route::post('/newsletter', [App\Http\Controllers\Web\HomeController::class,'newsletter'] )->name('newsletter');
Route::get('/contact', [App\Http\Controllers\Web\contactController::class,'index'] )->name('contact');
Route::post('/contact',[App\Http\Controllers\Web\contactController::class,'store'])->name('ContactForm');
Route::post('/store',[App\Http\Controllers\recordController::class,'store'])->name('sayHello');
//Route::post('/store', [App\Http\Controllers\FormController::class,'store'] )->name('form.store');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
    Route::resource('/main', App\Http\Controllers\Admin\MainController::class);
    Route::resource('/social', App\Http\Controllers\Admin\SocialController::class);
    Route::resource('/creative', App\Http\Controllers\Admin\CreativeController::class);
    Route::resource('/clients', App\Http\Controllers\Admin\ClientController::class);
    Route::resource('/services_section', App\Http\Controllers\Admin\ServicesSectionController::class);
    Route::resource('/services', App\Http\Controllers\Admin\ServiceController::class);
    Route::resource('/projects', App\Http\Controllers\Admin\ProjectsController::class);
    Route::resource('/feedbacks', App\Http\Controllers\Admin\FeedbackController::class);
    Route::resource('/blog', App\Http\Controllers\Admin\BlogController::class);
    Route::resource('/newsletter', App\Http\Controllers\Admin\NewsletterController::class);
    Route::resource('/about', App\Http\Controllers\Admin\AboutController::class);
    Route::resource('/aboutcards', App\Http\Controllers\Admin\AboutcardController::class);
    Route::resource('/team', App\Http\Controllers\Admin\TeamController::class);
    Route::resource('/portfolio', App\Http\Controllers\Admin\PortfolioController::class);
    Route::resource('/settings', App\Http\Controllers\Admin\SettingController::class);
    Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/destroy', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contact.destroy');


});

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar','pt'])) {
        abort(400);
    }
    Session()->put('locale', $locale);
    Session::get('locale');
    return redirect()->back();
})->name('lang');

Route::get('/clear-cache', function() {
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return "Cache is cleared";
})->name('clear.cache');

