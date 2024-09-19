<x-layout>
    <!-- Header Section -->
    <x-slot:heading>
        Showtimes
    </x-slot:heading>

    <div class="space-y-2">
    <div class="flex justify-end">
        <!-- Add Showtime Button -->
                <a href="{{ route('showtimes.create') }}" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500">Add Showtime</a>
            </div>
    <!-- Showtimes List -->
    <div class="mt-10">
        <div class="border-b border-gray-900/10 pb-12">

            

            <!-- Table of Showtimes -->
            <div class="mt-6 overflow-x-auto">
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Movie</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Theater</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Showtime Hour</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Show Date</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($showtimes as $showtime)
                        <tr>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $showtime->movie->title }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $showtime->theater->name }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $showtime->show_hour }}</td>
                            <td class="px-6 py-4 text-sm text-gray-900">{{ $showtime->show_day }}</td>
                            <td class="px-6 py-4 text-right text-sm font-medium">
                                <a href="{{ route('showtimes.show', $showtime->id) }}" class="text-indigo-600 hover:text-indigo-900">View</a>
                                <a href="{{ route('showtimes.edit', $showtime->id) }}" class="ml-4 text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('showtimes.destroy', $showtime->id) }}" method="POST" class="inline-block ml-4" onsubmit="return confirm('Are you sure you want to delete this showtime?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- No showtimes message -->
            @if($showtimes->isEmpty())
                <p class="mt-4 text-sm text-gray-500">No showtimes available.</p>
            @endif
        </div>
    </div>
</div>
</x-layout>
