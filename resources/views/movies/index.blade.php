<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    
    <div class="space-y-4">
    @foreach ($movies as $movie)
            <a href="/movie/{{$movie['id']}}" class="hover:underline block px-4 py-6 border border-gray 200 rounded-lg">
            <strong>{{$movie['title']}}</strong>
            <div>
                Directed by {{$movie['director']}}
            </div>
            </a>
    @endforeach
        </div>
        <div>
            {{ $movies->links() }}
        </div>
</x-layout>
