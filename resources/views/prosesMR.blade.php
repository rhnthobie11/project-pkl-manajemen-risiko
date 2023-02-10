@extends('layouts.sidebar')

@section('title', 'Proses Manajemen Risiko')

@section('content')

<div class="p-4 pt-[5rem] md:ml-[320px] bg-[#F0EDF9] font-inter">
        <div class="inline-block h-screen w-full my-4 border-2 rounded-[15px] bg-white">
            <div class="mb-10">
                <span class="text-[40px] font-semibold flex items-center justify-center pt-10 pb-6 mx-10 border-b-4 border-[#F0EDF9]">PROSES MANAJEMEN RISIKO</span>
            </div>

            <div class="list-proses flex flex-wrap mx-10 justify-center">
                <div class="flex items-center justify-evenly gap-6 my-4 text-white text-[22px] text-center font-semibold">
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg "><a href="#">PENETAPAN KONTEKS</a></button>
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg "><a href="#">IDENTIFIKASI RISIKO</a></button>
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg "><a href="#">ANALISIS RISIKO</a></button>
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg "><a href="#">DAFTAR PRIORITAS RISIKO</a></button>
                </div>
                <div class="flex items-center justify-evenly gap-6 my-8 text-white text-[22px] text-center font-semibold">
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg"><a href="#">RENCANA TINDAK PENGENDALIAN (RTP)</a></button>
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg"><a href="#">PENGKOMUNIKASIAN</a></button>
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg"><a href="#">PEMANTAUAN</a></button>
                    <button class="bg-gradient-to-r from-[#03C988] to-[#13005A] hover:from-[#13005A] hover:to-[#03C988] w-[280px] h-[150px] px-9 mx-auto rounded-lg"><a href="#">PELAKSANAAN RTP</a></button>
                </div>
            </div>

        </div>
</div>


@endsection