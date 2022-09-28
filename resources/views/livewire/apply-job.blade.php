<div>
    @if(session()->has('message'))
    <p>{{session('message')}}</p>
    @endif
    <h3>Apply for the job</h3>
    <form wire:submit.prevent='submit'>
        <input type="submit" value="postulate" class="cursor-pointer">
    </form>
</div>
