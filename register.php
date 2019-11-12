<?php
session_start();
include("db_connect.php");
if(isset($_COOKIE['adminid'])){$adminid = $_COOKIE['adminid'];}


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
}

if(isset($_POST['Valuedels'])){
 	
	 $delcat=$_POST['Valuedels'];
 	  $querry="DELETE FROM Taxpayers WHERE id='$delcat'";
           mysqli_query($db,$querry);
          echo"ok";             
		  // header("Location:update_payer.php");  
				
						}

if(isset($_POST['Valuedeleted'])){
 	
	 $delcat=$_POST['Valuedeleted'];
 	  $querry="DELETE FROM Taxreceipts WHERE id='$delcat'";
           mysqli_query($db,$querry);
          echo"ok";             
		  // header("Location:update_payer.php");  
				
						} 
 
						
if(isset($_POST['submit'])){         
	           $tin=mysqli_real_escape_string($db,$_POST['tin']);
              $dob = mysqli_real_escape_string($db,$_POST["dob"]); //Sirname variable
			   $gender = mysqli_real_escape_string($db,$_POST["gender"]);	//Email variable
			  $fname =mysqli_real_escape_string($db,$_POST["fname"]);	        //password variable
              $lname =mysqli_real_escape_string($db,$_POST["lname"]);       //institution variable
			  $email = mysqli_real_escape_string($db,$_POST["email"]);      //phone variable
	          $phone= mysqli_real_escape_string($db,$_POST["phone"]);//Firstname variable
			 
			 $state = mysqli_real_escape_string($db,$_POST["state"]);	//Email variable
			  $lga = mysqli_real_escape_string($db,$_POST["lga"]);	        //password variable
              $address = mysqli_real_escape_string($db,$_POST["address"]);       //institution variable
			  $enginesize = mysqli_real_escape_string($db,$_POST["enginesize"]);      //phone variable
	          $esize= mysqli_real_escape_string($db,$_POST["esize"]);//Firstname variable
			
			 $enumber = mysqli_real_escape_string($db,$_POST["enumber"]);	//Email variable
			  $cnumber = mysqli_real_escape_string($db,$_POST["cnumber"]);	        //password variable
              $vname = mysqli_real_escape_string($db,$_POST["vname"]);       //institution variable
			  $vmodel = mysqli_real_escape_string($db,$_POST["vmodel"]);      //phone variable
	          $vclass= mysqli_real_escape_string($db,$_POST["vclass"]);//Firstname variable
						
	          $vcolor = mysqli_real_escape_string($db,$_POST["vcolor"]);	//Email variable
			  $mfdate =mysqli_real_escape_string($db,$_POST["mfdate"]);	        //password variable
              $vplate = mysqli_real_escape_string($db,$_POST["vplatenumber"]);       //institution variable
			  $title = mysqli_real_escape_string($db,$_POST["title"]);      //phone variable
	          $esize= mysqli_real_escape_string($db,$_POST["esize"]);//Firstname variable
			
		  $sql="SELECT * FROM Newregistration  WHERE TIN='$tin' && EngineNumber='$enumber'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                 $date= date("d.m.y");
                             	 $enter="INSERT INTO RenewalLicense (Firstname,Sirname,Mtitle,Gender,Address,Email,Phone,TIN,DOB,State,LGA,EngineSize,EngineNumber,ChasisNumber,MakeName,VehicleModel,VehicleClass,VehicleColor,MYear,VehiclePN,UserPass,Date) 
                               	     VALUES('$fname','$lname','$title','$gender','$address','$email','$phone','$tin','$dob','$state','$lga','$esize','$enumber','$cnumber','$vname','$vmodel','$vclass','$vcolor','$mfdate','$vplate','$userid','$date')";
                                  $db->query($enter);
								  
                                  $_SESSION['reg']="Pamzey";
								  
								 header("Location:renewal.php");
								                             
                         }
                            
                     }                
                
	if(isset($_POST['submited'])){
	                    
	         //$tin=mysqli_real_escape_string($db,$_POST['tin']);
			  $title = mysqli_real_escape_string($db,$_POST["title"]);      //phone variable
			  $gender = mysqli_real_escape_string($db,$_POST["gender"]);	//Email variable
			  $fname =mysqli_real_escape_string($db,$_POST["fname"]);	        //password variable
              $lname =mysqli_real_escape_string($db,$_POST["lname"]);       //institution variable
			  $email = mysqli_real_escape_string($db,$_POST["email"]);      //phone variable
	          $phone= mysqli_real_escape_string($db,$_POST["phone"]);//Firstname variable
			 $address = mysqli_real_escape_string($db,$_POST["address"]);       //institution variable
			 
			 $state = mysqli_real_escape_string($db,$_POST["state"]);	//Email variable
			  $manufacturer = mysqli_real_escape_string($db,$_POST["manufacturer"]);	        //password variable
			 $model = mysqli_real_escape_string($db,$_POST["model"]);       //institution variable
			 $yom =mysqli_real_escape_string($db,$_POST["yom"]);	        //password variable
			 $mileage =mysqli_real_escape_string($db,$_POST["mileage"]);	
		      $revenuewight = mysqli_real_escape_string($db,$_POST["revenuewight"]);       //institution variable
			  $bodytype = mysqli_real_escape_string($db,$_POST["bodytype"]);       //institution variable
			$vclass= mysqli_real_escape_string($db,$_POST["vclass"]);//Firstname variable
			  $vcolor = mysqli_real_escape_string($db,$_POST["vcolor"]);	//Email variable
			$vtowable = mysqli_real_escape_string($db,$_POST["vtowable"]);	//Email variable
			 $fuel = mysqli_real_escape_string($db,$_POST["fuel"]);	//Email variable
		     $enginesize = mysqli_real_escape_string($db,$_POST["enginesize"]);	//Email variable
			$etype = mysqli_real_escape_string($db,$_POST["etype"]);	//Email variable
			$WheelPlan = mysqli_real_escape_string($db,$_POST["WheelPlan"]);	//Email variable
			  
			   
			   $enumber = mysqli_real_escape_string($db,$_POST["enumber"]);	//Email variable
			  $chasisvin = mysqli_real_escape_string($db,$_POST["chasisvin"]);	        //password variable
			  $cylinder = mysqli_real_escape_string($db,$_POST["cylinder"]);      //phone variable						
	          $scapacity= mysqli_real_escape_string($db,$_POST["scapacity"]);//Firstname variable
			  $stacapacity = mysqli_real_escape_string($db,$_POST["stacapacity"]);      //phone variable
			
		  $sql="SELECT * FROM Newregistration  WHERE VehicleModel='$model' && EngineNumber='$enumber'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                 $date= date("d.m.y");
                             	 $enter="INSERT INTO Newregistration (Firstname,Sirname,Mtitle,Gender,Address,Email,Phone,Manufacturer,VehicleModel,State,Mileage,RevenueWeight,MaxmumTW,BodyType,FuelType,EngineType,EngineCapacity,EngineNumber,Cylinder,ChasisVIN,StandingC,SeatingC,VehicleClass,VehicleColor,YearMake,WheelPlan,UserPass,Date) 
                               	     VALUES('$fname','$lname','$title','$gender','$address','$email','$phone','$manufacturer','$model','$state','$mileage','$revenuewight','$vtowable','$bodytype','$fuel','$etype','$enginesize','$enumber','$cylinder','$chasisvin','$stacapacity','$scapacity','$vclass','$vcolor','$yom','$WheelPlan','$userid','$date')";
                                  $db->query($enter);
								  
                                  $_SESSION['regs']="KK";
								  
								 header("Location:user.php");
								                             
                         }
                              
                     }                
                 

if(isset($_POST['orginitial'])){         
	           
			  $schoolname = mysqli_real_escape_string($db,$_POST["schoolname"]);	//Email variable
			  $schoolphone =mysqli_real_escape_string($db,$_POST["schoolphone"]);	        //password variable
              $schoolemail = mysqli_real_escape_string($db,$_POST["schoolemail"]);       //institution variable
			  $region = mysqli_real_escape_string($db,$_POST["region"]);      //phone variable
	          $district= mysqli_real_escape_string($db,$_POST["districts"]);//Firstname variable
	           $schoolhistory= mysqli_real_escape_string($db,$_POST["schoolhistory"]);
	             $picname = $_FILES['filed']['name'];
                 $orgtmpName = $_FILES['filed']['tmp_name'];
                 
			
		  $sqln="SELECT * FROM tbl_schools  WHERE School_Name='$schoolname' && School_District='$district'";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                 //$date= date("d.m.y");
                         
                                  move_uploaded_file ($orgtmpName, 'images/'.$picname);
                             	 $enter="INSERT INTO tbl_schools (School_Name,School_Phone,School_Email,School_Region,School_District,School_Picture,School_History) 
                               	     VALUES('$schoolname','$schoolphone','$schoolemail','$region','$district','$picname','$schoolhistory')";
                                  $db->query($enter);
								  
                                  $_SESSION['regk']="Pamzey";
								  
								 header("Location:administrator.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                
                 
		             
if(isset($_POST['orgupdate'])){         
	           
			  $orgname = mysqli_real_escape_string($db,$_POST["orgname"]);	//Email variable
			  $orgphone =mysqli_real_escape_string($db,$_POST["orgphone"]);	        //password variable
              $orgmail = mysqli_real_escape_string($db,$_POST["orgemail"]);       //institution variable
			  $orgwebsite = mysqli_real_escape_string($db,$_POST["orgwebsite"]);      //phone variable
	          $year= mysqli_real_escape_string($db,$_POST["orgyear"]);//Firstname variable
			$pagez= mysqli_real_escape_string($db,$_POST["page"]);   
		    $idz= mysqli_real_escape_string($db,$_POST["pageid"]);   
				  
			        $orgName = $_FILES['filed']['name'];
                  $orgtmpName = $_FILES['filed']['tmp_name'];
                    $orgSize = $_FILES['filed']['size'];
                   $orgType = $_FILES['filed']['type'];
			
		  $sqln="SELECT * FROM Inorg  WHERE id='$idz' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                         	        move_uploaded_file ($orgtmpName,'media/'.$orgName);									                   
                             	 $enter="UPDATE Inorg SET name='$orgname',website='$orgwebsite',year='$year',email='$orgmail',Phone='$orgphone',pname='$orgName',content='$orgName',type='$orgType',size='$orgSize' WHERE id='$idz' ";
                                  $db->query($enter);
								  
                                  $_SESSION['regX']="Pamzey";
								  
								 header("Location:$pagez");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                
                 
 if(isset($_POST['Valuedel'])){ 	
	
	 $tutor=$_POST['Valuedel'];
 	 $querry="SELECT * FROM Users WHERE id='$tutor' ";
                     $results=mysqli_query($db,$querry);
                    $checks=mysqli_num_rows($results);
                     if($checks!=0)
                     {
      	 	                  $querry="DELETE FROM Users WHERE id='$tutor'";
                              $results=mysqli_query($db,$querry);
                               echo"ok"; 
				      }
				       
	
 }
 if(isset($_POST['resetpass'])){
	 	                  
						  $oldpass=$_POST['oldpass'];
	                      $newpass=$_POST['newpass'];	 							
	 	                   $pager=$_POST['page'];      
	 	                           $qulikes = "UPDATE Users Set Password='$newpass' WHERE Password='$oldpass' ";
						            $db->query($qulikes) or die('Errorr, query failed');
						            $_SESSION['pass']="okjs";				
                                    header("Location:$pager");
 }
 if(isset($_POST['Enumeration'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM Enumeration  WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Enumeration (Name,Code) 
                               	     VALUES('$ename','$ecode')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:enumeration.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetcode'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
                   	
		  $sqln="SELECT * FROM Enumeration  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Enumeration SET Name='$cname' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:enumeration.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                
if(isset($_POST['Zone'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM Zone  WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Zone (Name,Code) 
                               	     VALUES('$ename','$ecode')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:zone.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetzone'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
                   	
		  $sqln="SELECT * FROM Zone  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Zone SET Name='$cname' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:zone.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                
if(isset($_POST['Agency'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM Agency WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Agency (Name,Code) 
                               	     VALUES('$ename','$ecode')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:agency.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetagency'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
                   	
		  $sqln="SELECT * FROM Agency  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Agency SET Name='$cname' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:agency.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                
 if(isset($_POST['Bank'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  $cbncode=mysqli_real_escape_string($db,$_POST['cbncode']);
                $bcode = mysqli_real_escape_string($db,$_POST["bcode"]); //Sirname variable
			
						
		  $sql="SELECT * FROM Banks WHERE BCode='$bcode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Banks (Name,Code,CBN,Bcode) 
                               	     VALUES('$ename','$ecode','$cbncode','$bcode')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:banks.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetbank'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
               $cbncode=mysqli_real_escape_string($db,$_POST['cbncode']);
                $bcode = mysqli_real_escape_string($db,$_POST["bcode"]); //Sirname variable
			    	
		  $sqln="SELECT * FROM Banks  WHERE BCode='$bcode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Banks SET Name='$cname',CBN='$cbncode',Code='$ccode' WHERE BCode='$bcode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:banks.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
if(isset($_POST['Revenues'])){         
	          
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM tbl_subjects WHERE Subjectname='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO tbl_subjects (Subjectname,School) 
                               	     VALUES('$ename','$institution')";
                                  $db->query($enter);
								  
								  $activity="Added ".$ename." subject to the system";
								  
								   $login=$_COOKIE['login'];
	                                $user=$_COOKIE['user'];
	   	                            
								   $query = "SELECT * FROM tbl_userlogs WHERE Login='$login' && Userid='$user' ";
                      $result =mysqli_query($db,$query) or die('Error, query failed');
                        if( mysqli_num_rows($result) != 0)                         
                         {
                         	while($found = mysqli_fetch_array($result))
                         	{
                         		   $useractions= $found['Activities'];
								   $count= $found['Count'];
							}
				           if($useractions==''){
				           	          
									  $queryz = "UPDATE tbl_userlogs Set Activities='$activity',Count='1'  WHERE Login='$login' && Userid='$user' ";                        
                                    $db->query($queryz) or die('Errorr, query failed to upload');	
					        
				           }else{
				           	                     $count=$count+1;
				           	             $arry=explode('\n',$useractions);
                                      		array_push($arry,$activity);                                                      
                                                       $addaction=implode('\n',$arry);
                                       	$queryz = "UPDATE tbl_userlogs Set Activities='$addaction',Count='$count'  WHERE Login='$login' && Userid='$user' ";                        
                                    $db->query($queryz) or die('Errorr, query failed to upload');	
					           
                                      	
                                        }
							
						 }
                                 // $_SESSION['code']="Pamzey";
								  
							// header("Location:addsubjects.php");
								                             
                         }
                            
                     }                
   if(isset($_POST['teachersubject'])){         
	          
                $subject = mysqli_real_escape_string($db,$_POST["subject"]); //Sirname variable
			     $teacher = mysqli_real_escape_string($db,$_POST["teacher"]); //Sirname variable
			    $class = mysqli_real_escape_string($db,$_POST["class"]); //Sirname variable
			    
						
		  $sql="SELECT * FROM tbl_teacherallocation WHERE Teacherid='$teacher' && Subject='$subject' ";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO tbl_teacherallocation (Teacherid,Subject,Class) 
                               	     VALUES('$teacher','$subject','$class')";
                                  $db->query($enter);
								  
                                  $_SESSION['regk']=$class;
								  
								 header("Location:teacherallocation.php");
								                             
                         }
                            
                     }             
 if(isset($_POST['resetrevenue'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
                   	
		  $sqln="SELECT * FROM Revenues  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Revenues SET Name='$cname' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:revenue.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                
 if(isset($_POST['Platform'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM PaymentP WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO PaymentP (Name,Code) 
                               	     VALUES('$ename','$ecode')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:platform.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetplatform'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
                   	
		  $sqln="SELECT * FROM PaymentP  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE PaymentP SET Name='$cname' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:platform.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }					 

 if(isset($_POST['Taxation'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			     $epercent = mysqli_real_escape_string($db,$_POST["epercent"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM Taxation WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Taxation (Name,Code,Percent) 
                               	     VALUES('$ename','$ecode','$epercent')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:taxation.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resettaxation'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
            $epercent = mysqli_real_escape_string($db,$_POST["cpercent"]); //Sirname variable
                   	
		  $sqln="SELECT * FROM Taxation  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Taxation SET Name='$cname',Percent='$epercent' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:taxation.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
if(isset($_POST['Allowance'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
			               
			              if (isset($_POST["pnsion"]))
                                 {
     	                           $pnsion="Yes";
								 }
                            else
                                 {     	
		                           $pnsion="No";
                                  }
                 if(isset($_POST["atax"]))
                                   {     	
		                             $atax="Yes";
                                   }	 
                              else
                                  {     	
		                           $atax="No";
								  }
	
						
		  $sql="SELECT * FROM Allowances WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Allowances (Name,Code,Pension,TaxCalculation) 
                               	     VALUES('$ename','$ecode','$pnsion','$atax')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:allowance.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetallowance'])){         
	           
			  $ccodes = mysqli_real_escape_string($db,$_POST["bcode"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
               
               if (isset($_POST["cbncode"]))
                                 {
     	                           $pnsion="Yes";
								 }
                            else
                                 {     	
		                           $pnsion="No";
                                  }
                 if(isset($_POST["bcodez"]))
                                   {     	
		                             $atax="Yes";
                                   }	 
                              else
                                  {     	
		                           $atax="No";
								  }	    	
		  $sqln="SELECT * FROM Allowances  WHERE Code='$ccodes' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Allowances SET Name='$cname',Code='$ccodes',Pension='$pnsion',TaxCalculation='$atax' WHERE Code='$ccodes' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:allowance.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
 if(isset($_POST['Taxratings'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			     $epercent = mysqli_real_escape_string($db,$_POST["epercent"]); //Sirname variable
			  			     $amount = mysqli_real_escape_string($db,$_POST["amount"]); //Sirname variable
			  
						
		  $sql="SELECT * FROM Taxrating WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Taxrating (Name,Code,Percent,Amount) 
                               	     VALUES('$ename','$ecode','$epercent','$amount')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:taxrating.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetrating'])){         
	           
			  $ccode = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
            $epercent = mysqli_real_escape_string($db,$_POST["cpercent"]); //Sirname variable
            $amount = mysqli_real_escape_string($db,$_POST["amount"]); //Sirname variable
                   	
		  $sqln="SELECT * FROM Taxrating  WHERE Code='$ccode' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Taxrating SET Name='$cname',Percent='$epercent',Amount='$amount' WHERE Code='$ccode' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:taxrating.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
 if(isset($_POST['Deductions'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  $payment=mysqli_real_escape_string($db,$_POST['payment']);
                $pyoramount = mysqli_real_escape_string($db,$_POST["pyoramount"]); //Sirname variable
			  
								
		  $sql="SELECT * FROM Deductions WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO Deductions (Name,Code,PaymentOpt,Amount) 
                               	     VALUES('$ename','$ecode','$payment','$pyoramount')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:deduction.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetdeductions'])){         
	           
			  $ccodes = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
               $payment=mysqli_real_escape_string($db,$_POST['payment']);
                $pyoramount = mysqli_real_escape_string($db,$_POST["pyoramount"]); //Sirname variable
			
                $sqln="SELECT * FROM Deductions  WHERE Code='$ccodes' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Deductions SET Name='$cname',Code='$ccodes',PaymentOpt='$payment',Amount='$pyoramount' WHERE Code='$ccodes' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:deduction.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
 if(isset($_POST['OrgS'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  $tin=mysqli_real_escape_string($db,$_POST['tin']);
                $group = mysqli_real_escape_string($db,$_POST["group"]); //Sirname variable
			  
								
		  $sql="SELECT * FROM OrgSetup WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO OrgSetup (Name,Code,TIN,GROUPS) 
                               	     VALUES('$ename','$ecode','$tin','$group')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:orgsetup.php");
								                             
                         }
                            
                     }                
                
 if(isset($_POST['resetorg'])){         
	           
			  $ccodes = mysqli_real_escape_string($db,$_POST["ccodes"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
               $tin=mysqli_real_escape_string($db,$_POST['tin']);
             $group = mysqli_real_escape_string($db,$_POST["group"]); //Sirname variable
			 $para = mysqli_real_escape_string($db,$_POST["parameter"]); //Sirname variable
			
                $sqln="SELECT * FROM  OrgSetup  WHERE Code='$ccodes' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE  OrgSetup SET Name='$cname',Code='$ccodes',TIN='$tin',GROUPS='$group',Allowance='$para' WHERE Code='$ccodes' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:orgsetup.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
 if(isset($_POST['ExpAllowance'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			  
			               
			  	  $sql="SELECT * FROM ExpAllowances WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO ExpAllowances (Name,Code,Activated) 
                               	     VALUES('$ename','$ecode','Yes')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:expatriate.php");
								                             
                         }
                            
                     }                
 if(isset($_POST['resetExpallowance'])){         
	           
			  $ccodes = mysqli_real_escape_string($db,$_POST["bcode"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable
               
               if (isset($_POST["cbncode"]))
                                 {
     	                           $acts="Yes";
								 }
                            else
                                 {     	
		                           $acts="No";
                                  }
                 	
		  $sqln="SELECT * FROM ExpAllowances  WHERE Code='$ccodes' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE ExpAllowances SET Name='$cname',Code='$ccodes',Activated='$acts' WHERE Code='$ccodes' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:expatriate.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
if(isset($_POST['ExpDeduction'])){         
	          
			   $ecode=mysqli_real_escape_string($db,$_POST['ecode']);
                $ename = mysqli_real_escape_string($db,$_POST["ename"]); //Sirname variable
			                  $payopt = mysqli_real_escape_string($db,$_POST["payment"]); //Sirname variable
			  
			               
			  	  $sql="SELECT * FROM ExpDeductions WHERE Code='$ecode' && Name='$ename'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                
                             	 $enter="INSERT INTO ExpDeductions (Name,Code,Activated,PaymentOpt) 
                               	     VALUES('$ename','$ecode','Yes','$payopt')";
                                  $db->query($enter);
								  
                                  $_SESSION['code']="Pamzey";
								  
								 header("Location:expatriates.php");
								                             
                         }
                            
                     }                
 if(isset($_POST['resetDeduction'])){         
	           
			  $ccodes = mysqli_real_escape_string($db,$_POST["bcode"]);	//Email variable
			  $cname =mysqli_real_escape_string($db,$_POST["cname"]);	        //password variable               
             $payopt = mysqli_real_escape_string($db,$_POST["payment"]); //Sirname variable
          	
		  $sqln="SELECT * FROM ExpDeductions  WHERE Code='$ccodes' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE ExpDeductions SET Name='$cname',Code='$ccodes',PaymentOpt='$payopt' WHERE Code='$ccodes' ";
                                  $db->query($enter);
								  
                                  $_SESSION['ReCode']="Pamzey";
								  
								 header("Location:expatriates.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
if(isset($_POST['Taxpayer'])){         
	          
			                            $standard = mysqli_real_escape_string($db,$_POST["standard"]); //Sirname variable
			                         //$rd = mysqli_real_escape_string($db,$_POST["al"]); //Sirname variable
			                              
			       $ramend ="SELECT * FROM tbl_subjects WHERE School='$institution' ";
                                        $amendf = mysqli_query($db,$ramend);            				                           
            				                      while($founda = mysqli_fetch_array($amendf))
	                                               {
                                                                $id = $founda['id'];
																 $subject = $founda['Subjectname'];
															  if(isset($_POST[$id]))
	                                                            {
	                                                                  $sname=$_POST[$id];																	  
	                                                                 $enter="UPDATE  tbl_subjects SET  $standard='Yes' WHERE Subjectname='$sname' ";
                                                                    $db->query($enter);
								  
                                                                      
                                                                }
                                                                if(isset($_POST['all']))
	                                                            {
	                                                                  $sname=$_POST[$id];																	  
	                                                                 $enter="UPDATE  tbl_subjects SET  $standard='Yes' WHERE Subjectname='$subject' ";
                                                                    $db->query($enter);
								  
                                                                      
                                                                } 
			                      
												   }
			                                                                
			                                  $_SESSION['Payer']="6747";
						             header("Location:managesubjects.php");
						
                            
                     }                
                
if(isset($_POST['Resettax'])){
	           //$ptin = mysqli_real_escape_string($db,$_POST["ptin"]);	//Email variable			   	         
	           $ttin = mysqli_real_escape_string($db,$_POST["ttin"]);	//Email variable			   
			  $payer = mysqli_real_escape_string($db,$_POST["payer"]);	//Email variable
			  $address =mysqli_real_escape_string($db,$_POST["address"]);	        //password variable               
             $office = mysqli_real_escape_string($db,$_POST["office"]); //Sirname variable
          	$nature = mysqli_real_escape_string($db,$_POST["nature"]);	//Email variable
			  $contact =mysqli_real_escape_string($db,$_POST["contact"]);	        //password variable               
             $mobile = mysqli_real_escape_string($db,$_POST["mobile"]); //Sirname variable
         $email = mysqli_real_escape_string($db,$_POST["email"]);	//Email variable
			  $cdate =mysqli_real_escape_string($db,$_POST["cdate"]);	        //password variable               
             $rdate = mysqli_real_escape_string($db,$_POST["rdate"]); //Sirname variable
         
		  $sqln="SELECT * FROM Taxpayers  WHERE TTIN='$ttin' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Taxpayers SET Name='$payer',Address='$address',Office='$office',Nature='$nature',Contact='$contact',Phone='$mobile',Email='$email',Cdate='$cdate',Rdate='$rdate',TIN='$ptin' WHERE TTIN='$ttin' ";
                                  $db->query($enter);
								  
                                  $_SESSION['Payer']="Pamzey";
		                  if(isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header("Location:tax_payers.php");}else{ header("Location:taxpayers.php");}
								  
								
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
 if(isset($_POST['Taxsetup'])){
 	
	           $group = mysqli_real_escape_string($db,$_POST["group"]);	//Email variable			   	         
	           $address = mysqli_real_escape_string($db,$_POST["address"]);	//Email variable			   
			  $webaddress = mysqli_real_escape_string($db,$_POST["webaddress"]);	//Email variable
			  $mobile =mysqli_real_escape_string($db,$_POST["mobile"]);	        //password variable               
             $ministry = mysqli_real_escape_string($db,$_POST["ministry"]); //Sirname variable
          	$registration = mysqli_real_escape_string($db,$_POST["registration"]);	//Email variable
			  $renewal =mysqli_real_escape_string($db,$_POST["renewal"]);	        //password variable               
             $signatory = mysqli_real_escape_string($db,$_POST["signatory"]); //Sirname variable
          
		  $sqln="SELECT * FROM Taxsetup  WHERE Group='$group' && Ministry='$ministry' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {
                             	  $enter="INSERT INTO Taxsetup (Groups,Ministry,Address,Webaddress,Phone,Registration,Renewal,Signatory) 
                               	     VALUES('$group','$ministry','$address','$webaddress','$mobile','$registration','$renewal','$signatory')";
                                  $db->query($enter);
								  
                                  $_SESSION['setup']="Pamzey";
								  
								 header("Location:setup.php");
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }
 if(isset($_POST['ResetTax'])){
 	           $groupx = mysqli_real_escape_string($db,$_POST["mygroup"]);	//Email variable
 	         $mytop = mysqli_real_escape_string($db,$_POST["tinopt"]);	//Email variable 	           
 	           $ptin = mysqli_real_escape_string($db,$_POST["ptin"]);	//Email variable			   	         
	           $ttin = mysqli_real_escape_string($db,$_POST["ttin"]);	//Email variable			   
			  $payer = mysqli_real_escape_string($db,$_POST["payer"]);	//Email variable
			  $address =mysqli_real_escape_string($db,$_POST["address"]);	        //password variable               
             $office = mysqli_real_escape_string($db,$_POST["office"]); //Sirname variable
          	$nature = mysqli_real_escape_string($db,$_POST["nature"]);	//Email variable
			  $contact =mysqli_real_escape_string($db,$_POST["contact"]);	        //password variable               
             $mobile = mysqli_real_escape_string($db,$_POST["mobile"]); //Sirname variable
         $email = mysqli_real_escape_string($db,$_POST["email"]);	//Email variable
			  $cdate =mysqli_real_escape_string($db,$_POST["cdate"]);	        //password variable               
             $rdate = mysqli_real_escape_string($db,$_POST["rdate"]); //Sirname variable
         
		  $sqln="SELECT * FROM Taxpayers  WHERE TTIN='$ttin' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Taxpayers SET TOP='$mytop',Groups='$groupx',Name='$payer',Address='$address',Office='$office',Nature='$nature',Contact='$contact',Phone='$mobile',Email='$email',Cdate='$cdate',Rdate='$rdate',TIN='$ptin' WHERE TTIN='$ttin' ";
                                  $db->query($enter);
								  
                                  $_SESSION['Payer']="Pamzey";
							
				    if(isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){	  
								 header("Location:update_payer.php");}else{	  
								 header("Location:updatepayer.php");}
								 
								                             
                         }
                      else{
                      	     	 	echo"Contents arleady exists"; 
						        //exit;  
					      }                
                     }                    
if(isset($_POST['UpdateFiles'])){         
	           
			       $pagez= mysqli_real_escape_string($db,$_POST["category"]);
				   $pageid= mysqli_real_escape_string($db,$_POST["pageid"]);
				   $pagez= mysqli_real_escape_string($db,$_POST["page"]);
	
	             $orgName = $_FILES['filed']['name'];
                 $orgtmpName = $_FILES['filed']['tmp_name'];
                 $orgSize = $_FILES['filed']['size'];
                 $orgType = $_FILES['filed']['type'];
			
			
		  $sqln="SELECT * FROM Excelfiles  WHERE PaymentP='$pages' && name='$orgName'";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                 //$date= date("d.m.y");
                         
                                  move_uploaded_file ($orgtmpName, 'media/'.$orgName);
                             	 $enter="INSERT INTO Excelfiles (name,PaymentP,ids,size,content,type) 
                               	     VALUES('$orgName','$pagez','$pageid','$orgSize','$orgName','$orgType')";
                                  $db->query($enter);
								  
                                  $_SESSION['regk']="Pamzey";
								  
								 header("Location:$pagez");
								                             
                         }
                      else{
                      	          move_uploaded_file ($orgtmpName, 'media/'.$orgName);
                      	     	$enter="UPDATE Excelfiles SET name='$orgName',PaymentP='$pagez',ids='$pageid',size='$orgSize',content='$orgName',type='$orgType' WHERE name='$orgName' ";
                                  $db->query($enter);
								   $_SESSION['regk']="Pamzey";
								  
								 header("Location:$pagez");
								   
					      }                
                     }                
 if(isset($_POST['Userprivilages'])){
 	          $userid =mysqli_real_escape_string($db,$_POST["userid"]);	        //password variable               
             //$rdate = mysqli_real_escape_string($db,$_POST["rdate"]); //Sirname variable
           
           if (isset($_POST["adduser"]))                       //here
                                 {
     	                           $adduser="Yes";
								 }
                            else
                                 {     	
		                           $adduser="No";
                                  }
           if (isset($_POST["edituser"]))                    //here
                                 {
     	                           $edituser="Yes";
								 }
                            else
                                 {     	
		                           $edituser="No";
                                  }
           if (isset($_POST["deluser"]))                 //here
                                 {
     	                           $deluser="Yes";
								 }
                            else
                                 {     	
		                           $deluser="No";
                                  }
           if (isset($_POST["addpayer"]))               //here
                                 {
     	                           $addpayer="Yes";
								 }
                            else
                                 {     	
		                           $addpayer="No";
                                  }
           if (isset($_POST["delpayer"]))
                                 {
     	                           $delpayer="Yes";
								 }
                            else
                                 {     	
		                           $delpayer="No";
                                  }
           if (isset($_POST["editpayer"]))
                                 {
     	                           $editpayer="Yes";
								 }
                            else
                                 {     	
		                           $editpayer="No";
                                  }
           ///
           if (isset($_POST["addgtin"]))               //here
                                 {
     	                           $addgroup="Yes";
								 }
                            else
                                 {     	
		                           $addgroup="No";
                                  }
           if (isset($_POST["delgtin"]))
                                 {
     	                           $delgrp="Yes";
								 }
                            else
                                 {     	
		                           $delgrp="No";
                                  }
           if (isset($_POST["editgtin"]))
                                 {
     	                           $editgtin="Yes";
								 }
                            else
                                 {     	
		                           $editgtin="No";
                                  }
           
           ////
           if (isset($_POST["editrv"]))               //here
                                 {
     	                           $editrv="Yes";
								 }
                            else
                                 {     	
		                           $editrv="No";
                                  }
           if (isset($_POST["delrv"]))
                                 {
     	                           $delrv="Yes";
								 }
                            else
                                 {     	
		                           $delrv="No";
                                  }
           if (isset($_POST["prtre"]))
                                 {
     	                           $prtre="Yes";
								 }
                            else
                                 {     	
		                           $prtre="No";
                                  }
       
		  $sqln="SELECT * FROM Userprivilages WHERE Userid='$userid' ";
                   $resultn=mysqli_query($db,$sqln);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enter="UPDATE Userprivilages SET Adduser='$adduser',Adduser='$deluser',Edituser='$edituser',Deleteuser='$deluser',Addpayer='$addpayer',Editpayer='$editpayer',Deletepayer='$delpayer',Addgroup='$addgroup',Editgroup='$editgtin',Deletegroup='$delgrp',Editvehicle='$editrv',Deletevehicle='$delrv',Printreceipts='$prtre' WHERE Userid='$userid' ";
                                  $db->query($enter);
								  
                                  $_SESSION['priv']="Pamzey";
								  
								 header("Location:users.php");
								                             
                         }
                      else{
                      	     	  $enter="INSERT INTO Userprivilages (Userid,Adduser,Edituser,Deleteuser,Addpayer,Editpayer,Deletepayer,Addgroup,Editgroup,Deletegroup,Editvehicle,Deletevehicle,Printreceipts ) 
                               	     VALUES('$userid','$adduser','$edituser','$deluser','$addpayer','$editpayer','$delpayer','$addgroup','$editgtin','$delgrp','$editrv','$delrv','$prtre')";
                                  $db->query($enter);
								   $_SESSION['priv']="Pamzey";
								  
								 header("Location:users.php");
					
								
					      }                
                     }                    
                 
if(isset($_POST['submited2'])){
	                    
			  $fname = mysqli_real_escape_string($db,$_POST["fname"]);      //phone variable
			  $mname = mysqli_real_escape_string($db,$_POST["mname"]);	//Email variable
			  $sname =mysqli_real_escape_string($db,$_POST["lname"]);	        //password variable
              $phone =mysqli_real_escape_string($db,$_POST["phone"]);       //institution variable
			  $email = mysqli_real_escape_string($db,$_POST["email"]);      //phone variable
	          $idno= mysqli_real_escape_string($db,$_POST["idno"]);//Firstname variable
			 $gender = mysqli_real_escape_string($db,$_POST["gender"]);       //institution variable
			 
			 $employment = mysqli_real_escape_string($db,$_POST["employmentno"]);       //institution variable			 
			 $currentpost = mysqli_real_escape_string($db,$_POST["currentpost"]);	//Email variable
			  $employdate = mysqli_real_escape_string($db,$_POST["logdate"]);	        //password variable
			 $qualification = mysqli_real_escape_string($db,$_POST["qualifiction"]);       //institution variable
				
			
			 if (isset($_POST["mr"]))
                                 {
     	                           $mtitle="Mr";
								 }
                 elseif(isset($_POST["miss"]))
                                 {     	
		                           $mtitle="Miss";
                                  }
                 elseif(isset($_POST["mrs"]))
                                   {     	
		                      $mtitle="Mrs";
                                   }	 
                 elseif (isset($_POST["dr"]))
                                  {
     	
		                           $mtitle="Dr";
								  }
			    elseif (isset($_POST["pro"]))
                               {   $mtitle="Pro";
								  }
				               else	
				               {
				               	$mtitle="";
				               }
							   
							   if (isset($_POST["std1"]))
                                 {
     	                           $std1="Yes";
								 }
                             if(isset($_POST["std2"]))
                                 {     	
		                            $std2="Yes";
                                  }
                                  if(isset($_POST["std3"]))
                                   {     	
		                      $std3="Yes";
                                   }	 
                           if (isset($_POST["std4"]))
                                  {
     	
		                           $std4="Yes";
								  }
			              if (isset($_POST["std5"]))
                               {
                               	   $std5="Yes";
								  }
				             if (isset($_POST["std6"]))
                               {
                               	   $std6="Yes";
						       }
						     if (isset($_POST["std7"]))
                               {
                               	   $std7="Yes";
								  }
							if (isset($_POST["std8"]))
                               {
                               	   $std8="Yes";
							}
		  $sql="SELECT * FROM tbl_teachers WHERE Firstname='$fname' && Sirname='$sname' && Employmentno='$employment'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                                           						
							 $sqln = "INSERT INTO tbl_teachers (Mtitle,Firstname,Middlename,Sirname,Gender,Phone,Email,IDno,Employmentdt,Employmentno,Position,Qualification)
			               VALUES ('$mtitle','$fname','$mname','$sname','$gender','$phone','$email','$idno','$employdate','$employment','$currentpost','$qualification')";
		                     $db->query($sqln);
							
							/*$sqln = "INSERT INTO tbl_subjects (Mathematics,Biology,English,Chichewa,Agriculture,Physcal_science,Social_Studies)
			               VALUES ('$mtitle','$fname','$mname','$sname','$gender','$phone','$email','$idno','$employdate')";
		                     $db->query($sqln);*/
	                               
	                             $sql = "INSERT INTO tbl_standard (Teacher,School,Std_1,Std_2,Std_3,Std_4,Std_5,Std_6,Std_7,Std_8)
			               VALUES ('$fname','Chigoneka','$std1','$std2','$std3','$std4','$std5','$std6','$std7','$std8')";
		                     $db->query($sql);
							 
                                  $_SESSION['tinregs']="KK";
								  
								 header("Location:fetch_teacher.php");
								                             
                         }
                              
                     } 

if(isset($_POST['studentrecord'])){
	                    
			  $fname = mysqli_real_escape_string($db,$_POST["fname"]);      //phone variable
			  $oname = mysqli_real_escape_string($db,$_POST["oname"]);	//Email variable
			  $lname =mysqli_real_escape_string($db,$_POST["lname"]);	        //password variable
			  $dob = mysqli_real_escape_string($db,$_POST["dob"]);      //phone variable
	          $specialneeds= mysqli_real_escape_string($db,$_POST["specialneeds"]);//Firstname variable
			 $medical = mysqli_real_escape_string($db,$_POST["medical"]);       //institution variable	
			
			 $gender = mysqli_real_escape_string($db,$_POST["gender"]);       //institution variable
			 $guardianname = mysqli_real_escape_string($db,$_POST["guardianname"]);	        //password variable
			 $guardianresidential = mysqli_real_escape_string($db,$_POST["guardianresidential"]);       //institution variable
			
			   if (isset($_POST["disabilityexp"]))
                                 {
     	                           			  $disabilityexp = mysqli_real_escape_string($db,$_POST["disabilityexp"]);       //institution variable

								 }
								 else{$disabilityexp='';}
			  if (isset($_POST["medicalcond"]))
                                 {
			                           $medicalcond = mysqli_real_escape_string($db,$_POST["medicalcond"]);       //institution variable			 

								 }
			                     else{$medicalcond='';}
			 		 
			 $biological = mysqli_real_escape_string($db,$_POST["biological"]);	//Email variable
			  $guardianname = mysqli_real_escape_string($db,$_POST["guardianname"]);	        //password variable
			 //$qualification = mysqli_real_escape_string($db,$_POST["guardianresidential"]);       //institution variable
				$guardianspecial = mysqli_real_escape_string($db,$_POST["guardianspecial"]);       //institution variable			 
			 $guardianwork = mysqli_real_escape_string($db,$_POST["guardianwork"]);	//Email variable
			                $guardanphone =mysqli_real_escape_string($db,$_POST["guardanphone"]);       //institution variable
			  	
			
			
			 				   if (isset($_POST["std1"]))
                                 {
     	                           $std="1";
								 }
							   elseif(isset($_POST["std2"]))
                                 {     	
		                            $std="2";
                                  }
                                  elseif(isset($_POST["std3"]))
                                   {     	
		                      $std="3";
                                   }	 
                           elseif (isset($_POST["std4"]))
                                  {
     	
		                           $std="4";
								  }
			              elseif (isset($_POST["std5"]))
                               {
                               	   $std="5";
								  }
				             elseif (isset($_POST["std6"]))
                               {
                               	   $std="6";
						       }
						     elseif (isset($_POST["std7"]))
                               {
                               	   $std="7";
								  }
							elseif (isset($_POST["std8"]))
                               {
                               	   $std="8";
							}
							else{
								   $std="";
							    }
	
	$sql="SELECT * FROM tbl_students WHERE Firstname='$fname' && Sirname='$lname' && DOB='$dob'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                                           						
							 $sqln = "INSERT INTO tbl_students (Firstname,Othername,Sirname,Gender,DOB,Disabled,Ddetail,Othermedical,Mdetail,Biologicalpa,School,Standard)
			               VALUES ('$fname','$oname','$lname','$gender','$dob','$specialneeds','$disabilityexp','$medical','$medicalcond','$biological','Chigoneka','$std')";
		                     $db->query($sqln);
		                         
								  $sqluser ="SELECT * FROM tbl_students WHERE Firstname='$fname' && Sirname='$lname' && School='Chigoneka' && DOB='$dob' ";
                              $retrieved = mysqli_query($db,$sqluser);
                      while($found = mysqli_fetch_array($retrieved))
	                     {
                                 	 $id=$found['id']; 
			              
				  	    }
	                               
	                             $sql = "INSERT INTO tbl_guardians (Fullname,Residence,Phone,Disabled,Works,Student)
			               VALUES ('$guardianname','$guardianresidential','$guardanphone','$guardianspecial','$guardianwork','$id')";
		                     $db->query($sql);
								
	   	                            
					
                                  $_SESSION['tinregs']="KK";								  
								 header("Location:fetch_student.php");
								                             
                         }
                              
                     } 
if(isset($_POST['updatereceipt'])){
	                    
			  $cname = mysqli_real_escape_string($db,$_POST["cname"]);      //phone variable
			  $payerid = mysqli_real_escape_string($db,$_POST["payerid"]);	//Email variable
			  $payername =mysqli_real_escape_string($db,$_POST["payername"]);	        //password variable
              $payname =mysqli_real_escape_string($db,$_POST["payname"]);       //institution variable
			  $payamount = mysqli_real_escape_string($db,$_POST["payamount"]);      //phone variable
	          $istransfee= mysqli_real_escape_string($db,$_POST["isw"]);//Firstname variable
			 $paymentref = mysqli_real_escape_string($db,$_POST["prn"]);       //institution variable
			 $payeradd = mysqli_real_escape_string($db,$_POST["address"]);       //institution variable			 
			 $dpslp = mysqli_real_escape_string($db,$_POST["dslip"]);	//Email variable
			  $paymentlog = mysqli_real_escape_string($db,$_POST["logdate"]);	        //password variable
			 $bankname = mysqli_real_escape_string($db,$_POST["bankname"]);       //institution variable
			 $bankcode =mysqli_real_escape_string($db,$_POST["bankcode"]);	        //password variable
			 $cbnbank =mysqli_real_escape_string($db,$_POST["cbncode"]);	
		      $branch = mysqli_real_escape_string($db,$_POST["branchname"]);       //institution variable
			  $bankcoll = mysqli_real_escape_string($db,$_POST["bankcoll"]);       //institution variable
		     $amntwords = mysqli_real_escape_string($db,$_POST["amntwords"]);       //institution variable
			$group = mysqli_real_escape_string($db,$_POST["gr"]);       //institution variable
			$pr = mysqli_real_escape_string($db,$_POST["payoption"]);       //institution variable
			
		                $date= date("d.m.y");
                           						
$sqln = "UPDATE Taxreceipts SET Payer_address='$payeradd',Channelname='$cname',Payment_ref_number='$paymentref',Payer_name='$payername',Payment_amount='$payamount',Pay_amnt_words='$amntwords',Bank_name='$bankname',Bank_code='$bankcode',CBN_bank_code='$cbnbank',Branch_name='$branch',Deposit_slip_no='$dpslp',Payment_name='$payname',ISW_trans_fee='$istransfee',Bank_coll_fee='$bankcoll' WHERE TIN='$payerid' ";
		                     $db->query($sqln);
							
	                               
                                  $_SESSION['Payereceipt']="KK";
								  
								 header("Location:update_taxreceipts.php");
								                             
                         }
                              
                                    
				               
					 
?>
<?php    	
  if(isset($_POST['submitattendance'])){
  	
	$days = mysqli_real_escape_string($db,$_POST["days"]);      //days variable
  				  
  	//for ($x = 1; $x <=4; $x++) {     //this loops thru each of the student in a class
  				  
  				  $query = "SELECT * FROM tbl_students ";
                      $result =mysqli_query($db,$query) or die('Error, query failed');
                        if( mysqli_num_rows($result) != 0)                         
                         {              $count=0; $turns=0; 
                          while($found = mysqli_fetch_array($result))
                         {
                         	                  $count=$count+1;       		   
                         		    $studentid= $found['id'];
									 $school= $found['School'];
									 $std= $found['Standard'];
									
									$day=$days*$count;
									$startvalue=($turns*$days)+1;
									$x = $startvalue; 
										   
							for ($xx =$x; $xx <= $day; $xx++) {
  				  	  					
  				  	  				   if(!empty($_POST[$xx])){
  				  	  				   		
  				  	  				   	    $date=$_POST[$xx];$att="Yes";									                          
									         $enter="INSERT INTO tbl_attendance (Studentid,Studentschool,Studentclass,Date,Attendance) 
                               	             VALUES('$studentid','$school','$std','$date','$att')";
                                              $db->query($enter);
						                  	
                                               $_SESSION['reports']='nice';
											  
									   	 }   						   
									   	
									   	}							
		                 $turns=$turns+1;
					 }                    
								    header("Location:reports.php");
									   }
  }
	
  if(isset($_POST['submitlessonplan'])){
	                    
	         //$tin=mysqli_real_escape_string($db,$_POST['tin']);
			  $class = mysqli_real_escape_string($db,$_POST["teachingclass"]);      //phone variable
			  $subject = mysqli_real_escape_string($db,$_POST["teachingsubject"]);	//Email variable
			  
			  $date1 =mysqli_real_escape_string($db,$_POST["date1"]);	        //password variable
              $topic1 =mysqli_real_escape_string($db,$_POST["topic1"]);       //institution variable
			  $objective1 = mysqli_real_escape_string($db,$_POST["objective1"]);      //phone variable
	          $activities1= mysqli_real_escape_string($db,$_POST["activities1"]);//Firstname variable
			 $materials1 = mysqli_real_escape_string($db,$_POST["materials1"]);       //institution variable
			 
			 $date2 =mysqli_real_escape_string($db,$_POST["date2"]);	        //password variable
              $topic2 =mysqli_real_escape_string($db,$_POST["topic2"]);       //institution variable
			  $objective2 = mysqli_real_escape_string($db,$_POST["objective2"]);      //phone variable
	          $activities2= mysqli_real_escape_string($db,$_POST["activities2"]);//Firstname variable
			 $materials2 = mysqli_real_escape_string($db,$_POST["materials2"]);       //institution variable
			 
			 $date3 =mysqli_real_escape_string($db,$_POST["date3"]);	        //password variable
              $topic3 =mysqli_real_escape_string($db,$_POST["topic3"]);       //institution variable
			  $objective3 = mysqli_real_escape_string($db,$_POST["objective3"]);      //phone variable
	          $activities3= mysqli_real_escape_string($db,$_POST["activities3"]);//Firstname variable
			 $materials3 = mysqli_real_escape_string($db,$_POST["materials3"]);       //institution variable
			 
			 $date4 =mysqli_real_escape_string($db,$_POST["date4"]);	        //password variable
              $topic4 =mysqli_real_escape_string($db,$_POST["topic4"]);       //institution variable
			  $objective4 = mysqli_real_escape_string($db,$_POST["objective4"]);      //phone variable
	          $activities4= mysqli_real_escape_string($db,$_POST["activities4"]);//Firstname variable
			 $materials4 = mysqli_real_escape_string($db,$_POST["materials4"]);       //institution variable
			 
			 $date5 =mysqli_real_escape_string($db,$_POST["date5"]);	        //password variable
              $topic5 =mysqli_real_escape_string($db,$_POST["topic5"]);       //institution variable
			  $objective5 = mysqli_real_escape_string($db,$_POST["objective5"]);      //phone variable
	          $activities5= mysqli_real_escape_string($db,$_POST["activities5"]);//Firstname variable
			 $materials5 = mysqli_real_escape_string($db,$_POST["materials5"]);       //institution variable
			 
			 $date6 =mysqli_real_escape_string($db,$_POST["date6"]);	        //password variable
              $topic6 =mysqli_real_escape_string($db,$_POST["topic6"]);       //institution variable
			  $objective6 = mysqli_real_escape_string($db,$_POST["objective6"]);      //phone variable
	          $activities6= mysqli_real_escape_string($db,$_POST["activities6"]);//Firstname variable
			 $materials6 = mysqli_real_escape_string($db,$_POST["materials6"]);       //institution variable
			 
			 $date7 =mysqli_real_escape_string($db,$_POST["date7"]);	        //password variable
              $topic7 =mysqli_real_escape_string($db,$_POST["topic7"]);       //institution variable
			  $objective7 = mysqli_real_escape_string($db,$_POST["objective7"]);      //phone variable
	          $activities7= mysqli_real_escape_string($db,$_POST["activities7"]);//Firstname variable
			 $materials7 = mysqli_real_escape_string($db,$_POST["materials7"]);       //institution variable
			 
			 $date8 =mysqli_real_escape_string($db,$_POST["date8"]);	        //password variable
              $topic8 =mysqli_real_escape_string($db,$_POST["topic8"]);       //institution variable
			  $objective8 = mysqli_real_escape_string($db,$_POST["objective8"]);      //phone variable
	          $activities8= mysqli_real_escape_string($db,$_POST["activities8"]);//Firstname variable
			 $materials8 = mysqli_real_escape_string($db,$_POST["materials8"]);       //institution variable
			 
			 $date9 =mysqli_real_escape_string($db,$_POST["date9"]);	        //password variable
              $topic9 =mysqli_real_escape_string($db,$_POST["topic9"]);       //institution variable
			  $objective9 = mysqli_real_escape_string($db,$_POST["objective9"]);      //phone variable
	          $activities9= mysqli_real_escape_string($db,$_POST["activities9"]);//Firstname variable
			 $materials9 = mysqli_real_escape_string($db,$_POST["materials9"]);       //institution variable
			 
			 $date10 =mysqli_real_escape_string($db,$_POST["date10"]);	        //password variable
              $topic10 =mysqli_real_escape_string($db,$_POST["topic10"]);       //institution variable
			  $objective10 = mysqli_real_escape_string($db,$_POST["objective10"]);      //phone variable
	          $activities10= mysqli_real_escape_string($db,$_POST["activities10"]);//Firstname variable
			 $materials10 = mysqli_real_escape_string($db,$_POST["materials10"]);       //institution variable
			 
			 $date11 =mysqli_real_escape_string($db,$_POST["date11"]);	        //password variable
              $topic11 =mysqli_real_escape_string($db,$_POST["topic11"]);       //institution variable
			  $objective11 = mysqli_real_escape_string($db,$_POST["objective11"]);      //phone variable
	          $activities11= mysqli_real_escape_string($db,$_POST["activities11"]);//Firstname variable
			 $materials11 = mysqli_real_escape_string($db,$_POST["materials11"]);       //institution variable
			 
			 $date12 =mysqli_real_escape_string($db,$_POST["date12"]);	        //password variable
              $topic12 =mysqli_real_escape_string($db,$_POST["topic12"]);       //institution variable
			  $objective12 = mysqli_real_escape_string($db,$_POST["objective12"]);      //phone variable
	          $activities12= mysqli_real_escape_string($db,$_POST["activities12"]);//Firstname variable
			 $materials12 = mysqli_real_escape_string($db,$_POST["materials12"]);       //institution variable
			 
			 $date13 =mysqli_real_escape_string($db,$_POST["date13"]);	        //password variable
              $topic13 =mysqli_real_escape_string($db,$_POST["topic13"]);       //institution variable
			  $objective13 = mysqli_real_escape_string($db,$_POST["objective13"]);      //phone variable
	          $activities13= mysqli_real_escape_string($db,$_POST["activities13"]);//Firstname variable
			 $materials13 = mysqli_real_escape_string($db,$_POST["materials13"]);       //institution variable
			 
			 $date14 =mysqli_real_escape_string($db,$_POST["date14"]);	        //password variable
              $topic14 =mysqli_real_escape_string($db,$_POST["topic14"]);       //institution variable
			  $objective14 = mysqli_real_escape_string($db,$_POST["objective14"]);      //phone variable
	          $activities14= mysqli_real_escape_string($db,$_POST["activities14"]);//Firstname variable
			 $materials14 = mysqli_real_escape_string($db,$_POST["materials14"]);       //institution variable
			 
			  $date15 =mysqli_real_escape_string($db,$_POST["date15"]);	        //password variable
              $topic15 =mysqli_real_escape_string($db,$_POST["topic15"]);       //institution variable
			  $objective15 = mysqli_real_escape_string($db,$_POST["objective15"]);      //phone variable
	          $activities15= mysqli_real_escape_string($db,$_POST["activities15"]);//Firstname variable
			 $materials15 = mysqli_real_escape_string($db,$_POST["materials15"]);       //institution variable
			 
			 $date16 =mysqli_real_escape_string($db,$_POST["date16"]);	        //password variable
              $topic16 =mysqli_real_escape_string($db,$_POST["topic16"]);       //institution variable
			  $objective16 = mysqli_real_escape_string($db,$_POST["objective16"]);      //phone variable
	          $activities16= mysqli_real_escape_string($db,$_POST["activities16"]);//Firstname variable
			 $materials16 = mysqli_real_escape_string($db,$_POST["materials16"]);       //institution variable
			 
			 $date17 =mysqli_real_escape_string($db,$_POST["date17"]);	        //password variable
              $topic17 =mysqli_real_escape_string($db,$_POST["topic17"]);       //institution variable
			  $objective17 = mysqli_real_escape_string($db,$_POST["objective17"]);      //phone variable
	          $activities17= mysqli_real_escape_string($db,$_POST["activities17"]);//Firstname variable
			 $materials17 = mysqli_real_escape_string($db,$_POST["materials17"]);       //institution variable
			 
			 $date18 =mysqli_real_escape_string($db,$_POST["date18"]);	        //password variable
              $topic18 =mysqli_real_escape_string($db,$_POST["topic18"]);       //institution variable
			  $objective18 = mysqli_real_escape_string($db,$_POST["objective18"]);      //phone variable
	          $activities18= mysqli_real_escape_string($db,$_POST["activities18"]);//Firstname variable
			 $materials18 = mysqli_real_escape_string($db,$_POST["materials18"]);       //institution variable
			 
			 $date19 =mysqli_real_escape_string($db,$_POST["date19"]);	        //password variable
              $topic19 =mysqli_real_escape_string($db,$_POST["topic19"]);       //institution variable
			  $objective19 = mysqli_real_escape_string($db,$_POST["objective19"]);      //phone variable
	          $activities19= mysqli_real_escape_string($db,$_POST["activities19"]);//Firstname variable
			 $materials19 = mysqli_real_escape_string($db,$_POST["materials19"]);       //institution variable
			 
			 $date20 =mysqli_real_escape_string($db,$_POST["date20"]);	        //password variable
              $topic20 =mysqli_real_escape_string($db,$_POST["topic20"]);       //institution variable
			  $objective20 = mysqli_real_escape_string($db,$_POST["objective20"]);      //phone variable
	          $activities20= mysqli_real_escape_string($db,$_POST["activities20"]);//Firstname variable
			 $materials20 = mysqli_real_escape_string($db,$_POST["materials20"]);       //institution variable
			 
			 $date21 =mysqli_real_escape_string($db,$_POST["date21"]);	        //password variable
              $topic21 =mysqli_real_escape_string($db,$_POST["topic21"]);       //institution variable
			  $objective21 = mysqli_real_escape_string($db,$_POST["objective21"]);      //phone variable
	          $activities21= mysqli_real_escape_string($db,$_POST["activities21"]);//Firstname variable
			 $materials21 = mysqli_real_escape_string($db,$_POST["materials21"]);       //institution variable
			 
			 $date22 =mysqli_real_escape_string($db,$_POST["date22"]);	        //password variable
              $topic22 =mysqli_real_escape_string($db,$_POST["topic22"]);       //institution variable
			  $objective22 = mysqli_real_escape_string($db,$_POST["objective22"]);      //phone variable
	          $activities22= mysqli_real_escape_string($db,$_POST["activities22"]);//Firstname variable
			 $materials22 = mysqli_real_escape_string($db,$_POST["materials22"]);       //institution variable
			 
			 $date23 =mysqli_real_escape_string($db,$_POST["date23"]);	        //password variable
              $topic23 =mysqli_real_escape_string($db,$_POST["topic23"]);       //institution variable
			  $objective23 = mysqli_real_escape_string($db,$_POST["objective23"]);      //phone variable
	          $activities23= mysqli_real_escape_string($db,$_POST["activities23"]);//Firstname variable
			 $materials23 = mysqli_real_escape_string($db,$_POST["materials23"]);       //institution variable
			 
			 $date24 =mysqli_real_escape_string($db,$_POST["date24"]);	        //password variable
              $topic24 =mysqli_real_escape_string($db,$_POST["topic24"]);       //institution variable
			  $objective24 = mysqli_real_escape_string($db,$_POST["objective24"]);      //phone variable
	          $activities24= mysqli_real_escape_string($db,$_POST["activities24"]);//Firstname variable
			 $materials24 = mysqli_real_escape_string($db,$_POST["materials24"]);       //institution variable
			 
			 $date25 =mysqli_real_escape_string($db,$_POST["date25"]);	        //password variable
              $topic25 =mysqli_real_escape_string($db,$_POST["topic25"]);       //institution variable
			  $objective25 = mysqli_real_escape_string($db,$_POST["objective25"]);      //phone variable
	          $activities25= mysqli_real_escape_string($db,$_POST["activities25"]);//Firstname variable
			 $materials25 = mysqli_real_escape_string($db,$_POST["materials25"]);       //institution variable
			 
			 
			 
			 
		  $sql="SELECT * FROM tbl_lessonplans  WHERE Teacherid='1' && Class='$class' && Subject='$subject'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {                 $date= date("d.m.y");
                             	 $enter="INSERT INTO tbl_lessonplans  (Teacherid,School,Class,Subject,Date1,Topic1,Objective1,Activity1,Material1,Date2,Topic2,Objective2,Activity2,Material2,Date3,Topic3,Objective3,Activity3,Material3,Date4,Topic4,Objective4,Activity4,Material4,Date5,Topic5,Objective5,Activity5,Material5,Date6,Topic6,Objective6,Activity6,Material6,Date7,Topic7,Objective7,Activity7,Material7,Date8,Topic8,Objective8,Activity8,Material8,Date9,Topic9,Objective9,Activity9,Material9,Date10,Topic10,Objective10,Activity10,Material10,Date11,Topic11,Objective11,Activity11,Material11,Date12,Topic12,Objective12,Activity12,Material12,Date13,Topic13,Objective13,Activity13,Material13,Date14,Topic14,Objective14,Activity14,Material14,Date15,Topic15,Objective15,Activity15,Material15,Date16,Topic16,Objective16,Activity16,Material16,Date17,Topic17,Objective17,Activity17,Material17,Date18,Topic18,Objective18,Activity18,Material18,Date19,Topic19,Objective19,Activity19,Material19,Date20,Topic20,Objective20,Activity20,Material20,Date21,Topic21,Objective21,Activity21,Material21,Date22,Topic22,Objective22,Activity22,Material22,Date23,Topic23,Objective23,Activity23,Material23,Date24,Topic24,Objective24,Activity24,Material24,Date25,Topic25,Objective25,Activity25,Material25) 
                               	     VALUES('1','Chigoneka','$class','$subject','$date1','$topic1','$objective1','$activities1','$materials1','$date2','$topic2','$objective2','$activities2','$materials2','$date3','$topic3','$objective3','$activities3','$materials3','$date4','$topic4','$objective4','$activities4','$materials4','$date5','$topic5','$objective5','$activities5','$materials5','$date6','$topic6','$objective6','$activities6','$materials6','$date7','$topic7','$objective7','$activities7','$materials7','$date8','$topic8','$objective8','$activities8','$materials8','$date9','$topic9','$objective9','$activities9','$materials9','$date10','$topic10','$objective10','$activities10','$materials10','$date11','$topic11','$objective11','$activities11','$materials11','$date12','$topic12','$objective12','$activities12','$materials12','$date13','$topic13','$objective13','$activities13','$materials13','$date14','$topic14','$objective14','$activities14','$materials14','$date15','$topic15','$objective15','$activities15','$materials15','$date16','$topic16','$objective16','$activities16','$materials16','$date17','$topic17','$objective17','$activities17','$materials17','$date18','$topic18','$objective18','$activities18','$materials18','$date19','$topic19','$objective19','$activities19','$materials19','$date20','$topic20','$objective20','$activities20','$materials20','$date21','$topic21','$objective21','$activities21','$materials21','$date22','$topic22','$objective22','$activities22','$materials22','$date23','$topic23','$objective23','$activities23','$materials23','$date24','$topic24','$objective24','$activities24','$materials24','$date25','$topic25','$objective25','$activities25','$materials25')";
                                  $db->query($enter);
								  
                                  $_SESSION['regs']="KK";
								  
								 header("Location:lessonplan.php");
								                             
                         }
                              
                     }                
   
	                    
    ?>