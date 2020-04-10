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
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="prod.php">Products</a>
            <span class="sr-only">(current)</span>
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
          <h2 class="section-heading mb-4" align='center'>
        <font color="beige" >HERMÈS COLLECTION</font></h2>
        <div class="row">
          <div class="col-xl-11 mx-auto">
              <div class="cta-inner text-center rounded">
          <html>
   <?php
include "connection1.php";
$sql="SELECT * FROM products  ";
if(isset($_POST["search"])){
    $search_term = mysqli_real_escape_string($con, $_POST["search_box"]);
    $sql.=" WHERE title  LIKE  '%{$search_term}%' ";
 
}
$query= mysqli_query($con, $sql) or die(mysqli_error($con));
?>

              
<table width="100%" cellpadding="4" cellspace="2" >
    <?php
        while($row=mysqli_fetch_array($query)){
            ?>
    <tr><td><img align='center' src="<?php echo $row['image'];?>"</td></tr>
    <tr><td><font align="center"><b>Name: &nbsp;&nbsp;
                <i><?php echo $row['title'];?><i/></font><b></th></td></tr>
        
        <tr><td><font align="center"><b> &nbsp;&nbsp;
                    </font><font align='center' ><?php echo $row['descr'];?></b></font></i></td> 
        </tr>
        <tr><td><font align="center"><b>Price: &nbsp;&nbsp;
         <i><?php echo $row['price'];?> $ <i/></font></td></tr>
         <tr><td></td></tr>
        <tr><td></td></tr>
        <tr><td></td></tr>
             <?php } ?>
</table>
              </div>
          </div></div>
       <form action="prod.php" method="post" >
                    <br>
                    <h1 align="center"> <button align="center" type="submit" class="btn btn-secondary" ><h3>Watch all products</h3></button></h1>
    
                       </form></div></section>
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