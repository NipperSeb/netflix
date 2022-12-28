<?php
session_start(); //enable session
session_unset(); //disable session
session_destroy(); //destroy last number session
setcookie('auth', '', time() - 1, '/', null, false, true); //-1 destroy cookie

header('location: index.php');
exit();
