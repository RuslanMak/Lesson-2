<?php
    $y = rand(0, 100);
    $x = 8;

    echo $x . "<br>";

    $a = 1;
    $b = 1;


    do {
        if ($a > $x) {
            echo "задуманное число НЕ входит в числовой ряд" . "<br>";
        } else {
            echo " go on" . "<br>";
            if ($a == $x) {
                echo "cool" . "<br>";
                echo "a= " . $a . "<br>";
                echo "b=" . $b . "<br>";
                echo "задуманное число входит в числовой ряд";
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
        echo $a . " & " . $x . "<br>";
    }
    while ($a <= $x);


    //or we can do like here

//    do {
//        if ($a > $x) {
//            echo "задуманное число НЕ входит в числовой ряд" . "<br>";
//        } elseif ($a == $x) {
//            echo "задуманное число входит в числовой ряд";
//            break;
//        } else {
//            $c = $a;
//            $a = $a + $b;
//            $b = $c;
//        }
//    }
//    while ($a <= $x);
?>



