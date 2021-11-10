<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&display=swap"
        rel="stylesheet">
    
    <title>Lessgoo Guess Number</title>
    <style>
        body {
            background: url('img1/bg.jpg');
            background-size: cover;
            height: 100vh;
            background-repeat: repeat;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container py-5">\
        <header>
            <div class="row py-5">
                <div class="text-center container">
                    <h1 class="title"><strong>Welcome To Number Guessing Game</strong></h1>
                    <a href="#game">
                        <button type="button" class="mt-5 btn btn-primary btn-lg">
                            Click to Play
                        </button>
                    </a>
                </div>
            </div>
        </header>
        <br>
        <div class="py-5"></div>
        <br>
        <main id="game" class="mt-5">
            <div class="container">
                <div class="row round text-center mb-5 pt-5">
                    <form action="result.php" method="get">
                    <h3 class="text-center container py-3"><b>Guess a number between 1-10</b></h3>
                    <div class="row text-center py-5">
                        <h4><i>Enter a number below</i></h4>

                        <div class="form-outline">
                            <input type="number" id="guess" name="guessing" class="form-control" />
                            <label class="form-label" for="guess" placeholder="number input"></label>
                        </div>
                        <div id="button">
                            <button onclick="play()" id="my_btn" class="mt-5 btn btn-primary-outline btn-lg">GUESS</button>
                        </div>                   
                    </div>
                    </form>

                </div>
            </div>
        </main>
    </div>
    <!--Script-->
    <!-- <script src="skrip.js"></script> -->
</body>

</html>