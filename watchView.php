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
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item  px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
             
            </a>
          </li>
          <li class="nav-item  px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.php">About Hermes</a>
            
          </li>
           <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="watchView.php">History
               <span class="sr-only">(current)</span></a>
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

  <section class="page-section clearfix">
    <div class="container">
    
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper"></span>
            <span class="section-heading-lower"></span>
          </h2>
          <p class="mb-3">
          </p>
          
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
        
          
            <h2 class="section-heading mb-4">
        <font color="beige">WHEN HERMÈS BEGAN, HE FIRST CREATED A HARNESS SHOP IN THE GRANDS BOULEVARDS QUARTER OF PARIS.</font></h2>
         <h5>There he was dedicated to serving European noblemen. Hermès created quality wrought bridles and harnesses in his shop for the horse carriage industry. For his work, he won many awards such as the first prize in its class at the Expositions Universelles in Paris in 1855 and again in 1867.
         </h5>
        
   <?php
//include connection file
//include 'connection.php';
//$sql='SELECT * FROM images;';
//$query= mysqli_query($con,$sql)or die(mysqli_error($con));
   require_once 'connection.php';
$query = new MongoDB\Driver\Query([]); 
$rows = $client->executeQuery("images.images", $query);
?>
<table width="110%" cellpadding="4" cellspace="4" rules="rows">
    <tr>
        
        <th colspan="10" align="center"></th>
    </tr>
        <?php
        //while($row=mysqli_fetch_array($query)){
            ?>
    <?php foreach($rows as $val): ?>
        <?php if((isset($val->title))&&(isset($val->image))&&(isset($val->descr))&&($val->title!="")&&($val->image!="")&&($val->descr!="")):?>   
    
    <tr style="border:20px solid rgba(230, 167, 86, 0)">
 
   
    <th><img align='center' src="<?php echo $val->image;?>"</th>
    
    <td><i><font size='4' color='beige' align='right' ><?php echo $val->descr;?></font></i></td> 
   
    </tr>
        <?php //} ?>
    <?php endif;?>
    <?php endforeach;?>
</table>
        <br><br>
         <tr><font size='4' color='black'  >Other famous bags followed in the 1930’s, such as the leather "Sac à dépêches" bag in 1935 (later renamed the "Kelly bag” after Grace Kelly) and the Hermès carrés (square scarves) in 1937. In 1956, Life magazine featured a photograph of Grace Kelly carrying the "Sac à dépêches" bag. She had allegedly held it in front of herself to disguise her pregnancy. Thus, the public began calling it the "Kelly" bag and Hermès subsequently adopted the name for the bag and it became hugely successful.
    </font></tr>
    <br><br>
<tr><font size='5' color='white'  >These are among the most recognizable Hermès items in the collection and for good reason; they are original and timeless. The Hermès scarves became integrated into French culture and later, the Hermès shoulder bag would also reach such status, paving the way for Hermès as a high-end luxury brand the world over.</font></tr>

 <div align="center">
                  <iframe width="565" height="315" src="https://www.youtube.com/embed/U1WxiNqWdX4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div> 
    <form action="prod.php" method="post" align='center'>
                    
                    <h1> <button  type="submit" class="btn btn-secondary" ><h5>Watch our products</h3></button></h1>
    
                            </form>
    </body>
</html>
        
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


