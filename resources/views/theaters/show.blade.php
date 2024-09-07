<x-layout>
    <x-slot:heading>
        {{ $theater->name }}
    </x-slot:heading>
    <p>{{ $theater->name }}</p>
    <p>{{ $theater->{'threeD'} ? 'This theater has 3D' : 'This theater does not have 3D' }}</p>
    <p>{{ $theater->dolby  ? 'This theater has Dolby Audio' : 'This theater does not have Dolby Audio' }}</p>
    <p class="mt-6">
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/theater/{{ $theater->id }}/remove" class="text-sm font-semibold leading-6 text-gray-900">Remove</a>
      <a href="/theater/{{ $theater->id }}/edit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
    </div>
    </p>
</x-layout>
