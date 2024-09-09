<x-layout>
    <x-slot:heading>
        {{ $movie->title }}
    </x-slot:heading>

    <div class="p-6 bg-white rounded-lg shadow-md">
        <!-- Poster Section -->
        @if($movie->poster)
            <div class="mb-6">
                <img src="{{ asset('images/movie/' . $movie->poster) }}" alt="{{ $movie->title }} Poster" class="w-full h-auto rounded-md shadow-sm">
            </div>
        @else
            <div class="mb-6">
                <p class="text-gray-500">No poster available</p>
            </div>
        @endif

        <!-- Movie Details Section -->
        <div class="space-y-4">
            <p class="text-lg font-semibold">Duration: <span class="font-normal">{{ $movie->duration }} minutes</span></p>
            <p><strong class="font-medium">Directed by:</strong> {{ $movie->director }}</p>
            <p><strong class="font-medium">Featured cast:</strong> {{ $movie->protagonist }}</p>
            <p><strong class="font-medium">Synopsis:</strong>
                <span class="block mt-2 text-gray-800 break-words">{{ $movie->synopsis }}</span>
            </p>
            <p><strong class="font-medium">Release Date:</strong> {{ $movie->release }}</p>
            <p><strong class="font-medium">Genre:</strong> {{ $movie->genre }}</p>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <!-- "Remove" button -->
            <form id="delete-form-{{ $movie->id }}" action="/movie/{{ $movie->id }}/remove" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $movie->id }}').submit();" class="text-sm font-semibold leading-6 text-red-600 hover:text-red-800">
                Remove
            </a>

            <!-- "Edit" button -->
            <a href="/movie/{{ $movie->id }}/edit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Edit
            </a>
        </div>
    </div>
</x-layout>
