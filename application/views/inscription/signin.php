   <html>
	 <head>
		<script src="<?php echo js_url('jquery-3.2.0.min');?>"></script>
		<link rel="stylesheet" href=<?php echo css_url('feuille')?>>
		<title>tunisian tutorials</title>
	 </head>
<script type="text/javascript">
	function unset(el){
		document.getElementById(el).value = "";
	}
</script>
	<body>

			<div class="login">
				<form action="<?php echo base_url();?>Membre/addMembre" method="post">
					<label class="title">Create an account</label><br>
					<input type="text" class="email" name = "mail" onclick="unset('mail')" value="Email address"/>
					<input type="text" class="password" name = "password" onclick="unset('password')" value="Choose a password"/>
					<input type="text" class="password" name = "confirm" onclick="unset('confirm')" value="Confirm password"/>
					
					<br><input type="checkbox"><label class="checkbox">Remember me</label>
					<input type="submit" value="Sign me up!" class="login_button"/>
					<br><label class="member">Already have an account? </label><a class="link" href="<?php echo site_url('Home/connexion'); ?>">login</a> 
				</form>
			</div>
	</body>

 </html>