<?php include('header.php');
  include('DBConn.php');
  error_reporting(0);
?>
    
    
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8" style="background-image: url(Inside/images/page-banner-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Freelancer</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Freelancer</li>
                            </ol>
                        </nav>
                    </div>  
                </div>
            </div> 
        </div>  
    </section>
    
	
 
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="slider-cont-3 text-center">
                        <h2>Search for prefered  </h2>
                       
                        <div class="slider-search mt-45">
                           <form method="post">
                                <div class="row no-gutters">
                                    <div class="col-sm-3">
                                         
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="Search_key" placeholder="Search keyword">
                                    </div>
                                    <div class="col-sm-3">
                                        <button type="submit" class="main-btn" name="ml" >Search Freelancer</button>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div> 
                </div>
            </div>  
			
			
 
		 <?php
if (isset($_POST['ml'])){
$Search_key=$_POST['Search_key'];
 




$output=shell_exec("D:/python.exe nlp_algorithms.py \"$Search_key\"   ");
echo "<pre>";
echo "</br>"; 
//echo "<div class='alert alert-danger' role='alert'>"; 
// print_r($output);

echo "</div>"; 


echo "</pre>"; 
 
}?>	
			
		



		
			
	 
	
 
    
    <section id="event-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
		   	<?php
				
			 	 
		$query=mysqli_query($TuneMaster,"select * from members left join profile_deep on members.Member_id = profile_deep.Member_id where profileid = '$output' ")or die(mysqli_error());
		while($row=mysqli_fetch_array($query)){
			?>
               <div class="col-lg-6" >
			  
                   <div class="singel-event-list mt-30">
                       <div class="event-thum">
					      <a href="Freelancer_Profiles_Deep.php?id=<?php echo $row['Member_id'];?>">
                           <img src="images/<?php echo $row['img'];?>" alt="Event">	   </a>
                       </div>
                       <div class="event-cont">
                       
                            <a href="Freelancer_Profiles_Deep.php?id=<?php echo $row['Member_id'];?>"><h4> <?php echo $row['Genres'];?> </h4></a>
                            <span><i class="fa fa-user"></i> <?php echo $row['First_name'];?> <?php echo $row['Last_name'];?> </span>
                            <span><i class="fa fa-phone"></i><?php echo $row['Phone_number'];?></span>
							<br/>
                         <p> Moods :    <?php echo $row['Moods'];?></p>
														<br/>
							    <span><i class="fa fa-calendar"></i> Member From : 2 December 2018</span>
								
                       </div>
                   </div>
			
               </div>
               
                 <?php }?>
               
           </div> 
            
        </div>  
    </section>
    
    	
	<?php include('footer.php');?>