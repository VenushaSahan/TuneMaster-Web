 
	
	<?php include('DBConn.php');
session_start();
if(empty($_SESSION['Member_id'])):
header('Location:Member_login.php');
endif;
include('header.php');
?>

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(Inside/images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Upload Audio  </h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Audio</li>
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
                        <div class="section-Title">
                            <h5>Upload  </h5>
                            <h2>Audio Upload</h2>
                        </div> 
                        <div class="main-form pt-45">
                            <form    method="post"  enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="Title" type="text" placeholder="Audio Title"  required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                 
									
									     <div class="col-md-12">
                                        <div class="singel-form form-group">
								 
                                            <input name="image" type="file"    >
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
									

                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                      			
											  <button type="submit" name="Upload"  class="main-btn">Upload</button>
										 
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
        if(isset($_POST['Upload'])){ 
		
             $Title = $_POST['Title'];	
			      #    	$Member_id = $_SESSION['Member_id'];
			
			  	$Member_id = $_SESSION['Member_id'];
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
                      move_uploaded_file($temp, "audio/".$pic);
                        }
                      } 
              }	
          
              mysqli_query($TuneMaster,"INSERT INTO  audio(Title,afile,Member_id) VALUES('$Title','$pic','$Member_id')")or die(mysqli_error($TuneMaster));
          
          
 
              echo '<script type="text/javascript">
                  jQuery(function validation(){
                  swal("Success", "Successfully Uploaded", "success", {
                  button: "Continue",
                      });
                  });
                  </script>';
            
          
            }
          
       
          
          ?>
	
	
	
	
	<?php include('footer.php');?>
    
