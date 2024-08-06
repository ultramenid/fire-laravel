<!-- {{-- nav mobile --}} -->
<header class="bg-auriga-biru sticky top-0 z-30">
    <div x-data="{ open: false }" class="px-4 py-3 bg-white z-10 sm:hidden block">
        <div class="flex justify-between items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600 " viewBox="0 0 20 20" fill="currentColor" @click="open = true">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
              </svg>

              <img src="{{ asset('assets/logo-full.png') }}" alt="Mapbiomas Fire Indonesia" class="sm:h-12 h-10">
              <div class="flex gap-2 z-50">
                {{-- <a href="{{ route(Route::currentRouteName(), 'en') }}"  class="cursor-pointer @if(App::getLocale() == 'en') text-red-600 font-bold @endif">EN</a>
                <div class="border-l border-black"></div>
                <a href="{{ route(Route::currentRouteName(), 'id') }}"  class="cursor-pointer @if(App::getLocale() == 'id') text-red-600 font-bold @endif ">ID</a> --}}
            </div>
        </div>


        <div class="fixed w-3/4 h-screen z-50 bg-red-900 inset-0 overflow-y-auto " x-show="open"
        x-transition:enter="transition-all transform ease-out"
        x-transition:enter-start="-translate-x-1/2 opacity-0"
        x-transition:enter-end="translate-x-0 opacity-100"
        x-transition:leave="transition-all transform ease-in"
        x-transition:leave-start="translate-x-0 opacity-100"
        x-transition:leave-end="-translate-x-1/2 opacity-0"
        @click.outside="open = false"
        x-cloak style="display: none !important">
            <button class="absolute px-4 py-4 focus:outline-none text-white" @click="open = false">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 " fill="white" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
            </button>

            <div class="mt-16 space-y-3">
                <div class=" px-4">
                    <a href="{{ route('index', [app()->getLocale()]) }}"   class="mb-4 px-4 inline-block  leading-5 text-white  font-semibold ">home<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-4">
                    <a href="{{ route('about', [app()->getLocale()]) }}"  class="mb-4 px-4 inline-block  leading-5 text-white  font-semibold ">about<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-4">
                    <a href=""  class="mb-4 px-4 inline-block  leading-5 text-white  font-semibold ">q & a<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-4">
                    <a href=""  class="mb-4 px-4 inline-block  leading-5 text-white  font-semibold ">map & data<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-4" x-data="{open1: false}">
                    <div class="flex items-center   px-4 mb-2" @click=" open1 =! open1">
                        <a class=" text-base leading-5 text-white font-semibold ">methodology </a>
                        <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': open1, 'rotate-0': !open1}"  class="w-6 text-gray-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="bg-white px-4 py-3 mb-4 flex flex-col space-y-2 rounded" x-show="open1" style="display: none !important;">
                        <a href="{{ route('refrencemap', [app()->getLocale()]) }}" class="text-sm mr-6">refrence map</a>
                    </div>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-4">
                    <a href=""  class="mb-4 px-4 inline-block  leading-5 text-white  font-semibold ">news & event<a>
                    <p class="border-b border-gray-300"></p>
                </div>
                <div class=" px-4">
                    <a href=""  class="mb-4 px-4 inline-block  leading-5 text-white  font-semibold ">initiatives<a>
                    <p class="border-b border-gray-300"></p>
                </div>





            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto px-4 -py-2 sm:block hidden">
        <div class="flex justify-between px-3">
            <a></a>
        </div>
    </div>
</header>
