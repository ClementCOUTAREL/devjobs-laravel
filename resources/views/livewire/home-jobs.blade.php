<div>
    <livewire:search-jobs />
    <h3 class="text-xl font-bold my-10">Jobs offers:</h3>
    @forelse ($jobs as $job)
        <div class="flex flex-row justify-between items-center my-4">
            <div>
                <hr>
                <h4 class="my-2" >{{$job->title}}</h4>
                <p>{{$job->company}}</p>
                <p>{{$job->category->category}}</p>
                <p>{{$job->salary->salary}}</p>
            </div>
            <div>
                <a href="{{route('offer.show', $job->id)}}" class="rounded bg-lime-400 hover:bg-lime-500 py-2 px-3" >See offer</a>
            </div>
        </div>
        {{$jobs->links()}}
    @empty
        <p>No job offers for now</p>
    @endforelse
</div>
