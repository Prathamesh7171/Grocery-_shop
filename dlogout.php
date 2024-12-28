<?php

@include 'dconfig.php';

session_start();
session_unset();
session_destroy();

header('location:dlogin.php');

?>