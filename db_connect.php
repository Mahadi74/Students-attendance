<?php
 
 $db = new mysqli("localhost","root","");
   if($db->connect_errno > 0){
         die('Unable to connect to database [' . $db->connect_error . ']');  } 
     
	 $db->query("CREATE DATABASE IF NOT EXISTS `db_school`");
	 
             mysqli_select_db($db,"db_school");              

        $table1="CREATE TABLE IF NOT EXISTS tbl_schools (id int(11) NOT NULL auto_increment,
                                  School_Code varchar(300)NOT NULL, 
                                  School_Name varchar(300)NOT NULL,
                                  School_Phone varchar(300)NOT NULL,
                                  School_Email varchar(300)NOT NULL,
                                  School_Region varchar(300)NOT NULL,
                                  School_District varchar(300)NOT NULL,
                                  School_History varchar(300)NOT NULL,
                                  School_Picture varchar(300)NOT NULL,
                                  PRIMARY KEY(id) )";
                         $db->query($table1); 
		
							 
			 $table2="CREATE TABLE IF NOT EXISTS tbl_users (id int(11) NOT NULL auto_increment,
                                  Firstname varchar(300)NOT NULL, 
                                  Sirname varchar(300)NOT NULL,
                                  Mtitle Varchar(30)NOT NULL, 
                                  Pic_name Varchar(30)NOT NULL,                                
                                  Phone varchar(30)NOT NULL,                                 
                                  Institution varchar(300)NOT NULL,
                                  Email varchar(300)NOT NULL,
                                  Password varchar(300)NOT NULL,
                                  Role varchar(30)NOT NULL,                          
                                  PRIMARY KEY(id) )";
                         $db->query($table2);  
		 
						                          
                           
                                   		
						$table6="CREATE TABLE IF NOT EXISTS tbl_students (id int(11) NOT NULL auto_increment,
                                  Firstname varchar(300)NOT NULL, 
                                  Sirname varchar(300)NOT NULL,
                                  Othername varchar(300)NOT NULL,
                                  Gender Varchar(30)NOT NULL,
                                  DOB varchar(300)NOT NULL,
                                  Disabled varchar(300)NOT NULL,
                                  Ddetail varchar(300)NOT NULL,
                                  Othermedical varchar(300)NOT NULL,
                                  Mdetail varchar(300)NOT NULL,
                                  Biologicalpa varchar(300)NOT NULL,
                                  School varchar(300)NOT NULL, 
                                  Standard varchar(300)NOT NULL,                                                             
                                  PRIMARY KEY(id) )";
                         $db->query($table6);  
                         
                  $table7="CREATE TABLE IF NOT EXISTS tbl_guardians (id int(11) NOT NULL auto_increment,
                                  Fullname varchar(300)NOT NULL, 
                                  Residence varchar(300)NOT NULL,
                                  Phone varchar(300)NOT NULL,
                                  Disabled varchar(300)NOT NULL,                                  
                                  Works varchar(300)NOT NULL,
                                  Student varchar(300)NOT NULL,
                                  Relationship varchar(300)NOT NULL,
                                  PRIMARY KEY(id) )";
                         $db->query($table7);      
				 
			 				 
             $stable10="CREATE TABLE IF NOT EXISTS tbl_attendance (id int(11) NOT NULL auto_increment,
                                  Studentid varchar(300)NOT NULL, 
                                  Studentschool varchar(300)NOT NULL,
                                  Studentclass varchar(300)NOT NULL,
                                  Date varchar(300)NOT NULL,
                                  Attendance varchar(300)NOT NULL,
                                  PRIMARY KEY(id) )";
                         $db->query($stable10);   
                             		                       
			    	 	
		
					$sql="SELECT * FROM tbl_users ";					
                   $result=mysqli_query($db,$sql);
                   $rowcount=mysqli_num_rows($result);
                     
                       if($rowcount==0)
                         {
                           $enter="INSERT INTO tbl_users (Password,Email,Firstname,Sirname,Mtitle,Phone,Role) VALUES('1234554321','admin@gmail.com','Patrick','Mvuma','Mr','0999107724','Administrator')";
                                  $db->query($enter);
                                  
                             
                         }
                     
					 		

?>