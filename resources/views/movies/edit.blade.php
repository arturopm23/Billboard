<x-layout>
    <x-slot:heading>
        Edit a movie: {{ $movie->title }}
    </x-slot:heading>

    <form method="POST" action="/movie/{{ $movie->id }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div>
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">

                    <!-- Title Field -->
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
                                <input type="text"
                                    name="title"
                                    id="title"
                                    class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6"
                                    value="{{ $movie->title }}"  
                                    required>
                            </div>
                            @error('title')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Director Field -->
                    <div class="sm:col-span-3">
                        <label for="director" class="block text-sm font-medium leading-6 text-gray-900">Director</label>
                        <div class="mt-2">
                            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
                                <input type="text" name="director" id="director" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6" value="{{ $movie->director }}" required>
                            </div>
                            @error('director')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Featured Cast Field -->
                    <div class="sm:col-span-3">
                        <label for="protagonist" class="block text-sm font-medium leading-6 text-gray-900">Featured cast</label>
                        <div class="mt-2">
                            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
                                <input type="text" name="protagonist" id="protagonist" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6" value="{{ $movie->protagonist }}" required>
                            </div>
                            @error('protagonist')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Duration Field -->
                    <div class="sm:col-span-3">
                        <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Duration (in minutes)</label>
                        <div class="mt-2">
                            <div class="flex ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
                                <input type="text" name="duration" id="duration" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" value="{{ $movie->duration }}" required>
                            </div>
                            @error('duration')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Release Date Field -->
                    <div class="sm:col-span-3">
                        <label for="release" class="block text-sm font-medium leading-6 text-gray-900">Release Date</label>
                        <div class="mt-2">
                            <div class="flex ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
                                <!-- Display date in m/d/Y format -->
                                <input datepicker name="display_release" id="release" type="text" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" placeholder="📅 Select date" value="{{ \Carbon\Carbon::parse($movie->release)->format('m/d/Y') }}" required>
                            </div>
                            @error('release')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Hidden field to submit the correct Y-m-d format -->
                        <input type="hidden" name="release" id="release_hidden" value="{{ $movie->release }}">
                    </div>

                    <!-- Genre Field -->
                    <div class="sm:col-span-3">
                        <label for="genre" class="block text-sm font-medium leading-6 text-gray-900">Genre</label>
                        <div class="mt-2">
                            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="genre" id="genre" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" value="{{ $movie->genre }}" required>
                            </div>
                            @error('genre')
                            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Synopsis Field -->
                    <div class="col-span-full">
                        <label for="Synopsis" class="block text-sm font-medium leading-6 text-gray-900">Synopsis</label>
                        <div class="mt-2">
                            <textarea id="synopsis" name="synopsis" rows="3" class="block w-full border-0 py-1.5  px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>{{ $movie->synopsis }}</textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write a brief description of the movie.</p>
                        @error('synopsis')
                        <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Poster Upload Field -->
                    <div class="col-span-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="poster">Upload file</label>
                        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 " aria-describedby="poster_help" id="poster" name="poster" type="file">
                        @error('poster')
                        <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Form Buttons -->
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <a href="/movie/{{ $movie->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                    <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        // On form submit, convert the displayed date to Y-m-d format
        document.querySelector('form').addEventListener('submit', function(e) {
            const displayRelease = document.getElementById('release').value;
            const [month, day, year] = displayRelease.split('/');
            const formattedDate = `${year}-${month}-${day}`;
            document.getElementById('release_hidden').value = formattedDate;
        });
    </script>
</x-layout>
