<?php
session_start();

require __DIR__."/app/init.php";

Flight::before("start", array("Controller", "init"));
Flight::start();

