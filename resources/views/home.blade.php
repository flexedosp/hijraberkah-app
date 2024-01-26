@extends('layouts.main')

@push('banner')    

<div class="flex items-center h-[100vh]" style="background: radial-gradient(circle at top left,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%) , radial-gradient(circle at bottom left,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%), radial-gradient(circle at top right ,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%) , radial-gradient(circle at bottom right,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%),radial-gradient(circle, transparent 25%, #ffffff  26%),linear-gradient(45deg, transparent 46%, #b4daf7 47%, #b4daf7 52%, transparent 53%), linear-gradient(135deg, transparent 46%, #b4daf7 47%, #6a99bd 52%, transparent 53%);
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
    <p id="produknjasa" class="text-3xl font-semibold text-center my-4">Bisnis Kami</p>
    <div class="py-10 flex lg:flex-wrap lg:justify-center lg:items-center overflow-y-auto">
        <div data-aos="flip-right" class="m-8 transition-all ease-in-out duration-300 max-w-[15rem] hover:scale-105 hover:shadow-lg  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg lg:h-[10rem] h-[12rem]" src="/img/stok_lezatmu.jpeg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">LezatMU</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Produk Mie Buatan Muhammadiyah dengan 3 rasa berbeda.</p>
                <div class="flex items-center">
                    <a href="#" class="group duration-500 hover:shadow-lg hover:scale-105 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="me-2">Baca Selengkapnya</span>
                        <i class=" me-2 duration-500 group-hover:rotate-90 fa-solid fa-arrow-right group-hover:"></i>
                 
                    </a>
                </div>
            </div>
        </div>
  


        <div data-aos="flip-right" class="m-8 transition-all ease-in-out duration-300 max-w-[15rem] hover:scale-105 hover:shadow-lg  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg lg:h-[10rem] h-[12rem]" src="/img/servis_laptop.jpg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Laptop Services</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jasa Servis dan Instal Ulang Laptop Terbaik di Jakarta Selatan </p>
                <div class="flex items-center">
                    <a href="#" class="group duration-500 hover:shadow-lg hover:scale-105 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="me-2">Baca Selengkapnya</span>
                        <i class=" me-2 duration-500 group-hover:rotate-90 fa-solid fa-arrow-right group-hover:"></i>
                 
                    </a>
                </div>
            </div>
        </div>



        <div data-aos="flip-right" class="m-8 transition-all ease-in-out duration-300 max-w-[15rem] hover:scale-105 hover:shadow-lg  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg lg:h-[10rem] h-[12rem]" src="/img/wisata_religi.jpg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Wisata Religi</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Tour ke Berbagai Kota & Masjid di wilayah Jabodetabek</p>
                <div class="flex items-center">
                    <a href="#" class="group duration-500 hover:shadow-lg hover:scale-105 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="me-2">Baca Selengkapnya</span>
                        <i class=" me-2 duration-500 group-hover:rotate-90 fa-solid fa-arrow-right group-hover:"></i>
                 
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

