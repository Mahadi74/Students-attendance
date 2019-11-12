<?php
	session_start();
include("db_connect.php"); 

	if(isset($_COOKIE['userid']))
	   {                $login=$_COOKIE['login'];
	                   $user=$_COOKIE['user'];
	   	            $passwords=$_COOKIE['userid'];
					$user_email=$_COOKIE['useremail'];
	   	    setcookie("userid",$passwords,time()-(60*60*24*7));
			setcookie("useremail",$user_email,time()-(60*60*24*7));
			setcookie("login",$ldate,time()-(60*60*24*7));
	         setcookie("user",$userid,time()-(60*60*24*7));
	 
									
		    header("Location: index.php");
	   }
	
	elseif(isset($_COOKIE['adminid']))
	   {
	   	             $passwords=$_COOKIE['adminid'];
					$user_email=$_COOKIE['adminemail'];	   	    
		    setcookie("adminid",$passwords,time()-(60*60*24*7));
			setcookie("adminemail",$user_email,time()-(60*60*24*7));						
		    header("Location: index.php");
	    }
	else{ header("Location: index.php");}
	
	session_destroy();
		
?>