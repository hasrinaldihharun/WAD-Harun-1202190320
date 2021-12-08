<?php
session_start();

session_destroy();

header("Location: Harun_Login.php");
exit;



?>