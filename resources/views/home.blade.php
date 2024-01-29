@extends('layouts.main')

@push('banner')    

<div class="flex items-center h-[100vh]" style="background: radial-gradient(circle at top left,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%) , radial-gradient(circle at bottom left,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%), radial-gradient(circle at top right ,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%) , radial-gradient(circle at bottom right,transparent 9%, #b4daf7 10% ,#b4daf7 15% , transparent 16%),radial-gradient(circle, transparent 25%, #ffffff  26%),linear-gradient(45deg, transparent 46%, #b4daf7 47%, #b4daf7 52%, transparent 53%), linear-gradient(135deg, transparent 46%, #b4daf7 47%, #6a99bd 52%, transparent 53%);
background-size: 3em 3em;
background-color: #ffffff;
opacity: 1">
    <div class="text-center m-auto bg-teal-700 text-white py-10 px-8 rounded-xl" data-aos="zoom-in">


    <p class="text-3xl font-sans font-semibold" >Hijrah Berkah</p>
    <p class="text-xl font-sans font-semibold">Partner Bisnis Terbaik Anda. Bersama Menggapai Keberkahan.</p>

    </div>
</div>
@endpush

@section('container')
<div id="produknjasa" class="my-28 target:pt-16">
    <p  class="text-3xl font-semibold text-center lg:my-4 mt-10 mb-4" data-aos="zoom-in">Bisnis Kami</p>
    <div class="lg:py-10 py-2 flex lg:flex-wrap lg:justify-center lg:items-center overflow-y-auto">
        <div data-aos="flip-right" data-aos-delay="500" class="my-1 mx-5 lg:m-8 transition-all ease-in-out duration-300 max-w-[15rem] hover:scale-105 hover:shadow-lg  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg lg:h-[10rem] h-[9rem]" src="/img/stok_lezatmu.jpeg" alt="" />
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
  


        <div data-aos="flip-right" data-aos-delay="500" class="my-1 mx-5 lg:m-8 transition-all ease-in-out duration-300 max-w-[15rem] hover:scale-105 hover:shadow-lg  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg lg:h-[10rem] h-[9rem]" src="/img/servis_laptop.jpg" alt="" />
            <div class="p-5">
                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-900 dark:text-white">Komputer Services</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Jasa Servis & Instal Ulang Komputer terbaik di Jakarta Selatan</p>
                <div class="flex items-center">
                    <a href="#" class="group duration-500 hover:shadow-lg hover:scale-105 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <span class="me-2">Baca Selengkapnya</span>
                        <i class=" me-2 duration-500 group-hover:rotate-90 fa-solid fa-arrow-right group-hover:"></i>
                 
                    </a>
                </div>
            </div>
        </div>



        <div data-aos="flip-right" data-aos-delay="500" class="my-1 mx-5 lg:m-8 transition-all ease-in-out duration-300 max-w-[15rem] hover:scale-105 hover:shadow-lg  bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <img class="rounded-t-lg lg:h-[10rem] h-[9rem]" src="/img/wisata_religi.jpg" alt="" />
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

<div id="reviewcostumer" class="my-28 target:pt-16">
    <p  class="text-3xl font-semibold text-center my-4" data-aos="zoom-in">Testimoni</p>
    

<div id="controls-carousel" class="relative w-full" data-carousel="slide" data-aos="zoom-in" data-aos-delay="300">
    <!-- Carousel wrapper -->
    <div class="relative lg:h-56 h-80 overflow-hidden rounded-lg md:h-96">
 <!-- Item 0 -->
 <div class="hidden lg:pt-5 lg:ps-[12.5cm]  ps-[1.2cm] duration-700 ease-in-out" data-carousel-item>
   
    <div class="block lg:w-[25rem] w-[13rem] p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2019</h5>
        <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2019 so far, in reverse chronological order.</p>
        </div>


</div>

         <!-- Item 1 -->
        <div class="hidden lg:pt-5 lg:ps-[12.5cm]  ps-[1.2cm] duration-700 ease-in-out" data-carousel-item>
   
                 <div class="block lg:w-[25rem] w-[13rem] p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                 
                     <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2020</h5>
                     <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2020 so far, in reverse chronological order.</p>
                     </div>

    
        </div>
        <!-- Item 2 -->
        <div class="hidden lg:pt-5 lg:ps-[12.5cm] ps-[1.2cm]  duration-700 ease-in-out" data-carousel-item="active">
            
                <div class="block lg:w-[25rem] w-[13rem] p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                    <p class="font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                </div>
       
    
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute hover:text-zinc-600 top-0 lg:start-52 start-0 lg:text-5xl z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <i class="fa-solid fa-chevron-left"></i>
            <span class="sr-only">Previous</span>
     
    </button>
    <button type="button" class="absolute hover:text-zinc-600 top-0 lg:end-52 end-0 lg:text-5xl z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <i class="fa-solid fa-chevron-right"></i>
        <span class="sr-only">Next</span>
    </button>
</div>

</div>

@endsection

