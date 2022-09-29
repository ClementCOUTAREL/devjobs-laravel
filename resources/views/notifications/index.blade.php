<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifications') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-4xl font-bold mb-8">Notifications</h2>

                    @forelse ($notifications as $notification )
                    
                        <div class="p-5 border-gray-200">
                            <p>You have a new candidate:</p>
                            <span> {{$notification->data['title']}} </span>
                        </div>
                        <div>
                            <p>Sent:</p>
                            <span> {{$notification->created_at->diffForHumans()}}</span>
                        </div>
                        <div>
                            <a href="">See candidate</a>
                        </div>
                    @empty
                        <p class="text-center text-gray-700" >No new notifications</p>
                    @endforelse

                </div>
            </div>
        </div>
    </div>
</x-app-layout>