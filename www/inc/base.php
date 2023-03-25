<?php
session_start();

if($_REQUEST["action"] == "login") {
    if($_REQUEST["mypw"] =="20230603") {
        $_SESSION["mypw"] = "20230603";
    }
}
if($_SESSION["mypw"] != "20230603") {
    header("Location: login.php");
}