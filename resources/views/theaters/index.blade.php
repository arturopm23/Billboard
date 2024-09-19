<x-layout>
    <x-slot:heading>
        Theaters
    </x-slot:heading>

    <div class="space-y-2">
        <!-- Button to add a new theater -->
        <div class="flex justify-end">
            <a href="/theater/create" class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded">
                Add New Theater
            </a>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-2 xl:gap-x-8">
            @foreach ($theaters as $theater)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="{{ asset('images/theater/' . $theater['poster']) }}" alt="Poster for {{$theater['name']}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="/theater/{{$theater['id']}}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong>{{$theater['name']}}</strong>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div>
            {{ $theaters->links() }}
        </div>
    </div>
</x-layout>