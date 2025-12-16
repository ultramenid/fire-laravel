{{-- lang switch --}}
<div class="max-w-6xl mx-auto  sm:block hidden">
    <div class="flex justify-between px-3">
        <a></a>
        <div class="text-red-400 px-12 py-1 bg-red-600 text-sm rounded-b flex space-x-4">
            <a href="{{ route(Route::currentRouteName(), 'en') }}" class=" @if(App::getLocale() == 'en') text-white @endif  ">English</a>
            <a href="{{ route(Route::currentRouteName(), 'id') }}" class="@if(App::getLocale() == 'id') text-white @endif">Indonesia</a>
        </div>
    </div>
</div>

<!-- nav -->
<div class="max-w-6xl mx-auto px-4 sm:flex hidden sm:justify-between justify-center items-center py-2 mt-4 ">
    <a href="{{ route('index', [app()->getLocale()]) }}">
        <img src="{{ asset('assets/logo-full.png') }}" alt="Mapbiomas Fire Indonesia" class="sm:h-12 h-10">
    </a>
    <div class="sm:flex hidden gap-10 items-center">
        <a href="{{ route('about', [app()->getLocale()]) }}" class="text-red-600">about</a>
        <a href="{{ route('faq', [app()->getLocale()]) }}" class="text-red-600">FAQ</a>

        <!-- map & data dropdown -->
        <div class="flex-col flex" x-data="{ pagesMap: false }">
            <a @click="pagesMap = !pagesMap" @click.away="pagesMap = false" class="text-red-600 cursor-pointer inline-flex items-center">
                map & data
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pagesMap, 'rotate-0': !pagesMap}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2 w-52 border-red-600 border-b" x-show="pagesMap" x-cloak>
                <a href="{{ route('termsofuse', [app()->getLocale()]) }}" class="text-sm mr-6">terms of use</a>
                <a href="https://plataforma.mapbiomas.org/fire/fire_annual?t[regionKey]=indonesia" class="text-sm mr-6">platform/map</a>
            </div>
        </div>

        <!-- methodology dropdown -->
        <div class="flex-col flex" x-data="{ pagesMethodology: false }">
            <a @click="pagesMethodology = !pagesMethodology" @click.away="pagesMethodology = false" class="text-red-600 cursor-pointer inline-flex items-center">
                methodology
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pagesMethodology, 'rotate-0': !pagesMethodology}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2 w-52 border-red-600 border-b" x-show="pagesMethodology" x-cloak>
                <a href="{{ route('atbd', [app()->getLocale()]) }}" class="text-sm mr-6">ATBD</a>
                <a href="{{ route('refrencemap', [app()->getLocale()]) }}" class="text-sm mr-6">reference map</a>
            </div>
        </div>

        <a href="{{ route('newsnevent', [app()->getLocale()]) }}" class="text-red-600 cursor-pointer">news & event</a>

        <!-- methodology dropdown -->
        <div class="flex-col flex" x-data="{ pagesMethodology: false }">
            <a @click="pagesMethodology = !pagesMethodology" @click.away="pagesMethodology = false" class="text-red-600 cursor-pointer inline-flex items-center">
                downloads
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pagesMethodology, 'rotate-0': !pagesMethodology}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg>
            </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2 w-52 border-red-600 border-b" x-show="pagesMethodology" x-cloak>
                <a href="{{ route('downloads', [app()->getLocale()]) }}" class="text-sm mr-6">collection map</a>
                <a href="{{ route('infographics', [app()->getLocale()]) }}" class="text-sm mr-6">infographics</a>
            </div>
        </div>

    </div>
</div>
