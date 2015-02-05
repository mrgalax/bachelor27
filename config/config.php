<?php



define("DB_HOST", "127.0.0.1");
define("DB_NAME", "test");
define("DB_USER", "mrgalax");
define("DB_PASS", "dane111!");




define("COOKIE_RUNTIME", 1209600);
define("COOKIE_DOMAIN", ".127.0.0.1");
define("COOKIE_SECRET_KEY", "madsernice");



define("EMAIL_USE_SMTP", false);
define("EMAIL_SMTP_HOST", "mads.saust@gmail.com");
define("EMAIL_SMTP_AUTH", true);
define("EMAIL_SMTP_USERNAME", "mads.saust@gmail.com");
define("EMAIL_SMTP_PASSWORD", "Mads0904");
define("EMAIL_SMTP_PORT", 465);
define("EMAIL_SMTP_ENCRYPTION", "ssl");



define("EMAIL_PASSWORDRESET_URL", "http://mrgalax.roffe.nu/Bachelor/bachelor25/edit.php");
define("EMAIL_PASSWORDRESET_FROM", "mads.saust@gmail.com");
define("EMAIL_PASSWORDRESET_FROM_NAME", "My Project");
define("EMAIL_PASSWORDRESET_SUBJECT", "Password reset for PROJECT XY");
define("EMAIL_PASSWORDRESET_CONTENT", "Please click on this link to reset your password:");



define("EMAIL_VERIFICATION_URL", "http://mrgalax.roffe.nu/Bachelor/bachelor25/register.php");
define("EMAIL_VERIFICATION_FROM", "no-reply@example.com");
define("EMAIL_VERIFICATION_FROM_NAME", "1864");
define("EMAIL_VERIFICATION_SUBJECT", "Account activation for PROJECT XY");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");




define("HASH_COST_FACTOR", "10");

mb_internal_encoding("UTF-8");

$username = "mrgalax";
$password = "dane111!";
$database = "test";
$server   = "127.0.0.1";

$link = new mysqli($server, $username, $password, $database);
if ($link->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$link->set_charset("utf8");

date_default_timezone_set('Europe/Copenhagen');


