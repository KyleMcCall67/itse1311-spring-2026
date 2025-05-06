<?php

session_start();

$myName = "Kyle McCall";

$_SESSION['myName'] = $myName;

echo "my name is " . $_SESSION['myName'];