<?php include('header.php');
  include('DBConn.php');?>
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(Inside/images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Member Registration</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Registration</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div> 
        </div>  
    </section>
    

    
    <section id="contact-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-from">
                        <div class="section-First_name">
                            <h5>Registration  </h5>
                            <h2>Member Registration</h2>
                        </div> 
                        <div class="main-form pt-45">
                            <form    method="post"  enctype="multipart/form-data">
                                <div class="row">
								
								 <div class="col-md-12">
                                        <div class="singel-form form-group">
                                  
								  
								   <select class="form-control select2" style="width: 100%;" name="categoryid" required>
               <option selected disabled value=""> Select Your Profession</option> 
               
              <option   value="Rapper"> Rapper</option> 
			   <option   value="Producer"> Producer</option> 
			    <option   value="Lyricist"> Lyricist</option>
			    <option   value="Mixing Engineer"> Mixing Engineer</option>
			    <option   value="Mastering Engineer"> Mastering Engineer</option>
			    <option   value="Recording Engineer"> Recording Engineer</option>
			    <option   value="Vocalist"> Vocalist</option>
			    <option   value="String Instrument Player"> String Instrument Player</option>
			    <option   value="Drummer"> Drummer</option>
			    <option   value="Percussionist"> Percussionist</option>
			    <option   value="Piano / Keys Player"> Piano / Keys Player</option>
			    <option   value="Woodwind Instrument Player"> Woodwind Instrument Player</option>
			    <option   value="Sri Lankan Cultural Instrument Player"> Sri Lankan Cultural Instrument Player</option>
              </select>
								  
								  
                                        </div> 
                                    </div>
									
									
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="First_name" type="text" placeholder="First name"  required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="Last_name" type="text" placeholder="Last name"   required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="Artist_name" type="text" placeholder="Artist name"   required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
							
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="Email" type="text" placeholder="Email"   required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
									                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="Phone_number" type="text" placeholder="Phone number"  required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
										
										   <select class="form-control select2" style="width: 100%;" name="Gender" required>
               <option selected disabled value=""> Select Gender  </option> 
               
              <option   value="Male"> Male</option> 
			   <option   value="Female"> Female</option> 
			   
              </select>
										
										
										
										
										

                                           
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>


                  <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="user_name" type="text" placeholder="User name"  required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="singel-form form-group">
                                            <input name="password" type="text" placeholder="Password"   required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
									
									
									     <div class="col-md-12">
                                        <div class="singel-form form-group">
										* Profile Image
                                            <input name="image" type="file"    >
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
									

                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                      			
											  <button type="submit" name="Register"  class="main-btn">Register</button>
										 
                                        </div>
                                    </div> 
                                </div>
                            </form>
                        </div>
                    </div> 
                </div>
				
			 
            </div> 
        </div>

    </section>

	
 
	
	<?php 
        if(isset($_POST['Register'])){ 
		
             $First_name = $_POST['First_name'];	
			         $Last_name = $_POST['Last_name'];  
             $Artist_name = $_POST['Artist_name'];  
			$Email = $_POST['Email'];  
 		    $Phone_number = $_POST['Phone_number'];	
            $Gender = $_POST['Gender'];  
			$user_name = $_POST['user_name'];
			$password = MD5($_POST['password']);

            $categoryid = $_POST['categoryid'];

              {
                    
     $pic = $_FILES["image"]["name"];
                  $type = $_FILES["image"]["type"];
                  $size = $_FILES["image"]["size"];
                  $temp = $_FILES["image"]["tmp_name"];
                  $error = $_FILES["image"]["error"];
              
                  if ($error > 0){
                      die("Error uploading file! Code $error.");
                      }
                  else{
                      if($size > 100000000000) 
                          {
                          die("Format is not allowed or file size is too big!");
                          
                          }
                  else
                        {
                      move_uploaded_file($temp, "images/".$pic);
                        }
                      } 
              }	
          
              mysqli_query($TuneMaster,"INSERT INTO  members(First_name,Last_name,Artist_name,Email,img,Phone_number,Gender,user_name,password,category) VALUES('$First_name','$Last_name','$Artist_name', '$Email', '$pic','$Phone_number','$Gender','$user_name','$password','$categoryid')")or die(mysqli_error($TuneMaster));
          
          
		    $Request_id=mysqli_insert_id($TuneMaster); 
			
               mysqli_query($TuneMaster,"INSERT INTO  profile_deep(Member_id) VALUES('$Request_id')")or die(mysqli_error($Request_id));

           
		   echo '<script type="text/javascript">
                  jQuery(function validation(){
                  swal("Success", "Successfully Registered", "success", {
                  button: "Continue",
                      });
                  });
                  </script>';
            
          
            }
          
       
          
          ?>
	
	
	
	
	<?php include('footer.php');?>
    
