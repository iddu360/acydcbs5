<?php

@include './assets/config.php';

session_start();
session_unset();
session_destroy();

header('location:logins.html');

?>