<?php  
include('includes/header.php')
?>
<!-- slider section -->
<div class="conatiner-fluid home-section">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assests/img/c5.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block custom__background">
        <h5 class="font-weight-bold text-warning">Deforestation</h5>
        <p class="text-light font-weight-bold">The loss of trees and other vegetation can cause climate change</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assests/img/c3.jpg" class="d-block w-100 " alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assests/img/c1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assests/img/c4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- slider section -->
<!-- forecast section -->
<section>
    <div class="conatiner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="what-we-do text-center pt-5 ">
                    <span class="change ">Weather</span>
                    forecast
                </h1>
           
            </div>
        </div>
    </div>
    <div class="container-fluid w-100 map">
                <iframe src="https://climate.nasa.gov/interactives/climate_time_machine" class="responsive-iframe" id="if"></iframe>
                </div>
</section>
<!-- forecast sectiob -->























<?php

include('includes/footer.php')

?>