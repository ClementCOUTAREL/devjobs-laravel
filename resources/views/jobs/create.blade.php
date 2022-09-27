<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create job offer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-4xl font-bold mb-8" >Create a new job offer</h2>
                    <livewire:create-job :categories=$categories :salaries=$salaries />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>