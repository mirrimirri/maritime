<?php

/*Template Name: login*/



if (!isset($_REQUEST['brukernavn'])){



echo "<h1>Registrer student</h1><br/>";
echo "<form action='' method='post'>";
echo "Brukernavn:<input type='text' name='brukernavn' required/><br/>";
echo "Navn:<input type='text' name='navn' required/><br/>";
echo "E-post <input type='email' name='epost' required><br/>";
echo "Mobilnummer:<input type='number' name='mobilnummer' required/> <br/>";
echo "Adresse<input type='text' name='adresse' required/><br/>";
echo "Postnummer<input type='number' name='postnr' required><br/>";
echo "Poststed<input type='text' name='poststed' required><br/>";
echo "Passord:<input type='password' name='passord' required/><br/>";
echo "Bekreft passord;<input type='password' name='pasconf required'/><br/>";
echo "<input type='submit' name='comregistrer' value='Registrer'/>";
 	


die;
}else{
 



$tilkobling= new mysqli("localhost",
						"225329",
						"SCOZOqAc",
						"wp"
						);

		
			$brukernavn=$_REQUEST['brukernavn'];
			$navn=$_REQUEST['navn'];
			$epost=$_REQUEST['epost'];
			$mobilnummer=$_REQUEST['mobilnummer'];
			$adresse=$_REQUEST['adresse'];
			$postnummer=$_REQUEST['postnr'];
			$poststed=$_REQUEST['poststed'];
			$passord=$_REQUEST['passord'];
			$pasconf=$_REQUEST['pasconf'];
			
			
			
			
			
			$sqlstreng="SELECT * from bruker;";
	$resultatstud=mysqli_query($tilkobling,$sqlstreng);
	foreach($resultatstud as $k){
		if($k['brukernavn']==$_REQUEST['brukernavn']){
			echo "Brukernavnet finnes fra før av ";
				die;
		}
		
	}					
			if(strlen($_REQUEST['brukernavn'])<=1){
				echo "brukernavn er minimum 2 tegn";
				die;
			}
			
			
			
	$sql="INSERT INTO bruker VALUES ('$brukernavn','$navn','$mobilnummer','$adresse','$postnummer','$poststed', '$epost', '$passord');";
	
	if($b = mysqli_query($tilkobling, $sql)){
		echo "<h1>du er nå registrert</h1> <meta http-equiv = 'refresh' content = '2; url = http://localhost/wordpress/minside/' />";
	}else{
		echo "Noe gikk galt prøv på nytt";
	}
	
}

?>