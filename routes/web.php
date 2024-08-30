<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuTypeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SectionSettingController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'FrontendController@index')->name('home');
    Route::get('/about', [FrontendController::class, 'about']);
    Route::get('/service', [FrontendController::class, 'services']);
    Route::get('/policy', [FrontendController::class, 'policy']);

    Route::get('/project', 'FrontendController@projects');
    Route::get('/project/{slug}', [FrontendController::class, 'singleProject'])->name('project.show');
    Route::get('/blog', 'FrontendController@blog');
    Route::get('/blog/{slug}', [FrontendController::class, 'singleBlog'])->name('blog.show');
    Route::get('/team/{slug}', [FrontendController::class, 'singleTeam'])->name('team.show');
    Route::get('/service/{slug}', [FrontendController::class, 'singleService'])->name('service.show');
    Route::get('/contact', function () {
        return view('frontend.contact');
    })->name('contact');
    Route::post('/send-email', 'FrontendController@sendEmail')->name('sendEmail');
    Route::post('/subscribe', 'FrontendController@subscribe')->name('subscribe.store');
    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        // Route::get('/projects/index', 'ProjectController@index')->name('projects');
        // Route::get('/projects/create', 'ProjectController@create')->name('projects.create');
        // Route::post('/projects/store', 'ProjectController@store')->name('projects.store');
        // Route::delete('/projects/destroy', 'ProjectController@store')->name('projects.destroy');
        Route::post('/save/image', 'ImageController@store');
        // Route::get('categories', [CategoryController::class, 'index']);
        // Route::post('categories', [CategoryController::class, 'store']);
        // Route::put('categories/{category}', [CategoryController::class, 'update']);
        // Route::delete('categories/{category}', [CategoryController::class, 'destroy']);
        Route::resource('section-settings', SectionSettingController::class);
        Route::resource('projects', ProjectController::class);
        Route::post('project/update/{id}', [ProjectController::class, 'update'])->name('projects.upda');
        Route::post('/project/galllery/image/{id}', [ProjectController::class, 'removeImage']);
        Route::post('video/update/{id}', [ProjectController::class, 'videoUpdate']);
        Route::delete('video/destroy/{id}', [ProjectController::class, 'videoDelete']);
        Route::post('timeline/update/{id}', [ProjectController::class, 'timelineUpdate']);
        Route::delete('timeline/destroy/{id}', [ProjectController::class, 'timelineDelete']);
        Route::resource('categories', CategoryController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('pages', PageController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('teams', TeamController::class);
        Route::resource('footers', FooterController::class);
        Route::resource('headers', HeaderController::class);
        Route::resource('menus', MenuController::class);
        Route::resource('policies', PolicyController::class);
        Route::resource('brands', BrandController::class);
        Route::get('/menus/get/{id}', [MenuController::class, 'getMenu']);
        Route::put('/menus/update/{id}', [MenuController::class, 'Update']);
        Route::resource('menutypes', MenuTypeController::class);
        // Route::post('/sliders/store', 'SliderController@store')->name('saveSlider');
    });
});
