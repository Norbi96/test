<?php

use App\Http\Controllers\ActualProjects;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkerController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogViewController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductCategoryListController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobViewController;
use App\Http\Controllers\ActualProjectsController;
use App\Http\Controllers\LastProjectsViewController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;

use App\Mail\Mailables;
use Illuminate\Support\Facades\Mail;


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
    return view('starting.index');
});


Route::get('/testroute', function() {
    $name = "Funny Coder";

//The email sending is done using the to method on the Mail facade
    Mail::to('viktor.marton@gyapinet.hu')->send(new Mailables($name));
});


Route::get('test', function () {
    return view('test');
})->middleware(['auth', 'verified'])->name('test');


Route::view('social','social.index');



//munkáink
Route::view('fejlesztes','fejlesztes.index');
Route::view('uzemeltetes','uzemeltetes.index');
Route::view('IOT','IOT.index');
Route::view('factory','factory.index');
Route::view('erp','erp.index');
//

Route::view('elip','elip.index');
Route::view('ehaccp','ehaccp.index');

Route::view('igy_mukodunk','igy_mukodunk.index');


Route::view('team','team.index');

Route::view('o365','o365.index');

Route::view('aboutus','aboutus.index');


Route::view('gyartopartnereink','gyartopartnereink.index');


Route::resource('job', JobViewController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('productcategory', ProductCategoryController::class);
Route::resource('market', ProductCategoryListController::class);

Route::get('/products/{categoryId}/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{categoryId}', [ProductController::class, 'show'])->name('products.show');
Route::resource('products', ProductController::class);



Route::resource('blogies', BlogController::class);
Route::resource('job_controller', JobController::class);

Route::resource('actulies', ActualProjectsController::class);

Route::resource('workers', WorkerController::class);
Route::resource('companies', CompanyController::class);

Route::resource('blogdisplay', BlogViewController::class);
Route::get('/blogview/{id}', [BlogViewController::class, 'show'])->name('blogview.index');



Route::get('/settings/1', [SettingsController::class, 'show'])->name('settings.show');


Route::get('/contact', [SendEmailController::class, 'index']);
Route::post('/contact/send', [SendEmailController::class, 'send']);
Route::get('/contact/reload-captcha', [SendEmailController::class, 'reloadCaptcha']);




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
