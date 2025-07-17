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
    <div class="border-b-[0.4px] border-red-500"></div>

    {{-- heroPage --}}

    <div class="">
        <img src="{{ asset('assets/hero-fire.png') }}" alt="Mapbiomas Indonesia - Fire" class=" mt-2 z-10 sm:h-[45vh] h-[30vh] w-full object-top object-cover">
    </div>

    <div class="sm:px-0 px-4">
        <div class="max-w-3xl mx-auto bg-white relative  -mt-20 z-20 rounded sm:px-6 px-4 sm:py-12 py-4 border-b border-red-600 min-h-[40vh]">
            <a class="text-xl font-semibold ">Downloads</a>
            <div class="mt-4  flex flex-col gap-6">
                <ul class="list-decimal flex flex-col gap-2 text-[15px]">
                    <li class="ml-6 mt-2 "><p class="leading-relaxed"><strong>{{__('Annual burned area')}}</strong>  (2023): <br> <a class="underline  text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_TOTAL/annual_burned_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_TOTAL/annual_burned_2023.tif</a></p></li>
                    <li class="ml-6 mt-2 leading-relaxed"><strong>{{__('Area terbakar tahunan dengan penutupan lahan Landy 2.0')}}</strong>  (2023): <br><a class="underline  text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_COVERAGE/annual_burned_coverage_2013.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_COVERAGE/annual_burned_coverage_2013.tif                            </a></li>
                    <li class="ml-6 mt-2 leading-relaxed"><strong>{{__('Area terbakar bulanan')}}</strong>  (2023):<br><a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_MONTHLY_TOTAL/monthly_burned_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_MONTHLY_TOTAL/monthly_burned_2023.tif                            </a>                             </li>
                    <li class="ml-6 mt-2 leading-relaxed"><strong>{{__('Akumulasi area terbakar')}}</strong>  (2013-2023): <br> <a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_TOTAL/accumulated_burned_2013_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_TOTAL/accumulated_burned_2013_2023.tif                            </a></li>
                    <li class="ml-6 mt-2 leading-relaxed"><strong> {{__('Akumulasi area terbakar dengan penutupan lahan Landy 2.0')}}</strong>  (2013-2023): <br> <a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_COVERAGE/accumulated_burned_coverage_2013_2013.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_COVERAGE/accumulated_burned_coverage_2013_2013.tif</a> </li>
                    <li class="ml-6 mt-2 leading-relaxed"><strong>{{__('Area terbakar berulang')}}</strong>  (2013-2023): <br> <a class=" underline text-red-600" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_FREQUENCY_TOTAL/frequency_burned_2013_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_FREQUENCY_TOTAL/frequency_burned_2013_2023.tif                            </a></li>
                </ul>
            </div>
        </div>
    </div>


    @include('partials.footer')
@endsection
