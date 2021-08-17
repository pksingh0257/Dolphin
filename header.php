
  <!--responsive.css-->
  
<style>
  .header_top {
  background-color: #011f08;
  padding: 15px 0;
}
.header_top .contact_link-container {
  
  display: flex;
  -webkit-box-pack: justify;
    
          justify-content: space-between;
}
.header_top .contact_link-container a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: #ffffff;
  font-size: 15px;
}
.header_top .contact_link-container a i {
    font-size: 20px;
    color: #ef6606;
    margin-right: 5px;
}

a, a:hover, a:focus {
    text-decoration: none;

}
 .card-blink
{
  box-shadow: 0 2px 10px rgba(0,0,0.2);
      width: 126px;
       
} 
.navbar-brand:hover img
{
  transform: scale(1.2);
}
.bg-dark {
    /* background-color: #343a40!important; */
    background: #006266!important;
}
  .navbar .nav-item:hover .nav-link{ 
    color: #ec9f69;

   }

</style>
  <body>
    <!--start top header-->
   <!--  <section class="fixed-top"> -->
  <section>
    <div class="header_top">
        <div class="container-fluid">
          <div class="contact_link-container">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span>
                Location
              </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Call : +91 74850 67263
              </span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                info@dolphinwatersolutions.in
              </span>
            </a>
          </div>
        </div>
      </div>
  </section>
<!--end top header-->
<section class="sticky-top">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">
    <img src="images/logo.jpg" alt="logo" class="card-blink">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="product.php">Product</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="services.php">Service</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="blog.php">Blog/Press Release</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="career.php">Career</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
    </ul>
  </div>
</div>
</nav>
</section>
<!-- </section> -->
<!--end header-->