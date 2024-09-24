<x-layout>
    <!-- Header Section -->
    <x-slot:heading>
        Edit Showtime
    </x-slot:heading>

    <!-- Showtime Edit Form -->
    <form method="POST" action="{{ route('showtimes.update', $showtime->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <!-- Form Header -->
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Showtime</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Update the details for the showtime below.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                <!-- Movie Selection Dropdown -->
                <div class="sm:col-span-3">
                    <label for="movie" class="block mb-2 text-sm font-medium text-gray-900">Select a Movie</label>
                    <select 
                        id="movie" 
                        name="movie_id" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required
                    >
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}" {{ $movie->id == $showtime->movie_id ? 'selected' : '' }}>
                            {{ $movie->title }}
                        </option>
                        @endforeach
                    </select>
                    @error('movie_id')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Theater Selection Dropdown -->
                <div class="sm:col-span-3">
                    <label for="theater" class="block mb-2 text-sm font-medium text-gray-900">Select a Theater</label>
                    <select 
                        id="theater" 
                        name="theater_id" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required
                    >
                        @foreach ($theaters as $theater)
                        <option value="{{ $theater->id }}" {{ $theater->id == $showtime->theater_id ? 'selected' : '' }}>
                            {{ $theater->name }}
                        </option>
                        @endforeach
                    </select>
                    @error('theater_id')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Showtime Hour Selection -->
                <div class="sm:col-span-3">
                    <label for="show_hour" class="block mb-2 text-sm font-medium text-gray-900">Select Showtime Hour</label>
                    <input 
                        type="time" 
                        id="show_hour" 
                        name="show_hour" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                        min="08:00" 
                        max="00:00" 
                        value="{{ old('show_hour', $showtime->show_hour) }}" 
                        required 
                    />
                    @error('show_hour')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Day Selection -->
                <div class="sm:col-span-3">
                    <label for="show_day" class="block mb-2 text-sm font-medium text-gray-900">Select a Day</label>
                    <input 
                        type="date" 
                        id="show_day" 
                        name="show_day" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                        value="{{ old('show_day', $showtime->show_day->format('Y-m-d')) }}" 
                        required
                    />
                    @error('show_day')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="{{ route('showtimes.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Save Changes
            </button>
        </div>
    </form>
</x-layout>
