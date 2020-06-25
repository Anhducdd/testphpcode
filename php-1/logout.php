<?php

session_start();
require_once "utilme.php";
unset($_SESSION[AUTH]);
header('location: login.php');
