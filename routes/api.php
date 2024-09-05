<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apis\BlogController;
use App\Http\Controllers\Apis\AuthController;
use App\Http\Controllers\Apis\CommonController;
use App\Http\Controllers\Apis\GalleryController;
use App\Http\Controllers\Apis\TestimonialController;
use App\Http\Controllers\Apis\JobController;
use App\Http\Controllers\Apis\ServiceController;
use App\Http\Controllers\Apis\TeamController;
use App\Http\Controllers\Apis\PartnerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [AuthController::class, 'login'])->name('app.login');
Route::post('verify-otp', [AuthController::class, 'verify_otp'])->name('app.verify-otp');

Route::get('blogs', [BlogController::class, 'index'])->name('api.blogs.index');
Route::get('blogs/categories', [BlogController::class, 'categories'])->name('api.blogs.categories');
Route::get('blogs/{slug}', [BlogController::class, 'view'])->name('api.blogs.view');

Route::get('gallery', [GalleryController::class, 'index'])->name('api.gallery.index');
Route::get('gallery/{slug}', [GalleryController::class, 'view'])->name('api.gallery.view');
Route::get('gallery/medias/{slug}', [GalleryController::class, 'medias'])->name('api.gallery.medias');

Route::get('testimonials/featured', [TestimonialController::class, 'featured'])->name('api.testimonials.featured');
Route::get('testimonials', [TestimonialController::class, 'index'])->name('api.testimonials');

Route::get('service', [ServiceController::class, 'index'])->name('api.service.index');
Route::get('service/featured', [ServiceController::class, 'featured'])->name('api.service.featured');
Route::get('service/{slug}', [ServiceController::class, 'view'])->name('api.service.view');

Route::get('team', [TeamController::class, 'index'])->name('api.team.index');
Route::get('team/featured', [TeamController::class, 'featured'])->name('api.team.featured');
Route::get('team/{slug}', [TeamController::class, 'view'])->name('api.team.view');

Route::get('partner', [PartnerController::class, 'index'])->name('api.partner.index');
Route::get('partner/featured', [PartnerController::class, 'featured'])->name('api.partner.featured');
Route::get('partner/{slug}', [PartnerController::class, 'view'])->name('api.partner.view');

Route::get('jobs', [JobController::class, 'index'])->name('api.jobs.index');
Route::post('jobs/apply', [JobController::class, 'apply'])->name('api.jobs.apply');

Route::get('menu/{position}', [CommonController::class, 'menu'])->name('api.menu');
Route::get('settings', [CommonController::class, 'settings'])->name('api.settings');
Route::get('page/{slug}', [CommonController::class, 'page'])->name('api.page');
Route::get('company-page/{slug}', [CommonController::class, 'company_page'])->name('api.company-page');
Route::get('faq', [CommonController::class, 'faq'])->name('api.faq');
Route::get('leads', [CommonController::class, 'leads'])->name('api.leads');
Route::get('leads/{id}', [CommonController::class, 'leads_view'])->name('api.leads_view');


Route::get('list-urls/{page}', [CommonController::class, 'list_urls'])->name('api.list-urls');

Route::post('contact/save', [CommonController::class, 'contact_save'])->name('contacts.save');
