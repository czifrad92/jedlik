<?php
session_start();

unset($_SESSION["logged"]);
unset($_SESSION["id"]);
unset($_SESSION["currentuser"]);
unset($_SESSION["admin"]);
unset($_SESSION["belepve"]);
session_destroy();
header("Location: login");

?>