<x-layout>
    <x-slot:heading>
        Add a theater
    </x-slot:heading>

    <form method="POST" action="/theater" enctype="multipart/form-data">
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
                            <input type="text" name="name" id="name" class="block flex-1 border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset sm:text-sm sm:leading-6" required>
                        </div>
                        @error('name')
                        <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Hidden inputs for unchecked checkboxes -->
                <input type="hidden" name="threeD" value="0">
                <input type="hidden" name="dolby" value="0">

                <div class="sm:col-span-1 pt-6">
                    <input id="threeD" name="threeD" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    <label for="threeD" class="ms-2 text-sm font-medium text-gray-900">3D</label>
                    @error('threeD')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="sm:col-span-1">
                    <input id="dolby" name="dolby" type="checkbox" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    <label for="dolby" class="ms-2 text-sm font-medium text-gray-900">Dolby</label>
                    @error('dolby')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <br>
                <div class="col-span-full">
                    <label class="block mb-2 text-sm font-medium text-gray-900" for="poster">Upload file</label>
                    <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50" aria-describedby="poster_help" id="poster" name="poster" type="file">
                    @error('poster')
                    <p class="text-xs text-red-700 font-semibold mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" onclick="window.location='/theater';" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </div>
    </form>
</x-layout>