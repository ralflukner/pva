<?php
session_start();
if(!empty($_SESSION["userID"])) {
    require_once './view/dashboard.php';
} else {
    require_once './view/login-form.php';
}