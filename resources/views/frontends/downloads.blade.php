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
    <div class="border-b-[0.4px] border-red-500"></div>

    {{-- heroPage --}}

    <div class="">
        <img src="{{ asset('assets/hero-fire.png') }}" alt="Mapbiomas Indonesia - Fire" class=" mt-2 z-10 sm:h-[45vh] h-[30vh] w-full object-top object-cover">
    </div>

    <div class="sm:px-0 px-4">
        <div class="max-w-4xl mx-auto bg-white relative  -mt-20 z-20 rounded sm:px-6 px-4 sm:py-12 py-4 border-b border-red-600 min-h-[40vh]">
            <a class="text-xl font-semibold ">Downloads</a>
            <div class="mt-4  flex flex-col gap-6">
                <ul class="list-decimal flex flex-col gap-2 text-sm">
                    <li class="ml-6 mt-2"><strong>Area terbakar tahunan</strong>  (2023): <br> <a class="underline  text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_TOTAL/annual_burned_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_TOTAL/annual_burned_2023.tif</a></li>
                    <li class="ml-6 mt-2"><strong>Area terbakar tahunan dengan penutupan lahan Landy 2.0</strong>  (2023): <br><a class="underline  text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_COVERAGE/annual_burned_coverage_2013.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_COVERAGE/annual_burned_coverage_2013.tif                            </a></li>
                    <li class="ml-6 mt-2"><strong>Area terbakar bulanan</strong>  (2023):<br><a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_MONTHLY_TOTAL/monthly_burned_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_MONTHLY_TOTAL/monthly_burned_2023.tif                            </a>                             </li>
                    <li class="ml-6 mt-2"><strong>Akumulasi area terbakar</strong>  (2013-2023): <br> <a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_TOTAL/accumulated_burned_2013_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_TOTAL/accumulated_burned_2013_2023.tif                            </a></li>
                    <li class="ml-6 mt-2"><strong> Akumulasi area terbakar dengan penutupan lahan Landy 2.0</strong>  (2013-2023): <br> <a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_COVERAGE/accumulated_burned_coverage_2013_2013.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_COVERAGE/accumulated_burned_coverage_2013_2013.tif</a> </li>
                    <li class="ml-6 mt-2"><strong>Area terbakar berulang</strong>  (2013-2023): <br> <a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_FREQUENCY_TOTAL/frequency_burned_2013_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_FREQUENCY_TOTAL/frequency_burned_2013_2023.tif                            </a></li>
                </ul>
            </div>
        </div>
    </div>


    @include('partials.footer')
@endsection
