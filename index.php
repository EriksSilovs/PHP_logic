<?php
    include_once "main.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP 5.6 Logic</title>
 
</head>
<body>
    <br><br>

    <form method="POST" id="form" action="" >
        input value:  <input type="text" name="inp_value" value="<?php echo $inp; ?>"  pattern="\d*"  required>
        length of password: <input type="text" name="pwd_lenght"  value="<?php echo $len; ?>"  pattern="\d*"  required>
        <input type="submit" name="submit" id="submit" value="GENERATE PASSWORD"/>
    </form>

    <div class="container"> 
    <h1>Task 1</h1>
    <p>Generate numbers from 1 till input value</p>
        <h3>
        <?php   
        // generates list of numbers from 1 till provided value (N) 
        echo "Numbers: ".  $my_var0 ;
        ?>
        </h3>
    </div>

    <div class="container">
    <h1>Task 2</h1>
        <p>Display All Prime numbers from task 1</p>
        <h3>
            <?php
            echo "Prime numbers: ". $my_var ;
            ?> 
        </h3>
    </div>

    <div class="container">
        <h1>Task 3</h1>
        <p>Find Palindroms</p>
        <h3>
            <?php
                echo pol();
            ?> 
        </h3>
    </div>

    <div class="container">
        <h1>Task 4</h1>
        <p>Generate random password from  Prime numbers</p>
        <h3>
            <?php
                echo "Password: ". primePWD();
            ?> 
        </h3>
    </div>

</body>
</html>