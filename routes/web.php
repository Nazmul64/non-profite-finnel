<?php declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datashow', [FrontendController::class, 'datashow'])->name('datashow');
Route::get('/datainsert', [FrontendController::class, 'datainsert'])->name('datainsert');
Route::post('datainsert/intodata', [FrontendController::class, 'datainsertintodata'])->name('datainsertintodata');
Route::get('usermessages/delete/{id}', [FrontendController::class, 'usermessagesdelete'])->name('usermessagesdelete');
Route::get('force/delete/{id}', [FrontendController::class, 'forcedelete'])->name('forcedelete');
Route::get('restore/{id}', [FrontendController::class, 'restore'])->name('restore');
Route::get('messages/details/{id}', [FrontendController::class, 'messagesdetails'])->name('messagesdetails ');

// Profile view group Start
Route::middleware(['auth'])->group(function () {
   Route::get('profileview', [ProfileController::class, 'profileview'])->name('profileview.view');
   Route::post('profileview/changename', [ProfileController::class, 'changename'])->name('profileview.changename');
   Route::post('profileview/changepassword', [ProfileController::class, 'changepassword'])->name('profileview.changepassword');
});

//End Profile view group
Route::get('/profile', [FrontendController::class, 'messagesdetails'])->name('messagesdetails ');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
