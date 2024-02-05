<?php

header('Content-type: text/html;charset=utf-8');


// Inizio della sessione con un nome univoco basato sull'identificatore del progetto
$projectIdentifier = "produzione"; // Sostituisci con l'identificatore univoco per questo progetto
session_name("my_session_" . $projectIdentifier);

if (session_status() == PHP_SESSION_NONE) {
// Inizializza la sessione
session_start();
}

// Controlla se l'utente è già loggato, in caso negativo lo porta alla pagina login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../../login.php");
    exit; // Blocca lo script
}
/*
$projectIdentifier = "produzione"; // Sostituisci con l'identificatore univoco per questo progetto
session_name("my_session_" . $projectIdentifier);


// Inizializza la sessione
session_start();
 
$_SESSION["loggedin"] = true;
*/

?>


