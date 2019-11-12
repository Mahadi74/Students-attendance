<?php
session_start();   
include("db_connect.php"); 
 
if(isset($_POST['login_button'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['password']);
	
	/*$sql = "SELECT * FROM Administrator WHERE Email='$user_email' && Password='$user_password'";
	$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
	$row = mysqli_fetch_assoc($resultset);	*/
	
		$usql = "SELECT * FROM tbl_users WHERE Email='$user_email' && Password='$user_password' ";
	$uresult = mysqli_query($db, $usql) or die("database error:". mysqli_error($db));
	$urow = mysqli_fetch_assoc($uresult);	
	
		$userid=$urow['id'];
	/*if($row['Password']==$user_password){				
		
        setcookie("adminid",$user_password,time()+(60*60*24*7));
        setcookie("adminemail",$user_email,time()+(60*60*24*7));
		echo "ok";		
		
	}*/
	
   if($urow['Password']==$user_password){				
		
	 setcookie("userid",$user_password,time()+(60*60*24*7));
	 setcookie("useremail",$user_email,time()+(60*60*24*7));
	              
            date_default_timezone_set('Africa/Cairo');
           $ldate=date( 'd-m-Y h:i:s A', time () );
 
		   //Get the ipconfig details using system commond
          system('ipconfig /all');
 
          // Capture the output into a variable
            $mycom=ob_get_contents();
           // Clean (erase) the output buffer
            ob_clean();
 
                $findme = "Physical";
             //Search the "Physical" | Find the position of Physical text
               $pmac = strpos($mycom, $findme);
 
           // Get Physical Address
            $mac=substr($mycom,($pmac+36),17);
			
		   
	  	$enter="INSERT INTO tbl_userlogs (Login,Machineip,Userid,Count) 
                               	     VALUES('$ldate','$mac','$userid','0')";
                                  $db->query($enter);
			  
			  
	  setcookie("login",$ldate,time()+(60*60*24*7));
	 setcookie("user",$userid,time()+(60*60*24*7));
	 
								 	
	 echo "ok";	 
		
	}  
	else {				
		echo "email or password does not exist."; // wrong details 
	       }		
}


 	
?>