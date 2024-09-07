<x-layout>
    <x-slot:heading>
        {{ $movie->title }}
    </x-slot:heading>
    <p>This movie is {{ $movie->duration }} minutes long</p>
        <p><strong>Directed by</strong> {{ $movie->director }}</p>
        <p><strong>Featured cast:</strong> {{ $movie->protagonist }}</p>
        <p><strong>Synopsis:</strong> {{ $movie->synopsis }}</p>
        <p><strong>Release Date:</strong> {{ $movie->release }}</p>
        <p><strong>Genre:</strong> {{ $movie->genre }}</p>
    
    <p class="mt-6">
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/movie/{{ $movie->id }}/remove" class="text-sm font-semibold leading-6 text-gray-900">Remove</a>
      <a href="/movie/{{ $movie->id }}/edit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
    </div>
    </p>
</x-layout>
