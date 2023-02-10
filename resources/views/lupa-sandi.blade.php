<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MR | Forgot Password</title>
        <link rel="icon" type="img/png" sizes="16x16" href="img/Only.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        @vite(['resources/css/app.css','resources/js/app.js'])
    </head>

    <body>
        <div class="fixed w-full h-full bg-no-repeat bg-cover bg-fixed "
        style="background-image: url('img/masuk.png')" />
        <div class="container mx-auto">

        <div class="justify-center bg-white rounded-[15px] w-[600px] h-[635px] font-inter mt-[6rem] mx-auto">
            <div class="flex justify-center  ">
                <img class="justify-center items-center mx-6 pt-[3rem]" src="img/logomasuk.png" alt="logo" style="width: 500px;">
            </div>

                <div class="relative justify-center items-center my-6 mx-auto bg-[#F6F6F6] w-[500px] rounded-[15px] pb-8">
                    <span class="text-[20px] flex items-center justify-center text-center p-8 mb-2">Silakan menghubungi akun berikut untuk informasi terkait reset password:</span>
                    <div class="kontak flex items-center justify-center bg-[#00D95F] p-4 w-[400px] mx-auto rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-4"
                        width="60" height="60"
                        viewBox="0,0,256,256"
                        style="fill:#000000;">
                        <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(10.66667,10.66667)"><path d="M12.01172,2c-5.506,0 -9.98823,4.47838 -9.99023,9.98438c-0.001,1.76 0.45998,3.47819 1.33398,4.99219l-1.35547,5.02344l5.23242,-1.23633c1.459,0.796 3.10144,1.21384 4.77344,1.21484h0.00391c5.505,0 9.98528,-4.47937 9.98828,-9.98437c0.002,-2.669 -1.03588,-5.17841 -2.92187,-7.06641c-1.886,-1.887 -4.39245,-2.92673 -7.06445,-2.92773zM12.00977,4c2.136,0.001 4.14334,0.8338 5.65234,2.3418c1.509,1.51 2.33794,3.51639 2.33594,5.65039c-0.002,4.404 -3.58423,7.98633 -7.99023,7.98633c-1.333,-0.001 -2.65341,-0.3357 -3.81641,-0.9707l-0.67383,-0.36719l-0.74414,0.17578l-1.96875,0.46484l0.48047,-1.78516l0.2168,-0.80078l-0.41406,-0.71875c-0.698,-1.208 -1.06741,-2.58919 -1.06641,-3.99219c0.002,-4.402 3.58528,-7.98437 7.98828,-7.98437zM8.47656,7.375c-0.167,0 -0.43702,0.0625 -0.66602,0.3125c-0.229,0.249 -0.875,0.85208 -0.875,2.08008c0,1.228 0.89453,2.41503 1.01953,2.58203c0.124,0.166 1.72667,2.76563 4.26367,3.76563c2.108,0.831 2.53614,0.667 2.99414,0.625c0.458,-0.041 1.47755,-0.60255 1.68555,-1.18555c0.208,-0.583 0.20848,-1.0845 0.14648,-1.1875c-0.062,-0.104 -0.22852,-0.16602 -0.47852,-0.29102c-0.249,-0.125 -1.47608,-0.72755 -1.70508,-0.81055c-0.229,-0.083 -0.3965,-0.125 -0.5625,0.125c-0.166,0.25 -0.64306,0.81056 -0.78906,0.97656c-0.146,0.167 -0.29102,0.18945 -0.54102,0.06445c-0.25,-0.126 -1.05381,-0.39024 -2.00781,-1.24024c-0.742,-0.661 -1.24267,-1.47656 -1.38867,-1.72656c-0.145,-0.249 -0.01367,-0.38577 0.11133,-0.50977c0.112,-0.112 0.24805,-0.2915 0.37305,-0.4375c0.124,-0.146 0.167,-0.25002 0.25,-0.41602c0.083,-0.166 0.04051,-0.3125 -0.02149,-0.4375c-0.062,-0.125 -0.54753,-1.35756 -0.76953,-1.85156c-0.187,-0.415 -0.3845,-0.42464 -0.5625,-0.43164c-0.145,-0.006 -0.31056,-0.00586 -0.47656,-0.00586z"></path></g></g>
                        </svg>
                        <span class="flex items-center justify-center font-semibold text-[24px] text-white">Hubungi via Whatsapp</span>
                    </div>
                </div>
                
                <div class="btn-back flex items-center justify-center">
                    <div class="flex items-center justify-center mx-auto bg-[#17163E] hover:bg-[#2d2b54] text-white text-center text-[24px] font-normal py-4 px-4 rounded-[8px] w-[500px] gap-2">
                        {{-- <img src="img/back-icon.png" alt="back" class="flex w-[24px]"> --}}
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.625 21.8591L7.20005 13.4591C7.10005 13.3591 7.02938 13.2507 6.98805 13.1341C6.94605 13.0174 6.92505 12.8924 6.92505 12.7591C6.92505 12.6257 6.94605 12.5007 6.98805 12.3841C7.02938 12.2674 7.10005 12.1591 7.20005 12.0591L15.625 3.63406C15.8584 3.40072 16.15 3.28406 16.5 3.28406C16.85 3.28406 17.15 3.40906 17.4 3.65906C17.65 3.90906 17.775 4.20072 17.775 4.53406C17.775 4.86739 17.65 5.15906 17.4 5.40906L10.05 12.7591L17.4 20.1091C17.6334 20.3424 17.75 20.6297 17.75 20.9711C17.75 21.3131 17.625 21.6091 17.375 21.8591C17.125 22.1091 16.8334 22.2341 16.5 22.2341C16.1667 22.2341 15.875 22.1091 15.625 21.8591Z" fill="white"/>
                            </svg>
                        <a href="/login">
                            Kembali ke halaman masuk
                        </a>
                    </div>
                </div>
            </div>

    </div>

</body>
</html>
