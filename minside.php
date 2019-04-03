  <?php 
	 session_start();
  /*Template Name: minside*/
 
get_header();
if($_SESSION['loggetinn']==false){
	
	echo" <div class='innlogging'>";
echo "<div class='loginn'>";
if (!isset($_POST ["logginnKnapp"])) {

?>

<h1>Innlogging </h1>

<form action="" id="innloggingSkjema" name="innloggingSkjema" method="post">
  Brukernavn <input name="brukernav" type="text" id="brukernav"> <br />
  Passord <input name="passord" type="text" id="passord"  >  <br />
  <input type="submit" name="logginnKnapp" value="Logg inn">
  <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>


<?php


} else {
  
   
		$brukernav=$_POST['brukernav'];
		$passord=$_POST['passord'];
      
      
      function sjekkBrukernavnPassord($brukernav,$passord){
	$tilkobling= new mysqli("localhost",
						"225329",
						"SCOZOqAc",
						"wp"
						); 
  $sql="SELECT * FROM bruker";
  $resultat= mysqli_query($tilkobling,$sql);
 
  foreach($resultat as $k){
	  if($brukernav==$k['brukernavn'] && $passord==$k['passord']){
		    $lovligBruker=true;
			return $lovligBruker;
	  }
	  $lovligBruker=false;
	  
  }
  
return $lovligBruker;
  


}
	 

	if ( sjekkBrukernavnPassord($brukernav, $passord)){
	$_SESSION['brukernav']=$brukernav;
	$_SESSION['passord']=$passord;
	$_SESSION['loggetinn']=True;
	echo "Du er nå logget inn  <meta http-equiv = 'refresh' content = '2; url = http://localhost/wordpress/minside' />";
} else {
	echo "passord eller brukernavn er feil<br/> <meta http-equiv = 'refresh' content = '2; url = http://localhost/wordpress/minside' />";
	
	
	exit;	
    }
	
}
	

 echo "</div>";
 	
 
 echo "<div class='registrer'>";

if (!isset($_REQUEST['brukernavn'])){



echo "<h1>Registrer student</h1><br/>";
echo "<form action='' method='post'>";
echo "<div class='bruker'>";
echo "Brukernavn:<input type='text' name='brukernavn' required/><br/>";
echo "Navn:<input type='text' name='navn' required/><br/>";
echo "</div><div class='kontakt'>";
echo "E-post <input type='email' name='epost' required><br/>";
echo "Mobilnummer:<input type='number' name='mobilnummer' required/> <br/>";
echo "</div>";
echo "<div class='location'>";
echo "Adresse<input type='text' name='adresse' required/><br/>";
echo "Postnummer<input type='number' name='postnr' required><br/>";
echo "Poststed<input type='text' name='poststed' required><br/>";
echo "</div>";
echo "<div class='passord'>";
echo "<div a='skriftpas'>Passord:</div><input type='password' name='passord' required/><br/>";
echo "<div a='skriftpas'>Bekreft passord</div><input type='password' name='pasconf required'/><br/>";
echo "</div>";
echo "<input type='submit' name='comregistrer' value='Registrer'/>";
 	


die;
}else{
 



$tilkobling= new mysqli("localhost",
						"root",
						"Grasklipper98",
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
echo "</div>";
echo "</div>";
}
else{
	
	
	
	
	echo "<div class='min_profil'>";
	echo "<ul>";
		$sqli="SELECT * from bruker;";
		$tilkobling= new mysqli("localhost",
						"225329",
						"SCOZOqAc",
						"wp"
						);
	$resultatstud=mysqli_query($tilkobling,$sqli);
	foreach($resultatstud as $k){
		if($k['brukernavn']==$_SESSION['brukernav']){
			echo "<li>Navn: ". $k['navn']. "</li><br/>";
			echo "<li>Brukernavn: ". $k['brukernavn']. "</li><br/>";
			echo "<li>Mobilnummer: ". $k['mobilnummer']. "</li><br/>";
			echo "<li>Adresse: ". $k['adresse']. "</li><br/>";
			echo "<li>Postnummer: ". $k['postnummer']. "</li><br/>";
			echo "<li>Poststed: ". $k['poststed']. "</li><br/>";
			echo "<li>E-post: ". $k['epost']. "</li><br/>";
			
			
		}
		
	}
		
		
		echo "</ul>";
		echo"</div>";
		
		
		
		echo"<div class='mine_ordrer'>";
		echo"</div>";
	
	
}

  get_footer();?>