<!-- 14.B. Write a factorial program using for loop in PHP -->

<?php
    echo "Factorial of a number <br>";

    $num = 5;
    $fact = 1;

    for ($i=$num; $i>0; $i--) {
        $fact = $fact * $i;
    }

    echo "Factorial of $num is: $fact";
?>