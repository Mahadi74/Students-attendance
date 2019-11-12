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
             
             <!-- //the next plugin link below are for date --> 
      <link rel="stylesheet" href="css/zebra_datepicker.min.css" type="text/css">
      

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">  
      <link rel="stylesheet" href="css/style1.css">


        

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
 <!-- //the links below are for date plugin -->
 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"/>
      <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>      

   
   <script src='https://code.jquery.com/jquery-1.12.4.js'></script>
   <script src='https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js'></script>
   <script src='https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js'></script>
<link href="css/animate.min.css" rel="stylesheet"/>   
      <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">
<style>
@import "bourbon";

// Breakpoints
$bp-maggie: 15em; 
$bp-lisa: 30em;
$bp-bart: 48em;
$bp-marge: 62em;
$bp-homer: 75em;

// Styles
* {
 @include box-sizing(border-box);
 
 &:before,
 &:after {
   @include box-sizing(border-box);
 }
}

body {
  font-family: $helvetica;
  color: rgba(94,93,82,1);
}

a {
  color: rgba(51,122,168,1);
  
  &:hover,
  &:focus {
    color: rgba(75,138,178,1); 
  }
}

.container {
  margin: 5% 3%;
  
  @media (min-width: $bp-bart) {
    margin: 2%; 
  }
  
  @media (min-width: $bp-homer) {
    margin: 2em auto;
    max-width: $bp-homer;
  }
}

.responsive-table {
  width: 100%;
  margin-bottom: 1.5em;
  border-spacing: 0;
  
  @media (min-width: $bp-bart) {
    font-size: .9em; 
  }
  
  @media (min-width: $bp-marge) {
    font-size: 1em; 
  }
  
  thead {
    // Accessibly hide <thead> on narrow viewports
    position: absolute;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    padding: 0;
    border: 0;
    height: 1px; 
    width: 1px; 
    overflow: hidden;
    
    @media (min-width: $bp-bart) {
      // Unhide <thead> on wide viewports
      position: relative;
      clip: auto;
      height: auto;
      width: auto;
      overflow: auto;
    }
    
    th {
      background-color: rgba(29,150,178,1);
      border: 1px solid rgba(29,150,178,1);
      font-weight: normal;
      text-align: center;
      color: white;
      
      &:first-of-type {
        text-align: left; 
      }
    }
  }
  
  // Set these items to display: block for narrow viewports
  tbody,
  tr,
  th,
  td {
    display: block;
    padding: 0;
    text-align: left;
    white-space: normal;
  }
  
  tr {   
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-row; 
    }
  }
  
  th,
  td {
    padding: .5em;
    vertical-align: middle;
    
    @media (min-width: $bp-lisa) {
      padding: .75em .5em; 
    }
    
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-cell;
      padding: .5em;
    }
    
    @media (min-width: $bp-marge) {
      padding: .75em .5em; 
    }
    
    @media (min-width: $bp-homer) {
      padding: .75em; 
    }
  }
  
  caption {
    margin-bottom: 1em;
    font-size: 1em;
    font-weight: bold;
    text-align: center;
    
    @media (min-width: $bp-bart) {
      font-size: 1.5em;
    }
  }
  
  tfoot {
    font-size: .8em;
    font-style: italic;
    
    @media (min-width: $bp-marge) {
      font-size: .9em;
    }
  }
  
  tbody {
    @media (min-width: $bp-bart) {
      // Undo display: block 
      display: table-row-group; 
    }
    
    tr {
      margin-bottom: 1em;
      
      @media (min-width: $bp-bart) {
        // Undo display: block 
        display: table-row;
        border-width: 1px;
      }
      
      &:last-of-type {
        margin-bottom: 0; 
      }
      
      &:nth-of-type(even) {
        @media (min-width: $bp-bart) {
          background-color: rgba(94,93,82,.1);
        }
      }
    }
    
    th[scope="row"] {
      background-color: rgba(29,150,178,1);
      color: white;
      
      @media (min-width: $bp-lisa) {
        border-left: 1px solid  rgba(29,150,178,1);
        border-bottom: 1px solid  rgba(29,150,178,1);
      }
      
      @media (min-width: $bp-bart) {
        background-color: transparent;
        color: rgba(94,93,82,1);
        text-align: left;
      }
    }
    
    td {
      text-align: right;
      
      @media (min-width: $bp-bart) {
        border-left: 1px solid  rgba(29,150,178,1);
        border-bottom: 1px solid  rgba(29,150,178,1);
        text-align: center; 
      }
      
      &:last-of-type {
        @media (min-width: $bp-bart) {
          border-right: 1px solid  rgba(29,150,178,1);
        } 
      }
    }
    
    td[data-type=currency] {
      text-align: right; 
    }
    
    td[data-title]:before {
      content: attr(data-title);
      float: left;
      font-size: .8em;
      color: rgba(94,93,82,.75);
      
      @media (min-width: $bp-lisa) {
        font-size: .9em; 
      }
      
      @media (min-width: $bp-bart) {
        // Don’t show data-title labels 
        content: none; 
      }
    } 
  }
}
.grey {
  background-color: rgba(128,128,128,.25);
}
.red {
  background-color: rgba(255,0,0,.25);
}
.blue {
  background-color: rgba(0,0,255,.25);
}
</style>
       <script>
      
      $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
        } );
      
      </script>
   	  
<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>
	
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

 
<?php if(isset($_SESSION['reports'])) {?>
<script type="text/javascript"> 

$(document).ready(function(){ 
                           var myValue = "Load";
                                        swal({
                                         title: "successfully",
                                         text: "Students Attendance saved",
                                         type: "success",
                                         showCancelButton: false,
                                        confirmButtonColor: "green",
                                        confirmButtonText: "OK!",
                                        closeOnConfirm: true,
                                        closeOnCancel: true,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                      	
                                                           location.reload();
                                                     } 
                                           
                                         });
                                         
                                                    });
       
                    </script>
      <?php  session_destroy(); }?>
      
  
 
   
 
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
	

		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section">
	
			
			<div class="header-right">
				
				
				<!--search-box-->
				
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
		
			<div class="charts">	
			
			<div class="mid-content-top charts-grids">
			
				<div class="middle-content">
						<h4 class="title">CLASS ATTENDANCE REGISTER</h4>
                           
                         <?php 
						$year=date('y');
			            $month=date('m');       
			            if($month==1){ $mont='January'; $days=31;}
			        	elseif($month==2){ $mont='February'; $days=28;}
				        elseif($month==3){ $mont='March'; $days=31;}
				      elseif($month==4){  $mont='April'; $days=30;}
			             elseif($month==5){ $mont='May'; $days=31;}
				       elseif($month==6){ $mont='June'; $days=30;}				
				      elseif($month==7){ $mont='July'; $days=31;}
				       elseif($month==8){ $mont='August'; $days=31;}
				       elseif($month==9){$mont='September'; $days=30;}
				       elseif($month==10){$mont='October'; $days=31;}
				      elseif($month==11){$mont='November'; $days=30;}
				        if($month==12 ){ $mont='December'; $days=31;}		                                       
        
						
						?>
					<a  href="#" style="font-size: 24px;margin-bottom:10px" class="btn btn-info"><i class='fa fa-calendar'></i>&nbsp;<?php echo$mont; ?></a>

					     
	<form method="post" action="register.php" enctype='multipart/form-data'> 				     	
<table class="table table-bordered table-striped table-hover">
	<colgroup>
	<?php
	$query_date =date('y-m-d');
// Last day of the month.
$lastdayofmonth=date('t', strtotime($query_date));
	

			for ($x = 0; $x <=$lastdayofmonth; $x++) 
			{
				$month = date( 'm' );
                $year = date( 'y' );
                $date =$year.'-'.$month.'-'.$x;
	
	            $unixTimestamp = strtotime($date); 
                  //Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $unixTimestamp);	
if($dayOfWeek=='Saturday'|| $dayOfWeek=='Sunday'){$cala='red';}
else{$cala='grey';}
				
		                                 echo"<col class='$cala' />";
								   }
    ?>
  </colgroup>
  <thead>
  <tr>
      <th>Student</th>
      <?php
for ($x = 1; $x <=$lastdayofmonth; $x++) {
		
	$month = date( 'm' );
   $year = date( 'y' );
   $date =$year.'-'.$month.'-'.$x;
	
	$unixTimestamp = strtotime($date);
 
//Get the day of the week using PHP's date function.
$dayOfWeek = date("l", $unixTimestamp);	
if($dayOfWeek=='Monday'){$abb='Mo';}
if($dayOfWeek=='Thursday'){$abb='Th';}
if($dayOfWeek=='Tuesday'){$abb='Tu';}
if($dayOfWeek=='Wednesday'){$abb='We';}
if($dayOfWeek=='Friday'){$abb='Fr';}
if($dayOfWeek=='Saturday'){$abb='Sa';}
if($dayOfWeek=='Sunday'){$abb='Su';}

    //echo "On: $x  it was on $dayOfWeek  day abbriviatio $abb <b>";
    echo"<th>$abb</br>$x</th>";
}

?>
      
      
       </thead>    
  </tr>
  <tbody>
<?php  	

$query = "SELECT * FROM tbl_students";
                      $result =mysqli_query($db,$query) or die('Error, query failed');
                        if( mysqli_num_rows($result) != 0)                         
                         {                 $count=0; $turns=0;
                         	while($found = mysqli_fetch_array($result))
                         	{
                         		   $count=$count+1; 
                         		    $fnsme= $found['Firstname'];
									 $id= $found['id'];
                         		  echo" <tr>
                                       <td><a href='studentattendance.php?studentid=$id'>$fnsme</a></td>";
									                     $days=$lastdayofmonth*$count;
									                   $startvalue=($turns*$lastdayofmonth)+1;
									                  $x = $startvalue; 								   
							                       while ($x <=$days) {
							                       	
													 
							       	                    if($x>$lastdayofmonth){$xx=$x-($turns*$lastdayofmonth);}else{$xx=$x;}
									                   $month = date( 'm' );
                                                        $year = date( 'y' );
                                                       $date =$year.'-'.$month.'-'.$xx;	
													    
														 	$qu = "SELECT * FROM tbl_attendance WHERE Studentid='$id' && Attendance='Yes' && Date='$date' ";
                                                      $resul =mysqli_query($db,$qu) or die('Error, query failed');
                                                      if( mysqli_num_rows($resul) != 0)                         
                                                          {$checked='Checked';}else{$checked='';}
																							
		                                               echo"<td><input type='checkbox' name='$x' value='$date' $checked></td>";
													   $x=$x+1;
								           }
												   $turns=$turns+1;												   
								      }				
								
								          echo"</tr>";
					        }
					      
					        ?>
		<td><input type='hidden' name='days' value='<?php echo$lastdayofmonth; ?>' >
      	
  </tbody>
</table>
<button type="submit" class="btn btn-success" name="submitattendance" value="login_button">
			<span class="glyphicon glyphicon-floppy-disk" style="color: white"></span> &nbsp;Save
			</button> </form>

</div>

<a  class='open-Passwords btn  btn-warning' title='add student' href='fetch_student.php' style="margin-top: 5px;"><span class='glyphicon glyphicon-user' style='color:white;'></span>&nbsp;Add student</a>

</div>


				        </div>
					
			</div>
		
		</div>
		
		</div>
		</div>
		
	<!--footer-->
	<div class="footer">
	   <p>  <a href="#" target="">Developed by mehedihasan60.mh46@gmail.com</a></p>		
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
	
	<!-- // the two links below are for date picker calendar -->
   <script type="text/javascript" src="js/zebra_datepicker.min.js"></script>        
        <script type="text/javascript" src="js/examples.js"></script>

			
	<!-- Bootstrap Core JavaScript -->
   <script src="admin/js/bootstrap.js"> </script>
	 <!-- //Bootstrap Core JavaScript -->
	 
	 	<script src="css/bootstrap-dropdownhover.js"></script>
	
  	
 </body>
</html>