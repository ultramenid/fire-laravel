<!-- nav -->
<div class="max-w-6xl mx-auto px-4 sm:flex hidden sm:justify-between justify-center items-center py-2 mt-4 ">
    <img src="assets/logo-fire.png" alt="Mapbiomas Fire Indonesia" class="sm:h-12 h-10">
    <div class="sm:flex hidden gap-10 items-center">
        <a class="text-red-600">about</a>
        <a class="text-red-600">qna</a>
        <a class="text-red-600">map & data</a>

        <div class="flex-col flex" x-data="{pages:false}">
            <a @click="pages = ! pages" @click.away="pages=false"  class=" text-red-600 cursor-pointer inline-flex   items-center " >methodology
                <svg xmlns="http://www.w3.org/2000/svg" :class="{'rotate-180': pages, 'rotate-0': !pages}" class="w-4 ml-1 -mb-1 transition-transform duration-200 transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
            <div class="absolute mt-8 z-20 bg-white px-2 py-2 flex flex-col space-y-2 w-40 border-red-600 border-b" x-show="pages" x-cloak style="display: none !important">
                <a href="" class="text-sm mr-6">List 1</a>

            </div>
        </div>
        <a class="text-red-600">news & event</a>
        <a class="text-red-600">initiatives</a>
    </div>
</div>
