<?php
session_start();
get_header();
/*Template Name: login*/

if(!$_SESSION['loggetinn']==true){
	
if (!isset($_POST ["logginnKnapp"])) {

?>

<h3>Innlogging </h3>

<form action="" id="innloggingSkjema" name="innloggingSkjema" method="post">
  Brukernavn <input name="brukernav" type="text" id="brukernav"> <br />
  Passord <input name="passord" type="text" id="passord"  >  <br />
  <input type="submit" name="logginnKnapp" value="Logg inn">
  <input type="reset" name="nullstill" id="nullstill" value="Nullstill"> <br />
</form>

Ny bruker ? <br />
<a href="http://localhost/wordpress/registrer/">Registrer deg her</a> <br /> <br />

<?php
die;

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
	echo "Du er nå logget inn  <meta http-equiv = 'refresh' content = '2; url = http://localhost/wordpress' />";
} else {
	echo "passord eller brukernavn er feil<br/>";
	header("Location: {$_SERVER['PHP_SELF']}"); 
	
	exit;	
    }
	
}
	
	} get_footer();
?>

