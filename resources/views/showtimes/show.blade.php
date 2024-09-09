<x-layout>
    <!-- Header Section -->
    <x-slot:heading>
        Showtime Details
    </x-slot:heading>

    <!-- Showtime Details -->
    <div class="mt-10">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-lg font-semibold text-gray-900">Showtime Information</h2>

            <dl class="mt-4 space-y-6">
                <!-- Movie -->
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-900">Movie</dt>
                    <dd class="mt-1 text-sm text-gray-700">{{ $showtime->movie->title }}</dd>
                </div>

                <!-- Theater -->
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-900">Theater</dt>
                    <dd class="mt-1 text-sm text-gray-700">{{ $showtime->theater->name }}</dd>
                </div>

                <!-- Showtime Hour -->
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-900">Showtime Hour</dt>
                    <dd class="mt-1 text-sm text-gray-700">{{ $showtime->show_hour }}</dd>
                </div>

                <!-- Date -->
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-900">Show Date</dt>
                    <dd class="mt-1 text-sm text-gray-700">{{ $showtime->show_day }}</dd>
                </div>
            </dl>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center gap-x-4">
            <a href="{{ route('showtimes.edit', $showtime->id) }}" class="text-sm font-medium text-indigo-600 hover:underline">Edit</a>

            <form action="{{ route('showtimes.destroy', $showtime->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this showtime?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-sm font-medium text-red-600 hover:underline">Delete</button>
            </form>
        </div>
    </div>
</x-layout>
