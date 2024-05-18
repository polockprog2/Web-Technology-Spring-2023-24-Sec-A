<?php

session_start();

unset($_SESSION['og']);

session_destroy();

header('location: ../index.html');
