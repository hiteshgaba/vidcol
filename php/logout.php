<?php

session_start();
error_reporting(0);
$redirect = $_SESSION['redirect_url'];
session_destroy();
header("Location: $redirect");
?>
