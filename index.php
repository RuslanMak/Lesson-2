<?php
     $x = rand(0, 100);
//    $x = 8;

    echo $x . "<br>";

    $a = 1;
    $b = 1;

    do {
        if ($a > $x) {
            echo "x=" . $x . "<br>";
            echo "задуманное число НЕ входит в числовой ряд" . "<br>";
            break;
        } else {
            echo " go on" . "<br>";
            if ($a == $x) {
                echo "cool" . "<br>";
                echo "a= " . $a . "<br>";
                echo "x=" . $x . "<br>";
                echo "задуманное число входит в числовой ряд" . "<br>";
                break;
            } else {
                $c = $a;
                echo "c=a" . " =" . $c . "<br>";
                $a = $a + $b;
                echo "a= a+b =" . $a . "<br>";
                $b = $c;
                echo "b = c = " . $b . "<br><br>";
            }
        }
        echo "a=" . $a . " & " . "x=" . $x . "<br>" . "Go on for new start" . "<br>";
    }
    while ($a >! $x);
?>



