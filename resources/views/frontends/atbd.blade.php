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
        <div class="max-w-4xl mx-auto bg-white relative  -mt-20 z-20 rounded sm:px-6 px-4 sm:py-12 py-4 border-b border-red-600 min-h-[40vh] text-sm">
            <a class="text-xl font-semibold ">Methodology atbd</a>

            <p class="mt-4">Mapbiomas Indonesia Fire koleksi 1.0 menyajikan data/peta lahan terbakar di Indonesia pada tahun 2013 hingga 2023. Data dan/atau peta tersebut berupa kebakaran tahunan, kebakaran bulanan, frekuensi kebakaran, dan akumulasi lahan terbakar. Data-data tersebut juga tersedia sesuai dengan kelas penutupan dan penggunaan lahan berdasarkan MapBiomas Indonesia Landy Koleksi 2.0.             </p>
            <p>Metodologi yang digunakan disajikan dalam <a  class="text-red-600 underline"  href="https://fire.mapbiomas.id/assets/ATBD-Mapbiomas-fire-koleksi-1.pdf" class="underline font-semibold">ATBD (Algorithm Theoretical Basis Documents)</a> </p>

            <h1 class="font-semibold mt-4">Ringkasan Methodology</h1>
            <p class="mt-4">Kami menggunakan seluruh Koleksi Landsat 8 yang tersedia dan Deep Neural Network (DNN) model untuk mendeteksi dan memetakan kebakaran secara regional antara Januari 2013 hingga Desember 2023. DNN model menggunakan kecerdasan buatan dan algoritma machine learning untuk melakukan klasifikasi deep learning terhadap fenomena yang kompleks sehingga menghasilkan hasil yang lebih baik, termasuk untuk pemetaan kebakaran (Langford, 2018). </p>
            <p class="mt-4">Citra Landsat 8 diproses pada GEE hingga dihasilkan mosaic Landsat tahunan, yang digunakan untuk mengumpulkan nilai spektral dari kebakaran dan non-kebakaran, untuk dijadikan training sample guna melatih model klasifikasi. Training sample dan mosaic tahunan kemudian diekspor ke penyimpanan berbasis google, yaitu google drive, kemudian training sampel tersebut diproses menggunakan DNN model pada local server. Hasil dari pemrosesan ini berupa peta area terbakar pada 2013 hingga 2023. </p>
            <p class="mt-4">Pemrosesan image dan prosedur klasifikasi wilayah terbakar di Indonesia mengikuti enam langkah, berupa:</p>
            <ul class="list-decimal mt-4 flex flex-col gap-2">
                <li class="ml-6"><strong>Mendefinisikan region: </strong> Indonesia dibagi menjadi 7 region  untuk pemrosesan guna meningkatkan keakuratan klasifikasi.</li>
                <li class="ml-6"><strong>Konstruksi citra Landsat tahunan:</strong> Mosaik tahunan berkualitas tinggi dihasilkan dari citra Landsat sebagai dataset yang digunakan dalam klasifikasi.</li>
                <li class="ml-6"><strong>Koleksi training sample:</strong> pengumpulan nilai spektral kebakaran dan non-kebakaran dikumpulkan dari mosaic citra Landsat tahunan sebagai training sample.</li>
                <li class="ml-6"><strong>Melatih dan mengembangkan klasifikasi kebakaran pada DNN prediction model:</strong> DNN model dilatih menggunakan sampel yang telah dikumpulkan dan citra tahunan local server. </li>
                <li class="ml-6"><strong>Post-klasifikasi:</strong> pada hasil klasifikasi area terbakar dilakukan masking dan menerapkan spasial filter untuk meningkatkan akurasi dan mengurangi kesalahan pada hasil klasifikasi. </li>
                <li class="ml-6"><strong>Evaluasi dan validasi hasil klasifikasi kebakaran dengan pengamatan visual.</strong> Hasil dari klasifikasi divalidasi dengan menggunakan data referensi. Validasi ini  menggunakan pengecekan visual terhadap peta areal terbakar untuk memastikan akurasi data yang ada.                </li>
            </ul>
        </div>
    </div>


    @include('partials.footer')
@endsection
