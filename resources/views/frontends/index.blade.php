@extends('layouts.indexLayout')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')
    {{-- lang switch
    <div class="max-w-6xl mx-auto  sm:block hidden">
        <div class="flex justify-between px-3">
            <a></a>
            <div class="text-red-400 px-12 py-1 bg-red-600 text-sm rounded-b flex space-x-4">
                <a href="{{ route(Route::currentRouteName(), 'en') }}" class=" @if(App::getLocale() == 'en') text-white @endif  ">English</a>
                <a href="{{ route(Route::currentRouteName(), 'id') }}" class="@if(App::getLocale() == 'id') text-white @endif">Indonesia</a>
            </div>
            </div>
        </div>
    </div> --}}

    @include('partials.navMobile')
    @include('partials.navPC')

    <!-- border -->
     <div class="border-b-[0.4px] border-red-500"></div>

     <!-- hero -->
      <div class="relative mt-2">
        <img src="assets/hero-fire.png" alt="Mapbiomas Fire - Indonesia" class="sm:h-[70vh] h-[40vh] w-full object-top object-cover relative">
        <a class="absolute bg-red-600 text-white sm:bottom-32 bottom-16 sm:left-72 left-5 px-4 py-1 font-semibold">Access The Platform</a>
      </div>

      {{-- <!-- content -->
       <div class="max-w-6xl mx-auto flex sm:flex-row flex-col gap-5 px-4 mt-12">
            <div class=" sm:w-9/12 w-full  ">
                <a class="bg-red-600 px-4 py-1 text-white font-semibold">News</a>
                <div class="flex flex-row  scrollbar-hide overflow-x-scroll h-full   gap-4  snap-x snap-mandatory mt-4">
                    <!-- card -->
                    <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  ">
                        <a  class="sm:w-7/12 w-full">
                            <div  alt="" class="bg-red-200 h-44 w-full"></div>
                        </a>

                        <a  class="md:mt-6 mt-3 font-semibold   flex-shrink-0 flex ">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
                        <div class="mt-2 text-sm  font-light">
                            Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the platform, methodology and data of the first collection of land cover maps
                        </div>
                    </div>
                     <!-- card -->
                     <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  ">
                        <a  class="sm:w-7/12 w-full">
                            <div  alt="" class="bg-red-200 h-44 w-full"></div>
                        </a>

                        <a  class="md:mt-6 mt-3 font-semibold   flex-shrink-0 flex ">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
                        <div class="mt-2 text-sm  font-light">
                            Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the platform, methodology and data of the first collection of land cover maps
                        </div>
                    </div>
                     <!-- card -->
                     <div class="sm:flex-shrink flex-shrink-0 snap-center sm:w-4/12 w-9/12  ">
                        <a  class="sm:w-7/12 w-full">
                            <div  alt="" class="bg-red-200 h-44 w-full"></div>
                        </a>

                        <a  class="md:mt-6 mt-3 font-semibold   flex-shrink-0 flex ">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
                        <div class="mt-2 text-sm  font-light">
                            Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the platform, methodology and data of the first collection of land cover maps
                        </div>
                    </div>
                </div>
                <div class="flex justify-end sm:-mt-16 mt-12">
                    <a class="text-red-600 font-light">EXPLORE MORE</a>
                </div>
            </div>
            <div class="sm:w-3/12 w-full  ">
                <a class="bg-red-600 px-4 py-1 text-white font-semibold ">Event</a>
                <div class=" flex flex-col gap-6 mt-4">
                    <div class="p-2 border border-red-200">
                        <div  alt="" class="bg-red-200 h-40 w-full"></div>
                    </div>
                    <div class="p-2 border border-red-200">
                        <div  alt="" class="bg-red-200 h-40 w-full"></div>
                    </div>
                </div>
                <div class="flex justify-end mt-12">
                    <a class="text-red-600 font-light">EXPLORE MORE</a>
                </div>
            </div>

       </div> --}}

       <!-- understand how -->
        <div class=" bg-red-50 h-[50vh] mt-12">
            <div class="max-w-6xl mx-auto px-4 py-6">
                <a class="bg-red-600 p-2 text-white font-semibold sm:text-base text-xs">HOW MAPBIOMAS FIRE WORKS</a>
            </div>
        </div>

        <!-- infographic -->
         <div class="max-w-6xl mx-auto px-4 mt-12">
            <a class="bg-red-600 p-2 text-white font-semibold">INFOGRAPHIC</a>
            <div class="bg-red-500 sm:h-[50vh] h-[25vh] mt-4 w-full mb-4"></div>
            <a class="mt-4">Technical experts review MapBiomas Indonesia Collection 1 methodology and results</a>
            <p class="mt-2 sm:text-base text-sm font-thin">Mapbiomas Indonesia involves technical experts in the field of Geographic Information System (GIS) to review the
                platform, methodology and data of the first collection of land cover maps</p>
         </div>

        <!-- collaboration -->
        <div class="mt-12  border-t border-gray-300 max-w-6xl mx-auto px-4">
            <div class="justify-between flex sm:flex-row flex-col ">
                <div class="mt-6 space-y-4">
                    <h2 class="text-xl sm:text-left text-center text-red-500">
                        An Initiative of:                </h2>
                    <a href="https://auriga.or.id/" target="_blank"><img class="mt-4 sm:mx-0 mx-auto h-10" src="https://mapbiomas.nusantara.earth/assets/images/AurigaPNG.png" alt=""></a>
                </div>
                <div class="mt-6 space-y-4">
                    <h2 class="text-xl sm:text-left text-center text-red-500">
                        Collaboration:                </h2>
                    <div class="flex space-x-4 flex-wrap justify-center">
                        <a href="https://www.jeratpapua.org/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo2_color.png" alt="" class="h-12">
                        </a>
                        <a href="https://saveourborneo.org/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo3_color.png" alt="" class="h-12">
                        </a>
                        <a href="http://greenofborneo.id/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo4_color.png" alt="" class="h-12">
                        </a>
                        <a href="https://www.haka.or.id/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo5-x.png" alt="" class="h-12">
                        </a>
                        <a href="http://mnukwarpapua.id/"><img src="https://mapbiomas.nusantara.earth/assets/images/logo6-x.png" alt="" class="h-12">
                        </a>
                        <a href="https://hutaninstitute.or.id/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo7-x.png" alt="" class="h-12">
                        </a>
                        <a href="http://yayasangenesisbengkulu.or.id/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo8-x.png" alt="" class="h-12">
                        </a>
                        <a href="https://komiu.id/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo9-x.png" alt="" class="h-12">
                        </a>
                        <a href="http://sampankalimantan.id/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo10-x.png" alt="" class="h-12">
                        </a>
                    </div>
                </div>
                <div class="mt-6 space-y-4">
                    <h2 class="text-xl sm:text-left text-center text-red-500">
                        Supported by:                </h2>
                    <div class="flex space-x-4 justify-center">
                        <a href="https://mapbiomas.org/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo11-x.png" alt="" class="h-12">
                        </a>
                        <a href="https://woods-wayside.org/" target="_blank">
                            <img src="https://mapbiomas.nusantara.earth/assets/images/logo12-x.png" alt="" class="h-12">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
         <div class="bg-gray-500 border-t-4 border-red-500 mt-20 h-[50vh]">
            <div class="flex sm:flex-row flex-col gap-10 max-w-6xl mx-auto px-4 py-7">
                <a class="text-white">about</a>
                <a class="text-white">faq</a>
                <a class="text-white">map & data</a>
                <a class="text-white">methodology</a>
                <a class="text-white">news & event</a>
                <a class="text-white">Inisiatif</a>
            </div>
         </div>
@endsection
