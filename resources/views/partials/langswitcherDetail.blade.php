{{-- lang switch --}}
<div class="max-w-6xl mx-auto  sm:block hidden">
    <div class="flex justify-between px-3">
        <a></a>
        <div class="text-red-400 px-12 py-1 bg-red-600 text-sm rounded-b flex space-x-4">
            <a href="{{ route(Route::currentRouteName(), ['en',$data->id, $data->slug]) }}" class=" @if(App::getLocale() == 'en') text-white @endif  ">English</a>
            <a href="{{ route(Route::currentRouteName(), ['id',$data->id, $data->slug]) }}" class="@if(App::getLocale() == 'id') text-white @endif">Indonesia</a>
        </div>
        </div>
    </div>
</div>
