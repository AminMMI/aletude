<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'db.php'; // ou 'includes/dbconnect.php' selon l’endroit où il est
?>
