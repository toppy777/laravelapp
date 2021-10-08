<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Blog;
use App\Models\Tag;

use App\Http\Resources\BlogCollection;
use App\Http\Resources\TagCollection;

use App\Http\Resources\BlogResource;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/tags', function() {
    return new TagCollection(Tag::all());
});
Route::post('/tags/create', [TagController::class, 'store']);
Route::put('/tags/update/{id}', [TagController::class, 'update']);
Route::delete('/tags/delete/{id}', [TagController::class, 'delete']);

Route::get('/blogs', function() {
    return Blog::with('tags')->get();
});
Route::post('/blogs/create', [BlogController::class, 'store']);
Route::put('/blogs/update/{id}', [BlogController::class, 'update']);
Route::delete('/blogs/delete/{id}', [BlogController::class, 'delete']);
