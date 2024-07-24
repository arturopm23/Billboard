<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    
    <div class="space-y-4">
        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">

            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full h-60 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="https://dp6mhagng1yw3.cloudfront.net/entries/14th/257ca958-886c-4225-81fb-ad2234a4614c.jpg" alt="Create Movie" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="/movie/create">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong>Add a new movie</strong>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full h-60 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="https://lh3.googleusercontent.com/proxy/GKK5b0a7-sW9fJ60dboRTctT-ZJ10tagM_do8a7vZzdL0kVFKxqruJeKAB-Hk8jOfN1yqPSJlY8-uub-PZOm8BZggUPDesgpq6YckJtZgkJYubD-bKParY--T5hjXsVssH8siNCwLe_GeV8e-QoMjVyjB2w_IWI" alt="Create Theater" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="/theater/create">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong>Add a new theater</strong>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="group relative">
                <div class="aspect-h-1 aspect-w-1 w-full h-60 overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75">
                    <img src="https://www.boundless.co.uk/-/media/PartnerAssetsSet/The%20Cinema%20Society/240723/People%20enjoying%20a%20film%20at%20the%20cinema.jpg?mw=640&hash=A155971BB259F637E4B1C8B1DA25A601" alt="Create Showtime" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                </div>
                <div class="mt-4 flex justify-between">
                    <div>
                        <h3 class="text-sm text-gray-700">
                            <a href="/showtime/create">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                <strong>Add a new showtime</strong>
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

        </div>
        <div>
        </div>
    </div>
</x-layout>
