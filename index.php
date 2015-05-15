
	
	<?php
	$header_title = "Welcome to Travel Experts";
	?>

	<?php
	include "header.php";
	?>


	<body>

		<div id="wrapper">

			<div id="myCarousel" class="carousel slide" data-ride="carousel">
	
 		 		<!-- Indicators -->
  				<ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
  				</ol>

  
				<div class="carousel-inner" role="listbox">
					<div class="item active">
					    <img src="img_pack_asia.gif" alt="Asia">
					       <div class="carousel-caption">
      					 		<h3>Asian Expedition</h3>
					        	<p>Airfare, Hotel & Eco Tour</p>
					        	<p><a class="carButton" href="packages.php" role="carButton">Sign up today</a></p>
					      </div> <!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
					    <img src="img_pack_caribbean.gif" alt="Caribbean">
					    	<div class="carousel-caption">
      							<h3>Caribbean New Year</h3>
					     	   <p>Cruise the Caribbean!</p>
					     	   <p><a class="carButton" href="packages.php" role="carButton">Sign up today</a></p>
					     	</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
					    <img src="img_pack_polynesian.gif" alt="Polynesian">
					     	<div class="carousel-caption">
      					 		<h3>Polynesian Paradise</h3>
					     	   <p>8 Days in Hawaii</p>
					     	   <p><a class="carButton" href="packages.php" role="carButton">Sign up today</a></p>
					     	</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

					<div class="item">
						<img src="img_pack_european.gif" alt="European">
					    	<div class="carousel-caption">
      							<h3>European Vacation</h3>
					        	<p>Tour with Rail Pass</p>
					        	<p><a class="carButton" href="packages.php" role="carButton">Sign up today</a></p>
								</div><!--close carousel-caption class div-->
					</div><!--close item class div-->

   				</div> <!-- div for carousel-inner -->

			</div><!-- div for myCarousel -->

			 <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
		</div> <!--close wrapper div-->
		 
		
		<?php
		include "footer.php";
		?>

	</body>
	

</html>