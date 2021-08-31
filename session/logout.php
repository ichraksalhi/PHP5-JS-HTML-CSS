<?php
include '../core/Config.php';
Config::unsetSession();
header('Location: login.php');