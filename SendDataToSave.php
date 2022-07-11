<?php
$dbCon = new mysqli('localhost', 'root', '', 'curriculummandati');

if($dbCon -> connect_error) {
    echo "Non riesco a connettere";
    die('Could not connect to the server');
}else{
    echo "Posso connettermi";
}
//if($dbCon != NULL) {
    $nAzienda = $_POST['nAzienda'];
     $candidatura = $_POST['candidatura'];
     $luogo = $_POST['luogo'];
     $link = $_POST['link'];
     $dataInvio = $_POST['dataInvio'];

     $selQuery = "SELECT * FROM curriculum";
 
     $query = "INSERT INTO curriculum (NomeAzienda,Candidatura,Luogo,Link,DataInvio)
     VALUES ('$nAzienda', '$candidatura', '$luogo', '$link', '$dataInvio')";
    
     if ($dbCon->query($query) == TRUE) {
        echo "Record inserito con successo";
     }
     else {
        echo "Errore: " . $query . "<br>" . $dbCon->error;
          }
     mysqli_close($dbCon);
    //}
?>