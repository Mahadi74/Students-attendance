<?php
session_start();
include("db_connect.php");
if(isset($_COOKIE['userid'])&&$_COOKIE['useremail']){
	
	$userid=$_COOKIE['userid'];
$useremail=$_COOKIE['useremail'];

$sqluser ="SELECT * FROM tbl_users WHERE Password='$userid' && Email='$useremail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $firstname = $found['Firstname'];
		      $sirname= $found['Sirname'];
			  $institution = $found['Institution'];	
			  $emails = $found['Email'];
			  	   $id= $found['id'];			  
          	   $role= $found['Role'];	
			    $profile= $found['Pic_name'];
   
  	    }
}else{
	 header('location:index.php');
      exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Revenue Agency</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
             
<!-- Bootstrap Core CSS -->
<link href="admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="admin/css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="admin/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

<!-- side nav css file -->
<link href='admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
<!-- //side nav css file -->
 
 <!-- js-->
<script src="admin/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts--> 


<!-- Metis Menu -->
<script src="admin/js/metisMenu.min.js"></script>
<script src="admin/js/custom.js"></script>
<link href="admin/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
 <!-- //the links below are for pop up side bar menu plugin -->
    <link href="css/animate.min.css" rel="stylesheet"/>   
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">


	   <script src="jquery.js"></script>    
	
<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>
 
	<!-- requried-jsfiles-for owl -->
					<link href="admin/css/owl.carousel.css" rel="stylesheet">
					<script src="admin/js/owl.carousel.js"></script>
						<script>
							$(document).ready(function() {
								$("#owl-demo").owlCarousel({
									items : 3,
									lazyLoad : true,
									autoPlay : true,
									pagination : true,
									nav:true,
								});
							});
						</script>
					<!-- //requried-jsfiles-for owl -->
</head> 
<script type="text/javascript"> 
 $(document).on("click",".open-Approved",function(){
 	var myApproved=$(this).data('id');
 	  
               $.ajax({
                url: "upload.php", //php file which recive the new value and save it to the database
                data: { "Approvedstudies": myApproved },  //send the new value
               dataType:'json',
                method: "POST",
                success : function(response){
                $("#login_buttonz").html(response.Value);
                 //$("#total").html(response.Value2); 
	                	    }          
                  });  	
 });
</script>
<script type="text/javascript">


 $(document).on("click", ".open-Others", function () { //user clicks on button
               			$(".open-Others").html("Yes we can");

          });
//Ajax load function

</script>
<?php if(isset($_SESSION['memberadded'])){?>
 <script type="text/javascript"> 
 	 $(document).ready(function(){ 
                                    swal({
                                         title: "User added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=1";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
              </script>
            
           <?php 
	   session_destroy();		
		    }?>
		    <?php if(isset($_SESSION['memberexist'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "There is arleady a tutor with those details in the system", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
            <?php if(isset($_SESSION['emptytextboxes'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "You did not fill all the textboxes on the form", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['tutor'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "User removed successfully",
                                         text: "Do you want to remove another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="administrator.php?id=2";
                                                     } 
                                           else {
                                                        window.location ="administrator.php";
                                                 }
                                         });
                                         
                                                    });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['cat'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){    	
    				              sweetAlert("Oops...", "This category arleady in the system", "error");     				              
                               });
                </script>
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['category'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category added successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="admin.php?id=3";
                                                     } 
                                           else {
                                                        window.location ="admin.php";
                                                 }
                                         });
                                         
                                                    });
       
                    </script>             
           <?php 
       	   session_destroy();}  
           ?>
           <?php if(isset($_SESSION['del'])){?>
                <script type="text/javascript"> 
            $(document).ready(function(){ 
                                    swal({
                                         title: "Category Deleted",
                                         text: "Do you want to delete another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         window.location ="admin.php?id=4";
                                                     } 
                                           else {
                                                        window.location ="admin.php";
                                                 }
                                         });
                                         
                                                    });
       
                </script>
           <?php 
       	   session_destroy();}  
           ?>
 

          
       <?php if(isset($_SESSION['tinregs'])){?>
<script type="text/javascript"> 

$(document).ready(function(){ 
                           var myValue = "Load";
                                        swal({
                                         title: "Student registered successfully",
                                         text: "Do you want to add another one?",
                                         type: "success",
                                         showCancelButton: true,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                         
                                                     } 
                                                     else{window.location ="reports.php";}
                                          
                                         });
                                         
                                                    });
       
                    </script>
     <?php 
       	   session_destroy();}  
           ?>
 
           
           
           <script type="text/javascript">
$(document).on("click", ".Open-Taxreceipt", function () {

        				$(".modal-body #Taxreceipt").html('<img src="ajax-loader.gif" /> &nbsp;LOADING PLEASE WAIT ...');
					setTimeout(' window.location.href = "taxreceipts.php"; ',3000);
		
}); 
 
 $(document).on("click", ".Open-Enumeration", function () {

        				$(".modal-body #Enumeration").html('<img src="ajax-loader.gif" /> &nbsp;REDIRECTING PLEASE WAIT ...');
					setTimeout(' window.location.href = "update_payer.php"; ',3000);
		
});  


 $(document).on("click", ".Open-groups", function () {

        				$(".modal-body #groupss").html('<img src="ajax-loader.gif" /> &nbsp;REDIRECTING PLEASE WAIT ...');
					setTimeout(' window.location.href = "groups_.php"; ',3000);
		
});
 </script>
 <script type="text/javascript">


          
          
          $(document).on("click", ".open-yes", function () { //user clicks on button
             			             			
             			 $(".disabilityinstruction").html("What kind of disability?").prop("disabled", true);

             			$(".disabilityexp").html("<textarea name='disabilityexp' style=' height:60px;width:100%' ></textarea>").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-no", function () { //user clicks on button
             			             			
             			 $(".disabilityinstruction").html("").prop("disabled", true);

             			$(".disabilityexp").html("").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-yes1", function () { //user clicks on button
             			             			
             			 $(".medicalinstruction").html("What medical conditions?").prop("disabled", true);

             			$(".medicalexplanation").html("<textarea name='medicalcond' style=' height:60px;width:100%' ></textarea>").prop("disabled", true);
                        
          });
          $(document).on("click", ".open-no1", function () { //user clicks on button
             			             			
             			 $(".medicalinstruction").html("").prop("disabled", true);

             			$(".medicalexplanation").html("").prop("disabled", true);
                        
          });
          
</script>
 <div id="Updatepanel" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>

      <div class="modal-body" > 
      	   	
          		
        <a id='Enumeration' href="#" style="width:100%;font-size: 15px;" class="Open-Enumeration btn btn-success">
           <span class="glyphicon glyphicon-map-marker" style="color:#00ACED;font-size: 28px;"></span>Update Actual Enumeration by Selecting Actual Tax Payer</a>
       
              		
         <a id='groupss' href="#" style="width:100%;font-size: 15px;" class="Open-groups btn btn-success">	
          <span class="glyphicon glyphicon-magnet" style="font-size: 28px;"></span>Update Enumeration Data Based on Group</a>
        
      </div>
      <div class="modal-footer">
      </div>
      </div>       
  </div>
  </div>   
  
<div id="Updatepicture" class="modal fade" role="dialog">
  <div class="modal-dialog" style="float:right;width:20%">
    <!-- Modal content-->
    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">        	        	
        	</h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="upload.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Select picture<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>
        	<input name='category' type='hidden' value='User'>

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>

<body >
	<div class="main-content">
	
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section">
			<div class="header-left">
		
				<!--toggle button start-->
<a  class='open-Passwords btn  btn-info' title='add student' href='reports.php' style="margin-top: 10px"><span class='glyphicon glyphicon-home' style='color:white;'></span>&nbsp;Go back</a>
				<!--toggle button end-->
				<div class="profile_details_left"><!--notifications of menu start -->
						<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				
				
				<!--search-box-->
				<div class="search-box" >
					
				</div><!--//end-search-box-->
				
				<div class="profile_details" >		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<?php   
										
                                                if($profile!=""){
												                 
																	echo"<img src='admin/images/$profile' height='50px' width='50px' alt=''>";	   
												             }
												        else{
												           	echo"<img src='admin/images/profile.png' height='50px' width='50px' alt=''>";	   
														     	
												             }
										
										?>
										 </span> 
									<div class="user-name" >
										<p style="color:#1D809F;"><?php if(isset($sirname))
                                            {echo"<strong>".$firstname." ".$sirname." </strong>";} ?>
                                            <img src='admin/images/dot.png' height='15px' width='15px' alt=''>
				                         </p>
										<span>Class Teacher</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 <li>
                                  <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#Updatepicture' class='open-Updatepicture'><i class="fa fa-user"></i>Change profile picture</a>
                                 </li>
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper"  >
			<div class="main-page" >
	
			<div class="charts">		
			<div class="mid-content-top charts-grids">
				<div class="middle-content">
						<h4 class="title">STUDENT REGISTRATON FORM</h4>
					<!-- start content_slider -->
				         <div class="alert alert-info">
                             <i class="fa fa-info"></i>&nbsp;Use the form below to enter student details
                         </div>
		<form action="register.php" method="post" >
				<div class="charts">
					<div class="col-md-4 charts-grids widget">
						<div class="card-header" style="font-weight: bold;font-family: 'Palatino Linotype', serif">
							<h3>Personal Details</h3>
						</div>
						
						<div id="container" style="width: 100%; ">
							
							<div class="input-group" style="margin-bottom:10px;margin-top: 10px;">
    <span class="input-group-addon">First Name</span>
   <input type="text" name="fname" placeholder="Enter Student Name" value="" class="form-control" >
       </div>
       <div class="input-group" style="margin-bottom:10px;">
    <span class="input-group-addon">Last Name</span>
   <input type="text" name="lname" placeholder="Enter Family Name" value="" class="form-control" >
    </div>
       <div class="input-group" style="margin-bottom:10px;">
       <span class="input-group-addon">Other Name</span>
   <input type="text" name="oname" placeholder="Enter Other names"  value="" class="form-control"   value=""  >
 </div>
 
    <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Select Gender</span>
   <select  name="gender"  id='gender' style="height:30px; width: 100%" > 
            				        <option>Male</option>
            				     		                           
		                               <option>Female</option>										             			 	
				                                  
            				                         </select>

  </div>
  <div class="input-group" style="margin-bottom:10px; margin-top:15px;">
    <span class="input-group-addon">Date of Birth</span>
   <input type="date" placeholder="Date of Birth" name="dob" class="form-control" value="" >
   </div>	
  <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Disabled</span>
   <select  name="specialneeds"  id='gender' style="height:30px; width: 100%" > 
            				                    				     		                           
		                            <option class="open-no">No</option>										             			 	
				                     <option class="open-yes">Yes</option>             
            				                         </select>

  </div>
  <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			
         			
         			<span lang="EN-GB" style="font-family: 'Palatino Linotype', serif;">
                    <span class="disabilityinstruction"></span>
                     </span>
                     </span></span></p>
         
         
         <p style="text-align: -webkit-auto;">
         	
         	
         	
         	<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; font-size: 18px; line-height: 16px;">
         		
         		<span class="disabilityexp"></span>
             </span>
             </p>
  <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Any other medical conditions?</span>
   <select  name="medical"  id='gender' style="height:30px; width: 100%" > 
            				                  				     		                           
		                            <option class="open-no1">No</option>	
		                            <option class="open-yes1">Yes</option>  									             			 	
				                                  
            				                         </select>

  </div>
  <p style="text-align: -webkit-auto;">
         			
         			<span style="font-size: 18px;">
         				<span style="color: rgb(60, 58, 64);">
         			
         			
         			<span lang="EN-GB" style="font-family: 'Palatino Linotype', serif;">
                    <span class="medicalinstruction"></span>
                     </span>
                     </span></span></p>
         
         
         <p style="text-align: -webkit-auto;">
         	
         	
         	
         	<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif; font-size: 18px; line-height: 16px;">
         		
         		<span class="medicalexplanation"></span>
             </span>
             </p>

  <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Biological parents</span>
   <select  name="biological"  id='gender' style="height:30px; width: 100%" > 
            				        <option>Both alive and stays with</option>
            				        <option>Both alive and stays with one</option>             				     		                           
		                            <option>One alive and stays with </option>
		                            <option>One alive but stays with extend familly </option>
		                            <option>None alive and stays with extended fammilly</option>										             			 	
				                                  
            				                         </select>

  </div>
     <div class="input-group" style="margin-bottom:10px;">

<span style="color: rgb(60, 58, 64); font-family: 'Palatino Linotype', serif;  font-size: 18px;">
         		&nbsp;<span lang="EN-GB" style="line-height: 107%;">
         			  <span class="input-group-addon">Which class is the student in?</span>
        </span></span>
       <br>
         	       		 
         		 
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="std1" >
                      <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 1</span> &nbsp;&nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="std2" >
                 <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 2</span> &nbsp;&nbsp;  </label>
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="std3" >
                      <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 3</span> &nbsp;&nbsp; 
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="std4" >
                 <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 4</span> &nbsp;&nbsp;  </label>
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="std5" >
                      <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 5</span> &nbsp;&nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="std6" >
                 <span style="font-size: 14px ;font-family: 'Palatino Linotype', serif">Std 6</span> &nbsp;&nbsp;  </label>
         	   <label class="art-checkbox">         		  	
                      <input type="checkbox" name="std7" >
                      <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 7</span> &nbsp;&nbsp;
                      </label>
                 <label class="art-checkbox">
                 	<input type="checkbox" name="std8" >
                 <span style="font-size: 14px; font-family: 'Palatino Linotype', serif">Std 8</span> &nbsp;&nbsp; </label>
         	   
         	   </span></div>
      
						</div>
							
					</div>
					
					<div class="col-md-4 charts-grids widget states-mdl">
						<div class="card-header" style="font-weight: bold;font-family: 'Palatino Linotype', serif">
							<h3>Guardian Details</h3>
						</div>
						
<div class="input-group" style="margin-bottom:10px;margin-top: 10px">
    <span class="input-group-addon">Guardin Full Name</span>
     <input type="text" name="guardianname" placeholder="Guardian full name" class="form-control" value="">
     </div>
     <div class="input-group" style="margin-bottom:10px;">
     
      <span class="input-group-addon">Residential area</span>
   <input type="text" name="guardianresidential" placeholder="Guardian place of residing" class="form-control" value=""  >
  </div>
  <div class="input-group" style="margin-bottom:10px;">
    <span class="input-group-addon">Guardian phone</span>
     <input type="phone" name="guardanphone" placeholder="Enter guardian phone" class="form-control" value="" >
     </div>

  <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Guardian Disabled?</span>
   <select  name="guardianspecial"  id='gender' style="height:30px; width: 100%" > 
   	                                 <option>No</option>
            				        <option>Yes</option>            				     		                           
		                            										             			 	
				                                  
            				                         </select>

  </div>
  <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Does the guardian work?</span>
   <select  name="guardianwork"  id='gender' style="height:30px; width: 100%" >
   	                                  <option>No</option>	 
            				        <option>Yes</option>            				     		                           
		                            									             			 	
				                                  
            				                         </select>

  </div>
  <div class="input-group" style="margin-bottom:10px;">
          <span class="input-group-addon">Relationship with the child</span>
   <select  name="relationship"  id='gender' style="height:30px; width: 100%" >
   	                                 <option>Mother</option>	 
            				        <option>Father</option>  
            				        <option>Auncle</option>
            				        <option>Aunt</option>             				        
            				        <option>Sister</option>
            				        <option>Brother</option>         				     		                           
		                            									             			 	
				                                  
            				                         </select>

  </div>
  
       
					</div>
			
					<div class="clearfix"> </div>
				</div>

 

<div class="modal-footer">

      	<input type="submit" class="btn btn-success"  id="btns1" value="Submit" name="studentrecord"> &nbsp;
      		      	<input type="reset" class="btn btn-success"  id="btns" value="Clear" name=""> 

      	    </div>
  
  
</form>

                           
				        </div>
		
				</div>

					<!--//sreen-gallery-cursual---->
			</div>
		 </div>
		</div>
	<!--footer-->
	<div class="footer">
	   <p>  <a href="#" target="">Developed by mmehedihasan60.mh35@gmail.com</a></p>		
	</div>
    <!--//footer-->
	</div>
		
		
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="admin/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="admin/js/jquery.nicescroll.js"></script>
	<script src="admin/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- side nav js -->
	<script src='admin/js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
		<!-- //for index page weekly sales java script -->
		
<!-- // the two links below are for date picker calendar -->
   <script type="text/javascript" src="js/zebra_datepicker.min.js"></script>        
        <script type="text/javascript" src="js/examples.js"></script>
<!-- //the link below used for form slidng on click -->

	
	 <!-- Bootstrap Core JavaScript -->
    <script src="admin/js/bootstrap.js"> </script>
	  <!-- //Bootstrap Core JavaScript -->
	 
</body>
</html>