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
<body class="bg-[#3d3d3d] h-[1000px]" style="font-family: 'Bebas Neue', cursive;">
  <div class="grid grid-cols-3  justify-evenly">
    <a href="{{ url('/dashboard') }}">
        <img class=" object-none object-center scale-75 transition duration-150 hover:transform hover:scale-100" src="./Home.png">
    </a>
    <p class="text-white  text-[65px] justify-self-center">BASKET</p>
    <img class="object-none object-center scale-50 justify-self-end	" src="Logo.png">
  </div>

  <div class="container mx-auto  bg-[#212121] rounded-2xl">
    <div class="grid grid-cols-10 grid-rows-5">
        <div class="col-start-2 col-end-4">
            <p contentEditable="true" class="text-white text-[50px] text-center" >
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
            <p class="text-white  text-[30px] text-center">
                Babak
            </p>
            <button class="container mx-auto border-4 rounded-2xl max-w-[100px] max-h-[100px] flex justify-center">
                <P id="babak" class="text-white text-[85px] flex justify-center items-center text-center">
                    0
                </P>
            </button>
        </div>
        <div class="row-start-3 col-start-4 col-end-6">
            <p class="text-[30px] text-white text-center">
                Foul
            </p>
            <button id="foulhome" class="container mx-auto border-4 rounded-2xl max-w-[100px] max-h-[100px] flex justify-center">
                <P class="text-white text-[85px] flex justify-center items-center text-center">
                    0
                </P>  
            </button>
        </div>
        <div class="row-start-3 col-start-6 col-end-8">
            <p class="text-[30px] text-white text-center">
                Foul
            </p>
            <button id="foulaway" class="container mx-auto border-4 rounded-2xl max-w-[100px] max-h-[100px] flex justify-center">
                <P class="text-white text-[85px] flex justify-center items-center text-center">
                    0
                </P>  
            </button>
        </div>
        
        <div class="col-start-8 col-end-10  row-span-3">
            <div class="container max-w-[400px] max-h-[350px] border-4 border-white rounded-2xl flex justify-center">
                <p id="score2" class="text-white text-[400px] flex justify-center items-center text-center">
                    0
                </p>
            </div>
        </div>

        <div class="row-start-5 col-start-2 col-span-2 flex justify-center">
            <button id="homeplus1" class="container mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                +1
            </P>  
            </button>

            <button id="homeplus2" class="container mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
                <P class="text-white text-[40px] flex justify-center items-center text-center">
                    +2
                </P>  
            </button>
            <button id="homeplus3" class="container mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
                <P class="text-white text-[40px] flex justify-center items-center text-center">
                    +3
                </P>  
            </button>   
        </div>

        <div class="row-start-6 col-start-2 col-span-2 flex justify-center ">
            <button id="homemin" class="container mb-[15px] mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                -1
            </P>  
            </button>
        </div>
        
        <div class="row-start-5 col-start-5 col-end-7 ">
            <button id="reset" class="container mx-auto border-4 rounded-2xl max-w-[100px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                RESET
            </P>  
            </button>
        </div>

        <div class="row-start-5 col-start-8 col-span-2 flex justify-center">
            <button id="awayplus1" class="container mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                +1
            </P>  
            </button>

            <buttom class="container mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
                <P id="awayplus2" class="text-white text-[40px] flex justify-center items-center text-center">
                    +2
                </P>  
            </buttom>
            <buttom id="awayplus3" class="container mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
                <P class="text-white text-[40px] flex justify-center items-center text-center">
                    +3
                </P>  
            </buttom>   
        </div>

        <div class="row-start-6 col-start-8 col-span-2 flex justify-center ">
            <button id="awaymin" class="container mb-[15px] mx-auto border-4 rounded-2xl max-w-[80px] max-h-[80px]">
            <P class="text-white text-[40px] flex justify-center items-center text-center">
                -1
            </P>  
            </button>
        </div>

    </div>
  </div>

  <script>
    const score1Element = document.getElementById('score1');
    const babakElement = document.getElementById('babak');
    const foulhomeElement = document.getElementById('foulhome');
    const foulawayElement = document.getElementById('foulaway');
    const homeplus1Element = document.getElementById('homeplus1');
    const homeplus2Element = document.getElementById('homeplus2');
    const homeplu3sElement = document.getElementById('homeplus3');
    const homeminElement = document.getElementById('homemin');
    const score2Element = document.getElementById('score2');
    const awayplus1Element = document.getElementById('awayplus1');
    const awayplus1Element = document.getElementById('awayplus2');
    const awayplus1Element = document.getElementById('awayplus3');
    const awayminElement = document.getElementById('awaymin');
    const resetElement = document.getElementById('reset'); 
    
    // Initialize the scores
    let score1 = 0;
    let score2 = 0;
    let babak = 0;
    let foulhome = 0;
    let foulaway = 0;

    // Button click event listeners
    homeplus1Element.addEventListener('click', () => {
      score1++;
      score1Element.textContent = score1;
    });

    homeplus2Element.addEventListener('click', () => {
      score1+=2;
      score1Element.textContent = score1;
    });

    homeplus3Element.addEventListener('click', () => {
      score1+=3;
      score1Element.textContent = score1;
    });

    homeminElement.addEventListener('click', () => {
      score1--;
      score1Element.textContent = score1;
    });

    babak.addEventListener('click', () => {
      babak++;
      set1Element.textContent = babak;
    });

    awayplus1Element.addEventListener('click', () => {
      score2++;
      score2Element.textContent = score2;
    });

    awayplus2Element.addEventListener('click', () => {
      score2+=2;
      score2Element.textContent = score2;
    });

    awayplus3Element.addEventListener('click', () => {
      score2+=3;
      score2Element.textContent = score2;
    });

    awayminElement.addEventListener('click', () => {
      score2--;
      score2Element.textContent = score2;
    });

    resetElement.addEventListener('click', () => {
      score1 = 0;
      score2 = 0;
      foulhome = 0;
      foulaway = 0;
      babak = 0;
      score1Element.textContent = score1;
      score2Element.textContent = score2;
      foulhomeElement.textContent = foulhome;
      foulawayElement.textContent = foulaway;
    });
  </script>
</body>    
</html>