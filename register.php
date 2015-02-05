<?php

if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit('Sorry, this script does not run on a PHP version smaller than 5.3.7 !');
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    require_once('libraries/password_compatibility_library.php');
}
require_once('config/config.php');

require_once('translations/dk.php');

require_once('libraries/PHPMailer.php');

require_once('classes/Registration.php');

$registration = new Registration();

include("views/register.php");
