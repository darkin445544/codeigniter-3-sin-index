<?php require "base/head_html.php" ?>
<style>
	.carousel-item {
		height: 100vh;
		min-height: 350px;
		background: no-repeat center center scroll;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
</style>

<div>
<?php require "base/menu.php" ?>

</div>
<div>
<header>
	<div style="height: 40%;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      
      <div class="carousel-item active" style="background-image: url('<?= $imagenes?>/PEPEPOZO.jpeg'); background-size: 100% 100%; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h1 class="display-4" style="color:black;"><strong></strong></h1>
          <p class="lead"></p>
        </div>
      </div>
      
      <div class="carousel-item" style="background-image: url('<?= $imagenes?>/TUSEGURIDADESMIPRIORIDAD.jpg'); background-size: 100% 100%; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4" style="color:black;"><strong></strong></h2>
          <p class="lead"></p>
        </div>
      </div>
      
      <div class="carousel-item" style="background-image: url('<?= $imagenes?>/CONSEJOSPREVENCION-.jpg'); background-size: 100% 100%; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4" style="color:black;"><strong></strong></h2>
          <p class="lead"></p>
        </div>
      </div>

			<div class="carousel-item" style="background-image: url('<?= $imagenes?>/MOMENTODEACTUAR.jpeg'); background-size: 100% 100%; height: 100%;">
        <div class="carousel-caption d-none d-md-block">
          <h2 class="display-4" style="color:black;"><strong></strong></h2>
          <p class="lead"></p>
        </div>
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
	</div>
	</div>
</header>

<section class="py-5">
  <div class="container">
		<h1 class="display-4">Para mas Información</h1>
		<div class="row justify-content-between">
			<div class="col-md-4">
				<h1 class="lead">Te invito a seguirme en mis redes sociales: </h1>
			</div>
			<div class="col-md-6 ms-auto" >
			<a href="https://www.facebook.com/pepepozo2021"><img src="<?= $imagenes?>/FACEBOOK.png" width="15%" height="100%"></a>
			<a href="https://instagram.com/pepepozo_?igshid=gwcnhfy9q84h"><img src="<?= $imagenes?>/TWITTER.png" width="15%" height="100%"></a>
			<a href="https://twitter.com/PepePozo2?fbclid=IwAR3X7lkyUeAJQ-3nXGmrN1aMqJB-jyEYCI2O8Zv-0lud_DHyWsRkJlwOX2k"><img src="<?= $imagenes?>/INSTAGRAM.png" width="15%" height="100%"></a>
			</div>
		</div>
		
  </div>
</section>
</div>
<iframe width="100%" height="50%" src="https://www.youtube.com/embed/uBHlQhFBlg0">
</iframe>
