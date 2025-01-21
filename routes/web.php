<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Jobs', function () {
    $job = Job::with('employer')->latest()->simplePaginate(4);
    return view('Jobs.index',['jobs'=>$job]);
});



Route::get('/Jobs/create', function(){
    return view('Jobs.create');
});

Route::get('/Jobs/{id}', function ($id) {
    $job = Job::find($id);

    if(!$job){
        abort(404);
    }
    return view('Jobs.show',['job'=>$job]);
});

Route::post('/Jobs',function(){

    request()->validate(
        [
            'title'=> ['required','min:3'],
            'salary'=> ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id'=> 1
        ]);
        return redirect('/Jobs');
});

Route::get('/Contact', function () {
    return view('Contact');
});
