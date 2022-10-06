 
 
<?php include('DBConn.php');
session_start();

include('header.php');
?>



    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(Inside/images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>My Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Complete Profiles</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div>  
        </div> 
    </section>

 
    
    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
		
		
	 	
	  	<?php
				
	$Member_id = $_SESSION['Member_id'];
	 
		$query=mysqli_query($TuneMaster,"select * from members left join profile_deep on members.Member_id = profile_deep.Member_id  where profile_deep.Member_id = '$Member_id'  ")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
			?>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="images/<?php echo $row['img'];?>" alt="Teachers">
                        </div>
                        <div class="name">
                            <h6><?php echo $row['First_name'];?></h6>
                            <span><?php echo $row['Last_name'];?></span>
                        </div>
                        <div class="social">
                            <ul>
					 
                    
                                <li><a href="<?php echo $row['Spotify'];?>" target="_blank" ><i class="fa fa-spotify"></i></a></li>
                                <li><a href="<?php echo $row['Youtube'];?>" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                <li><a href="<?php echo $row['Apple'];?>" target="_blank"><i class="fa fa-apple"></i></a></li>
                            </ul>
                        </div>
                        
                    </div>  
                </div>
				
				 
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Update Profile</a>
                          

						  </li>
                          
                           
                        </ul>  
                        <div class="tab-content" id="myTabContent">
                    
                                     <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="reviews-cont">
                                    
                                    <div class="title pt-15">
                                        <h6>Please complete your Profile for better result! </h6>
                                    </div>
									
									
                                    <div class="reviews-form">
                                        <form    method="post">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-singel">
                                                            <input type="text" name="Genres" placeholder="Genres" value="<?php echo $row['Genres'];?>">
														
															 <p style="color:#b1bbc5";>	EX :Rock, Jazz, Edm, Hip-Hop</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-singel">
                                                            <input type="text" name="Moods"  placeholder="Moods" value="<?php echo $row['Moods'];?>">
															
																	 <p style="color:#b1bbc5";>	Ex: Happy, Exuberant, and Energetic</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-12">
                                                        <div class="form-singel">
                                                            <textarea name="Description"  placeholder="Description">  <?php echo $row['Description'];?></textarea>
                                                        </div>
                                                    </div>
													
													
													
													
													<div class="col-md-4">
                                                        <div class="form-singel">
                                                            <input type="text" name="Spotify"  placeholder="Spotify link" value="<?php echo $row['Spotify'];?>" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-singel">
                                                            <input type="text" name="Youtube"  placeholder="Youtube link" value="<?php echo $row['Youtube'];?>" >
                                                        </div>
                                                    </div>
													
													 <div class="col-md-4">
                                                        <div class="form-singel">
                                                            <input type="text" name="Apple"  placeholder="Apple link" value="<?php echo $row['Apple'];?>" >
                                                        </div>
                                                    </div>
													
													        <?php }?>
                                                    <div class="col-lg-12">
                                                        <div class="form-singel">
                                                            <button type="submit" name="complete" class="main-btn">Update </button>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </form>
                                    </div>
                                </div>  
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>  
			

               
			
        </div>  
    </section>

 
		<?php 
		
		
        if(isset($_POST['complete'])){  
              $Genres = $_POST['Genres'];  
              $Moods = $_POST['Moods'];	
              $Description = $_POST['Description'];  
			  $Spotify = $_POST['Spotify'];  
			  $Youtube = $_POST['Youtube'];  
			  $Apple = $_POST['Apple'];  
				$Email = $_POST['Email'];  
		 
			  		$Member_id=    $_SESSION['Member_id'];
					
 
         
              {
              // save new data
              mysqli_query($TuneMaster," Update profile_Deep set  Genres = '$Genres',Moods = '$Moods' , Description = '$Description' , Spotify = '$Spotify'  , Youtube = '$Youtube' , Apple = '$Apple' where Member_id = '$Member_id'")or die(mysqli_error($TuneMaster));
                  echo '<script type="text/javascript">
                  jQuery(function validation(){
                  swal("Success", "Thank You! Profile Successful Completed! ", "success", {
                  button: "Continue",
                      });
                  });
                  </script>';
                }
          
				echo '<script>
				         setTimeout(function(){
				            window.location.href = "Complete_Profiles.php";
				         }, 2000);
				      </script>';
					


          
            }
          
        
          
          ?>
				
 
 
 

 	<?php include('footer.php');?>