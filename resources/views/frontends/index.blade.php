@extends('layouts.indexLayout')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')

    @include('partials.langswitcher')

    @include('partials.navMobile')
    @include('partials.navPC')

    <!-- border -->
     <div class="border-b-[0.4px] border-red-500"></div>

     <!-- hero -->
      <div class="relative mt-2">
        <img src="assets/hero-fire.png" alt="Mapbiomas Fire - Indonesia" class="sm:h-[70vh] h-[40vh] w-full object-top object-cover relative">
        <a href="https://platform.indonesia.mapbiomas.org/fogo" class="absolute bg-red-600 text-white sm:bottom-32 bottom-16 sm:left-[22rem] left-5 px-4 py-1 font-semibold">Access The Platform</a>
      </div>



    {{-- <div class="max-w-6xl mx-auto flex sm:flex-row flex-col gap-5 px-4 mt-12">
        <div class=" sm:w-9/12 w-full  ">
            <a class="bg-red-600 px-4 py-1 text-white font-semibold">Video</a>
            <Video src="{{ asset('assets/Mapbiomas_Fire_Launching.mp4') }}" controls class="mt-4 "></Video>
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
        <div class=" bg-red-50 mt-12">
            <div class="max-w-6xl mx-auto px-4 py-6">
                <a class="bg-red-600 p-2 text-white font-semibold sm:text-base text-xs">How Mapbiomas Fire Works</a>
                <div class="w-full sm:flex hidden justify-center  mt-12 ">
                    <img src="{{ asset('assets/how-we-work-3-2.png') }}" alt="Mapbiomas Fire" class="w-full h-full">
                </div>
                <div class="flex sm:flex-col flex-row justify-center mt-12 gap-4">
                    <div class="flex">

                    </div>

                    <div class="sm:hidden flex sm:flex-row flex-col gap-1 items-top">
                        <div class="w-44">
                            <div class="px-1 py-1 border border-red-600 ">
                                <img src="{{ asset('assets/mosaic.png') }}" alt="Mapbiomas Fire" class="h-24">
                            </div>
                            <p class="text-sm text-center ">1. Mosaik </p>
                        </div>

                        <div class="w-44">
                            <div class="px-1 py-1 border border-red-600 bg-white">
                                <img src="{{ asset('assets/region.png') }}" alt="Mapbiomas Fire" class="h-24 object-scale-down">
                            </div>
                            <p class="text-sm text-center ">2. Region</p>
                        </div>

                        <div class="w-44">
                            <div class="px-1 py-1 border border-red-600">
                                <img src="{{ asset('assets/sampling.png') }}" alt="Mapbiomas Fire" class="h-24 object-cover object-center w-full">
                            </div>
                            <p class="text-sm text-center">3. Sampling</p>
                        </div>

                        <div class=" w-44">
                            <div class="px-1 py-1 border border-red-600">
                                <img src="{{ asset('assets/postclassification.png') }}" alt="Mapbiomas Fire" class="h-24">
                            </div>
                            <p class="text-center text-sm">4. Klasifikasi (<i>deep learning</i>)</p>
                        </div>

                        <div class="w-44">
                            <div class="px-1 py-1 border border-red-600">
                                <img src="{{ asset('assets/evaluasi.png') }}" alt="Mapbiomas Fire" class="h-24">
                            </div>
                            <p class="text-sm text-center ">5. Komparasi dengan peta-referensi</p>
                        </div>

                        <div class="w-44">
                            <div class="px-1 py-1 border border-red-600">
                                <img src="{{ asset('assets/postclassification.png') }}" alt="Mapbiomas Fire" class="h-24 object-cover object-center">
                            </div>
                            <p class="text-center text-sm ">6. Post-Klasifikasi dan filter spasial</p>
                        </div>

                    </div>
                    <div>

                        <div class="border-dashed border border-b-red-600 border-l-0 border-r-red-600 border-t-red-600 h-[270px] mt-[335px] w-4 relative sm:hidden block">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 absolute -top-[8px] -left-[8px] ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                              </svg>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- infographic -->
         <div class="max-w-6xl mx-auto px-4 mt-12">
            <a class="bg-red-600 py-2 px-2 text-white font-semibold ">Infographic</a>
            <img src="{{ asset('assets/infographic.jpg') }}" alt="Mapbiomas Indonesia - Fire" class="w-full h-full mt-4">
         </div>



       @include('partials.footer')
@endsection
