<x-layout>
    <x-slot:heading>
        {{ $theater->name }}
    </x-slot:heading>

    <div class="p-6 bg-white rounded-lg shadow-md">
        <!-- Poster Section -->
        @if($theater->poster)
            <div class="mb-6">
                <img src="{{ asset('images/theater/' . $theater->poster) }}" alt="{{ $theater->name }} Poster" class="w-full h-auto rounded-md shadow-sm">
            </div>
        @else
            <div class="mb-6">
                <p class="text-gray-500">No poster available</p>
            </div>
        @endif

        <!-- Theater Details Section -->
        <div class="space-y-4">
            <p class="text-lg font-semibold">Name: <span class="font-normal">{{ $theater->name }}</span></p>
            <p>{{ $theater->threeD ? 'This theater has 3D' : 'This theater does not have 3D' }}</p>
            <p>{{ $theater->dolby ? 'This theater has Dolby Audio' : 'This theater does not have Dolby Audio' }}</p>
        </div>

        <!-- Showtimes Section -->
        <div class="mt-4 space-y-2">
            @foreach ($showtimes as $showtime)
                <p>{{ $showtime->theater_id->name }}</p>
            @endforeach
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <!-- "Remove" button -->
            <form id="delete-form-{{ $theater->id }}" action="{{ route('theaters.destroy', $theater->id) }}" method="POST" class="hidden">
                @csrf
                @method('DELETE')
            </form>
            <a href="#" data-form-id="delete-form-{{ $theater->id }}" class="text-sm font-semibold leading-6 text-red-600 hover:text-red-800 delete-button">
                Remove
            </a>

            <!-- "Edit" button -->
            <a href="{{ route('theaters.edit', $theater->id) }}" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Edit
            </a>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.delete-button').forEach(button => {
                    button.addEventListener('click', (e) => {
                        e.preventDefault();
                        const formId = button.getAttribute('data-form-id');
                        if (confirm('Are you sure you want to remove this theater?')) {
                            document.getElementById(formId).submit();
                        }
                    });
                });
            });
        </script>
    @endpush
</x-layout>
