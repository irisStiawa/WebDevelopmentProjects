<?php
	require_once('config.php');
	
	if(isset($_GET['logout'])){
		session_start();
		session_destroy();
		session_unset();
	}

	if(isset($_POST["submitSignIn"])){
		if(isValid()){

			$sql= "SELECT userID, username, pwd FROM user WHERE userName = '$_POST[username]'";

			$user = $pdo->prepare($sql);
			$user->execute(); 

			if($user->rowCount() == 1){
				while($u = $user->fetch()){
					if($u->username == $_POST['username'] && $u->pwd == $_POST['pwd']){
						session_start();
						$_SESSION['id'] = $u->userID;
						header("Location: startPage.php");
					}
					
				}
			}
		}
		print_r($_POST);
	}
	
	
	function isValid(){
		if($_POST["username"] != "" || $_POST["password"] != ""){
			return true;
		}

		return false;
	}
	
	
	include_once('inc/head.inc.php');

?>
<div id="index">
	<div id= "divLeftAside">
		<header id= "headerIndex">
			<h1>Learning Plattform</h1>
			<p>by Iris</p>
		</header>
		<section id= "sectionSwitchAside">
			<div id= divSelctionSwitchAside>
				<button  id ="btnSignIn">Sign in</button><br>
				<button  id ="btnSignUp">Sign up</button>
			</div>
		</section>
	</div>
	<aside id="asideSignIn">
		<form action="index.php"  id= "formSignIn" method="post">
			<h2>Sign in</h2>
			<input type="text" class= "radio"  name = "username" placeholder= Username>
			<input type="password" class= "radio" name = "pwd" placeholder= Password>
			<button type= "submit" id = "btnSubmitSignIn"  name ="submitSignIn">Sign in</button>
		</form>
	</aside>
	<aside id="asideSignUp">
		<form action="index.php" id= "formSignUp" method="post">
			<!-- <i class="fa fa-arrow-circle-left"></i> -->
			<h2>Sign up</h2>
			<div id= "divGender">
				<input type="radio" required id = "female" name="gender" value= "female">
				<label for="female" class ="label">female</label>
				<input type="radio" required id = "male" name="gender" value= "male">
				<label for="male" class = "label">male</label>
			</div>
			<input type="text" name = "firstname" placeholder= Firstname required>
			<input type="text" name = "lastname" placeholder= Lastname required>
			<input type="text" name = "username" placeholder= Username required>
			<input type="password" name = "pwd" placeholder= Password required>
			<input type="password" name = "pwd2" placeholder= "Password Repeat" required>
			<button type= "submit" id= "btnSubmitSignUp" name ="submitSignUp">Sign up</button>
		</form>
	</aside>

</div>

<?php
	include_once('inc/foot.inc.php');
	?>