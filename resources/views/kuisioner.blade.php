@extends('layouts.sidebar')

@section('title', 'Kuisioner')

@section('content')

<div class="p-4 pt-[6rem] md:ml-[320px] bg-[#F0EDF9] font-inter">
    <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
        <div class="flex items-center justify-center bg-white rounded-[15px]">
            <span class="text-poppins md:text-[25px] lg:text-[40px] text-center font-semibold px-5 py-[30px]">KUESIONER CONTROL ENVIRONMENT EVALUATION (CEE) TERHADAP PEMERINTAH DAERAH KABUPATEN TUBAN</span>
        </div>

        <form action="">
        <div class="kuisioner-content">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">A. PENEGAKAN INTEGRITAS DAN NILAI ETIKA</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
        
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">B. KOMITMEN TERHADAP KOMPETENSI</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">C. KEPEMIMPINAN YANG KONDUSIF</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">D. PEMBENTUKAN STRUKTUR ORGANISASI YANG SESUAI DENGAN KEBUTUHAN</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">E. PENDELEGASIAN WEWENANG DAN TANGGUNG JAWAB YANG TEPAT</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">F. PENYUSUNAN DAN PENERAPAN KEBIJAKAN YANG SEHAT TENTANG PEMBINAAN SUMBER DAYA MANUSIA</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">G. PERWUJUDAN PERAN APARAT PENGAWASAN INTERN PEMERINTAH YANG EFEKTIF</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="kuisioner-content">
        <div class="inline-block h-full w-full my-4 border-2 rounded-[15px] bg-white">
            <h3 class="sm:text-[18px] md:text-[20px] lg:text-[24px] font-semibold text-white py-3 px-2 bg-[#17163E] rounded-t-[15px]">H. HUBUNGAN KERJA YANG BAIK DENGAN INSTANSI PEMERINTAH TERKAIT</h3>
            <form action="">
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">1. Pegawai mendapatkan pesan integritas & nilai etika rutin dari pimpinan instansi (Misalnya keteladanan, pesan moral dll)</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">2. Pemda telah memiliki aturan perilaku (misalnya kode etik, pakta integritas, dan aturan perilaku pegawai) yang telah dikomunikasikan kepada seluruh pegawai</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">3. Telah terdapat fungsi khusus di dalam instansi yang melayani pengaduan masyarakat atas pelanggaran aturan perilaku/kode etik</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
                <div class="question static px-[40px] py-[15px]">
                    <span class="lg:text-[20px] md:text-[18px] sm:[16px] font-normal">4. Pelanggaran aturan perilaku/kode etik telah ditindaklanjuti sesuai ketentuan yang berlaku</span>
                    <div class="flex items-center justify-center py-4">
                        <input type="radio" name="kuisioner" value="1" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="1" class="mr-8 ml-2">1</label>
                        <input type="radio" name="kuisioner" value="2" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="2" class="mr-8 ml-2">2</label>
                        <input type="radio" name="kuisioner" value="3" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="3" class="mr-8 ml-2">3</label>
                        <input type="radio" name="kuisioner" value="4" class="w-5 h-5 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
                        <label for="4" class="mr-8 ml-2">4</label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <div class="flex items-center justify-center my-4">
        <button type="submit" class="py-3 px-5 text-white text-[16px] bg-[#03C988] hover:bg-[#03c970] rounded-full">KIRIM JAWABAN</button>
    </div>
    </form>

</div>

@endsection