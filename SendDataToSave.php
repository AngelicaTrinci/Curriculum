<?php
$dbCon = new mysqli('localhost', 'root', '', 'curriculummandati');

if($dbCon -> connect_error) {
    echo "Non riesco a connettere";
    die('Could not connect to the server');
}else{
    echo "Posso connettermi";
}
//if($dbCon != NULL) {
    $nAzienda = mysqli_real_escape_string($dbCon, $_POST['nAzienda']);
    $candidatura = mysqli_real_escape_string($dbCon, $_POST['candidatura']);
    $luogo = mysqli_real_escape_string($dbCon, $_POST['luogo']);
    $link = mysqli_real_escape_string($dbCon, $_POST['link']);
    $dataInvio = $_POST['dataInvio'];

    $stringa1 = $nAzienda[0];
    echo "Il primo elemento è: " . $stringa1;

     $selQuery = "SELECT * FROM curriculum";
 
     $query = "INSERT INTO curriculum (NomeAzienda,Candidatura,Luogo,Link,DataInvio)
     VALUES ('$nAzienda', '$candidatura', '$luogo', '$link', '$dataInvio')";
    
     if ($dbCon->query($query) == TRUE) {
        include 'Successo.html';
     }
     else {
        echo "Errore: " . $query . "<br>" . $dbCon->error;
          }
     mysqli_close($dbCon);
    //}
?>