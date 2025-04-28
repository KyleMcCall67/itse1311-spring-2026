<?php

session_start();

echo "my name is " . $_SESSION['myName'];
echo "The session is " . $_SESSION['validUser'];