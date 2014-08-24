<?php
echo 'running';

	//When the submit button is pressed on html page
	if($_POST["Submit"]){
		//Declares variables store strings 
		$organization = $_POST['organization'];

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
					
					//The INSERT INTO statement is used to insert new records in a table.
					$sql=sprintf("INSERT INTO CommunityService (organization) VALUES('$organization')",
					mysql_real_escape_string($organization));   

					if(!mysql_query($sql)){
						echo 'Query failed '.mysql_error();
						exit();
	} 

	
}//VERY FIRST IF STATMENT ENDS
?>