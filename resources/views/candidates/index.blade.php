<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('See candidates') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session()->has('creation'))
            <div
                class='mb-4 rounded-lg bg-green-300 border-green-500 flex flex-row items-center justify-center py-8 px-8'>
                <p class="text-2xl">{{session('creation')}}</p>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl mb-6">Your candidates for : {{$job->title}} - {{$job->company}} </h2>
                    @forelse ($candidates as $candidate)
                    <hr>
                        <div class="my-4">
                            <h3>Name : {{$candidate->user->name}}</h3>
                            <p>Email : {{$candidate->user->email}}</p>
                            <p>Postulated : {{$candidate->created_at->diffForHumans()}}</p>
                        </div>
                    @empty
                        <p>No candidates for this job</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>