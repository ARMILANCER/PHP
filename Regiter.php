<?php

function register(){
    // Connection
    $con = new mysqli("localhost","root","root","utenti");
    if($con->connect_error){
        die("Connessione fallita ".$con->connect_error);
    }
    // Get values of HTLM page
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $yob = $_POST["yob"];
    $hobby = $_POST["hobby"];

    $sql = "INSERT INTO dati(Nome,Cognome,Email,Password,YOB,Hobby)
    VALUES('$nome','$cognome','$email','$password','$yob','$hobby');";
    if($con->query($sql)){echo"FINE";}else{echo"nou";};
    echo memory_get_usage()."\n";

    header("Refresh: 3; URL=https://www.example.com");
    echo "\nStai per essere reindirizzato a un'altra pagina in 3 secondi...";
}

?>

