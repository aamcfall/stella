<?php
echo 'runs';

	//When the submit button is pressed on html page
	if($_POST["Submit"]){
		//Declares variables store strings 
		$firstMentor = $_POST['firstMentor'];
		$lastMentor = $_POST['lastMentor'];
		$firstMentee = $_POST['firstMentee'];
		$lastMentee = $_POST['lastMentee'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$hours = $_POST['hours'];
		$minutes = $_POST['minutes'];
		$comments = $_POST['comments'];
		$actions = $_POST['actions'];
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
/*		
		
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
						// if all is well, we return TRUE
						return TRUE;
	}
}

















//returns true or false.. true if variables do not contain NULL
			function checkSet(){
				return isset($_POST['firstMentor'], $_POST['lastMentor'], $_POST['firstMentee'], $_POST['lastMentee']; //, $_POST['date'], $_POST['time'], $_POST['hours'], $_POST['minutes'], $_POST['comments'],$_POST['actions']);
}










			function checkNumber($num, $length){
				if($num > 0 && strlen($num) == $length){
				return TRUE;
	}
}


*/































	


/*


//START SECOND BIG IF STATMENT 
//Calls check set if not false all fields have been entered continues
			if(checkSet() != FALSE){  
				// here we test the information stored in variables to determine validation 
				// variables are now checked based on type 
				
				
				
				
				
				
				
				
				
				
				
					if(empty($_POST['firstMentor'])==FALSE && sanityCheck($_POST['firstMentor'], 'string', 100) != FALSE){
						$uname = $_POST["firstMentor"];
	}
					else{
						echo '[Mentor] first name is not set';
						exit();
	} 
	
						if(empty($_POST['lastMentor'])==FALSE && sanityCheck($_POST['lastMentor'], 'string', 100) != FALSE){
						$uname = $_POST["lastMentor"];
	}
					else{
						echo '[Mentor] last name is not set';
						exit();
	} 
						if(empty($_POST['lastMentee'])==FALSE && sanityCheck($_POST['lastMentee'], 'string', 100) != FALSE){
						$uname = $_POST["lastMentee"];
	}
					else{
						echo '[Mentee] first name is not set';
						exit();
	} 
						if(empty($_POST['lastMentee'])==FALSE && sanityCheck($_POST['lastMentee'], 'string', 100) != FALSE){
						$uname = $_POST["lastMentee"];
	}
					else{
						echo '[Mentee] last name is not set';
						exit();
	} 
	
	*/
	
	
/*
					if(empty($_POST['pword'])==FALSE && sanityCheck($_POST['pword'], 'string', 225) != FALSE){
						$pword = $_POST['pword']; 
	}
					else{
						echo 'password is not set';
						exit();
	}

				
					if(empty($_POST['fname'])==FALSE && sanityCheck($_POST['fname'], 'string', 25) != FALSE){
						$Fname = $_POST["fname"];
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

					if(sanityCheck($_POST['email'], 'string', 225) != FALSE && checkEmail($_POST['email']) != FALSE){
						$email = $_POST['email']; 
	}
					else{
						echo 'Invalid Email Address Supplied';
						exit();
	}
	*/

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
					
					
					
					
					
					
					
					
					
					
					
					/*
					// Check the users input against the DB.
					$namequery = "SELECT * FROM PeerMentor WHERE firstMentor = '$firstMentor' AND lastMentor = '$lastMentor'";
					$nameresult = mysql_query($namequery) or die ("Unable to verify user because " . mysql_error());

*/























/*


					if(0 != mysql_num_rows($nameresult)){
						echo "Our database shows this name " . $fname . " " . $lname . " has already been registered. Please try login in.<br/>";
	}

					if(0 != mysql_num_rows($emailresult)){
						echo 'Our database shows this email: ' . $email . ' has already been registered. Please type another email.<br/>';
	}

					if(0 != mysql_num_rows($passresult)){
						echo 'Our database shows this password has already been registered. Please type another password.<br/>';
	}
					if(0 != mysql_num_rows($nameresult) || 0 != mysql_num_rows($emailresult) || 0 != mysql_num_rows($passresult)){
						exit();
	}
	
	*/
	
	
	
	

	
	
	
							
					//The INSERT INTO statement is used to insert new records in a table.
					$sql=sprintf("INSERT INTO PeerMentor (firstMentor,lastMentor,firstMentee,lastMentee,date,time,hours,minutes,comments,actions) VALUES('$firstMentor','$lastMentor','$firstMentee','$lastMentee','$date','$time','$hours','$minutes','$comments','$actions')",
					mysql_real_escape_string($firstMentor),
					mysql_real_escape_string($lastMentor),
					mysql_real_escape_string($firstMentee),
					mysql_real_escape_string($lastMentee),
					mysql_real_escape_string($date),
					mysql_real_escape_string($time),
					mysql_real_escape_string($hours),
					mysql_real_escape_string($minutes),
					mysql_real_escape_string($comments),
					mysql_real_escape_string($actions));   









					if(!mysql_query($sql)){
						echo 'Query failed '.mysql_error();
						exit();
	} 
















/*
					if(0 == mysql_num_rows($nameresult) && 0 == mysql_num_rows($emailresult) && 0 == mysql_num_rows($passresult)){
						header("location:stella_Login.html");
	}      
	*/
	
	

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
}//SECOND IF STATment ends
			else{
				//this will be the default message if the form is submitted without being completed
				echo '<p>Please fill in the form </p>';
				
	}*/

}//VERY FIRST IF STATMENT ENDS
?>