<?php include('header.php');
  include('DBConn.php');?>

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(Inside/images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Freelancer Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Freelancer Profile</li>
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
				
				 		$id=$_GET['id']; 	 
		$query=mysqli_query($TuneMaster,"select * from members left join profile_deep on members.Member_id = profile_deep.Member_id where profile_deep.Member_id = '$id'  ")or die(mysqli_error());
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
                        <div class="description">
                            <p> <?php echo $row['Description'];?></p>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true">Basic Profile</a>
                            </li>
                          
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Work Examples</a>
                            </li>
                        </ul>  
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>Genres</h5>
                                        <p> <?php echo $row['Genres'];?> </p>
                                    </div>  
                                    <div class="singel-dashboard pt-40">
                                        <h5>Moods</h5>
										 <p> <?php echo $row['Moods'];?> </p>
                                     </div>  
                                   
                                </div> 
                            </div>
							     <?php }?>
							
				 

                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                               
	  	<?php
			 		$id=$_GET['id']; 	 
		$query=mysqli_query($TuneMaster,"select * from members left join audio on members.Member_id = audio.Member_id  where audio.Member_id = '$id'  ")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
			?>
							   <div class="reviews-cont">
                                    <div class="title">
                                        <h6><?php echo $row['Title'];?>   </h6>
                                    </div>
                                    <ul>
                                       <li>
                                           <div class="singel-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-thum">
                                                        <audio controls>
 
  <source src="audio/<?php echo $row['afile'];?> " type="audio/mpeg">
Your browser does not support the audio element.
</audio>
                                                    </div>
                                                     
                                                </div>
                                                
                                            </div> 
                                       </li>  
                                       
                                    </ul>
                                 
                                </div>  
								
								
								     <?php }?>
								
								
								
								
								
								
								
								
								
                            </div>
                        </div> 
                    </div>  
                </div>
            </div>  
			
    
               
			
        </div>  
    </section>

 

 	<?php include('footer.php');?>