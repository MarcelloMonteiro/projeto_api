<?php

use App\Http\Controllers\RegisterController;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('projeto')->group(function () {
    Route::post('register', [RegisterController::class, 'upload'])->name('register');
    Route::get('seach', function (Request $request) {

        $query = Register::query();

        if ($request->has('id')) {
            $query->where('id', 'LIKE', '%' . $request->id . '%');
        }


        if ($request->has('email')) {
            $query->where('email', '=', $request->email);
        }

        $seach = $query->paginate();

        return $seach;
    });

    Route::get('/', function () {
        return view('create');
    });
    Route::get('/success', function () {
        return view('success');
    });
});
