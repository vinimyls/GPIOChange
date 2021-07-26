<?php 
if (isset($_POST['1ON']))
{
	exec('python change.py 7 1');
}
if (isset($_POST['1OFF']))
{
	exec('python change.py 7 0');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <style>
            body {
                background-image: linear-gradient(120deg, #2d4e7c, #457b9d);
                overflow: hidden;
            }

            .content {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                flex-direction: column;
                position: relative;
                top: -46px;
            }

            .btn {
                color: #f1faee;
                background-color: transparent;
                border: 3px solid #0d1e35;
                border-radius: 30px;
                padding: 10px 25px;
                font-weight: bold;
                text-transform: uppercase;
                font-size: 20px;
                font-family: 'Roboto Mono', monospace;
                text-align: center;
                margin: 0 20px;
            }

            .fa-lightbulb {
               font-size: 120px;
               margin: 0 40px;
               margin: 56px 0;
               transition: 0.5s;
               color: #ffba08;
               animation: 4s light ease infinite;
            }

            @keyframes light {
                0%{
                    text-shadow: 0px 0px 30px #ffd56a;
                    color: #ffba08;
                }

                50% {
                    text-shadow: none;
                    color: #ffba08;
                }

                100% {
                    text-shadow: 0px 0px 30px #ffd56a;
                    color: #ffba08;
                }
            }

        </style>

        <!-- Font Roboto Mono -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/29b9e325ff.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <form method="post">
            <div class="content">
                <i id="bulb" class="far fa-lightbulb"></i>
                <div class="btns-area">
                    <button id="on" class="btn" name="1ON">on</button>
                    <button id="off" class="btn" name="1OFF">off</button>
                </div>
            </div>
        </form>
    </body>
</html>