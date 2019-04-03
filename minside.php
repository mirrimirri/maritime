  <?php 
	 session_start();
  /*Template Name: minside*/
 
get_header();
if($_SESSION['loggetinn']==False){
	
	
echo "<div class='loginn'>";
 include("login.php");
 echo "</div>";
 
 
 echo "<div class='registrer'>";
include("registrer.php");
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