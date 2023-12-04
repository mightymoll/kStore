<?php

session_start();
// if user is logged in, end session with session_destroy();
session_destroy();
header("location: products.php");
