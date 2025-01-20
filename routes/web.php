<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Jobs', function () {
    $job = Job::with('employer')->simplePaginate(4);
    return view('Jobs',['jobs'=>$job]);
});

Route::get('/Jobs/{id}', function ($id) {
    $job = Job::find($id);

    if(!$job){
        abort(404);
    }
    return view('Job',['job'=>$job]);
});

Route::get('/Contact', function () {
    return view('Contact');
});
