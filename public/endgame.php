<?php
session_start();


function clearSession() {
    session_unset();
    session_regenerate_id(true);
}

clearSession();
header('Location: High_Low_Home.php');
?>
