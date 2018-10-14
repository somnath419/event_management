<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Detail</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>
  
  <?php 
		  
		  $id=$_GET['id'];
		  
		    $con = mysqli_connect("localhost","root","","event_management"); //keep your db name
            $sql = "SELECT * FROM event_list WHERE e_id='$id'";
            $result = mysqli_query($con, $sql);

           if (mysqli_num_rows($result) > 0) {
		   $row = mysqli_fetch_assoc($result);
				
				
				
			}
			
					?>

  <body id="c" style="padding-top:40px;">

    <?php require_once"header.php"; ?>
    <div class="container">
    <u><h1 class="m-0 text-center" style="padding-top:20px;"><?php echo $row["event_name"] ?></h1></u>
    <div class="row" style="padding:20px;">
        <div class="col-md-4">
            <img style='width:200px;height:200px; margin-right:10px;' src="http://placehold.it/400x300" />
        </div>
		
		
		
		<div class="col-md-8">
			<p><b>Description: </b><?php echo $row["description"] ?></p>
			<p><b>Start date: </b><?php echo $row["start_date"] ?></p>
			<p><b>End date: </b><?php echo $row["end_date"] ?></p>
			<p><b>Total Prize: </b>Rs. <?php echo $row["total_prize"] ?></p>
			<p><b>Entry Fee:  </b>Rs. <?php echo $row["entry_fee"] ?></p>

			<button type="submit" name="reg_stu" class="btn btn-primary">Register</button>
		</div>
    </div>
	</div>


    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Event_management 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
