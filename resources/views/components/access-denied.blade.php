<style>
    .nedry {
        position: relative;
        top: 0;
        left: 0;
    }

    htlm,
    .container {
        width: 95vw;
        /* height: 100%; */
        bottom: 0;
        /* position: absolute; */
    }

    .nedry-body {
        position: relative;
        top: 0;
        left: 0;
    }

    .nedry-head {
        position: absolute;
        top: 35px;
        left: 140px;
    }

    .nedry-hand {
        position: absolute;
        top: 155px;
        left: 265px;
        animation: handFrames linear 1s;
        animation-iteration-count: infinite;
        transform-origin: 50% 100%;
        -webkit-animation: handFrames linear 0.7s;
        -webkit-animation-iteration-count: infinite;
        -webkit-transform-origin: 50% 100%;
    }

    @keyframes handFrames {
        0% {
            transform: rotate(-10deg);
        }

        50% {
            transform: rotate(14deg);
        }

        100% {
            transform: rotate(-10deg);
        }
    }
</style>



<!-- Main modal -->
<div id="timeline-modal" tabindex="-1" aria-hidden="true"
    class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-md max-h-full mx-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-red-500 dark:text-white">
                    Access denied
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm h-8 w-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-dismiss-target="#timeline-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="container" onclick="onplay()">
                <div class="nedry">
                    <img class="nedry-body" src="./img/body.png">
                    <img class="nedry-head" src="./img/head.png">
                    <img class="nedry-hand" src="./img/hand.png">
                </div>
                <audio id="player" autoplay loop>
                    <source src="./sound/ahahah.mp3" type="audio/mp3">
                </audio>
                <input id="unmuteButton" type="button" onclick="playSound()" value="🔈 Unmute" />
            </div>
        </div>
    </div>
</div>




<script>
    const sound = document.getElementById('player');


    sound.addEventListener('play', (event) => {
        document.getElementById("unmuteButton").hidden = true;
    });
    sound.addEventListener('pause', (event) => {
        document.getElementById("unmuteButton").hidden = false;
    });

    document.body.addEventListener("click", (event) => {
        // document.getElementById("unmuteButton").hidden = false;
        document.getElementById("player").pause();
    })


    function onplay() {
        document.getElementById("player").play();
    }
</script>
