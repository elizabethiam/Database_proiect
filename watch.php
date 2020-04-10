
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
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
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
            <a class="nav-link text-uppercase text-expanded" href="store.php">Store</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
          </li>
          <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="account.php">Login</a>
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
      <div class="row">
        
           <html>
    
        <?php
//include connection file
//include 'connection.php';
//$sql='SELECT * FROM images;';
//$query= mysqli_query($con,$sql)or die(mysqli_error($con));
require_once 'connection.php';
$query = new MongoDB\Driver\Query([]); 
$rows = $client->executeQuery("images.images", $query);
?>
<table width="100%" cellpadding="6" cellspace="6" rules="rows">
    <tr>
        <th>Name</th>
        <th>Imagine</th>
        <th>Description</th>
        <th colspan="10" align="center">Actions</th>
    </tr>
        <?php
       // while($row=mysqli_fetch_array($query)){
            ?>
    <?php foreach($rows as $val): ?>
        <?php if((isset($val->title))&&(isset($val->image))&&(isset($val->descr))&&($val->title!="")&&($val->image!="")&&($val->descr!="")):?>   
    <tr style="border-bottom:20px solid #e6a756;">
        
        <th> <h2 align="left"><i><?php echo $val->title;?><i/></h2></th>
    <th><img align='center' src="<?php echo $val->image;?>"> </th>
    <td><i><font size='4' color='beige' align='right' ><?php echo $val->descr;?></font></i></td> 
        <td>
            <?php echo "
                <a href=\"edit.php?id=".$val->_id."\">Edit</a>
                    <a href=\"delete.php?id=".$val->_id."\" onclick=\"return confirm('Are you sure?')\">Delete</a>
            <a href=\"View.php?id=".$val->_id."\">View</a>"?>
        </td>
    </tr>
        <?php //} ?>
    <?php endif;?>
    <?php endforeach;?>
</table>
<br><br>
<a href="upload.php">Upload another image</a>
    </body>
</html>
  
          
        </div>
        
      </div>
 
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2019</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

