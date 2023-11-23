<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/form-submit', function (Request $request) {
    $email = $request->email;
    $response = [];
    if ($email == "john@test.com") {
        $response['status'] = "success";
        $response['message'] = "Form submitted successfully.";
        $response['email'] = $request->email;
    } else {
        $response['status'] = "failed";
        $response['message'] = "Form submission failed.";
    }
    return response()->json($response);
});

Route::get('/user-agent', function (Request $request) {
    $userAgent = $request->header('User-Agent');
    return $userAgent;
});

