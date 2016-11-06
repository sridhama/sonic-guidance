<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sonic Guidance - Home</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<?php include('./navbar.php');?>
  <section>
    <h2>Sample Output From Sensors</h2>
    <pre>[{
	"timestamp": "133321222",
	"steps_taken": 10,
	"direction_turned": 0,
	"angle_turned": 30
}]</pre>
  </section>

  <section>
    <h2>Text to speech</h2>
    <input onclick='responsiveVoice.speak("In 10 steps, take a left.");' type='button' value='🔊 Play' />
    <input onclick='responsiveVoice.speak("In 15 steps, turn  right.");' type='button' value='🔊 Play' />
  </section>
<?php include('./footer.php');?>
  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src='https://code.responsivevoice.org/responsivevoice.js'></script>

  </body>
</html>
