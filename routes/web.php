<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
// frontend home
Route::get('/', [HomeController::class,'homepage']);
Route::get('/curriculum', [HomeController::class,'curriculum']);
Route::get('/news', [HomeController::class,'news']);
Route::get('/gallery', [HomeController::class,'gallery']);
Route::get('/research', [HomeController::class,'research']);
Route::get('/notice', [HomeController::class,'notice']);
Route::get('/details/{id}', [HomeController::class,'noticedetails'])->name('noticeDetails');
Route::get('/details1', [HomeController::class,'noticedetails1']);
Route::get('/offices & stuff', [HomeController::class,'stuff']);
Route::get('/mission & vision', [HomeController::class,'mission']);
Route::get('/faculty', [HomeController::class,'faculty']);

Route::get('/returnHome', [HomeController::class,'returnHome']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//admin
Route::get('/post_page', [AdminController::class,'post_page']);
Route::POST('/add_faculty', [AdminController::class,'add_faculty']);
Route::POST('/update_faculty', [AdminController::class,'update_faculty']);
Route::get('/show_post', [AdminController::class,'show_post'])->name('faculty_list');
Route::get('/index', [AdminController::class,'index']);
Route::get('/delete/{id}', [AdminController::class,'delete']);
Route::get('/edit/{id}', [AdminController::class,'edit']);
Route::post('/update/{id}', [AdminController::class,'update']);
Route::get('/faculty_list', [AdminController::class,'faculty_list']);

//faculty
Route::get('/faculty_delete/{id}', [AdminController::class,'faculty_delete']);
Route::get('/faculty_edit/{id}', [AdminController::class,'faculty_edit']);
Route::post('/faculty_update/{id}', [AdminController::class,'faculty_update']);

//notice 
Route::get('admin/notice/', [AdminController::class,'noticeList'])->name('noticelist');
Route::get('admin/notice/create', [AdminController::class,'noticeCreate'])->name('notice_create');
Route::post('admin/notice/store', [AdminController::class,'noticeStore'])->name('notice_store');
Route::get('admin/notice/edit/{id}', [AdminController::class,'noticeEdit'])->name('notice_edit');
Route::post('admin/notice/update/{id}', [AdminController::class,'noticeUpdate'])->name('notice_update');
Route::get('admin/notice/delete/{id}', [AdminController::class,'noticeDelete'])->name('notice_delete');