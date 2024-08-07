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
        <div class="max-w-4xl mx-auto bg-white relative  -mt-20 z-20 rounded sm:px-12 px-4 sm:py-12 py-4 border-b border-red-600 min-h-[40vh]">
            <a class="text-xl font-semibold ">Downloads</a>
            <div class="mt-4  flex flex-col gap-6">
                <p class="text-sm">Koleksi 1 data historis area terbakar MapBiomas Fire untuk Indonesia dapat diakses melalui tiga cara:</p>
                <ul class="list-decimal text-sm flex flex-col gap-2">
                    <li class="ml-6">Unduh berdasarkan kelompok pulau, kabupaten, provinsi, kecamatan dan desa serta geometri lain yang diinginkan menggunakan <a class="font-semibold underline" href="https://code.earthengine.google.com/?scriptPath=users%2Fmapbiomas%2Fuser-toolkit%3Amapbiomas-user-toolkit-fire.js">Toolkits</a> yang disiapkan di Google Earth Engine. Alat ini menawarkan keuntungan mengekspor peta dalam format raster dan menyediakan statistik area untuk geometri dan periode yang dipilih dalam format CSV. Untuk deskripsi nilai data masing-masing, akses  <a class="font-semibold underline" href="https://drive.google.com/file/d/1YbFf0XAnxw2XcfpU0CCqka4opi25CSR0/view?usp=drive_link">legend code.</a>.
                    </li>
                    <li class="ml-6">
                        <p>Access data <strong>aset</strong> in Google Earth Engine:</p>
                        <ul class="list-[lower-alpha] flex flex-col gap-2">
                            <li class="ml-6 mt-2">
                                Annual burned area - ID: <br> <i class="">projects/mapbiomas-public/assets/indonesia/fire/collection1/mapbiomas_fire_collection1_annual_burned_v1
                                </i>
                            </li>
                            <li class="ml-6 ">
                                Kebakaran tahunan dengan penutupan lahan Landy 2.0 - ID: <br> <i class="">projects/mapbiomas-public/assets/indonesia/fire/collection1/mapbiomas_fire_collection1_annual_burned_coverage_v1                                </i>
                            </li>
                            <li class="ml-6 ">
                                Kebakaran bulanan - ID: <br> <i class="">projects/mapbiomas-public/assets/indonesia/fire/collection1/mapbiomas_fire_collection1_monthly_burned_v1</i>
                            </li>
                            <li class="ml-6">
                                Akumulasi lahan terbakar - ID: <br> <i>projects/mapbiomas-public/assets/indonesia/fire/collection1/mapbiomas_fire_collection1_accumulated_burned_v1                                </i>
                            </li>
                            <li class="ml-6">Akumulasi lahan terbakar dengan penutupan Landy 2.0 - ID: <br><i>projects/mapbiomas-public/assets/indonesia/fire/collection1/mapbiomas_fire_collection1_accumulated_burned_coverage_v1                            </i></li>
                            <li class="ml-6">
                                Frekuensi kebakaran - ID: <br><i>projects/mapbiomas-public/assets/indonesia/fire/collection1/mapbiomas_fire_collection1_fire_frequency_v1</i>
                            </li>
                        </ul>
                    </li>
                    <li class="ml-6">
                        <p>Unduh langsung Koleksi 1 peta seluruh Indonesia dalam format GeoTiff (satu peta setiap tahun):</p>
                        <ul class="list-[lower-alpha] flex flex-col gap-2">
                            <li class="ml-6 mt-2">Kebakaran tahunan  - Untuk tahun 2023: <br> <a class="underline font-semibold" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_TOTAL/annual_burned_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_TOTAL/annual_burned_2023.tif</a></li>
                            <li class="ml-6 mt-2">Annual Burned Coverage  - For the year 2023: <br><a class="underline font-semibold" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_COVERAGE/annual_burned_coverage_2013.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ANNUAL_COVERAGE/annual_burned_coverage_2013.tif                            </a></li>
                            <li class="ml-6 mt-2">Monthly burned area: <br><a class="font-semibold underline" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_MONTHLY_TOTAL/monthly_burned_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_MONTHLY_TOTAL/monthly_burned_2023.tif                            </a>                             </li>
                            <li class="ml-6 mt-2"> Accumulated burned area - For the period 2013 to 2023: <br> <a class="font-semibold underline" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_TOTAL/accumulated_burned_2013_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_TOTAL/accumulated_burned_2013_2023.tif                            </a></li>
                            <li class="ml-6 mt-2">Accumulated Burned Coverage - For the period 2013 to 2023: <br> <a class="font-semibold underline" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_COVERAGE/accumulated_burned_coverage_2013_2013.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_ACCUMULATED_COVERAGE/accumulated_burned_coverage_2013_2013.tif</a> </li>
                            <li class="ml-6 mt-2">Frequency of Burned Area  - For the period 2013 to 2023: <br> <a class="font-semibold underline" href="https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_FREQUENCY_TOTAL/frequency_burned_2013_2023.tif">https://storage.googleapis.com/mapbiomas-public/initiatives/indonesia/collection_2/fire-col1/fire-simplifed/FIRE_FREQUENCY_TOTAL/frequency_burned_2013_2023.tif                            </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>


    @include('partials.footer')
@endsection
