<x-layout>
    <x-slot:heading>
        Add a theater
    </x-slot:heading>

<form method="POST" action="/movie">
  @csrf
    <div>
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new theater</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">Fill the theater's record</p>
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-3 sm:grid-cols-6"></div>

        <div class="sm:col-span-3">
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Theater's name</label>
          <div class="mt-2">
            <div class="flex rounded-md ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">                
              <input type="text" name="name" id="name" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset  sm:text-sm sm:leading-6" required>
            </div>
            @error('name')
            <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <div class="sm:col-span-1 pt-6">
          <input id="3d-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" required>
          <label for="3d-checkbox" class="ms-2 text-sm font-medium text-gray-900">3D</label>
          @error('3d')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
      </div>

      <div class="sm:col-span-1">
          <input dolby id="dolby" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500" required>
          <label for="dolby" class="ms-2 text-sm font-medium text-gray-900">Dolby</label>
          @error('dolby')
          <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
          @enderror
      </div>
          


          <div class="col-span-full">
            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
              <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                </svg>
                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                  <label for="image" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="image" name="file-upload" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
              </div>
              @error('image')
              <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
              @enderror
            </div>
          </div>
        </div>
      </div>
  
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  

</x-layout>