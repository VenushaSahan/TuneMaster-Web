<?php include('header.php');
  include('DBConn.php');?>
    
    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url(Inside/images/page-banner-6.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Member Login</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Login</li>
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
                            <h5>Login  </h5>
                            <h2>Member Login</h2>
                        </div> 
                        <div class="main-form pt-45">
                            <form    method="post"  enctype="multipart/form-data">
                                <div class="row">
                                     
                                  

                  <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="username" type="text" placeholder="User name"    required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                        <div class="singel-form form-group">
                                            <input name="password" type="password" placeholder="Password"    required="required">
                                            <div class="help-block with-errors"></div>
                                        </div> 
                                    </div>
									
									
									     
									

                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="singel-form">
                                      			
											  <button type="submit" name="Login"  class="main-btn">Login</button>
										 
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
 
if(isset($_POST['Login'])){
$username=$_POST['username'];
$password=MD5($_POST['password']);
$query=mysqli_query($TuneMaster,"select * from members where user_name='$username' and password='$password'")or die(mysqli_error($TuneMaster));
$row=mysqli_fetch_array($query);  
$counter=mysqli_num_rows($query);  
	
$Member_id=$row['Member_id'];  
$First_name=$row['First_name'];    


  	if ($counter == 0)   
	{
    echo '<script type="text/javascript">
    jQuery(function validation(){
    swal("Invalid Login", "Please try again!", "warning", {
    button: "Ok",
        });
    });
    </script>';
    }
    if ($counter > 0)   
    {
          session_start();
          $_SESSION['Member_id']=$Member_id;
	      $_SESSION['First_name']=$First_name;	 

                        echo '<script type="text/javascript">
                        jQuery(function validation(){
                        swal("Success", "Login Successfull", "success", {
                        button: "Ok",
                            });
                        });
                        </script>';
                
                        echo '<script>
                                 setTimeout(function(){
                                    window.location.href = "Complete_Profiles.php";
                                 }, 1000);
                              </script>';
    }

 
}	 
?>
	
	
	
	<?php include('footer.php');?>
    
