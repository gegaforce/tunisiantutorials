   <html>
	 <head>
		<script src="<?php echo js_url('jquery-3.2.0.min');?>"></script>
		<link rel="stylesheet" href="<?php echo css_url('feuille')?>">
		<title>tunisian tutorials</title>
	 </head>

	<body>
			<script type="text/javascript">
				function unset(el){
					document.getElementById(el).value = "";
				}
			</script>
			<div class="login">
				<label class="title">Login to your account</label><br>
				<input type="text" class="email" id="email" onclick="unset('email')" value="email"/>
				<input type="text" class="password" id="password" onclick="unset('password')" value="password"/>
				<br><input type="checkbox"><label class="checkbox">Remember me</label>
				<input type="button" value="login" class="login_button"/>
				
				<br><label class="forgot">forget password?</label><a class="link" href="#">click here</a>
				<br><label class="member">new member?</label><a class="link" href="<?php echo site_url('Home/inscription'); ?>">create your account</a>
			</div>
	</body>

 </html>