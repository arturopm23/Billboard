<x-layout>
    <!-- Header Section -->
    <x-slot:heading>
        Add a Showtime
    </x-slot:heading>

    @if($movies->isEmpty() || $theaters->isEmpty())
        <!-- No Movies or Theaters Warning -->
        <div class="mt-6">
            <p class="text-red-600 text-lg font-semibold">
                You can't create showtimes without available movies or theaters.
            </p>
            @if($movies->isEmpty())
                <p class="text-gray-600">No movies are available. Please add a movie first.</p>
            @endif
            @if($theaters->isEmpty())
                <p class="text-gray-600">No theaters are available. Please add a theater first.</p>
            @endif
            <!-- Back to Showtimes Button -->
            <a href="{{ route('showtimes.index') }}" class="mt-4 inline-block rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500">Back to Showtimes</a>
        </div>
    @else
        <!-- Showtime Form -->
        <form method="POST" action="{{ route('showtimes.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- Form Header -->
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Showtime</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Fill in the details for the showtime below.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                    <!-- Movie Selection Dropdown -->
                    <div class="sm:col-span-3">
                        <label for="movie" class="block mb-2 text-sm font-medium text-gray-900">Select a movie</label>
                        <select id="movie" name="movie_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option selected>Choose a movie</option>
                            @foreach ($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                            @endforeach
                        </select>
                        @error('movie_id')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Theater Selection Dropdown -->
                    <div class="sm:col-span-3">
                        <label for="theater" class="block mb-2 text-sm font-medium text-gray-900">Select a Theater</label>
                        <select id="theater" name="theater_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option selected>Choose a theater</option>
                            @foreach ($theaters as $theater)
                                <option value="{{ $theater->id }}">{{ $theater->name }}</option>
                            @endforeach
                        </select>
                        @error('theater_id')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Showtime Hour Selection -->
                    <div class="sm:col-span-3">
                        <label for="show_hour" class="block mb-2 text-sm font-medium text-black">Select the hour:</label>
                        <input type="time" id="show_hour" name="show_hour" class="bg-white border leading-none border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" min="08:00" max="00:00" value="09:00" required />
                        @error('show_hour')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Day Selection -->
                    <div class="sm:col-span-3">
                        <label for="show_day" class="block mb-2 text-sm font-medium text-gray-900">Select a Day</label>
                        <input type="date" id="show_day" name="show_day" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                        @error('show_day')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('showtimes.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    @endif
</x-layout>
