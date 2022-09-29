<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;
use App\Notifications\NewCandidate;

class ApplyJob extends Component
{

    public $job;
    public $message;
    public $isCandidate;
    
    public function mount()
    {
        $this->isCandidate = $this->job->isCandidate();
    }

    public function submit()
    {

        if($this->isCandidate){
            session()->flash('message', "You already applied for this job !!!");

            return redirect()->back();

        }
        
        $user_id = auth()->user()->id;

        $this->job->candidates()->create([
            'user_id' => $user_id,
        ]);

        $this->job->recruiter->notify(new NewCandidate($this->job->id, $this->job->title, auth()->user()->id));

        session()->flash('message', "You applied for this job !!!");

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.apply-job');
    }
}