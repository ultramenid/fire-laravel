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
                <a class="bg-red-600 p-2 text-white font-semibold sm:text-base text-xs">How Mapbiomas Fire Works</a>
            </div>
        </div>

        <!-- infographic -->
         <div class="max-w-6xl mx-auto px-4 mt-12">
            <a class="bg-red-600 py-2 px-2 text-white font-semibold ">Infographic</a>
            <img src="{{ asset('assets/infographic.jpg') }}" alt="Mapbiomas Indonesia - Fire" class="w-full h-full mt-4">
         </div>



       @include('partials.footer')
@endsection
