<?php
   if($_POST["Submit"]){
      //Declares variables store strings 
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $pword = $_POST['pword'];
      $pword2 = $_POST['pword2'];
      $email = $_POST['email'];
      
	  //Checks the information entered determines if valid strings
	  function sanityCheck($string, $type, $length){
	     // assign the type
	     $type = 'is_'.$type;
	     if(!$type($string)){
	        return FALSE;
         }
	     // now we see if there is anything in the string
	     elseif(empty($string)){
	       return FALSE;
         }
	     // then we check how long the string is
	     elseif(strlen($string) > $length){
	        return FALSE;
         }
	     else{
	        return TRUE;
         }
      }

      //returns true or false.. true if variables do not contain NULL
      function checkSet(){ 
         return isset($_POST['fname'], $_POST['lname'], $_POST['pword'], $_POST['email']);
      }

      function checkEmail($email){
         return preg_match('/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/iU', $email) ? TRUE : FALSE;
      }
          
          //Second if Statment
	   if(checkSet() != FALSE){  
		  if(empty($_POST['fname'])==FALSE && sanityCheck($_POST['fname'], 'string', 100) != FALSE){
			 $uname = $_POST["fname"];
		  }
		  else{
			 echo 'First name is not set';
			 exit();
		  } 					
   
		   if(empty($_POST['lname'])==FALSE && sanityCheck($_POST['lname'], 'string', 225) != FALSE){
			  $Lname = $_POST["lname"];
		   }
		   else{
			  echo 'Last name is not set';
			  exit();
		   }
   
		   if(empty($_POST['pword'])==FALSE && sanityCheck($_POST['pword'], 'string', 225) != FALSE){
			  $pword = $_POST['pword']; 
		   }
		   else{
			  echo 'password is not set';
			  exit();
		   }

		   if($pword != $pword2){
			  echo 'Passwords do not match. Please re-enter.';
			  exit();
		   } 

		   if(sanityCheck($_POST['email'], 'string', 225) != FALSE && checkEmail($_POST['email']) != FALSE){
			  $email = $_POST['email']; 
		   }
		   else{
			  echo 'Invalid Email Address Supplied';
			  exit();
		   }
            /////////////////////////////////////////
			/*
			//Stores server information into variables
			$server = 'localhost';
			$db_username = 'root';
			$db_password = 'root';
			$database = 'users_stella';
			//Php conects to mysql database 
			$connection=mysql_connect($server, $db_username, $db_password)
			or die('Could not connect to the mySQL databse');
			mysql_select_db($database, $connection)
			or die('could not connect to the database');
			// Check the users input against the DB.
			$namequery = "SELECT * FROM users_stella WHERE fname = '$fname' AND lname = '$lname'";
			$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());

			if(0 != mysql_num_rows($nameresult)){
			echo "Our database shows this name " . $fname . " " . $lname . " has already been registered. Please try login in.<br/>";
			}

			$emailquery = "SELECT * FROM users_stella WHERE email = '$email'";
			$emailresult = mysql_query($emailquery) or die ('Unable to verify user because ' . mysql_error());

			if(0 != mysql_num_rows($emailresult)){
			echo 'Our database shows this email: ' . $email . ' has already been registered. Please type another email.<br/>';
			}

			$passquery = "SELECT * FROM users_stella WHERE pword = '$pword'";
			$passresult = mysql_query($passquery) or die ("Unable to verify user because " . mysql_error());

			if(0 != mysql_num_rows($passresult)){
			echo 'Our database shows this password has already been registered. Please type another password.<br/>';
			}

			if(0 != mysql_num_rows($nameresult) || 0 != mysql_num_rows($emailresult) || 0 != mysql_num_rows($passresult)){
			exit();
			}

			//The INSERT INTO statement is used to insert new records in a table.
			$sql=sprintf("INSERT INTO users_stella (fname,lname, pword,email) VALUES('$fname','$lname','$pword','$email')",
			mysql_real_escape_string($fname),
			mysql_real_escape_string($lname),
			mysql_real_escape_string($pword),
			mysql_real_escape_string($email));   

			if(!mysql_query($sql)){
			echo 'Query failed '.mysql_error();
			exit();
			} 

			if(0 == mysql_num_rows($nameresult) && 0 == mysql_num_rows($emailresult) && 0 == mysql_num_rows($passresult)){
			header("location:stella_Login.html");
			}      
            */
			///////////////////////////////////////////////

			}//SECOND IF STATMENT ENDS

      else{
         //this will be the default message if the form is submitted without being completed
         echo '<p>Please fill in the form </p>';
      }
      header("location:../html/index.html"); // Delete after database implementation 
}//VERY FIRST IF STATMENT ENDS
?>