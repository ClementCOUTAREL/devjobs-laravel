<div>
    <div class="bg-slate-100 p-8">
        <h3 class="text-3xl font-bold my-2">{{$job->title}}</h3>
        <h4 class="text-xl text-gray-600 my-1" >Company: {{$job->company}}</h4>
        <p class="text-xl text-gray-600 my-1">Last day to apply: {{$job->last_date->toFormattedDateString('Y-m-d')}}</p>
        <p class="text-xl text-gray-600 my-1">Category: {{$job->category->category}}</p> 
        <p class="text-xl text-gray-600 my-1">Salary: {{$job->salary->salary}}</p>
    </div>
    <div class="p-8">
        <p class="text-2xl font-bold mb-4">Description:</p>
        <p class="text-lg">{{$job->description}}</p>
    </div>
    
    @guest
        <div class="mt-8 bg-slate-100 p-8">
            <p class="text-xl" >Do you want to apply for this offer ? <a href="{{route('register')}}" class="text-blue-700 cursor-pointer" >Just click on that link to create an account</a> </p>    
        </div>
    @endguest

    @cannot('create', App\Models\Job::class)
        <livewire:apply-job :job=$job />
    @endcannot
</div>
