<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style.css">
		 <!-- Bootstrap Core CSS -->
		 <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pe-icons.css" rel="stylesheet">
	</head>
	<body id="page-top"  class="index">
	  <div class="  master-wrapper">
		   <nav class="navbar navbar-default navbar-fixed-top header-3">
              <div class="top-bar smoothie hidden-xs">
                  <div class="container">
                      <div class="clearfix">
                          <ul class="list-inline social-links wow pull-left">
                             <li>
                                 <a href="#"><i class="fa fa-twitter"></i></a>
                              </li>
                              <li>
                                  <a href="#"><i class="fa fa-pinterest"></i></a>
                               </li>
                               <li>
                                  <a href="#"><i class="fa fa-dribbble"></i></a>
                               </li>
                               <li>
                                  <a href="#"><i class="fa fa-facebook"></i></a>
                               </li>
                               <li>
                                  <a href="#"><i class="fa fa-behance"></i></a>
                               </li>
                               <li>
                                  <a href="#"><i class="fa fa-linkedin"></i></a>
                               </li>
                            </ul>

                            <div class="pull-right text-right">
                               <ul class="list-inline">
                                  <li>
                                      <div><i class="fa fa-envelope-o"></i> emeddo@gmail.com</div>
                                  </li>
                                  <li>
                                      <div class="meta-item"><i class="fa fa-mobile"></i> +234 8138 719 229</div>
                                  </li>
                                </ul>
                            </div>
                       </div>
                    </div>
               </div>
               <div class="container header-3-container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- <a class="navbar-brand smoothie logo logo-light" href="index.html"><img src="assets/img/logo1.png" alt="logo" style="height: 500px;"></a> -->
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#">Home <span></span></a>   
                        </li>
                        <li  class="dropdown">
                            <a href="contact.php" >Contact <span></span></a>
                        </li>
                        <li  class="dropdown">
                            <a href="about-us.php">About <span></span></a>
                        </li>
                        <li  class="dropdown">
                            <a href="hotel.php">BOOK HERE <span></span></a>
                        </li>
                       
                        <!-- <li><a href="#search"><i class="pe-7s-search"></i></a></li> -->
                       <!-- <li><a href="javascript:void(0);" class="side-menu-trigger hidden-xs"><i class="fa fa-bars"></i></a></li>-->
                        
                    </ul>
                    
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
		
	<?php 
		// session_start();
		// $_SESSION['message'] = 'success';
		// header('Location: hotel.php ? mes')

		$arrivalErr = $departureErr = $first_nameErr = $last_nameErr = $emailErr = $phoneErr = $adultsErr = $childrenErr = $room_prefErr = "";
		$arrivalErr = $departure = $first_name = $last_name = $email = $phone = $adults = $children = $room_pref = "";
	?>
    
	    <div class="booking-form">

		   <form class="hotel-reservation-form" method="post" action="validation.php">
			    <h1><i class="far fa-calendar-alt"></i>Hotel Reservation Form</h1>
			   <div class="fields">
				   <!-- Input Elements -->
			    </div>
                <div class="wrapper">
		            <label for="arrival">Arrival</label>
		          <div class="field">
			         <input id="arrival" type="date" name="arrival" required >
			         <span class="error">* <?php echo $arrivalErr;?></span>
		           </div>
	           </div>
		        <!-- <div class="gap"></div> -->
		        <div>
	              <div>
		              <label for="departure">Departure</label>
		              <div class="field">
			              <input id="departure" type="date" name="departure" required>
			              <span class="error">* <?php echo $departureErr;?></span>
		              </div>
	               </div>
               </div>
               <div class="wrapper">
		            <div class="field">
			           <i class="fas fa-user"></i>
			           <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
			           <span class="error">* <?php echo $first_nameErr;?></span>
		           </div>
	           </div>
	           <!-- <div class="gap"></div> -->
	           <div>
		          <div class="field">
			            <i class="fas fa-user"></i>
			            <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
			            <span class="error">* <?php echo $last_nameErr;?></span>
		          </div>
	           </div>

               <div class="field">
	               <i class="fas fa-envelope"></i>
	               <input id="email" type="email" name="email" placeholder="Your Email" required>
	               <span class="error">* <?php echo $emailErr;?></span>
                </div>
                <div class="field">
	               <i class="fas fa-phone"></i>
	               <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
	               <span class="error">* <?php echo $phoneErr;?></span>
               </div>
               <div class="wrapper">
		           <label for="adults">Adults</label>
		           <div class="field">
			           <select id="adults" name="adults" required>
				          <option disabled selected value="">--</option>
				          <option value="1">1</option>
				          <option value="2">2</option>
				          <option value="3">3</option>
				          <option value="4">4</option>
			           </select>
			           <span class="error">* <?php echo $adultsErr;?></span>
		           </div>
	           </div>
	           <!-- <div class="gap"></div> -->
	           <div>
		           <label for="children">Children</label>
		           <div class="field">
			           <select id="children" name="children" required>
				            <option disabled selected value="">--</option>
				            <option value="0">0</option>
				            <option value="1">1</option>
				            <option value="2">2</option>
				            <option value="3">3</option>
				            <option value="4">4</option>
			           </select>
			           <span class="error">* <?php echo $childrenErr;?></span>
		           </div>
	            </div>
                <label for="room_pref">Room Preference</label>
                <div class="field">
	                <select id="room_pref" name="room_pref" required>
		              <option disabled selected value="">--</option>
		              <option value="Standard">Standard</option>
		              <option value="Deluxe">Deluxe</option>
		              <option value="Suite">Suite</option>
	               </select>
	               <span class="error">* <?php echo $room_prefErr;?></span>
               </div>
               <input type="submit" value="Book">
           </form>
		</div>
		  
	  </div>
	  <footer class="white-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="list-inline social-links wow">
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-dribbble"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-behance"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</li>
					</ul>
				</div>

				<hr class="thin-hr" />
			</div>
		</div>
	</footer>

        
	</body>
</html>