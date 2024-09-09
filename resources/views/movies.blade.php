<x-layout>
    <x-slot:heading>
        Movies
    </x-slot:heading>
    
    <ul>
    @foreach ($movies as $movie)
        <li>
            <a href="/movie/{{$movie['id']}}" class="hover:underline">
            <strong>{{$movie['title']}}</strong>
            was directed by {{$movie['director']}}
        </li>
    @endforeach
    </ul>
</x-layout>
