<?php
    $user_guess = $_GET['guessing'];
    $guessed_nums = [];
    
    $answer = rand(1,10);

function play($user_guess, $answer){
    if( $user_guess < 1 ||  $user_guess > 10){
        echo "<script> alert('Your guess is out of range');";
        // return $message = "wrong answer"; 
        
    }
    else {
        if( $user_guess < $answer){
            return "Your guess is too low.";
            
        }
        else if( $user_guess > $answer){
            return "Your guess is too high.";
        }
        else if( $user_guess == $answer){
            return "Yeayy You WIN!";      
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;1,100;1,200;1,300&display=swap"
        rel="stylesheet">
    <style>
        body {
            background: url('img1/bg.jpg');
            background-size: cover;
            height: 100vh;
            background-repeat: repeat;
            width: 100%;
            color: white;
        }
    </style>       
</head>
<body>
    <div class="container">       
        <div class="py-5">
            <div class="pt-5 d-flex justify-content-center ">
                <h1>Your number is : <b><?php echo $user_guess ?></b></h1>        
            </div>
            <div class="d-flex justify-content-center">
                <h1><b><?php  echo play($user_guess, $answer) ?></b> </h1>
                
            </div> 
        </div>
     
    </div>
</body>
</html>