<!DOCTYPE html>
<html>
    <head>  
        <meta charset="utf8"> 
        <meta name="description" content="Introdution to HTML">
        <meta name="keyword" content="HTML, DBMS ,CSS">
        <meta name="author" content="Kanansak Sujaree">
        <meta name="viweport" content="width=device-width , initial-scale=1.0">
    </head>
    <body>
<?php
    define("GRETTING", "Welcome to my website");
    define("z", 20);
    define("cats" , ["Black","white","Brown"]);

    print("<h1>Connect to mysql <br></h1>");
    echo "สวัสดี<br>";

    $a = 20;
    $b =25.5;
    $c = $a + $b;
    $txt = "Result : ";
    echo "$txt a + b = $c" ."<br>";
    echo GRETTING . " -> " . z . "<br>";
    echo "My cat 1 is " . cats[0] ."<br><br>";

    echo "===== For Loop =====<br>";
    for($i=0;$i<3;$i++){
        echo "My cat " . $i+1 ." is " . cats[$i] . "<br>";
    };
    echo "==================<br><br>";

    echo "===== Foreach =====<br>";
    $x = 0;
    foreach(cats as $value) {
        echo "My cat " . $x+1 ." is " . cats[$x] . "<br>";
        $x++;
    };
    echo "==================<br><br>";

    echo "===== While Loop =====<br>";
    $i = 0 ;
    while($i <3){
        $x = $i +1 ;
        echo "My cat " . $x ." is " . cats[$i] . "<br>";
        $i++;
    };
    echo "==================<br><br>";

    echo "===== Do While Loop =====<br>";
    $i = 0 ;
    do{
        $x = $i +1 ;
        echo "My cat " . $x ." is " . cats[$i] . "<br>";
        $i++;
    }while($i <3);
    echo "==================<br><br>";

    $brands = array("Honda","Mazda","Toyota","Benz","BMW");
    echo "Array Size : " . count($brands);
    echo "<br>Last Index : " . $brands[count($brands)-1] . "<br>";
    print_r($brands);
?>
    </body>
</html>