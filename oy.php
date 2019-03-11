<?php
require("functions.php");

$success = vote($_GET['s'], $_GET['o']);
if ($success)
    header("Location: index.php");