<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class ShowJobs extends Component
{

    protected $listeners = ['deleteJob'];

    public function deleteJob(Job $job)
    {
        $job->delete();
    }

    public function render()
    {

        $jobs = Job::where('user_id', auth()->user()->id)->paginate(10);

        return view('livewire.show-jobs', ['jobs' => $jobs ]);
    }
}