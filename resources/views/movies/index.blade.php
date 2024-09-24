<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    
    <div class="space-y-4">
        <!-- Search form -->
        <form method="GET" action="/movies" class="flex justify-between">
            <input type="text" name="search" placeholder="Search movies..." class="border border-gray-300 rounded-md py-2 px-4 w-full mr-2" value="{{ request('search') }}">
            <button type="submit" class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded">Search</button>
        </form>

        <!-- Button to add a new movie -->
        <div class="flex justify-end">
            <a href="/movie/create" class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded">
                Add New Movie
            </a>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($movies as $movie)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="{{ asset('images/movie/' . $movie['poster']) }}" alt="Poster for {{$movie['name']}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex flex-col justify-between h-24">
                    <div class="flex-1">
                        <h3 class="text-sm text-gray-700 truncate">
                            <a href="/movie/{{$movie['id']}}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong class="block">{{$movie['title']}}</strong>
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 truncate">Directed by {{$movie['director']}}</p>
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
