<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>...</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/phaser.min.js" type="text/javascript"></script>
 	<script src="js/game.js" type="text/javascript"></script>
 	<script src="js/gameButtonPlay.js" type="text/javascript"></script>
</head>
<body>
    <div class ="header">
    	<div class="mid">
    		<header>
    			<img src="img/panal.png">
    		</header>
   		</div>
    </div>
	<div class ="content">
		<div class="mid">
		    <div  align="center">
		    	<br>
		    	<b>
			    На сайт напали инопланетные пришельцы, он не работает :(<br> 
	    		Как только исправим это - лампочка справа загорится.<br>
	    		А вы можете скоротать время за игрой :)<br>
	    		</b>
	    		<br>
    		</div>
			<img src="img/не работает.png">
			<div align="center">
				<br>
				<b>
					Пока с техподдержкой тоже нельзя связаться, но мы уже чиним доступ.<br> 
					Специалисты поддержки следят за обстановкой!<br>
					Пока можете скоротать время за игрой :)<br> 
				</b>
				<br> 
			</div>
		</div>
	</div>
	<div class ="game">
		<div id="container">
			<div id="phaser-demo"></div>
			
			<div id="infoi">
				<div id="gameButton"> 
					<input type="button" value="Играть" id="playGame" onmousedown="viewDiv(),restart()">
		
			</div>

			</div>
		</div>
			
	</div>
</body>
</html>