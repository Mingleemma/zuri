<!DOCTYPE html>

<html lang="en">
<head>
    <title>Php Assignment</title>
</head>
<body>
    
    <?php
        #randomly generating two interger numbers between 10 and 1000
        $firstNumber = rand(10,1000);
        $secondNumber = rand(10,100);

        #calculations on the two numbers generated
        $addition = $firstNumber + $secondNumber;

        $subtraction = $firstNumber - $secondNumber;

        $division = $firstNumber / $secondNumber;

        $multiplication = $firstNumber * $secondNumber;

        $modulus = $firstNumber % $secondNumber;

        #Human friendly output area
        echo '<h1> The Random Two Number Calculator </h1>';
        echo '<br/>';
        echo 'The randomly chosen numbers are  '. $firstNumber. '  and  '. $secondNumber.' !';
        echo '<br/>';
        echo '<br/>';
        echo 'The <b>addition</b> of the two numbers is '. $addition;
        echo '<br/>';
        echo 'The result of <b>subtracting</b> the first number from the second number is '. $subtraction;
        echo '<br/>';
        echo '<b>Multiplying</b> them gives you '. $multiplication;
        echo '<br/>';
        echo 'When <b>dividing</b> the first number by the second number you get '. $division;
        echo '<br/>';
        echo 'The <b>modulus</b> from the dividion is '. $modulus;


    ?>

</body>
</html>