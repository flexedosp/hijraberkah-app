@extends('layouts.main')

@push('banner')    

<div class="flex items-center h-[100vh]" style="background: radial-gradient(circle at top left,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%) , radial-gradient(circle at bottom left,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%), radial-gradient(circle at top right ,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%) , radial-gradient(circle at bottom right,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%),radial-gradient(circle, transparent 25%, #ffffff  26%),linear-gradient(45deg, transparent 46%, #b4daf7 47%, #b4daf7 52%, transparent 53%), linear-gradient(135deg, transparent 46%, #b4daf7 47%, #b4daf7 52%, transparent 53%);
background-size: 3em 3em;
background-color: #ffffff;
opacity: 1">
    <div class="text-center m-auto bg-teal-700 text-white py-10 px-8 rounded-xl" data-aos="zoom-in">


    <p class="text-3xl font-sans font-semibold" >Hijrah Berkah</p>
    <p class="text-xl font-sans font-semibold">Partner Bisnis Terbaik Anda. Bersama Menggapai Keberkahan</p>

    </div>
</div>
@endpush

@section('container')
<div class="my-28">
    <p class="text-3xl font-semibold text-center my-4">Produk & Jasa</p>
    

<div class="mb-4 border-b border-gray-200 dark:border-gray-700">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center justify-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
        <li class="mx-20" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="product-tab" data-tabs-target="#product" type="button" role="tab" aria-controls="product" aria-selected="false">Produk</button>
        </li>
        <li class="mx-20" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="service-tab" data-tabs-target="#service" type="button" role="tab" aria-controls="service" aria-selected="false">Jasa</button>
        </li>
    </ul>
</div>
<div id="default-tab-content">
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="product" role="tabpanel" aria-labelledby="product-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">product tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>
    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="service" role="tabpanel" aria-labelledby="service-tab">
        <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Jasa tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
    </div>

</div>

</div>

@endsection

