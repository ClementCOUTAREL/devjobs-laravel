<form wire:submit.prevent='submit' class="" novalidate>
    <div>
        <x-input-label for="title" :value="__('Job title')"></x-input-label>
        <x-text-input 
        wire:model="title"
        id="title"
        :value="old('title')"
        required 
        autofocus
        class="w-full"></x-text-input>
    </div>
    <div>
        @error('title')
            <p class="block bg-red-400 py-2 px-3 text-lg my-4 rounded-lg">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label for="company" :value="__('Company')"></x-input-label>
        <x-text-input wire:model="company" id="company" :value="old('company')" required class="w-full"></x-text-input>
    </div>
    <div>
        @error('company')
        <p class="block bg-red-400 py-2 px-3 text-lg my-4 rounded-lg">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label for="category" :value="__('Category')"></x-input-label>
        <select 
        wire:model="category"
        id="category"
        class="w-1/3 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 mb-2"
        required>
            <option value=""><==   Select a category   ==></option>
            @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
    </div>
    <div>
        @error('category')
        <p class="block bg-red-400 py-2 px-3 text-lg my-4 rounded-lg">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label for="salary" :value="__('Salary')"></x-input-label>
        <select 
        wire:model="salary" 
        id="salary" 
        class="w-1/3 rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 mb-2"
        required>
            <option value="">
                <== Select a salary==>
            </option>
            @foreach ($salaries as $salary )
            <option value="{{$salary->id}}">{{$salary->salary}}</option>
            @endforeach
        </select>
    </div>
    <div>
        @error('salary')
        <p class="block bg-red-400 py-2 px-3 text-lg my-4 rounded-lg">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label
         for="last_date"
          :value="__('Last day to apply')"></x-input-label>
        <x-text-input 
        type="date"
        wire:model="last_date" 
        id="last_date" 
        :value="old('last_date')" 
        required
         class="w-1/3"></x-text-input>
    </div>
    <div>
        @error('last_date')
        <p class="block bg-red-400 py-2 px-3 text-lg my-4 rounded-lg">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label 
        for="description" 
        :value="__('Job description')"></x-input-label>
        <textarea 
        wire:model="description" 
        id="description" 
        required
        class="w-full min-h-fit"
        >{{old("description")}}</textarea>
    </div>
    <div>
        @error('description')
        <p class="block bg-red-400 py-2 px-3 text-lg my-4 rounded-lg">{{$message}}</p>
        @enderror
    </div>
    <div class="mt-8">
        <x-primary-button>Save job offer</x-primary-button>
    </div>
</form>
