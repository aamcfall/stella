<?php

	//Stores server information 
		$server = 'localhost'; 
		$db_username = 'root';
		$db_password = 'root';
		$database = 'users_stella';
		//Php conects to mysql database 
		$connection=mysql_connect($server, $db_username, $db_password) or die('Could not connect to the mySQL databse');
		mysql_select_db($database, $connection) or die('could not connect to the database');
	

		//Decleares variables recieve information from html
		$username = $_POST['uname'];
		$password = $_POST['pword'];
	
		$query=mysql_query("SELECT * From users_stella WHERE uname='$username'");
		$numrows=mysql_num_rows($query);	
		echo $numrows;
		
		if($numrows!=0){
			while($row=mysql_fetch_assoc($query)){
				$dbusername=$row['uname'];
				$dbpassword=$row['pword'];
			
				if($username==$dbusername&&$password==$dbpassword){
				echo "You're in! <a href='stella_HomePage.html'>New User</a>";
					echo 'Great';
					
}		
else{
echo 'did not match data base';
}
			
}



		
}
else{
echo 'username does not exist';
}


?>