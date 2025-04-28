<?php

session_start();

$myName = "Raul Gonzalez";

$_SESSION['myName'] = $myName;

echo "my name is " . $_SESSION['myName'];