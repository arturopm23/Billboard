<x-layout>
    <x-slot:heading>
        Welcome to Cinernàrium
    </x-slot:heading>

    <!-- Hero Section -->
    <div class="relative bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                            <span class="block xl:inline">Experience the Magic of</span>
                            <span class="block text-indigo-600 xl:inline">Cinema</span>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Immerse yourself in a world of entertainment. Discover the latest movies, visit state-of-the-art theaters, and enjoy unforgettable moments.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="/movie"class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-black hover:bg-black md:py-4 md:text-lg md:px-10">
                                    Explore Movies
                                </a>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
            <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://offloadmedia.feverup.com/barcelonasecreta.com/wp-content/uploads/2022/08/08091519/cine-rojo-1024x683.jpg" alt="Cinema experience">
        </div>
    </div>

    <!-- Featured Section -->
    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Discover More</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    More than just movies
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Visit our luxurious theaters, experience immersive Dolby sound, and enjoy 3D movies like never before.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Movie Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M21 21H3V7h18v14zm0-16H3V3h18v2zM7 11h3v2H7v-2zm7 0h3v2h-3v-2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Latest Movies</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Enjoy blockbusters, indie films, and everything in between. Check out the latest releases.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Theater Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M3 21V3h18v18M7 7h10M7 11h10m-6 4h2" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">State-of-the-Art Theaters</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            Enjoy crystal-clear screens, surround sound, and luxurious seating in all our theaters.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <!-- Showtime Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                    <path d="M12 1v22M4.22 4.22l15.56 15.56M2.93 17.07l18.36-10.14M16 7.41L3.64 17.59" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Flexible Showtimes</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500">
                            We offer multiple showtimes throughout the day for your convenience.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-layout>
