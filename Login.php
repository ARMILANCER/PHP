<?php
// Connection
$con = new mysqli("localhost","root","root","utenti");
if($con->connect_error){
    die("Connessione fallita ".$con->connect_error);
}
// Get values of HTLM page
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM utenti WHERE Email = '$email' AND Password = '$password'";

if($con->query($sql)){
    header("Refresh: 3; URL=https://www.example.com");
    echo "\nStai per essere reindirizzato a un'altra pagina in 3 secondi...";
}else{
    echo"Wrong password or email";
};
?>

