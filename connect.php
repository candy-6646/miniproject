<?php

		$host        = "host = ec2-54-224-175-142.compute-1.amazonaws.com";
   		$port        = "port = 5432";
   		$dbname      = "dbname = dcjrfn9ert59om";
   		$credentials = "user = tgfotlqsesxkop password=8347981a2330af6e15c433302db79ab3d9ba7f7f32cd25dbabd0dff7e78f6276";

   		$db = pg_connect( "$host $port $dbname $credentials");

	
   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

        
        	$sql ="INSERT INTO logind VALUES ('$_POST[username]','$_POST[email]','$_POST[password]')";

   		$ret = pg_query( $sql);
   		if(!$ret) {
   		   echo "ERROR";
   		} 
		 else {
   		   header("location: Signup.html ");
   		}

   		pg_close($db);
		 
?>

  
