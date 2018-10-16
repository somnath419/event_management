<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

  </head>

  <body id="page-top">


    <header class="bg-primary text-white">
      <div class="container text-center">
        <h1>Welcome to Admin Panel</h1>
		<a href="create_event.php"><button type="submit" name="create" class="btn btn-default">Create Event</button></a>
		<a href="winner_entry.php"><button type="submit" name="create" class="btn btn-default">Register Winners</button></a>
      </div>
    </header>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
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
			
				<div class="col-lg-2 col-md-3 col-xs-6">  
					<a href="event_detail_admin.php?event_id=<?php echo $id;?>" >
					<img class="img-fluid img-thumbnail" src="event_logo.jpg" alt="">
					
					<?php
						echo $row["event_name"];
						?>
						</a>
		<a href="delete_event.php?event_id=<?php echo $id; ?>"><button type="submit" name="create" class="btn btn-default">Delete Event</button></a>

						</div>
						<?php
						}
							} else {
						echo "No Events";
							}	

					?>
            
          </div>
        </div>
      </div>
    </section>


   
  </body>

</html>
