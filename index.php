<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hermes</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
<style>
            * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 3s;
  animation-name: fade;
  animation-duration: 3s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Elite Online Store</span>
    <span class="site-heading-lower">Hermes</span>
  </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home </a>
              <span class="sr-only">(current)</span>
           
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">About Hermes</a>
          </li>
           <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="watchView.php">History</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="prod.php">Products</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="watches.php">Watches</a>
            
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
            
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="logcap.php">Login</a>
          </li>
        </ul>
        </div>
      </div>
    </nav>

  
  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 mx-auto">
      


          <div class="cta-inner text-center rounded">
              <table cellpadding = "2" cellspacing = "2">
            
                <tr>  <td>  <h1
                            class="section-heading mb-3"><span class="section-heading-upper"><h1>Freedom in silk</h1></span>
              
            </h1>
                        <br>
                                An air of freshness is blowing through the 2019 spring/summer collection. 
                                <br>
                                Fall in love with the sensuality of silk, play with its dimensions, have fun with colours, be carried away by designs.
                                <br> Pop or pastel shades, graphic motifs, squares, shawls, bandanas, losanges, anything goes: tying a scarf is a dialogue with style. 
                                <br>  Be carried away! 

          </div></td>
          <td></td>
          <td> 

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="11.jpg" align="center" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="12.jpg" align="center" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="13.jpg" align="center" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1;}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script></td>
        </tr>
        
</table>
        </div>
          <br><br>
           <form name="search_form" method="post" action="search.php">
    <input type="text" name="search_box" value=""/>
    <input type="submit" name="search" value="Search"/>
</form>
          <table>
              <tr>
                  <td>
                       
                  </td>
                  <td><font color="beige" ><em><h5>The new Spring-Summer collection steps outside the box, breaks down barriers and exudes its own style. <br>Vibrant colours, new formats, explosive motifs. The silk scarf breaks with convention...</h5></em></font></td><td>
                      </th> <video width="565" height="315" controls autoplay>
                          <source src="hermes.mp4" type="video/mp4">

                      </video>
                  </td>
              </tr>
          </table>
      </div>
    </div>
  </section>

      
  
  <footer class="footer text-faded text-center py-5">
    <div class="container">
        
        <p class="m-0 small">Copyright &copy; Elizabeth</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script language="javascript">
    function clearData(){
        window.clipboardData.setData('text',''); 
    }
    function cldata(){
        if(clipboardData){
            clipboardData.clearData();
        }
    }
    setInterval("cldata();", 1000);
</script>


<body ondragstart="return false;" onselectstart="return false;"  oncontextmenu="return false;" onload="clearData();" onblur="clearData();">
</body>

</html>


