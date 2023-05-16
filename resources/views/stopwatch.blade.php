<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="bg-[#3d3d3d]" style="font-family: 'Bebas Neue', cursive">
    <div class="grid grid-cols-3 justify-evenly">
        <a href="{{ url('/dashboard') }}">
            <img class=" object-none object-center scale-75 transition duration-150 hover:transform hover:scale-100" src="./Home.png">
        </a>
      <p class="text-white text-[70px] justify-self-center">STOPWATCH</p>
      <img
        class="object-none object-center scale-50 justify-self-end"
        src="Logo.png"
      />
    </div>


    <div class="container p-[200px] mx-auto bg-[#212121] rounded-2xl">
      <div id="time" class="mx-auto border-4 border-white rounded-2xl">
        <p id="time" class="digit text-white text-[200px] text-center"><span id="minutes">00</span>:<span id="seconds">00</span>:<span id="milliseconds">00</span></p>
      </div> 
        
      <div class="container mx-auto flex justify-center mt-10">
        <button onclick="start()" class="btn container mx-auto border-4 rounded-2xl max-w-[100px] text-white text-[40px] flex justify-center items-center text-center">
              Start 
        </button>
        <button onclick="stop()" class="btn container mx-auto border-4 rounded-2xl max-w-[100px] text-white text-[40px] flex justify-center items-center text-center">
              Stop
        </button>
        <button onclick="reset()" class="btn container mx-auto border-4 rounded-2xl max-w-[100px] text-white text-[40px] flex justify-center items-center text-center">
              Reset
        </button>
        
      
      </div>
    </div>

    <script type="text/javascript">
      let minutes = 0;
      let seconds = 0;
      let milliseconds = 0;

      let interval;

      function start() {
          interval = setInterval(() => {
              milliseconds += 10;

              if (milliseconds >= 1000) {
                  milliseconds = 0;
                  seconds++;
              }

              if (seconds >= 60) {
                  seconds = 0;
                  minutes++;
              }

              document.getElementById('minutes').textContent = pad(minutes);
              document.getElementById('seconds').textContent = pad(seconds);
              document.getElementById('milliseconds').textContent = pad(milliseconds / 10);
          }, 10);
      }

      function stop() {
          clearInterval(interval);
      }

      function reset() {
          stop();

          minutes = 0;
          seconds = 0;
          milliseconds = 0;

          document.getElementById('minutes').textContent = '00';
          document.getElementById('seconds').textContent = '00';
          document.getElementById('milliseconds').textContent = '00';
      }

      function pad(number) {
          return number.toString().padStart(2, '0');
      }
  </script>
  

  </body>
</html>


