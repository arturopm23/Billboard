<x-layout>
  <x-slot:heading>
      Add a movie
  </x-slot:heading>

<form method="POST" action="/movie" enctype="multipart/form-data">
@csrf
  <div>
    <div class="border-b border-gray-900/10 pb-12">
      <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new movie</h2>
      <p class="mt-1 text-sm leading-6 text-gray-600">Fill the film's record</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6">

        <div class="sm:col-span-3">
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
              <input type="text" name="title" id="title" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" required>
            </div>
          @error('title')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="director" class="block text-sm font-medium leading-6 text-gray-900">Director</label>
          <div class="mt-2">
            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
              <input type="text" name="director" id="director" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" required>
            </div>
            @error('director')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="protagonist" class="block text-sm font-medium leading-6 text-gray-900">Featured cast</label>
          <div class="mt-2">
            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
              <input type="text" name="protagonist" id="protagonist" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" required>
            </div>
            @error('protagonist')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Duration (in minutes)</label>
          <div class="mt-2">
            <div class="flex ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
              <input type="number" name="duration" id="duration" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" required>
            </div>
            @error('duration')
              <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>
        
        <div class="sm:col-span-3">
          <label for="release" class="block text-sm font-medium leading-6 text-gray-900">Release Date</label>
          <div class="mt-2">
            <div class="flex ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
              <input datepicker name="release" id="release" type="text" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" placeholder="📅 Select date" required>
            </div>
            @error('release')
              <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="genre" class="block text-sm font-medium leading-6 text-gray-900">Genre</label>
          <div class="mt-2">
            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
              <input type="text" name="genre" id="genre" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" required>
            </div>
            @error('genre')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
          </div>
        </div>
        
        <div class="col-span-full">
          <label for="synopsis" class="block text-sm font-medium leading-6 text-gray-900">Synopsis</label>
          <div class="mt-2">
            <textarea id="synopsis" name="synopsis" rows="3" class="block w-full border-0 py-1.5  px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required></textarea>
          </div>
          <p class="mt-3 text-sm leading-6 text-gray-600">Write a brief description of the movie.</p>
          @error('synopsis')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="col-span-full">
          <label for="poster" class="block mb-2 text-sm font-medium text-gray-900">Upload file</label>
          <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="poster_help" id="poster" name="poster" type="file">
          @error('poster')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
        </div>

      </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
    <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>
</form>
</x-layout>
