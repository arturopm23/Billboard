<x-layout>
    <!-- Header Section -->
    <x-slot:heading>
        Add a Showtime
    </x-slot:heading>

    <!-- Showtime Form -->
    <form method="POST" action="/showtime">
        @csrf

        <!-- Form Header -->
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Showtime</h2>
            <p class="mt-1 text-sm leading-6 text-gray-600">Fill in the details for the showtime below.</p>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">
                <!-- movie Selection Dropdown -->
                <div class="sm:col-span-3">
                    <label for="movie" class="block mb-2 text-sm font-medium text-gray-900">Select a movie</label>
                    <select 
                        id="movie" 
                        name="movie" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required
                    >
                        <option selected>Choose a movie</option>
                        @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Theater Selection Dropdown -->
                <div class="sm:col-span-3">
                    <label for="theater" class="block mb-2 text-sm font-medium text-gray-900">Select a Theater</label>
                    <select 
                        id="theater" 
                        name="theater" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required
                    >

                        <option selected>Choose a theater</option>
                        @foreach ($theaters as $theater)
                        <option value="{{ $theater->id }}">{{ $theater->name }}</option>
                        @endforeach
                    </select>
                    @error('theater')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
                </div>

                <!-- Showtime Hour Selection -->
                <div class="sm:col-span-3">
                    <label for="show_hour" class="block mb-2 text-sm font-medium text-gray-900">Select Showtime Hour</label>
                    <select 
                        id="show_hour" 
                        name="show_hour" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option selected>Choose an hour</option>
                        <option value="13:00">13:00</option>
                        <option value="16:00">16:00</option>
                        <option value="20:00">20:00</option>
                        <option value="23:00">23:00</option>
                    </select>
                    @error('show_hour')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
                </div>

                <!-- Day Selection -->
                <div class="sm:col-span-3">
                    <label for="day" class="block mb-2 text-sm font-medium text-gray-900">Select a Day</label>
                    <input 
                        type="date" 
                        id="show_date" 
                        name="day" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required/>
                </div>
                @error('show_date')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-layout>
