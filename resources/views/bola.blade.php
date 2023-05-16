<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body class="bg-[#3d3d3d]" style="font-family: 'Bebas Neue', cursive;">
  <div class="grid grid-cols-3 justify-evenly">
    <a href="{{ url('/dashboard') }}">
        <img class=" object-none object-center scale-75 transition duration-150 hover:transform hover:scale-100" src="./Home.png">
    </a>
    <p class="text-white  text-[65px] justify-self-center">SEPAK BOLA</p>
    <img class="object-none object-center scale-50 justify-self-end	" src="Logo.png">
  </div>

  <div class="container mx-auto  bg-[#212121] rounded-2xl">
    <div class="grid grid-cols-10 grid-rows-5">
        <div class="col-start-2 col-end-4">
            <p contentEditable="true" class="text-white text-[50px] text-center">
                HOME
            </p>
        </div>
        <div contentEditable="true" class="col-start-8 col-end-10">
            <p class="text-white text-[50px] text-center">
                AWAY
            </p>
        </div>

        <div class="row-start-1 col-start-10">
            <div class="container mt-10 mx-auto border-4 rounded-2xl max-w-[100px]">
            <P class="text-white text-[30px] flex justify-center items-center text-center">
                HISTORY
            </P>  
            </div>
        </div>

        <div class="col-start-2 col-end-4 row-span-3">
            <div class="container max-w-[400px] max-h-[350px] border-4 border-white rounded-2xl flex justify-center">
                <p id="score1" class="text-white text-[400px] flex justify-center items-center text-center">
                    0
                </p>
            </div>
        </div>
        <div class="row-start-2 col-start-5 col-end-7 col-span-2 ">
            <p class="text-white text-center">
                Babak
            </p>
            <button id=babak"class="container mx-auto border-4 rounded-2xl max-w-[100px] max-h-[100px] flex justify-center">
                <P  class="text-white text-[85px] flex justify-center items-center text-center">
                    0
                </P>
            </button>
        </div>
            
        <div id="babak" class="col-start-8 col-end-10  row-span-3">
            <div class="container max-w-[400px] max-h-[350px] border-4 border-white rounded-2xl flex justify-center">
                <p id="score2" class="text-white text-[400px] flex justify-center items-center text-center">
                    0
                </p>
            </div>
        </div>

        <button id="homemin" class="row-start-5 col-start-2 ">
            <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                -1
            </P>  
            </div>
        </button>

        <button id="homeplus" class="row-start-5 col-start-3 ">
            <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                +1
            </P>  
            </div>
        </button>

        <button id="reset" class="row-start-5 col-start-5 col-end-7 ">
            <div class="container mx-auto border-4 rounded-2xl max-w-[100px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                RESET
            </P>  
            </div>
        </button>

        <buttom id="awaymin" class="row-start-5 col-start-8 ">
            <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                -1
            </P>  
            </div>
        </buttom>

        <buttom id="awayplus" class="row-start-5 col-start-9 ">
            <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                +1
            </P>  
            </div>
        </buttom>

    </div>
  </div>

  <script>
    const score1Element = document.getElementById('score1');
    const homeplusElement = document.getElementById('homeplus');
    const homeminElement = document.getElementById('homemin');
    const babakElement = document.getElementById('babak');
    const score2Element = document.getElementById('score2');
    const awayplusElement = document.getElementById('awayplus');
    const awayminElement = document.getElementById('awaymin');
    const resetElement = document.getElementById('reset');

    // Initialize the scores
    let score1 = 0;
    let score2 = 0;
    let babak = 0;

    // Button click event listeners
    homeplusElement.addEventLibabastener('click', () => {
      score1++;
      score1Element.textContent = score1;
    });

    homeminElement.addEventListener('click', () => {
      score1--;
      score1Element.textContent = score1;
    });

    babakElement.addEventListener('click', () => {
      babak++;
      babakElement.textContent = babak;
    });

    awayplusElement.addEventListener('click', () => {
      score2++;
      score2Element.textContent = score2;
    });

    awayminElement.addEventListener('click', () => {
      score2--;
      score2Element.textContent = score2;
    });
    
    resetElement.addEventListener('click', () => {
      score1 = 0;
      score2 = 0;
      babak = 0;
      score1Element.textContent = score1;
      score2Element.textContent = score2;
      babakElement.textContent = babak;
    });
  </script>
</body>
</html>