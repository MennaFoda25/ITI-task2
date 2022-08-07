<!-- <?php

 use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name ('welcome');

// Route::get ('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users',function(){
    dd('ok');
} )->name('users.index');
Route::get ('/users/{id}/create',[UserController::class,'create'])->name('users.create');

Route::get ('/users/{id}/edit',[UserController::class,'edit'])->name('users.edit');

Route::get ('/users/{id}',[UserController::class,'show'])->where('id','[0-9]+')->name('users.show');

Route::put('/users/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('/users/{id}',[UserController::class,'destroy'])->name('users.destroy');

Route::post('/users',[UserController::class,'store'])->name('users.store');

Route:: fallback(function(){
return view('posts.index');
});