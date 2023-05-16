<x-app-layout>

    <div class="bg-[#3d3d3d] min-h-screen">
        <<!doctype html>
        <html>
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <script src="https://cdn.tailwindcss.com"></script>
          <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        </head>
        <body class="bg-[#3d3d3d] antialiased" style="font-family: 'Bebas Neue', cursive;">
          <div class="container mx-auto mt-[10pt]">
            <p class="text-white text-[128px]" >
              SOLUSI MENGHITUNG SKOR
            </p>
            <div class="container">
              <p class="text-white text-[24px] max-w-[700px] text-justify">
                Proin at nunc neque. Nulla ac felis varius,
                posuere justo vitae, finibus purus. Suspendisse id bibendum eros.
                Mauris molestie velit ut ante sodales gravida. Curabitur iaculis vulputate tellus ut aliquam.
                Integer dui purus, lobortis ac mauris vitae, lacinia imperdiet odio.
              </p>
            </div>
            <div class="mt-[50px] grid grid-cols-3 gap-10">
        
                <a href="{{ url('/stopwatch') }}">
                <div class="container bg-black justify-center flex item-center rounded-lg shadow-[#212121] shadow-xl transition duration-150 hover:scale-110">
                  <p class="text-white text-[70px] self-center">
                    STOPWATCH
                  </p>
                </div>
              </a>
        
              <a href="{{ url('/bola') }}">
                <div class="container bg-black justify-center flex item-center rounded-lg shadow-[#212121] shadow-xl transition duration-150 hover:scale-110">
                  <p class="text-white text-[70px] self-center">
                    SEPAK BOLA
                  </p>
                </div>
              </a>
        
              <a href="{{ url('/futsal') }}">
                <div class="container bg-black justify-center flex item-center rounded-lg shadow-[#212121] shadow-xl transition duration-150 hover:scale-110">
                  <p class="text-white text-[70px] self-center">
                    FUTSAL
                  </p>
                </div>
              </a>
        
              <a href="{{ url('/basket') }}">
                <div class="container bg-black justify-center flex item-center rounded-lg shadow-[#212121] shadow-xl transition duration-150 hover:scale-110">
                  <p class="text-white text-[70px] self-center">
                    BASKET
                  </p>
                </div>
              </a>
        
              <a href="{{ url('/voli') }}">
                <div class="container bg-black justify-center flex item-center rounded-lg shadow-[#212121] shadow-xl transition duration-150 hover:scale-110">
                  <p class="text-white text-[70px] self-center">
                    VOLI
                  </p>
                </div>
              </a>
        
              <a href="{{ url('/bulutangkis') }}">
                <div class="container bg-black justify-center flex item-center rounded-lg shadow-[#212121] shadow-xl transition duration-150 hover:scale-110">
                  <p class="text-white text-[70px] self-center">
                    BULU TANGKIS
                  </p>
                </div>
              </a>
              
            </div>
          </div>
        </body>
        </html>
    </div>
</x-app-layout>
