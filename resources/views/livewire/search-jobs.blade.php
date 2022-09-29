<div class="my-6 w-4/5 mx-auto">
   <form wire:submit.prevent='submit' class="flex flex-row gap-8 w-full">
    <div class="w-1/3">
        <x-input-label for="title" :value="__('Job title')" />
        <x-text-input
        wire:model='title'
        id="search"
        class="w-full "
        required />
    </div>
    <div class="w-1/3">
        <x-input-label for="category_id" :value="__('Job title')" />
        <select wire:model='category_id' id="category_id" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 mb-2" required>
            <option value="">Select a category</option> 
            @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->category}}</option>
            @endforeach
        </select>
    </div>
    <div class="w-1/3">
        <x-input-label for="salary_id" :value="__('Job title')" />
        <select wire:model='salary_id' id="salary_id" class="w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 py-2 px-3 mb-2" required>
            <option value="">Select a salary</option>
            @foreach ($salaries as $salary )
                <option value="{{$salary->id}}">{{$salary->salary}}</option>
            @endforeach
        </select>
    </div>
    <div class="flex items-center">
        <button type="submit" class="inline-flex items-center px-3 py-2 bg-lime-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-500 active:bg-lime-500 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150" >Search</button>
    </div>
   </form>
</div>
