<?php
    $hName='localhost'; //Nome host
    $uName='root';  //username del database
    $password='';   //password database
    $dbName='curriculummandati';    //Nome del database
    $dbCon = mysqli_connect($hName, $uName, $password, $dbName);

    if(!$dbCon) {
        echo "Non riesco a connettere";
        die('Could not connect to the server');
    }else{
        echo "Posso connettermi";
    }
?>