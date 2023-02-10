<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MR | Login</title>
        <link rel="icon" type="img/png" sizes="16x16" href="img/Only.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>

    <body>
        <div class="fixed w-full h-full bg-no-repeat bg-cover bg-fixed "
        style="background-image: url('img/masuk.png')" />
        <div class="container mx-auto">

        <div class="justify-center bg-white rounded-[15px] w-[600px] h-[635px] font-inter mt-[6rem] mx-auto">
            <div class="flex justify-center">
                <img class="justify-center items-center mx-6 pt-[3rem]" src="img/logomasuk.png" alt="logo" style="width: 500px;">
            </div>

            @if(Session::has('status'))
            <div class="flex pt-2 mt-2 text-sm justify-center items-center text-red-400" role="alert">
                <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Info</span>
                <div>
                  <span class="font-medium">{{Session::get('message') }}</span>
                </div>
              </div>
            @endif

            <form action="" method="POST">
                @csrf
                <div class="form-login flex flex-col justify-center items-center my-4">

                    <div class="relative z-0 w-full px-[3rem] mb-6 group">
                        <input type="email" name="email" id="email" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-[#8766FF] appearance-none   focus:outline-none focus:ring-0 focus:border-[#17163E] peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-lg text-[#8766FF] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]  peer-focus:text-[#17163E] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>
                    <div class="relative z-0 w-full px-[3rem] mb-3 group">
                        <input type="password" name="password" id="password" class="block py-2.5 px-0 w-full text-lg text-gray-900 bg-transparent border-0 border-b-2 border-[#8766FF] appearance-none   focus:outline-none focus:ring-0 focus:border-[#17163E] peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-lg text-[#8766FF] duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]  peer-focus:text-[#17163E] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kata sandi</label>
                    </div>
            
                    <div class="flex items-center justify-between w-full px-[3rem] my-3">
                        <div>
                            <input type="checkbox" name="remember" id="remember" value="" class="mr-2"/>
                            <label class="mr-[3rem] text-[#1A1A1A] text-[18px]">Ingat saya</label>
                        </div>
                        <div>
                            <a href="/forgot-password"><span class="text-[#1A1A1A] font-semibold text-[18px]">Lupa kata sandi Anda?</span></a>
                        </div>
                    </div>
                </div>
                
                <div class="btn-masuk flex flex-col items-center justify-center">
                    <button type="submit" class="bg-[#17163E] hover:bg-[#2d2b54] text-[24px] text-white font-normal py-2 px-4 rounded-[8px] w-[510px]">
                        Masuk
                    </button>
                </div>
            </form>
                <span class="flex justify-center items-center my-[4rem] text-[#999999] text-[24px] font-semibold">2023 © Diskominfo Tuban</span>

        </div>
    </div>

</body>
</html>
