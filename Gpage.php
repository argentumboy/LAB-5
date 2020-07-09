<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,
									initial-scale=1.0">
 		<title>Bootstrap сайт</title>
 		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
 		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
<header>
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light">
  				<a class="navbar-brand" href="/Gpage.inc.php"><img width="100px" height="100px" src="img/logo.jpg"></a>
  				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>

  				<div class="collapse navbar-collapse" id="navbarSupportedContent">
    				<ul class="navbar-nav ml-auto">
<li><a href='Gpage.php'>"Фишки" Android 11</a></li>
<li><a href='Gpage.php?id=contact'>Контакты</a></li>
<li><a href='Gpage.php?id=about'>Поддерживаемые устройства</a></li>
<li><a href='Gpage.php?id=gbook'>Гостевая книга</a></li>
<li class="nav-item"><a class="nav-link" href="https://vk.com/googlerussia"><img src="img/vk.png" width="35px" height="35px"></a></li>
      					<li class="nav-item"><a class="nav-link" href="https://akket.com/wp-content/uploads/2019/02/Google-Chrome-77.jpg"><img width="45px" height="45px" src="img/inst.png"></a></li>
</ul>
</div>
</div>
<div class="col-lg-12" >
</ul>
  				</div>
				</nav>
			</div>	
		</header>

<?php
	include 'routing.php';
 ?>
<!--Конец Области контента-->
		<div class="col-lg-12">
		</div>
		</div>
		</div>
	</body>
</html>