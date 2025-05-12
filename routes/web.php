<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AboutTeamController;
use App\Http\Controllers\Admin\CandidantController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\ValuesController;
use App\Http\Controllers\Admin\StrategyController;
use App\Http\Controllers\Admin\VacancyController;
use App\Http\Controllers\Admin\AnswerQuestionController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\auth\SuperAdminController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PrivacyPolicyController;
use App\Http\Controllers\PartnerRequestController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\auth\AdminController;
use App\Http\Controllers\Page\MainController;
use App\Http\Controllers\DownloadFileController;
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
    Route::resource('resumes', ResumeController::class);
    Route::patch('resumes/{id}/status', [ResumeController::class, 'updateStatus'])->name('resumes.updateStatus');
    Route::resource('missions', MissionController::class);
    Route::resource('values', ValuesController::class);
    Route::resource('strategy', StrategyController::class);
    Route::resource('partner-requests', PartnerRequestController::class);
    Route::patch('partner-requests/{id}/status', [PartnerRequestController::class, 'updateStatus'])->name('partner_requests.updateStatus');
    Route::resource('privacy', PrivacyPolicyController::class);
    Route::resource('partners', PartnerController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('about-teams', AboutTeamController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('vacancies', VacancyController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('candidants', CandidantController::class);
    Route::resource('translations', TranslationController::class);
    Route::resource('answer-questions', AnswerQuestionController::class);
    //order
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{id}/edit', [OrderController::class, 'edit'])->name('orders.edit');
    Route::patch('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');
    Route::post('/orders/{order}/update-status', [OrderController::class,'updateStatus'])->name('orders.update-status');
});
// Partnerlar Forma to'ldirishi
    Route::post('/partner-form', [PartnerRequestController::class, 'postStore'])->name('partner.postStore');

// end
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/about-team', [MainController::class, 'aboutTeam'])->name('about.team');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/news/{id}', [MainController::class, 'singleNews'])->name('single.news');
Route::get('/products', [MainController::class, 'products'])->name('products');
Route::get('/products/{id}', [MainController::class, 'singleProduct'])->name('single.product');
Route::get('/vacancy', [MainController::class, 'vacancy'])->name('vacancy');
Route::get('/vacancy/{id}', [MainController::class, 'singleVacancy'])->name('single.vacancy');
Route::get('/candidant/{vacancy_id}', [MainController::class, 'candidant'])->name('candidant');

Route::get('/documents', [MainController::class, 'documents'])->name('documents');
Route::get('/document/{id}', [MainController::class, 'singleDocument'])->name('single.document');



//kompaniya yo'nalishi
Route::get('/direction', [MainController::class, 'direction'])->name('company_direction');
Route::get('/cooperation', [MainController::class, 'cooperation'])->name('cooperation');
Route::get('/privacy_policy', [MainController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/resumes/apply', [ResumeController::class, 'create'])->name('resumes.apply');


Route::get('/admin/fayl',[DownloadFileController::class,'index'])->name('file.index');
Route::get('/documents/edit/{id}', [DownloadFileController::class, 'edit'])->name('documents.editFile');
Route::put('/file/update/{id}', [DownloadFileController::class, 'update'])->name('file.update');
Route::get('/documents/download/', [DownloadFileController::class, 'downloadFile'])->name('documents.downloadFile');



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
