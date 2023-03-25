<?php
session_start();

if($_SESSION["mypw"] != "20230603") {
    header("Location: /login.php");
}