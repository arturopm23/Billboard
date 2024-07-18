<x-layout>
    <x-slot:heading>
        Theaters
    </x-slot:heading>
    
    <ul>
    @foreach ($theaters as $theater)
        <li>
            <a href="/theater/{{$theater['id']}}" class="hover:underline">
            <strong>{{$theater['name']}}</strong>
        </li>
    @endforeach
    </ul>
</x-layout>
