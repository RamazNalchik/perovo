<!-- Main Page -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Main</title>
<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" type="text/css" href="libs/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="main">
<nav class="container navbar navbar-expand-lg navbar-light #000" id="mainnav">
  <div class="row">
	  <a class="navbar-brand" href="#"><img src="Logo.png" width="200"></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto head-menu">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">о нас <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">шопинг и еда</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">услуги и развлечения</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          покупателям
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">аренда и реклама</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">контакты</a>
	      </li>
	    </ul>
	   <!-- <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	    _-->
	  </div>
	</div>
</nav>
</div>
<div id="slider">
	<div id="content">
		<img src="foto-01.jpg">
	</div>
	<div id="left">
	</div>

	<div id="right">
	</div>
</div>

<div id="news">
	<p class="des">АКЦИИ И НОВОСТИ</p>
	<div class="news-data">
		<div class="news-content">
			<ul class="list-inline">
		  		<li class="list-inline-item acii"><img src="img/foto-02.jpg"></li>
		  		<li class="list-inline-item acii"><img src="img/foto-03.jpg"></li>
		  		<li class="list-inline-item acii"><img src="img/foto-04.jpg"></li>
		  		<li class="list-inline-item acii"><img src="img/foto-05.jpg"></li>
			</ul>
		</div>
	</div>
</div>
<?php 
include('includes/footer.php');
 ?>
</body>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="libs/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>