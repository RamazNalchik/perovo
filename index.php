<!-- Main Page -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Main</title>
<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap-grid.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900|Rubik:400,500,700,900" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="main">
	<nav class="container navbar navbar-expand-lg navbar-light #000" id="mainnav">
	  <a class="navbar-brand logo" href="#"><img src="Logo.png" width="200"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto head-menu">
		      <li class="nav-item dropdown elem-li">
		        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" href="#">О НАС</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">РЕЖИМ РАБОТЫ</a>
		          <a class="dropdown-item" href="#">СХЕМА ЭТАЖЕЙ</a>
		          <a class="dropdown-item" href="#">КАК ДОБРАТЬСЯ</a>
		          <a class="dropdown-item" href="#">ВАКАНСИИ</a>
		          <a class="dropdown-item" href="#">О ТРК</a>
		          <a class="dropdown-item" href="#">ПРАВИЛА ТРК</a>
		          <a class="dropdown-item" href="#">КОНТАКТЫ</a>
        		</div>
		      </li>
		      <li class="nav-item elem-li">
		        <a class="nav-link" href="#">ШОПИНГ И ЕДА</a>
		      </li>
		      <li class="nav-item elem-li">
		        <a class="nav-link" href="#">УСЛУГИ И РАЗВЛЕЧЕНИЯ</a>
		      </li>
		      <li class="nav-item dropdown elem-li">
		        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" href="#">
		          ПОКУПАТЕЛЯМ
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">АКЦИИ И НОВОСТИ</a>
		          <a class="dropdown-item" href="#">МЕРОПРИЯТИЯ</a>
		          <a class="dropdown-item" href="#">ГАЛЕРЕЯ</a>
		          <a class="dropdown-item" href="#">АНКЕТА</a>
		          <a class="dropdown-item" href="#">ОБРАТНАЯ СВЯЗЬ</a>
		          <a class="dropdown-item" href="#">ПОДПИСКА</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown elem-li">
		        <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"" href="#">АРЕНДА И РЕКЛАМА</a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">АРЕНДА ТОРГОВЫХ ПЛОЩАДЕЙ</a>
		          <a class="dropdown-item" href="#">РЕКЛАМНЫЕ ВОЗМОЖНОСТИ</a>
		        </div>
		      </li>
		      <li class="nav-item dropdown elem-li">
		        <a class="nav-link" href="#">КОНТАКТЫ</a>
		      </li>
		    </ul>
	   <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	    _-->
	    	<form action="" class="search">
				<input type="search" class="search__input"><input type="button" name="" class="search__button">
			</form>
	  </div>
	</div>
</nav>
</div>
<div id="slider">
<div class="container">
<div class="row">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators absolute">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="img"><img class="d-block img-fluid" src="img/foto-01.jpg" alt="First slide"></div>
    </div>
    <div class="carousel-item">
      <div class="img"><img class="d-block img-fluid" src="img/foto-02.jpg" alt="Second slide"></div>
    </div>
    <div class="carousel-item">
      <div class="img"><img class="d-block img-fluid" src="img/foto-03.jpg" alt="Third slide"></div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div id="left">
	</div>

	<div id="right">
	</div>
</div>
	
	</div>
</div>
<div class="news">
<div class="container">
<div class="row">
<div class="col-lg-12">
				<h1 class="caption">
					АКЦИИ И НОВОСТИ
				</h1>
			</div>


			<div class="col-lg-6 col-md-6 col-xl-3">
				<div class="news-block">
					<div class="news-top block1">
						<img src="img/foto-04.jpg" alt="img">
					</div>
					<div class="news-bottom">
						<p>
							<span>Скидка 5% <br>
							каждую среду</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xl-3">
				<div class="news-block">
					<div class="news-top block1">
						<img src="img/foto-04.jpg" alt="img">
					</div>
					<div class="news-bottom">
						<p>
							<span>Скидка 5% <br>
							каждую среду</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xl-3">
				<div class="news-block">
					<div class="news-top block1">
						<img src="img/foto-04.jpg" alt="img">
					</div>
					<div class="news-bottom">
						<p>
							<span>Скидка 5% <br>
							каждую среду</span>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-xl-3">
				<div class="news-block">
					<div class="news-top block1">
						<img src="img/foto-05.jpg" alt="img">
					</div>
					<div class="news-bottom">
						<p>
							<span>Скидка 5% <br>
							каждую среду</span>
						</p>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
<?php 
include('includes/footer.php');
 ?>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="js/main.js"></script>
</html>