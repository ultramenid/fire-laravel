@extends('layouts.indexLayout')

@section('meta')
    @include('partials.indexMeta')
@endsection

@section('content')

    {{-- @include('partials.langswitcher') --}}

    @include('partials.navMobile')
    <div class="bg-white sticky top-0 z-50">
        @include('partials.navPC')
    </div>

    <!-- border -->
     <div class="border-b-[0.4px] border-red-500"></div>

     <!-- hero -->
      <div class="relative mt-2">
        <img src="assets/hero-fire.png" alt="Mapbiomas Fire - Indonesia" class="sm:h-[70vh] h-[40vh] w-full object-top object-cover relative">
        <a href="https://plataforma.mapbiomas.org/fire/fire_annual?t[regionKey]=indonesia" class="absolute bg-red-600 text-white sm:bottom-32 bottom-16 sm:left-[22rem] left-5 px-4 py-1 font-semibold">Access The Platform</a>
      </div>



   <!-- content -->
       <div class="max-w-6xl mx-auto flex sm:flex-row flex-col gap-5 px-4 mt-12">
            <div class=" w-full  ">
                <a class="bg-red-600 px-4 py-1 text-white font-semibold capitalize">{{__('news') }}</a>
                <div class="flex sm:flex-row flex-col  h-full   gap-4  snap-x snap-mandatory mt-4">
                    @foreach ($news as $item)
                        <!-- card -->
                        <div class="sm:flex-shrink flex-shrink-0 snap-center sm:6/12 w-full ">
                            <a href="{{ route('detailnews', [app()->getLocale(), $item->id, $item->slug]) }}"  class="sm:w-7/12 w-full">
                                <img src="{{ asset('storage/files/photos/'.$item->img) }}"  alt="{{ $item->title }}" class="bg-red-200 h-96 w-full object-center object-cover" />
                            </a>

                            <a href="{{ route('detailnews', [app()->getLocale(), $item->id, $item->slug]) }}" class="md:mt-6 mt-3 font-semibold flex-shrink-0 flex ">{{ $item->title }}</a>
                            <div class="mt-2 text-sm  font-light">
                                {{ $item->description }}
                            </div>
                        </div>

                    @endforeach
                </div>
                <div class="sm:hidden flex justify-end mt-12">
                    <a class="text-red-600 font-light"></a>
                </div>
            </div>


       </div>
       <div class="max-w-6xl mx-auto flex sm:flex-row flex-col gap-5 px-4 ">
            <div class=" sm:w-9/12 w-full  ">
                <div class="sm:flex hidden justify-end mt-12">
                    <a class="text-red-600 font-light"></a>
                </div>
            </div>
            <div class="sm:w-3/12 w-full  ">
                <div class="sm:flex hidden  justify-end mt-12">
                    <a class="text-red-600 font-light"></a>
                </div>
            </div>
       </div>
       <br>

       <!-- understand how -->
        <div class=" bg-red-50 mt-12">
            <div class="max-w-6xl mx-auto px-4 py-6">
                <a class="bg-red-600 p-2 text-white font-semibold sm:text-base text-xs">How Mapbiomas Fire Works</a>

                {{-- image pc --}}
                <div class="w-full sm:flex hidden justify-center  mt-12 ">
                    @if (app()->getLocale() == 'en')
                        <img src="{{ asset('assets/how-we-work-4.png') }}" alt="Mapbiomas Fire" class="w-full h-full">
                    @else
                        <img src="{{ asset('assets/how-we-work-3-2.png') }}" alt="Mapbiomas Fire" class="w-full h-full">
                    @endif
                </div>
                {{-- image mobile  --}}
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

        {{-- <livewire:counter-Component /> --}}

        <!-- infographic -->
         <div class="max-w-6xl mx-auto px-4 mt-12">
            <a class="bg-red-600 py-2 px-2 text-white font-semibold ">Infographic</a>
                @if ($infographic)
                    <div class="mt-4 flex flex-col gap-2">
                        <a href="{{ asset('storage/files/photos/' . $infographic->img) }}">
                            <img src="{{ asset('storage/files/photos/' . $infographic->img) }}"
                                alt="{{ $infographic->title }}"
                                class="w-full h-full mt-4" loading="lazy">
                        </a>
                        <a href="{{ asset('storage/files/photos/' . $infographic->img) }}"
                        class="text-landy text-xl font-semibold">
                            {{ $infographic->title }}
                        </a>
                    </div>
                @else
                    <p class="mt-4 text-landy font-semibold">No infographic available.</p>
                @endif
         </div>



       @include('partials.footer')
@endsection
