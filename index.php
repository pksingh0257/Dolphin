
<?php include 'link_header.php'?>
<?php include 'header.php'?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">

<style>
 .text-box p{
  position: absolute;
  bottom: 40%;
  left: 15%;
  right: 15%;
  color:#e67e22;
  font-size: 24px;
  font-weight: 400;
  text-align: center;
  transform: translateY(-50%);
  }

.text-box h2{
  position: absolute;
  top: 20%;
  left: 15%;
  right: 15%;
  
  text-align: center;
  transform: translateY(-50%);
  font-size: 50px;
  font-family: poppins;
 text-transform: uppercase;
 letter-spacing: 2px;
 font-weight: 900;
color:#006266;
}
.carousel-item{
        height: 100vh;
        min-height: 300px;
      }
      .about_section {
  background-color: #5fb0c378;
}
</style>

<!--Start slider-->
 <section>
    <div id="slider-animation"  class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
    <li data-target="#slider-animation" data-slide-to="1"></li>
    <li data-target="#slider-animation" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active"  data-interval="2000">
      <img src="images/giving_enviroment.png" class="w-100" alt="1">
        <div class="text-box">
            <h2 class="wow fadeInDownBig" data-wow-duration="2s">Giving enviroment </h2>
            <p class="wow fadeInUpBig" data-wow-duration="2s">A new lease of life
for generation to come.  </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/slider_refreshin.png" class="w-100" alt="2">
    <div class="text-box">
            <h2 class="wow fadeInDownBig" data-wow-duration="2s" >NATURE</h2>
            <p class="wow fadeInUpBig" data-wow-duration="3s">Extends her hands towards us.
Nature We extend them further to customers.
 </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="images/ourslider2.png" class="w-100" alt="3">
    <div class="text-box">
            <h2 class="wow fadeInDownBig" data-wow-duration="3s">Living The Change</h2>
            <p class="wow fadeInUpBig" data-wow-duration="2s">Inspiring stories for a sustainable future and Sustainable Indudtry  </p>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider-animation" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
   
</section>
<!--end slider-->

<section class="country_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
           Category
        </h2>
        
      </div>
      <div class="row">
        <div class="col-md-4">
          <a href="services.php" class="box">
            <img src="images/service_indsutry1.jpg"  height="300px"alt="">
            <div class="detail-box">
              <h3>
                Industry
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="services.php" class="box">
            <img src="images/service_water.jpg" height="300px" alt="">
            <div class="detail-box">
              <h3>
                Plants
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="services.php" class="box">
            <img src="images/service_filt.jpg" height="300px" alt="">
            <div class="detail-box">
              <h3>
                Filters
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="services.php" class="box">
            <img src="images/cate_manufacturing.jpg" height="300px" alt="">
            <div class="detail-box">
              <h3>
                 Manufacturing facilities
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="services.php" class="box">
            <img src="images/cate_r&d.jpg" height="300px" alt="">
            <div class="detail-box">
              <h3>
                Research & Development
              </h3>
            </div>
          </a>
        </div>
        <div class="col-md-4">
          <a href="services.php" class="box">
            <img src="images/cate_others.jpg" height="300px" alt="">
            <div class="detail-box">
              <h3>
                Others
              </h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end category section -->

<!-- vedio section start -->





<!-- vedio section end -->

<!-- about section -->

  <section class="about_section layout_padding" >
    <div class="container">
      <div class="row">
        <div class="col-lg-6 px-0">
          <div class="img_container">
            <div class="img-box">
              <img src="images/our1.png" alt="ser" />
            </div>
          </div>
        </div>
        <div class="col-lg-6 px-0">
          <div class="detail-box">
            <div class="heading_container ">
              <h2>
                Our Vision
              </h2>
            </div>
            <p>
              To be the leader in our business which is so vital to people's lives and the environment.'A
              pioneer of water treatment with a legacy spanning over five decades, Dolphin water solutions
              is today considered a premier company in water and environment management, with sales, 
               production and service footprints across the world. We are one of very few companies
               worldwide with a complete range of water and environmental solutions. This enables us to
              offer total solutions for all sectors - infrastructure, industry, institutions, homes and
               communities.We serve our markets with a sustained focus on customer satisfaction,
               technological innovation and dedicated service. Our capability to deliver state-of-the-art
               technologies with complete technical support makes us a partner you can depend on.
            </p>
            <div class="btn-box">
              <a href="about.php" >
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our services
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/service_plants.png" alt="k">
            </div>
            <div class="detail-box">
              <h6>
                Plants
              </h6>
              <p>
                Our water and environment solutions extend far beyond industrial horizons to provide
                Commercial complexes & institutions
                safe drinking water and clean environment 
              </p>
              <a href="services.php">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/service_manufacturing.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Manufacturing facilities

              </h6>
              <p>
                We are commied to built-in quality, achieved by stringent quay assurance systems and state-of-the-art producon
                 processes. Our pharma grade resin manufacturing facility is US FDA compliant and WHO-GMP cerfled
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/service_indsutry.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
                Industry
              </h6>
              <p>
                  The sphere of our influence is not limited to water solutions. Over the years, we have
                   innovatively applied Dolphin water solutions and membrane processes for nonwater applications in many industries 
              </p>
              <a href="services.php">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box ">
            <div class="img-box">
              <img src="images/service_r&d.png" alt="">
            </div>
            <div class="detail-box">
              <h6>
               Research & Development

              </h6>
              <p>
                  At Dolphin water soluons, we realise that innovave
                  technologies are vital to address complex problems of the
                  changing world.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->

<script type="text/javascript">
   wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
</script>

<?php include 'foooter.php' ?>