<x-layout>
    <x-slot:heading>
        {{ $movie['title'] }}
    </x-slot:heading>
    <p>
        This movie is {{ $movie['duration'] }} long
    </p>
</x-layout>
