<?php

echo <<<_INIT
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles.css">

	<title>Menu</title>

	<audio loop autoplay id="bgm">
		<source src="sound.wav">
	</audio>
	<script>
		var audio = document.getElementById("bgm");
		audio.volume = 0.3;
	</script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <form method="post" name="form" id="form" action="writenick.php">
  <h1>Greetings, I want to play a game with you! First, enter your name!<a>(Press 'f11' for fullscreen experience)<a></h1>
    <h1>Enter your name:</h1>
    <h2><input class="box1" type="text" name="nick" autocomplete="false" required></h2><br>
    <h2><input class="butt" type="submit" value="Play!"></h2>
    <h3 id="egg">EGG</h3>
    <script>
    	$('#egg').click(function()
    	{
    		$('#egg').css('color', 'rgba(255, 0, 0, 1)')
    		$('#egg').html('You found useless Easter Egg!<br>Congratulations!')
    	})
    </script>
  </form>
</body>
</html>

_INIT;
?>