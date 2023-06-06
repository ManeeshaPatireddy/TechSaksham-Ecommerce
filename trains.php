<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>SHOW TRAINS DETAILS </title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus1.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
	    <header class="header">
            <a href="#" class="logo"><i class="fas fa-hiking"></i> IndiaTourism.com</a>
	    <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="index.html#home">home</a>
            <a href="pages-sign-up.php">Book Now</a>
            </nav>
	    </header>
	    <div id="content-top-border" class="container">
            </div>
            <div id="content">
                <div class="container background-white">
					<div class="row margin-vert-30">
                        <div class="col-md-12">
						<h1 style="text-align:center">TRAIN DETAILS</h1>
						<?php
							$con=mysqli_connect("localhost","root","","Tour");
							if(!$con)
								die("cannot connect to server");
							else
							{
								$here=$_POST["c23"];
								$there=$_POST["c24"];
								$sql="select * from train_search where train_from='".$here."' and train_to='".$there."'";
								$rs=mysqli_query($con,$sql);
								if(mysqli_num_rows($rs)>0)
								{
									echo "<table border='1px' align='center' cellpadding='20px' cellspacing='10px'>";
									echo "<tr align='center'>";
									echo "<th>TRAIN NAME</th>";
									echo "<th>TRAIN FROM</th>";
									echo "<th>TRAIN TO</th>";
									echo "<th>TRAIN DEPARTURE TIME</th>";
									echo "<th>TRAIN ARRIVAL TIME</th>";
									echo "<th>TRAVEL CLASS</th>";
									echo "<th>JOURNEY TYPE</th>";
									echo "<th>TRAIN PRICE</th>";
									echo "</tr>";
									while($row=mysqli_fetch_row($rs))
										{
											echo "<tr align='center'>";
											echo "<td>$row[1]</td>";
											echo "<td>$row[2]</td>";
											echo "<td>$row[3]</td>";
											echo "<td>$row[4]</td>";
											echo "<td>$row[5]</td>";
											echo "<td>$row[6]</td>";
											echo "<td>$row[7]</td>";
											echo "<td>$row[8]</td>";
											echo "</tr>";
										}
										echo "</table>";
									}
								}
							?>
						</div>
					</div>
				</div>
			</div>
            <div id="content-bottom-border" class="container">
            </div>
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
    </body>
</html>
<?php
  //}
 ?>
