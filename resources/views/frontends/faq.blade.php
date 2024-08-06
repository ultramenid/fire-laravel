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

    <div class="sm:px-0 px-4" x-data="{ open: '' }">
        <div class="max-w-4xl mx-auto bg-white relative  -mt-20 z-20 rounded sm:px-12 px-4 sm:py-12 py-4 border-b border-red-600 min-h-[40vh]">
            <h1 class="text-xl font-bold mb-6">FAQ</h1>
            <?php  foreach($data as $item) : ?>
                <template x-if="open!=='{{$item->id}}'">
                    <div class="<?php if($item->id == 1){ echo 'border-t border-b ';}else{ echo'border-b'; } ?>  cursor-pointer  py-4 px-4 "
                        style="border-color: #000000"
                        x-data="{ icon:false}"
                        @click="open = '{{$item->id}}', window.scrollTo({
                            top: 700,
                            left: 0,
                            behavior: 'smooth'
                          })"
                        @mouseover="icon=true"
                        @mouseover.away="icon=false"
                        :class="{ 'bg-gray-50' : open === '{{$item->id}}' }"
                        >
                        <div class="flex justify-between space-x-10">
                            <a class="text-black" >
                            {{$item->question}}
                            </a>
                            <svg x-show="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open==='{{$item->id}}'" class="mt-2">
                            <div  class="mt-6 prose max-w-none text-sm" >
                                {!! $item->answer !!}
                            </div>
                        </div>
                    </div>
                </template>
                <template x-if="open==='{{$item->id}}'">
                    <div class="<?php if($item->id == 1){ echo 'border-t border-b';}else{ echo'border-b'; } ?> cursor-pointer  py-4 px-4 "
                        x-data="{ icon:false}"
                        style="border-color: #000000"
                        @click="open = ''"
                        @mouseover="icon=true"
                        @mouseover.away="icon=false"
                        :class="{ 'bg-gray-50' : open === '{{$item->id}}' }"
                        >
                        <div class="flex justify-between space-x-10">
                            <a class=" text-black font-semibold" >
                                {!! $item->question !!}
                            </a>
                            <svg x-show="icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                        <div x-show="open==='{{$item->id}}'" class="mt-2">
                            <div  class="mt-6 prose max-w-none text-sm" >
                                {!! $item->answer !!}
                            </div>
                        </div>
                    </div>
                </template>

            <?php endforeach ?>
        </div>
    </div>


    @include('partials.footer')
@endsection
