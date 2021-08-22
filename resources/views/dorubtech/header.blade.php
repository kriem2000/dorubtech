<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--fontawesom -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">


        <title>Dorubtech</title>
</head>
<body>
  
  <!-- As a heading -->
  <nav class="navbar navbar-expand-lg navbar-light lf-header-bg p-0 fixed-top">
   <div class="col-lg-3 rh-header-bg border-right-warninig">
    <a class="navbar-brand" href="#">
      <img class="center-block" src="/img/logo-test.png" alt="">
    </a>
    <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
   </div>
    <div class="col-lg-8 lf-header-bg p-2">
        <div class="collapse navbar-collapse nav-links float-lg-right" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li> 
              <li class="nav-item active">
                <a class="nav-link" href="#">about us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">services</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">projects</a>
              </li>
              <li class="nav-item active">
                <a class="mt-1 btn btn-light btn-contact text-dark" href="#" id="contact-button">Contact Us <i class="far fa-paper-plane"></i></a>
              </li>
            </ul>
          </div>
    </div>
  </nav>

  <!--start banner!-->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/sha7at.jpg" class="w-100" alt="Los Angeles" height="650">
        <div class="carousel-caption">
          <h3>Welcome to Dorubtech</h3>
          <p>We had such a great time in LA!, We had such a great time in LA! We had such a great time in LA!</p>
          <button class="btn btn-lg btn-light mt-3">read more</button>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="/img/jalot.jpg" class="w-100" alt="Chicago" height="650">
        <div class="carousel-caption">
          <h3>Welcome to Dorubtech</h3>
          <p>We had such a great time in LA!, We had such a great time in LA! We had such a great time in LA!</p>
          <button class="btn btn-lg btn-light mt-3" >read more </button>
        </div>   
      </div>
    </div>
  </div>
  <!-- end banner !-->

  <!-- page paragraph !-->
  <div class="container">
    <div class="row p-5" id="appSummary">
      <div class="col text-center">
        <h1 class="paragraph-h1">
          <span class="paragraph-h1-first-letter">Why This</span> App Is Awesome</h1>
         <div class="paragraph-container">
          <img src="/img/heading_border_left.png" alt="">
          <p class="leading-paragraph d-inline px-3">Summary, once again, of your app's awesomeness</p>
          <img src="/img/heading_border_right.png" alt="">
         </div>
      </div>
    </div>
  </div>
  <!-- end page paragraph !-->

  <!-- jumbotron -->
  <div class="jumbotron bg-blue">
    <div class="container text-white">
      <div class="row">
        <div class="col-lg-5">
          <img class="w-100" src="/img/waterTrasport.png" alt="">
        </div>
        <div class="col-lg-6 offset-1">
          <h1 class="paragraph-h1-white">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <p class="lead">It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <a class="text-white btn bg-black btn-lg" href="#" role="button">Learn more</a>
        </div>
      </div>
    </div>
  </div>
  <!-- jumbotron -->

  <!-- page paragraph !-->
  <div class="container">
    <div class="row p-5" id="appSummary">
      <div class="col text-center">
        <h1 class="paragraph-h1">
          <span class="paragraph-h1-first-letter">Why This</span> App Is Awesome</h1>
         <div class="paragraph-container">
          <img src="/img/heading_border_left.png" alt="">
          <p class="leading-paragraph d-inline px-3">Summary, once again, of your app's awesomeness</p>
          <img src="/img/heading_border_right.png" alt="">
         </div>
      </div>
    </div>
  </div>
  <!-- end page paragraph !-->

    <!-- jumbotron -->
    <div class="jumbotron bg-blue">
      <div class="container text-white">
        <div class="row">
          <div class="col-lg-6">
            <h1 class="paragraph-h1-white">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p class="lead">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p class="lead">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <p class="lead">It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="text-white btn bg-black btn-lg" href="#" role="button">Learn more</a>
          </div>
          <div class="col-lg-5 offset-1">
            <a href="http://www.freepik.com">
              <img class="w-100" src="/img/sawage.png" alt="">
            </a>
            
          </div>
        </div>
      </div>
    </div>
    <!-- jumbotron -->


  <!-- page paragraph !-->
  <div class="container">
    <div class="row p-5" id="appSummary">
      <div class="col text-center">
        <h1 class="paragraph-h1">
          <span class="paragraph-h1-first-letter">Why This</span> App Is Awesome</h1>
         <div class="paragraph-container">
          <img src="/img/heading_border_left.png" alt="">
          <p class="leading-paragraph d-inline px-3">Summary, once again, of your app's awesomeness</p>
          <img src="/img/heading_border_right.png" alt="">
         </div>
      </div>
    </div>
  </div>
  <!-- end page paragraph !-->

<!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Indicators-->
  <ol class="carousel-indicators d-none">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      
       <div class="col-md-3" style="float:left">
       <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->

  </div>
  <!--/.Slides-->

    <!--Controls-->
    <div class="controls-top text-center">
      <a class="btn-floating border-rounded" href="#multi-item-example" data-slide="prev">
        <i class="fas fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next">
        <i class="fas fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->

</div>
<!--end here Carousel Wrapper-->

<!-- FAB !-->
<div class="fab-container" id="fab-container">
  <div class="fab fab-icon-holder">
    <i class="fas fa-question"></i>
  </div>
  <ul class="fab-options">
    <li>
      <span class="fab-label">Go to the top</span>
      <div class="fab-icon-holder" id="go-top">
        <i class="fas fa-arrow-up"></i>
      </div>
    </li>
    <li>
      <span class="fab-label">Contact Us</span>
      <div class="fab-icon-holder">
        <i class="fas fa-envelope-open"></i>
      </div>
    </li>
  </ul>
</div>
<!--FAB ENDS HERE !-->

  <!-- Footer -->
<footer class="page-footer font-small bg-blue-dark text-white pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">


    <div class="row">
      <div class="col justify-content-center">
        <img class="center-block" src="/img/footer_logo.png" alt="">
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div col="col">
        <span class="contactus-footer">Contact Us</span>
      </div>
    </div>

    <!-- Grid row -->
    <div class="row justify-content-center mt-4">

      <div class="col-lg-3 text-center m-0">
        <span class="footer-location-icon">
        <i class="fas fa-map-marked-alt"></i>
        <p class="m-0">location number 1 goes here</p>
        <p>location number 2 goes here</p>
        </span>
      </div>

      <div class="col-lg-3 text-center m-0">
        <span class="footer-email-icon">
        <i class="fas fa-envelope"></i>
        <p class="m-0">email@number1.com</p>
        <p>email@number2.com</p>
        </span>
      </div>

      <div class="col-lg-3 text-center m-0">
        <span class="footer-phone-icon">
        <i class="fas fa-phone-square-alt"></i>
        <p class="m-0">+00218927548375</p>
        <p>+00218927548375</p>
        </span>
      </div>

    </div>

    <div class="row  mt-5 mb-5 ">
      <div class="col text-center">
        <a class="social-media mr-2" href="#">
          <i class="fab fa-facebook-f "></i>
        </a>
        <a class="social-media mr-2" href="#">
          <i class="fab fa-instagram "></i>
        </a>
        <a class="social-media mr-2" href="#">
          <i class="fab fa-twitter"></i>
        </a>
        <a class="social-media mr-2" href="#">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </div>

    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->

  <div class="footer-copyright text-center bg-footer-bottom py-3">
    <span class="float-left offset-1 text-white">© 2021 Copyright: made by Marwan, All Rights Reserved</span>
    .
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</body>
 <!-- Scripts -->
 <script src="{{ asset('js/custom.js') }}" defer></script>

</html>