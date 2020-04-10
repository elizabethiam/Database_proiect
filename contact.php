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

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Elite Online Store</span>
    <span class="site-heading-lower">Hermes</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg  navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">About Hermes</a>
          </li>
           <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="watchView.php">History</a>
          </li>
          <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="prod.php">Products</a>
            
          </li>
           <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="watches.php">Watches</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
            <span class="sr-only">(current)</span>
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
          <h2 class="section-heading mb-2" align='center'>
       <canvas id="myCanvas" width="250" height="150"
style="border:10px solid beige;">

</canvas>

<script>
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
ctx.font = "40px Italic ";
ctx.fillStyle = "beige";
ctx.textAlign = "center";
ctx.fillText("Our contacts:", canvas.width/2, canvas.height/2);
</script>
</h2>
        <div class="row">
          <div class="col-xl-11 mx-auto">
              <div class="cta-inner text-center rounded">
    
         <?php
//The code below create the class
class User{
    //Creating some proprietes (variables tied to an object)
    public $exista=true;
    public $adresa;
    public $tel;
    public $email;
   
    
    //Assigning the values
    public function __construct($tel,$email){
       
        $this->tel=$tel;
        $this->email=$email;
       
}

//Creating a method(function tied to an object)
public function show(){
    return "If you want to place an order, call us on ".$this->tel." or contact us here: ".$this->email.".";
}


}

//Creating a new student
$me=new User('+40743479745','lizad149@mail.ru');

//Printing out, what the greet method returns
echo $me->show();
?>
                  <br><br>
                        <?php
//The code below create the class
class Contact{
    //Creating some proprietes (variables tied to an object)
    public $exista=true;
  
    public $email;
   
    
    //Assigning the values
    public function __construct($email){
       
       
        $this->email=$email;
       
}

//Creating a method(function tied to an object)
public function show(){
    return "In case of any problem with our products, please, give us an email: ".$this->email." .";
}


}

//Creating a new student
$me=new Contact('lizad1409@gmail.com');

//Printing out, what the greet method returns
echo $me->show();
?>
                  <br><br>
                  <video width="565" height="315" controls autoplay>
                          <source src="terr.mp4" type="video/mp4">

                      </video>
                  <br><br>
                  
                     </div>
            
             <?php  $xslDoc = new DOMDocument();
   $xslDoc->load("hyperlink.xsl");

   $xmlDoc = new DOMDocument();
   $xmlDoc->load("hyperlink.xml");

   $proc = new XSLTProcessor();
   $proc->importStylesheet($xslDoc);
   echo $proc->transformToXML($xmlDoc);
?>
          </div>
           
            
               
  
       </div>
          <br><br>
            
                       <form action="store.php" method="post" >
                    <br>
                    <h1 align="center"> <button align="center" type="submit" class="btn btn-secondary" ><h3>Our address</h3></button></h1>
    
                       </form>
         </div></section>
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
        window.clipboardData.setData('text','') 
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
