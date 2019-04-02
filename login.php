<?php
	
/*Template Name: login*/

global $user_ID;
global $wpdb;

if (!$user_ID){
	
	if($_POST){
		$username=$wpdb->escape($_POST['username']);
		$password=$wpdb->escape($_POST['password']);
		
		$login_array=array();
		$ligin_array['user_login']=$username;
		$login_array['user_password']=$password;
		
		$veryfy_user= wp_signon($login_array, true);
		if(!is_wp_error($veryfy_user)){
			
			echo "<script>window.location='".site_url()."'</script>";
			
			}else{
				echo "<p> ugyldig bruker</p>";
			
		}
		
	}else{
		
	
	
	//user logged out
	
	get_header();
	?>
	<form method='post'>
		<p>
			<label for='username'>Brukernavn</label>
			<input type='text' id='username' name='username' placeholder='brukernavn'/>
		</p>
		<p>
			<label for='password'>Passord</label>
			<input type='password' id='password' name='password' placeholder='password'/>
		</p>
		<p>
			<button type="submit" name="btn_submit">Log In</button>
		</p>
	</form>	
	
	<?php
		get_footer();
		}
		}else{
	//user logged in
}

?>