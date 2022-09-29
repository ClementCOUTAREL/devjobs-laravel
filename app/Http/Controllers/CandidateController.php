<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index(Job $job)
    {

        $candidates = $job->candidates()->get();

        return view('candidates.index',[
            'candidates' => $candidates,
            'job' => $job
        ]);
    }
}