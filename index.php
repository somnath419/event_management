<?php
session_start(); 
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Event Management</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <?php require_once "header.php"; ?>

    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to SLIET</h1>
		<h3>Event Management Portal</h3>
        <p class="lead">All in One: Registration, View Results</p>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h2>Event Lists</h2>
			
			<div class="row text-center text-lg-left">
			
				<?php 
			  
					$con = mysqli_connect("localhost","root","","event_management"); //keep your db name
					$sql = "SELECT * FROM event_list";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					
						$id=$row["e_id"];
					
				?> 
				<div class="col-lg-3 col-md-4 col-xs-6">  
					<a href="event_detail_student.php?event_id=<?php echo $id;?>" class="d-block mb-4 h-100">
					<img class="img-fluid img-thumbnail" src="event_logo.jpg" alt="">
					
					<?php
						echo $row["event_name"];
						
						echo '</a></div>';
						}
							} else {
						echo "No Events";
							}	

					?>
				
	  
				
			</div>
		</div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ">
		  <h2> Winners:</h2>
		  
		  <div class="row">
		  
		  <?php 
			  
					$con = mysqli_connect("localhost","root","","event_management"); //keep your db name
					$sql = "SELECT * FROM event_list";
					$result = mysqli_query($con, $sql);

					if (mysqli_num_rows($result) > 0) {
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
					
						$id=$row["e_id"];
						$name=$row["event_name"];
						
						$sql2="select * from winner where e_id='$id' ";
						$result2 = mysqli_query($con, $sql2);
						
						if (mysqli_num_rows($result2) > 0) {
					// output data of each row
					while($row2 = mysqli_fetch_assoc($result2)) {
					
						$first=$row2["first_pos"];
						$second=$row2["second_pos"];
						$third=$row2["third_pos"];
						
						?>
						
						<div class="col-lg-4 col-md-4 col-sm-6"> 
						
						 <h3>Event "<?php echo $name; ?>": </h3>
						  <div>1. <?php echo $first; ?></div>
					      <div>2. <?php echo $second; ?></div>
						  <div>3. <?php echo $third; ?></div>
				         </div>
						
						
						
	
					
				
						<?php
					}
				}
				}
			}
				?> 
				
				</div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2></h2>
            <p class="lead"></p>
          </div>
        </div>
      </div>
    </section>

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
