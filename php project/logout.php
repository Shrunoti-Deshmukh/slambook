<?php
session_start();
if (isset($_SESSION['login_set'])) {
    unset($_SESSION['login_set']);

    if (!isset($_SESSION['login_set'])) {
        header("location:select.php");
    }
}
?>