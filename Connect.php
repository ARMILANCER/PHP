
<?php
//http://localhost:8888/WebSite/
//header("Content-Type: text/plain");
//echo "hello world!";
//$num = 12; // typecheck dinamico
//echo 'La mia età è '.$num.'<br/>';
header("Content-Type: text/plain");

include 'connect.php';
// TODO: controllo array Posts

if(!isset($_POST['nome'])){
    echo "campo nome non inserito";
}
$host = 'localhost';
$uname = 'root';
$pwd = '';
$db = 'f1';
$dbport = 8888;
$dbprefix = '';
echo '$nome $cognome $email $';
// mysqli ha gia il puntatore ad un data base, in caso non ci fosse,
// ne usa uno già prestabilito.
$mysqli = new mysqli($host,$uname,$pwd,$db,$dbport);
// -> connect_errno è un attributo.
if ($mysqli -> connect_errno){
    die('DB connectione error: '.$mysqli -> connect_error);
}else {
    // connesso al server
}
?>