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

    {{-- heroPage --}}

    <div class="">
        <img src="{{ asset('assets/hero-fire.png') }}" alt="Mapbiomas Indonesia - Fire" class="z-10 h-[45vh] w-full object-top object-cover">
    </div>

    <div class="max-w-4xl mx-auto bg-white relative  -mt-20 z-20 rounded px-12 py-12 border-b border-red-600 min-h-[40vh]">
        <a class="text-xl font-semibold">About</a>
        <div class="prose max-w-none ">
            {!! $data->content !!}
        </div>
    </div>

    @include('partials.footer')
@endsection