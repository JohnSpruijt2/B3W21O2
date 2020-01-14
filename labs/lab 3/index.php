
    <?php
    $number1 = mt_rand(1,100);
    $number2 = mt_rand(1,100);
    $_6 = 6;
    print $number1."+".$number2."=";
    print $number1+$number2;
    print "<br>";
    print $number1."-".$number2."=";
    print $number1-$number2;
    print "<br>";
    print $number1."*".$number2."=".$number1*$number2;
    print "<br>";
    print $number1."/".$number2."=".$number1/$number2;
    print "<br>";
    print "<br>";
    $numbers = array(3,5,8,12);
    
        foreach ($numbers as $value) {
            for ($i=0;$i<11;$i++) {
                print $value."*".$i."=".$value*$i;
                print "<br>";
            };
            print "<br>";
        };
        


    ?>