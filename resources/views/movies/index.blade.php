<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    
    <div class="space-y-4">
        <!-- Button to add a new movie -->
        <div class="flex justify-between items-center">
            <div>
                <a href="/movie/create" class="bg-black hover:bg-black text-white font-bold py-2 px-4 rounded">
                    Add New Movie
                </a>
            </div>
            <!-- Sorting Dropdown -->
            <div class="flex items-center">
                <label for="sort_by" class="text-sm font-medium text-gray-700">Sort by:</label>
                <select id="sort_by" onchange="sortMovies(this.value, document.getElementById('order_by').value)" class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option value="title" {{ request('sort_by') == 'title' ? 'selected' : '' }}>Title</option>
                    <option value="director" {{ request('sort_by') == 'director' ? 'selected' : '' }}>Director</option>
                </select>

                <label for="order_by" class="ml-4 text-sm font-medium text-gray-700">Order:</label>
                <select id="order_by" onchange="sortMovies(document.getElementById('sort_by').value, this.value)" class="ml-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    <option value="asc" {{ request('order_by') == 'asc' ? 'selected' : '' }}>Ascending</option>
                    <option value="desc" {{ request('order_by') == 'desc' ? 'selected' : '' }}>Descending</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            @foreach ($movies as $movie)
            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="{{ asset('images/movie/' . $movie['poster']) }}" alt="Poster for {{$movie['name']}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex flex-col justify-between h-32">
                    <div class="flex-1">
                        <h3 class="text-sm text-gray-700 truncate">
                            <a href="/movie/{{$movie['id']}}">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong class="block">{{$movie['title']}}</strong>
                            </a>
                        </h3>
                        <p class="mt-1 text-sm text-gray-500 truncate">Directed by {{$movie['director']}}</p>
                        <p class="mt-1 text-sm text-gray-500">Release Date: {{ \Carbon\Carbon::parse($movie['release_date'])->format('Y-m-d') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div>
            {{ $movies->links() }}
        </div>
    </div>

    <script>
        function sortMovies(sortBy, orderBy) {
            window.location.href = '?sort_by=' + sortBy + '&order_by=' + orderBy; // Redirect to the same page with sorting and ordering parameters
        }
    </script>
</x-layout>
