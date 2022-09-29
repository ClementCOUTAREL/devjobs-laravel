<?php

namespace App\Http\Livewire;

use App\Models\Job;
use Livewire\Component;

class HomeJobs extends Component
{
    public $title;
    public $salary_id;
    public $category_id;

    protected $listeners = ['search'=>'readData'];

    public function readData($title, $category_id, $salary_id)
    {
        $this->title = $title;
        $this->category_id = $category_id;
        $this->salary_id = $salary_id;
    }
    
    public function render()
    {
        $jobs = Job::when($this->title, function($query){
            $query->where('title', 'LIKE', '%' . $this->title . '%');
        })->when($this->category_id, function($query){
            $query->where('category_id',$this->category_id);
        })->when($this->salary_id, function($query){
            $query->where('salary_id',$this->salary_id);
        })->paginate(10);

        

        return view('livewire.home-jobs', [
            'jobs' => $jobs
        ]);
    }
}