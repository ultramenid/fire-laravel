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
            <iframe src="https://flo.uri.sh/visualisation/15997818/embed" frameborder="0" width="100%" height="600px"></iframe>
            <iframe src="https://flo.uri.sh/visualisation/15998156/embed" frameborder="0" width="100%" height="600px"></iframe>
            <iframe src="https://flo.uri.sh/visualisation/15998921/embed" frameborder="0" width="100%" height="600px"></iframe>
            <iframe src="https://flo.uri.sh/visualisation/15998992/embed" frameborder="0" width="100%" height="600px"></iframe>
        </div>
    </div>


    @include('partials.footer')
@endsection