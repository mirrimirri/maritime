<?php

/*Template Name: login*/
get_header();


if (!isset($_REQUEST['brukernavn'])){



echo "<h1>Registrer student</h1><br/>";
echo "<form action='' method='post'>";
echo "brukernavn:<input type='text' name='brukernavn' required/><br/>";
echo "passord:<input type='password' name='passord' required/><br/>";
echo "<input type='submit' name='comregistrer' value='Registrer'/>";
 	


die;
}else{
 



$tilkobling= new mysqli("localhost",
						"225329",
						"SCOZOqAc",
						"wp"
						);

		
			$brukernavn=$_REQUEST['brukernavn'];
			$passord=$_REQUEST['passord'];
			
			
			$sqlstreng="SELECT * from bruker;";
	$resultatstud=mysqli_query($tilkobling,$sqlstreng);
	foreach($resultatstud as $k){
		if($k['brukernavn']==$_REQUEST['brukernavn']){
			echo "Brukernavnet finnes fra før av <a href='registrerstudent.php'>prøv på nytt</a>";
				die;
		}
		
	}					
			if(strlen($_REQUEST['brukernavn'])<=1){
				echo "brukernavn er minimum 2 tegn <a href='registrerstudent.php'>prøv på nytt</a>";
				die;
			}
			
			
			
	$sql="INSERT INTO bruker(brukernavn, passord) VALUES ('$brukernavn','$passord');";
	
	if($b = mysqli_query($tilkobling, $sql)){
		echo "<h1>du er nå registrert</h1> <meta http-equiv = 'refresh' content = '2; url = http://localhost/wordpress/innlogging/' />";
	}else{
		echo "Noe gikk galt <a href='registrerstudent.php'>prøv på nytt</a>";
	}
	
}
get_footer();
?>