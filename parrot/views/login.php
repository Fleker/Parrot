<!DOCTYPE html>
<html>
	<head>
		<!-- meta -->
		<title><?php echo meta_title(); ?> :: Login</title>
		<link rel="stylesheet" type="text/css" href="<?php echo admin_stylesheet(); ?>">
	</head>
	<body>
		<div class="wrap">
			<div class="inner">
				<div class="group">
					<form name="input" action="<?php echo login_verifyURL(); ?>" method="post">
						<input placeholder="Username" name="username"/><br/>
						<input placeholder="Password" name="password" type="password"/><br/>
						<input type="submit" class="submit" value="Login"/>
					</form>
					<a href="<?php echo admin_signupLink(); ?>"><button class="light">Signup</button></a><br/>
					<a href="<?php echo meta_URL(); ?>" class="small">&larr; Back to <?php echo meta_title(); ?></a>
				</div>
			</div>
		</div>
	</body>
</html>
