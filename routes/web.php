<!-- <?php

 use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\UserController ;
use App\Http\Controllers\PostController ;

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


//user
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

//                                        post
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/restore', [PostController::class, 'restore'])->name('posts.restore');

Route::fallback(function () {
    return '<h1>Something went wrong pleas try again</h1>';
    });
// Route::get('/', function () {
//     return view('welcome');
// })->name ('welcome');


// Route::get ('/users',[UserController::class,'index'])->name('users.index');

// Route::get ('/users/{id}/create',[UserController::class,'create'])->name('users.create');

// Route::get ('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');

// Route::get ('/users/{id}',[UserController::class,'show'])->where('id','[0-9]+')->name('users.show');

// Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');

// Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');

// Route::post('/users',[UserController::class,'store'])->name('users.store');


// Route:: fallback(function(){
// return view('posts.index');
// });