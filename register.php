<?php
namespace register;

$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$password = $_POST['password'];
$YOB = $_POST['YOB'];
$hobby = $_POST['hobby'];

$sql = "INSERT INTO utenti(nome,cognome,gmail,password,YOB,hobby)
VALUES('$nome','$cognome','$email','$password','$YOB','$hobby')";

if($conn -> query($sql)===TRUE){
    echo "Utente Registrato";
}else{
    echo "errore inserimento: $conn->error";
}
$conn -> close();
?>