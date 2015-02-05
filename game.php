<?php
require_once('config/config.php');
require_once('classes/Login.php');

$login = new Login();

if ($login->isUserLoggedIn() == true) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <title>Spillet om 1864</title>
	<meta name="viewport" content="width=device-width, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <link href="css/default.css" rel="stylesheet" />
    <script src="js/jaws.js" type="text/javascript"></script>
    <script src="js/howler.js" type="text/javascript"></script>
    <script src="js/tween.js" type="text/javascript"></script>
    <script src="js/easystar.js" type="text/javascript"></script>
    <script src="game-media/level0.js" type="text/javascript"></script>
    <script src="game-media/level1.js" type="text/javascript"></script>
    <script src="game-media/level2.js" type="text/javascript"></script>
    <script src="game-media/level3.js" type="text/javascript"></script>
    <script src="js/game.js" type="text/javascript"></script>
  </head>
  <body>

    <span id='info'></span>

  </body>
</html>

<?php
} else {
?>


<meta http-equiv="refresh" content="3; url=index.php">
<h1>Du skal være logged ind!</h1>


<?php
}
