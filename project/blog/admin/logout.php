<?php
session_start();

session_destroy();

// header('Location: login.php');


echo "<script> location.href = 'login.php'</script>";


