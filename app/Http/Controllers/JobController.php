<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        $job = Job::with('employer')->latest()->simplePaginate(4);
        return view('Jobs.index',['jobs'=>$job]);

    }
    public function show(Job $job){
        return view('Jobs.show',['job'=>$job]);
    }

    public function create(){
        return view('Jobs.create');
    }

    public function store(Job $job){
        request()->validate(
            [
                'title'=> ['required','min:3'],
                'salary'=> ['required'],
                'company'=> ['required','min:3'],
            ]);
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id'=> 1
        ]);
        return redirect('/jobs');

    }
    public function edit(Job $job){
        return view('Jobs.edit',['job'=>$job]);

    }
    public function update(Job $job){
        request()->validate([
            'title'=> ['required','min:3'],
            'salary'=> ['required'],
            'company'=> ['required','min:3'],
        ]);
        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);
        $job->employer->update([
            'name' => request('company')
        ]);

        return redirect("/jobs/" . $job->id);

    }
    public function destroy(Job $job){
        $job->delete();
        return redirect('/jobs');

    }
}
