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
            <a class="text-xl font-semibold ">Terms Of Use</a>
            <div class="mt-4 sm:text-base text-sm flex flex-col gap-6">
                <p>Koleksi 1 MapBiomas Indonesia | FIRE belum melalui uji akurasi secara ilmiah.</p>
                <p>Data dan informasi, termasuk peta, di dalam MapBiomas Indonesia | FIRE data diakses secara bebas, di bawah lisensi Creative Commons CC-BY-SA. Data dan informasi tersebut diperbolehkan disalin dan/atau didistribusikan dengan penyematan kredit mengikuti format berikut:</p>
                <p>"MapBiomas Indonesia | FIRE 1.0,<strong> Area Terbakar di Indonesia 2013-2023</strong>, diakses pada [tanggal, bulan, tahun] melalui [link]"</p>
            </div>
        </div>
    </div>


    @include('partials.footer')
@endsection
