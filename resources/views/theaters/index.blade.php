<x-layout>
    <x-slot:heading>
        Theaters
    </x-slot:heading>
    
    <div class="space-y-4">
    @foreach ($theaters as $theater)
            <a href="/theater/{{$theater['id']}}" class="hover:underline block px-4 py-6 border border-gray 200 rounded-lg">
            <strong>{{$theater['name']}}</strong>
            </a>
    @endforeach
    </div>
    <div>
        {{ $theaters->links() }}
    </div>
</x-layout>

