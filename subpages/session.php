<?php
//session starten
session_start();

//als de gebruiker al is ingelogd stuuren we hem door naar het dashboard
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("location: dashboard.php");
    exit;
}

?>