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

            <p class="mt-4">Mapbiomas Indonesia | FIRE 1.0 menyajikan data dan peta area terbakar di Indonesia sepanjang 2013-2023, yang diperoleh dengan menganalisis citra satelit Landsat 8 melalui proses komputasi <i>deep learning</i> Deep Neural Network (DNN). Model DNN memaksimalkan kecerdasan buatan (<i>artificial intelligence</i>) dan algoritma <i> machine learning</i> untuk mengklasifikasi fenomena kompleks demi performa yang lebih tinggi, termasuk pemetaan area terbakar (Langford, 2018).</p>
            <p class="mt-4">Citra satelit diproses pada Google Earth Engine (GEE) guna menghasilkan mosaik untuk digunakan mengukur nilai spektral area terbakar (dan non-terbakar) yang kemudian dijadikan sebagai dasar pengumpulan <i>training samples</i>. Baik <i>training samples</i> maupun mosaik ditempatkan pada penyimpanan berbasis Google (<i>google drive</i>) yang kemudian diunduh ke server lokal. Kemudian, <i>training samples</i> dijadikan sebagai material untuk melatih DNN mengenali area terbakar pada mosaik.</p>
            <p class="mt-4">Pendekatan ini mengkombinasi kemampuan mumpuni <i>deep learning</i> memindai citra satelit secara komprehensif, sehingga menghadirkan peta area terbakar Indonesia yang rinci dan dapat diandalkan. Pengolahan citra dan prosedur klasifikasi pemetaan area terbakar tersebut mengikuti tahapan berikut:</p>

            <ul class="list-decimal mt-4 flex flex-col gap-2">
                <li class="ml-6"><strong>Penentuan region. </strong> Hal ini dilakukan untuk meningkatkan keakuratan proses klasifikasi, terutama mengingat adanya karakteristik tertentu area terbakar pada setiap region. Pada tahap ini, Indonesia dibagi menjadi 7 region, yakni Sumatera, Jawa, Kalimantan, Bali-Nusa Tenggara, Sulawesi, Kepulauan Maluku, dan Tanah Papua. </li>
                <li class="ml-6"><strong>Pengkonstruksian mosaik.</strong> Seluruh citra satelit Landsat 8 sepanjang 2013-2023 diproses sedemikian rupa sehingga menjadi mosaik tahunan berkualitas tinggi. Mosaik ini ditempatkan pada server lokal, yang akan digunakan sebagai dataset dalam proses klasifikasi.</li>
                <li class="ml-6"><strong>Pengumpulan <i>training samples</i>.</strong> Representasi area terbakar (<i>samples</i>) dikumpulkan dari mosaik. Pada proses selanjutnya, proses <i>deep learning</i> akan dilatih mengenali area terbakar melalui <i>samples</i> ini, atau kerap disebut <i>training samples</i>.</li>
                <li class="ml-6"><strong>Klasifikasi.</strong> Model DNN dilatih (<i>deep learning</i>) mengenali <i>samples</i> menggunakan nilai spektral area terbakar pada setiap <i>sample</i>. Model ini kemudian disebar ke mosaik tahunan untuk mengidentifikasi area terbakar pada periode/waktu mosaik tersebut.</li>
                <li class="ml-6">
                    <p><strong>Post-klasifikasi.</strong> Pada tahap ini dilakukan pemeriksaan visual (<i>visual inspection</i>) terhadap area teridentifikasi. Bila area teridentifikasi dinilai kurang meyakinkan dan/atau kurang akurat, proses diulang kembali ke tahap 3 di atas. Pengulangan seperti ini dilakukan terus hingga secara visual diperoleh area teridentifikasi yang meyakinkan.</p>
                    <p class="mt-4">Selanjutnya, berbagai penyaringan (<i>filters</i>), baik spasial maupun karakteristik tertentu (<i>masking</i>), disematkan pada area teridentifikasi guna meningkatkan akurasi pun mengurangi kekeliruan (<i>noises</i>).</p>
                </li>
                <li class="ml-6"><strong>Validasi</strong> Area teridentifikasi divalidasi dengan membandingkannya dengan <a href="https://fire.mapbiomas.id/id/refrencemap" target="_blank" class="underline text-red-600">data/peta referensi</a>. Pengecekan visual (<i>visual check</i>) dilakukan, terutama terhadap area yang berbeda (<i>disagreement area</i>), guna mengetahui keakuratan area teridentifikasi tersebut.</li>
            </ul>

            <p class="mt-4"> Metodologi MapBiomas Indonesia | FIRE Koleksi 1.0 selengkapnya tersaji pada <a href="https://fire.mapbiomas.id/assets/ATBD-Mapbiomas-fire-koleksi-1.pdf" target="_blank" class="underline text-red-600">Algorithm Theoretical Basis Documents</a> (ATBD).</p>
        </div>
    </div>


    @include('partials.footer')
@endsection
