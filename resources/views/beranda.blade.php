@extends('layouts.sidebar')

@section('title', 'Beranda')

@section('content')


<div class="p-4 pt-[6rem] md:ml-[320px] bg-[#F0EDF9] font-inter">
       {{-- <span>anda login sebagai : {{ Auth::user()->name }} dengan role : <b>{{ Auth::user()->role->name }}</b></span> --}}
       <div>
           <img src="img/Section 1.png" alt="Hero">
           <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
               <div class="px-[40px] py-[60px]">
                  <div class="text-[20px] font-medium pb-4">
                     <h3 class="text-[#8980AC]">Unit Organisasi Perangkat Daerah</h3>
                     <p class="text-[#040404]">Badan Perencanaan Pembangunan, Penelitian, dan Pengembangan Daerah</p>
                  </div>
                  <div class="text-[20px] font-medium pb-4">
                     <h3 class="text-[#8980AC]">Periode Renstra</h3>
                     <p class="text-[#040404]">Tahun 2021 - 2026</p>
                  </div>
                  <div class="text-[20px] font-medium pb-4">
                     <h3 class="text-[#8980AC]">Alamat Unit</h3>
                     <p class="text-[#040404]">Jl. Kartini No.2, Tuban, Jawa Timur - Indonesia</p>
                  </div>
                  <div class="text-[20px] font-medium">
                     <h3 class="text-[#8980AC]">Email</h3>
                     <p class="text-[#040404]">bappeda@tubankab.go.id</p>
                  </div>
               </div>
           </div>
           <div class="flex items-center justify-center h-full w-full  rounded-[15px] bg-[#17163E]">
               <span class="text-poppins text-white text-[20px] px-6 py-5">Isi Kuesioner Survei Control Environment Evaluation (CEE) Pemerintahan Daerah </span>
               <a href="/kuisioner" class="button text-white text-[16px] bg-[#03C988] px-4 py-2 rounded-full">Isi Kuisioner</a>
           </div>
        </div>
     </div>


@endsection