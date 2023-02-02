<?php
	require('inc/head.inc.php');

	print_r($_GET);

	if(isset($_GET['logout'])){
		setcookie("taskmanager", $_COOKIE['taskmanager'], time() -1000, '/');
		session_start();
		session_unset();
		session_destroy();
		
	} else if(isset($_COOKIE['taskmanager'])){
		session_start();
		$_SESSION['id'] = $_COOKIE['taskmanager'];
		header('Location: login.php?login=true');
	}

	if(isset($_POST['submit'])){


		require_once('config.php');

    	$sql = "SELECT userID,username, pwd, approved FROM user";
    	$stmt = $pdo->prepare($sql);
    	$stmt->execute(); 

		$login = false;

		while($user = $stmt->fetch()){
			if($user->username == $_POST['username'] && password_verify($_POST['pwd'], $user->pwd) === true && $user->approved == true) {
				session_start();
				$_SESSION['id'] = $user->userID;
				$login = true;

				if(isset($_POST['remember'])){
					setcookie('taskmanager', $_SESSION['id'],time() + 60*60*24*7, '/');
				}
		
				header('Location: login.php?login=true');
			}
		}
		

		
	}
?>

<div id="indexMain" class = "container-fluid">
	<h1 id= "indexH1">My Tasks</h1>
	<div class="container-sm">
		<form id= "indexForm" class = 'form-horizontal mt-5' action="index.php" method="post">
		<?php 
				if(isset($login) && $login == false){
					echo <<<EOT
						<div id= "errorMsg" class="text-center my-3">Login ist leider fehlgeschlagen! Falscher Benutzername oder falsches Passwort!</div>
					EOT;
				} ?>
			<p class = "col col-xs-12 col-lg-6 mx-auto">Noch keinen Account? Einfach <a href="registration.php" class="text-primary">registrieren</a>!</p>
			<div class="form-group  col col-xs-12 col-lg-6 mx-auto">
				<input type="text" class="form-control mt-2 mb-2 " placeholder="Enter username" name="username" id="username"/>
				<input type="password" class=" form-control mt-1 mb-1" placeholder="Enter password" name="pwd" id="pwd"/>
			</div>
			<div class="align-text-center text-right checkbox mt-2  col col-xs-12 col-lg-6 mx-auto">
				<label class= "mb-0"><input type="checkbox" name="remember" value="1"> Remember me</label>
			</div>
			
			<div class="mt-3 text-right col col-xs-12 col-lg-6 mx-auto">
				<button type="submit" name = "submit" value ="submit" class="btn border-dark mr-0">Login</button>
			</div>

			
		</form>
	</div>
</div>

<?php 
	// require_once('inc/footer.inc.php');
	require_once('inc/foot.inc.php');
?>