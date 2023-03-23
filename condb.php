<?php
    $severdb = "localhost";
    $userdb = "root";
    $pwddb = "";
    $dbname = "universitydb";

    //Crete Connection
    $condb = mysqli_connect($severdb,$userdb,$pwddb,$dbname);

    if($condb){
        //echo "Connected successfully";
    }else{
        die("Connection failed :" . mysqli_conncet_error());
    }
    
    //if(!$condb){
    //    die("Connection failed :" . mysqli_conncet_error());
?>