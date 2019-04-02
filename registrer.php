<?php
/*Template Name: registrer*/
	get_header();
	global $wpdb;
if($_POST){
	
$username= $wpdb->escape($_POST['txtUsername']);
$email= $wpdb->escape($_POST['txtEmail']);
$password= $wpdb->escape($_POST['txtPassword']);
$ConfPassword= $wpdb->escape($_POST['txtConfirmPassword']);

	$error=array();
	if(strpos($username,' ')!== FALSE){
		$error['username_space']= "Username has Space";
	}
	
	if(empty($username)){
		$error['username_empty']="Need Username must";
	}
	
	if(username_exists($username)){
		$error['username_exists']="Username already exists";
	}
	
	if(!is_email($email)){
		$error['email_valid']="Email is not valid";
	}
	
	if(email_exists($email)){
		$error['email_existence']= "Email already exists";
	}
	if(strcmp($password, $ConfPassword)!==0){
		$error['password']="Password didn't mach";
	}
	
	if(count($error)==0){
		wp_create_user($username, $password, $email);
		echo "User created successfully";
		exit();
	}else{
		print_r($error);
	}
}

?>

<form method="POST">
	
	<p>
		<label>Skriv inn brukernavn</label>
		<div><input type='text' id='txtUsername' name='txtUsername' placeholde='Brukernavn'></div>
	</p>
	
	<p>
		<label>Skriv inn E-post</label>
		<div><input type='email' id='txtEmail' name='txtEmail' placeholde='E-post'></div>
	</p>
	
	<p>
		<label>Skriv inn passord</label>
		<div><input type='password' id='txtPassword' name='txtPassword' placeholde='Passord'></div>
	</p>
	
	<p>
		<label>Bekreft passord</label>
		<div><input type='password' id='txtConfirmPassword' name='txtConfirmPassword' placeholde='Passord'></div>
	</p>
	
	
			<input type="submit" name="btnsubmit"/>
</form>
<?php get_footer();?>