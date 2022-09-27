@foreach ($jobs as $job )
<hr>
<div class='my-4 flex flex-row justify-between items-center px-10'>
    <div>
        <p class="text-2xl py-4 font-extrabold">{{$job->title}}</p>
        <p class="text-lg py-2">{{$job->company}}</p>
        <p class="text-sm py-2">Last Date: {{$job->last_date->format('d/m/y')}} </p>
    </div>
    <div class="flex flex-row gap-8">
        <a href="">See candidates</a>
        <a href="">Edit offer</a>
        <a href="">Delete offer</a>
    </div>
</div>
@endforeach
