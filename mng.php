



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Subscribe</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
  

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

               
          <!-- add form for adding subsctibers -->
          <div class="card my-4">
          	<h5 class="card-header">give login credentials</h5>
         <?php  
           if(isset($_GET['msg'])){
             echo $_GET['msg'];
            
       
          }
          ?>
          	<div class="card-body">
      		<form action='admin/usermanage.php' method='post'>
  			
  			Email ID:<br>
  			<input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required autocomplete="off"><br>
			PASSWORD:<br>
  			<input type="password" name="password" class="form-control" placeholder="Enter your password" required autocomplete="off"><br>
  			
  			<button type="submit" class="btn btn-primary" name="submit">Submit</button><br>
			</form>
		</div>
			<br>
		</div>

          
          

    

        <!-- Sidebar Widgets Column -->
     
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
      <?php include('includes/footer.php');?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  
  </body>

</html>
