<?php
//Apertura connessione al database
$dbCon = new mysqli('localhost', 'root', '', 'curriculummandati');

//Formattazione corretta del dato da inserire nel database, senza spazi o caratteri speciali che possano romperlo
function formattaDato($dbCon, $dato) {
    $dato = trim($dato);
    $dato = mysqli_real_escape_string($dbCon, $dato);
    return $dato;
}

if($dbCon -> connect_error) {
    echo "Non riesco a connettere";
    die('Could not connect to the server');
}
//if($dbCon != NULL) {
    //Recupero dati dal Form.
$nAzienda = formattaDato($dbCon, $_POST['nAzienda']);
$candidatura = formattaDato($dbCon, $_POST['candidatura']);
$luogo = formattaDato($dbCon, $_POST['luogo']);
$link = formattaDato($dbCon, $_POST['link']);
$dataInvio = $_POST['dataInvio'];
echo $nAzienda . "<br>" . $candidatura . "<br>" . $luogo . "<br>" . $link . "<br>" . $dataInvio . "<br>";
$sql = "SELECT * FROM curriculum WHERE nAzienda = ". $nAzienda . " AND candidatura = " . $candidatura;
echo $sql;
$result = mysqli_query($dbCon, "SELECT * FROM curriculum WHERE nAzienda = '$nAzienda' AND candidatura = '$candidatura'");


if(mysqli_num_rows($result) == 0) {
    include 'Fallimento.php';
    echo "Risultato già trovato";
} else {
    $query = "INSERT INTO curriculum (NomeAzienda,Candidatura,Luogo,Link,DataInvio)
    VALUES ('$nAzienda', '$candidatura', '$luogo', '$link', '$dataInvio')";
    
    if ($dbCon->query($query) == TRUE) {
        include 'Successo.html';
    }
    else {
        echo "Errore: " . $query . "<br>" . $dbCon->error;
    }
}
mysqli_close($dbCon);
    //}
?>