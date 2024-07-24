<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    
    <div class="space-y-4">
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($movies as $movie)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="https://m.media-amazon.com/images/I/81rNSKJlQuL._AC_UF894,1000_QL80_.jpg" alt="Movie poster for {{$movie['title']}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="/movie/{{$movie['id']}}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong>{{$movie['title']}}</strong>
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500">Directed by {{$movie['director']}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $movies->links() }}
        </div>
    </div>
</x-layout>
