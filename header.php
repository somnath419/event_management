<!-- header -->

<html>
<head>
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Events</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
		  <?php
          if(!isset($_SESSION['id']))
          {
			  ?>
            <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="student_signup.php">Sign Up</a>
			</li>
            <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="login.php">Login<a>
            </li>
			<?php 
		  }else
		  { ?>
		    <li class="nav-item">
			<a class="nav-link js-scroll-trigger" href="logout.php">Logout<a>
            </li>
		  <?php } ?>
		  
			
			
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	


	
	</body>

	</html>
