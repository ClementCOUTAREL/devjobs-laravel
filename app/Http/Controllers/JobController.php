<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Salary;
use App\Models\Category;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Job::class);
        $jobs = Job::where('user_id', auth()->user()->id)->get();
        
        return view('jobs.index',[
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $this->authorize('create', Job::class);
        $categories = Category::all();
        $salaries = Salary::all();
        
        return view('jobs.create', [
            'salaries'=> $salaries,
            'categories'=> $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {

        $this->authorize('update', $job);

        $categories = Category::all();
        $salaries = Salary::all();

        return view('jobs.edit', [
            'salaries'=> $salaries,
            'categories'=> $categories,
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}