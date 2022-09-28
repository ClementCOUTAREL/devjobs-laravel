<div>
    @foreach ($jobs as $job )
    <hr>
    <div class='my-4 flex flex-row justify-between items-center px-10'>
        <div>
            <p class="text-2xl py-4 font-extrabold">{{$job->title}}</p>
            <p class="text-lg py-2">{{$job->company}}</p>
            <p class="text-sm py-2">Last Date: {{$job->last_date->format('d/m/y')}} </p>
        </div>
        <div class="flex flex-row gap-8">
            <a href="{{route('offer.show', $job->id)}}">
                <x-primary-button class="bg-black hover:bg-black">
                    See candidates
                </x-primary-button>
            </a>
            <a href="{{route('offer.edit', $job->id)}}">
                <x-primary-button class="">
                Edit offer
                </x-primary-button>
            </a>
                <x-primary-button wire:click="$emit('delete', {{$job->id}})" class="bg-red-500 hover:bg-red-600">
                Delete offer
                </x-primary-button>
        </div>
    </div>
    @endforeach
    <div class="mt-10">
        {{$jobs->links()}}
    </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        Livewire.on('delete', jobId => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emit('deleteJob', jobId)

                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    }
                }
            )
        })
    </script>
@endpush

