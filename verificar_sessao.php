<?php

session_start();

header("cache control: no-store, no-cache, must-revalidate");
header("pragma: no-cache");
header("expires: 0");

if (isset($_SESSION["nome"])) {
    header("Location: login.php");
    exit();
}
