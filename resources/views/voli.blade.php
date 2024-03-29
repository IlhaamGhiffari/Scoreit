<?php
use App\Models\Voli;
use Illuminate\Support\Facades\Auth;
$user = Auth::user();
$history = Voli::where('user_id', $user->id)->get();
?>

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
    <p class="text-white  text-[65px] justify-self-center">Voli</p>
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
                <p class="text-white text-[50px] text-center" name="away" >
                    AWAY
                </p>
            </div>
            <div class="col-start-2 col-end-4 row-span-3">
                <div class="container mb-[15px] max-w-[400px] max-h-[350px] border-4 border-white rounded-2xl flex justify-center">
                    <p id="score1" class="text-white text-[400px] flex justify-center items-center text-center">
                        0
                    </p>
                </div>
            </div>
        
            <div class="row-start-2 col-start-4 col-end-5">
                <div class="container mb-[15px] mx-auto border-4 rounded-2xl max-w-[100px] max-h-[100px] flex justify-center">
                    <button id="set1" class="text-white text-[85px] flex justify-center items-center text-center">
                        0
                    </button>
                </div>
            </div>
            <div class="row-start-2 col-start-7 col-end-8">
                <div class="container mx-auto border-4 rounded-2xl max-w-[100px] max-h-[100px] flex justify-center">
                    <button  id="set2" class="text-white text-[85px] flex justify-center items-center text-center">
                        0
                    </button>
                </div>
            </div>
        
            <div class="col-start-8 col-end-10  row-span-3">
                <div class="container max-w-[400px] max-h-[350px] border-4 border-white rounded-2xl flex justify-center">
                    <p id="score2" class="text-white text-[400px] flex justify-center items-center text-center">
                        0
                    </p>
                </div>
            </div>
            <button class="row-start-5 col-start-2 ">
                <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
                <P id="homemin" class="text-white text-[40px] flex justify-center items-center text-center">
                    -1
                </P>
                </div>
            </button>
            <button class="row-start-5 col-start-3 ">
                <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
                <P id="homeplus" class="text-white text-[40px] flex justify-center items-center text-center">
                    +1
                </P>
                </div>
            </button>
        
            <button id="reset" class="row-start-5 col-start-5 col-end-7 ">
                <div class="container mx-auto border-4 rounded-2xl max-w-[100px]">
                <P  class="text-white text-[40px] flex justify-center items-center text-center">
                    RESET
                </P>
                </div>
            </button>
            <button class="row-start-5 col-start-8 ">
                <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
                <P id="awaymin" class="text-white text-[40px] flex justify-center items-center text-center">
                    -1
                </P>
                </div>
            </button>
            <button class="row-start-5 col-start-9 ">
                <div class="container mx-auto border-4 rounded-2xl max-w-[80px]">
                <P id="awayplus" class="text-white text-[40px] flex justify-center items-center text-center">
                    +1
                </P>
                </div>
            </button>
            <br>

 

    </div>
  </div>
  <form method="POST"  action="{{ config('') }}/voli" class="bg-[#212121] mt-10 rounded-xl mx-10 text-white text-xl p-4 flex-cols justify-items-center">
    @csrf
    <h1> Create Match History</h1>
    <div class="form-input">
        <label>Home Team</label> <input class="border-4 border-white rounded-md ml-6 bg-black" type="text" name="home">
    </div>

    <div class="form-input mt-4">
        <label>Home Score</label> <input class="border-4 border-white rounded-md ml-6 bg-black" type="number" name="score1">
    </div>

    <div class="form-input mt-6">
        <label>Away Team</label> <input class="border-4 border-white rounded-md ml-6 bg-black" type="text" name="away">
    </div>

    <div class="form-input mt-4">
        <label>Away Score</label> <input class="border-4 border-white rounded-md ml-6 bg-black" type="number" name="score2">
    </div>
    <div class="form-input mt-4">
        <label>set</label> <input class="border-4 border-white rounded-md ml-6 bg-black" type="number" name="set">
    </div>

    <div class="form-input mt-4">
        <label>note</label> <input class="border-4 border-white rounded-md ml-6 bg-black" type="text" name="note">
    </div>
    
    <button class="border-white border-4 p-2 mt-4 rounded-lg hover:border-gray-900">Submit</button>
</form>

<div class="relative overflow-x-auto m-10">
    <table class="w-full text-sm text-left text-white ">
        <thead class="text-xl text-white uppercase bg-[#212121]">
            <tr>
                <th scope="col" class="px-6 py-3">
                    set
                </th>
                <th scope="col" class="px-6 py-3">
                    Home Team
                </th>
                <th scope="col" class="px-6 py-3">
                    Score
                </th>
                <th scope="col" class="px-6 py-3">
                    score
                </th>
                <th scope="col" class="px-6 py-3">
                    Away Team
                </th>
                <th scope="col" class="px-6 py-3">
                    notes
                </th>
            </tr>
        </thead>
        <tbody>
            @if ($history)
            @foreach ($history as $his)
                
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $his->set }}
                </th>
                <td class="px-6 py-4">
                    {{ $his->home }}
                </td>
                <td class="px-6 py-4">
                    {{ $his->score1 }}
                </td>
                <td class="px-6 py-4">
                    {{ $his->score2 }}
                </td>
                <td class="px-6 py-4">
                    {{ $his->away }}
                </td>
                <td class="px-6 py-4">
                    {{ $his->note }}
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>
</div>

  <script>
    const score1Element = document.getElementById('score1');
    const set1Element = document.getElementById('set1');
    const homeplusElement = document.getElementById('homeplus');
    const homeminElement = document.getElementById('homemin');
    const score2Element = document.getElementById('score2');
    const set2Element = document.getElementById('set2');
    const awayplusElement = document.getElementById('awayplus');
    const awayminElement = document.getElementById('awaymin');
    const resetElement = document.getElementById('reset');

    // Initialize the scores
    let score1 = 0;
    let score2 = 0;
    let set1 = 0;
    let set2 = 0;


    // Button click event listeners
    homeplusElement.addEventListener('click', () => {
      score1++;
      score1Element.textContent = score1;
    });

    homeminElement.addEventListener('click', () => {
      score1--;
      score1Element.textContent = score1;
    });

    set1Element.addEventListener('click', () => {
      set1++;
      set1Element.textContent = set1;
    });

    awayplusElement.addEventListener('click', () => {
      score2++;
      score2Element.textContent = score2;
    });

    awayminElement.addEventListener('click', () => {
      score2--;
      score2Element.textContent = score2;
    });

    set2Element.addEventListener('click', () => {
      set2++;
      set2Element.textContent = set2;
    });



    resetElement.addEventListener('click', () => {
      score1 = 0;
      score2 = 0;
      set1 = 0;
      set2 = 0;
      score1Element.textContent = score1;
      score2Element.textContent = score2;
      set1Element.textContent = set1;
      set2Element.textContent = set2;
    });
  </script>
</body>
</html>