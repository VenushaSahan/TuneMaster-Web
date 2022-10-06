 
<?php include('DBConn.php');
 
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TuneMaster</title>
  
    <link rel="stylesheet" href="Inside/css/slick.css">
    <link rel="stylesheet" href="Inside/css/animate.css">
    <link rel="stylesheet" href="Inside/css/nice-select.css">
    <link rel="stylesheet" href="Inside/css/jquery.nice-number.min.css">
    <link rel="stylesheet" href="Inside/css/magnific-popup.css">
    <link rel="stylesheet" href="Inside/css/bootstrap.min.css">
    <link rel="stylesheet" href="Inside/css/font-awesome.min.css">
    <link rel="stylesheet" href="Inside/css/default.css">
    <link rel="stylesheet" href="Inside/css/style.css">
    <link rel="stylesheet" href="Inside/css/responsive.css">
	<script src="Inside/sweetalert/sweetalert.js"></script>
	<script src="Inside/jquery/dist/jquery.min.js"></script>
</head>

<body>
   
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>
  
    
    <header id="header-part">
       
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                            
                                <li><img src="Inside/images/all-icon/email.png" alt="icon"><span>TuneMaster@gmail.com</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>24/7 Online </p>
                        </div>
                    </div>
                </div> 
            </div> 
        </div> 
        
        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="logo">
                            <a href="#">
                                <img src="Inside/images/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="support-button float-right d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="Inside/images/all-icon/support.png" alt="icon">
                                </div>
                                <div class="cont">
                                    <p>Need Help? call us free</p>
                                    <span>+94 77 89 65 777</span>
                                </div>
                            </div>
				 	
							
							
							
                            <div class="button float-left">
                                
								
								
								
								
												
																 <?php	 
			  if(empty($_SESSION['Member_id']))
			  {

		echo "<a href='Member_login.php' class='main-btn'>  Login</a>";
		 
						
			  }
			   
			 
			 ?> 
								
								
								
								
								
								
								
								
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div> 
        
        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
								
								
								
											 <?php	 
			  if(empty($_SESSION['Member_id']))
			  {

		echo "<li class='nav-item'> <a class='active' href='index.php'>Home</a> </li>";
		
				echo " <li class='nav-item'>  <a href='Member_register.php'>New  Registration</a>  </li>";
		     
		
 
		 	echo " <li class='nav-item'>  <a href='Freelancer_Profiles.php'>   View Profiles </a>  </li>";
			 
						echo " <li class='nav-item'>  <a href='Freelancer_Profiles_search.php'>   Advance Search    </a>  </li>";
					
					 		
						
			  }
			  else
			  

			 {
			 
			 ?> 
			 
			 
					      	  <li class="nav-item">
                                        <a href="Complete_Profiles.php">My   Profile   </a>
                                    </li>
                                       
									  <li class="nav-item">
                                        <a href="Upload_Audio.php">Upload  Audio   </a>
                                    </li>
									
                                    
   <li class="nav-item">
                                        <a href="logout.php">Logout     </a>
                                    </li>	
			
								
							  <?php	 }
			 
			 ?> 		
								
        
      
                                    
                              
                                    
                                     
                                     
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                     
                </div> 
            </div> 
        </div>
        
    </header>
    
    
    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
    
	