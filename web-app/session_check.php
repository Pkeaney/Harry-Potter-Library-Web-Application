<?php
session_start();

// If successful
if ($_SESSION['user'] = true) {
    header("location: index.php");
}