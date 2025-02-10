<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutTeamController;
use App\Http\Controllers\Admin\CandidantController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\SuperAdminController;
use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\Page\MainController;
use App\Http\Controllers\TranslationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

//Admin panel login register start
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
//Admin panel login register end


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/',[SuperAdminController::class, 'superAdmin'])->name('superAdmin.dashboard');
    Route::get('/admin',[AdminController::class, 'admin'])->name('admin.dashboard');
    Route::resource('products', ProductController::class);
    Route::resource('news', NewsController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('about-teams', AboutTeamController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('vacancies', VacancyController::class);
    Route::resource('candidants', CandidantController::class);
    Route::resource('translations', TranslationController::class);
});

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/about-team', [MainController::class, 'aboutTeam'])->name('about.team');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/news/{id}', [MainController::class, 'singleNews'])->name('single.news');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/products/{id}', [MainController::class, 'singleProduct'])->name('single.product');
Route::get('/vacancy', [MainController::class, 'vacancy'])->name('vacancy');
Route::get('/candidant/{vacancy_id}', [MainController::class, 'candidant'])->name('candidant');

//order
Route::get('/admin/orders', [OrderController::class, 'index'])->name('orders.index');
Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
Route::get('/admin/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
Route::patch('/admin/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
Route::post('/orders/{order}/update-status', [OrderController::class,'updateStatus'])->name('orders.update-status');

Route::get('locale/{lang}',[LanguageController::class, 'setLocale']);


// Tarjimalarni ko‘rsatish
Route::get('/admin/lang', function () {
    $langs = ['uz', 'ru', 'en'];
    $translations = [];

    foreach ($langs as $lang) {
        $path = base_path("lang/{$lang}/messages.php");
        $translations[$lang] = File::exists($path) ? include $path : [];
    }

    return view('admin.translations.index', compact('translations', 'langs'));
});

Route::post('/admin/lang/update', [TranslationController::class, 'update'])->name('admin.lang.update');
