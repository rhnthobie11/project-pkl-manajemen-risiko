<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MR | @yield('title')</title>
    <link rel="icon" type="img/png" sizes="16x16" href="img/Only.png">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>
   
<nav class="fixed top-0 z-50 w-full bg-white border-b-2 border-gray-200 ">
   <div class="px-3 py-3 lg:px-5 lg:pl-3">
     <div class="flex items-center justify-between">
       <div class="flex items-center justify-start">
         <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
             <span class="sr-only">Open sidebar</span>
             <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
             </svg>
          </button>
          <div class="px-4">
            <img src="img/Logo.png" alt="Logo" class="w-64">
         </div>  
         <a href="#" class="flex ml-2 md:mr-24">
           <span class="flex ml-10 md:mr-24 self-center font-inter font-semibold text-[16px] lg:text-[20px] whitespace-nowrap text-black">SISTEM MANAJEMEN RISIKO DAERAH KABUPATEN TUBAN</span>
         </a>
       </div>
       <div class="flex items-center">
           <div class="flex items-center ml-3">
            <div class="flex items-center mx-5">
               <input type="text" class="placeholder-slate-400 text-sm  rounded-full border-none bg-[#F0EDF9] px-2 h-8" placeholder="Cari">
            </div>
             <div>
               <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                 <span class="sr-only">Open user menu</span>
                 <img class="w-8 h-8 rounded-full" src="https://cdn-icons-png.flaticon.com/128/3899/3899618.png" alt="user photo">
               </button>
             </div>
             <div class="z-50 hidden my-4 text-base list-none bg-[#17163E] divide-y divide-gray-100 rounded shadow" id="dropdown-user">
               <ul class="py-0" role="none">
                 <li>
                   <a href="/beranda" class="block px-4 py-2 text-sm text-white hover:bg-[#8766FF]" role="menuitem">Beranda</a>
                 </li>
                 <li>
                   <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-[#8766FF]" role="menuitem">Pengaturan</a>
                 </li>
                 <li>
                   <a href="/logout" class="flex items-center px-4 py-2 text-sm text-white hover:bg-[#8766FF]" role="menuitem"><svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex items-center mr-2 text-white" viewBox="0 0 24 24"><g fill="none"><path fill="currentColor" fill-rule="evenodd" d="M10.138 1.815A3 3 0 0 1 14 4.688v14.624a3 3 0 0 1-3.862 2.873l-6-1.8A3 3 0 0 1 2 17.512V6.488a3 3 0 0 1 2.138-2.873l6-1.8zM15 4a1 1 0 0 1 1-1h3a3 3 0 0 1 3 3v1a1 1 0 1 1-2 0V6a1 1 0 0 0-1-1h-3a1 1 0 0 1-1-1zm6 12a1 1 0 0 1 1 1v1a3 3 0 0 1-3 3h-3a1 1 0 1 1 0-2h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1zM9 11a1 1 0 1 0 0 2h.001a1 1 0 1 0 0-2H9z" clip-rule="evenodd"/><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12h5m0 0l-2-2m2 2l-2 2"/></g></svg>Keluar</a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
     </div>
   </div>
 </nav>
 
 <aside id="logo-sidebar" class="fixed font-inter top-0 left-0 z-40 w-[320px] h-screen pt-5 transition-transform -translate-x-full duration-300 bg-[#17163E] border-r border-gray-200 md:translate-x-0 " aria-label="Sidebar">
    <div class="h-full px-3 pb-4 pt-[5rem] overflow-y-auto bg-[#17163E]">
         <ul class="space-y-2">
            <li>
               <a href="/beranda" class="flex items-center p-2 text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988]">
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-6 h-6  transition duration-75" fill="currentColor" viewBox="0 0 24 24"><path d="M4 13h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1zm-1 7a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v4zm10 0a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-7a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v7zm1-10h6a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1h-6a1 1 0 0 0-1 1v5a1 1 0 0 0 1 1z"></path></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap ">Beranda</span>
               </a>
            </li>
            <li>
               <a href="/kuisioner" class="flex items-center p-2 text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988]">
                  <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-6 h-6transition duration-75" fill="currentColor" viewBox="0 0 24 24"><path d="M5 22h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2h-2a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2zM5 5h2v2h10V5h2v15H5V5z"></path><path d="m11 13.586-1.793-1.793-1.414 1.414L11 16.414l5.207-5.207-1.414-1.414z"></path></svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Kuisioner CEE Pemda</span>
               </a>
            </li>
            <div class="pt-8 pb-4 border-b-2 border-[#51506E]">
                 <span class="text-[#51506E]">MANAJEMEN RISIKO</span>
            </div>
            <li>
               <a href="/proses-manajemen" class="flex flex-1 items-center p-2 text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] mt-6">
                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6  transition duration-75 " fill="currentColor" viewBox="0 0 24 24"><path d="M4 21h15.893c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2H4c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zm0-2v-5h4v5H4zM14 7v5h-4V7h4zM8 7v5H4V7h4zm2 12v-5h4v5h-4zm6 0v-5h3.894v5H16zm3.893-7H16V7h3.893v5z"></path></svg>
                <span class="ml-3">Proses Manajemen Risiko</span>
              </a>
            </li>
            <li>
              <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center p-2 text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] mt-6" type="button"><span>Data Proses Manajemen Risiko</span><svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
              <!-- Dropdown menu -->
              <div id="dropdown" class="z-10 hidden bg-[#17163E] divide-y divide-gray-100 rounded-lg shadow w-[240px]">
                  <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Penetapan Konteks</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Identifikasi Risiko</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Analisis Risiko</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Daftar Prioritas Risiko</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Rencana Tindak Pengendalian (RTP)</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Pengkomunikasian</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Pemantauan</a>
                    </li>
                    <li>
                      <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Pelaksanaan RTP</a>
                    </li>
                  </ul>
              </div>
            </li>
         </ul>

        {{-- <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="flex items-center p-2 text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] mt-6" type="button"><span>Data Proses Manajemen Risiko</span><svg class="animate-bounce w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden bg-[#17163E] divide-y divide-gray-100 rounded-lg shadow w-[240px]">
            <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Penetapan Konteks</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Identifikasi Risiko</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Analisis Risiko</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Daftar Prioritas Risiko</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Rencana Tindak Pengendalian (RTP)</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Pengkomunikasian</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Pemantauan</a>
              </li>
              <li>
                <a href="#" class="block px-4 py-2 items-center text-base font-normal text-[#8980AC] rounded-lg hover:bg-[#6E658E] hover:text-white focus-within:text-white  focus:bg-[#03C988] m-1">Pelaksanaan RTP</a>
              </li>
            </ul>
        </div> --}}
        
    </div>
 </aside>
          
    <div>
    @yield('content')
    </div>

</body>
</html>