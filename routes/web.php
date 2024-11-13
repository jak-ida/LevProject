<?php

use App\Http\Controllers\PollingStationsController;
use App\Http\Controllers\UploadManager;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\PollingStation;
use App\Models\PollingDistricts;
use App\Models\Constituencies;
use App\Models\Countries;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/countries', function () {
    return view('countries', ['countries' => Countries::all()]);
        $country = Countries::all();
    return view('country', ['country' => $country]);
});

Route::get('/constituencies', function () {
    return view('constituencies', [
        'constituencies' => Constituencies::all()
    ]);
});

Route::get('/districts', function () {
    return view('districts', [
        'pollingDistricts' => PollingDistricts::all()
    ]);
});

Route::get('/stations', function () {
    return view('stations', [
        'pollingStations' => PollingStation::all()
    ]);
});
Route::get('/',[PollingStationsController::class,'home']);

Route::get('/index',[UploadManager::class,'upload'])->name("upload");
Route::post('/index',[UploadManager::class,'uploadCsv'])->name("uploadCsv");
