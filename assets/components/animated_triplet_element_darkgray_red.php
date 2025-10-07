<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Background</title>
        <meta name="description" content="Animated Triplet Element Background, Colors: Dark Gray, Red">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div id="background-dark">
            <div class="bg bg-element-dark-1"></div>
            <div class="bg bg-element-dark-2"></div>
            <div class="bg bg-element-dark-3"></div>
        </div>
        <style>
            #background-dark {
                position: fixed;
                top: 0;
                left: 0;
                width: 120vw;
                height: 100vh;
                background-image: linear-gradient(rgba(0,0,0), rgba(50,50,50));
                display: block;
                z-index: -10000;
            }
            .bg {
                position: absolute;
                width: 200vw;
                height: 100vh;
                left: -50%;
                transform-origin: bottom center;
                animation-timing-function: ease-in-out;
                animation-iteration-count: infinite;
            }
            .bg-element-dark-1 {
                background-image: linear-gradient(rgba(150,0,0), rgba(150,100,0,0.3));
                animation-name: moveUpDown1;
                z-index: -10;
                animation-duration: 3.1s;
            }
            .bg-element-dark-2 {
                background-image: linear-gradient(rgba(100,0,0), rgba(150,100,0,0.3));
                animation-name: moveUpDown2;
                z-index: -20;
                animation-duration: 3.3s;
            }
            .bg-element-dark-3 {
                background-image: linear-gradient(rgba(50,0,0), rgba(150,100,0,0.3));
                animation-name: moveUpDown3;
                z-index: -30;
                animation-duration: 3.0s;
            }
            @keyframes moveUpDown1 {
                0%, 100% {
                    transform: translateY(65vh) rotate(10deg);
                }
                50% {
                    transform: translateY(75vh) rotate(10deg);
                }
            }
            @keyframes moveUpDown2 {
                0%, 100% {
                    transform: translateY(55vh) rotate(10deg);
                }
                50% {
                    transform: translateY(70vh) rotate(10deg);
                }
            }
            @keyframes moveUpDown3 {
                0%, 100% {
                    transform: translateY(40vh) rotate(10deg);
                }
                50% {
                    transform: translateY(55vh) rotate(10deg);
                }
            }
        </style>
    </body>
</html>