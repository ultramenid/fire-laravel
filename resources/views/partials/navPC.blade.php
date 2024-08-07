<!-- nav -->
<div class="max-w-6xl mx-auto px-4 sm:flex hidden sm:justify-between justify-center items-center py-2 mt-4 ">
    <a href="{{ route('index', [app()->getLocale()]) }}"><img src="{{ asset('assets/logo-full.png') }}" alt="Mapbiomas Fire Indonesia" class="sm:h-12 h-10"></a>
    <div class="sm:flex hidden gap-10 items-center">
        <a href="{{ route('about', [app()->getLocale()]) }}" class="text-red-600">about</a>
        <a href="{{ route('faq', [app()->getLocale()]) }}" class="text-red-600">FAQ</a>
        <div class="flex-col flex" x-data="{pages:false}">
            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-red-600 cursor-pointer inline-flex   items-center " >map & data
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pages, 'rotate-0': !pages}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2 w-52 border-red-600 border-b" x-show="pages" x-cloak style="display: none !important">
                <a href="{{ route('termsofuse', [app()->getLocale()]) }}" class="text-sm mr-6">terms of use</a>
                <a href="https://platform.indonesia.mapbiomas.org/fogo" class="text-sm mr-6">platform/map</a>
            </div>
        </div>

        <div class="flex-col flex" x-data="{pages:false}">
            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-red-600 cursor-pointer inline-flex   items-center " >methodology
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pages, 'rotate-0': !pages}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2 w-52 border-red-600 border-b" x-show="pages" x-cloak style="display: none !important">
                <a href="{{ route('atbd', [app()->getLocale()]) }}" class="text-sm mr-6">ATBD</a>
                <a href="{{ route('refrencemap', [app()->getLocale()]) }}" class="text-sm mr-6">reference map</a>

            </div>
        </div>
        <a class="text-red-600">news & event</a>
        <a href="{{ route('downloads', [app()->getLocale()]) }}" class="text-red-600">downloads</a>
    </div>
</div>
