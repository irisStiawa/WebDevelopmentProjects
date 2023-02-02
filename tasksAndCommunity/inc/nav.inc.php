<?php 
  $sql = "SELECT * FROM user WHERE userID = :id";
        
  $stmt = $pdo->prepare($sql);
  $stmt->execute(['id' => $_SESSION['id']]);

  while($result = $stmt->fetch()){
      $user = $result;
  }
?>



<header>
<nav class="navbar navbar-expand-md navbar-light bg-light p-2">
  <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <div class="h-100 w-100 d-flex align-items-center">
      <span class="navbar-toggler-icon"></span>
      <span>Menu</span>
    </div>
  </button>
  <div class="collapse navbar-collapse justify-content-lg-between" id="navbarMenu">
    <div class="">
      <a class="navbar-brand py-0" href="login.php">My Tasks</a>
    </div>
    
    <ul class="navbar-nav mt-2 mt-lg-0">
      <li id ="home" class="nav-item ">
        <a class="nav-link pb-0 px-3 pt-1" href="login.php">Home</a>
      </li>
      <li id="taskmanager" class="nav-item ">
        <a class="nav-link pb-0 px-3 pt-1" href="taskmanager.php">Taskmanager</a>
      </li>
      <li id="development" class="nav-item ">
        <a class="nav-link pb-0 px-3 pt-1" href="Development.php">Development</a>
      </li>
      <li id="gallery"class="nav-item ">
        <a class="nav-link pb-0 px-3 pt-1" href="gallery.php">Gallery</a>
      </li>
      <li id="story"class="nav-item ">
        <a class="nav-link pb-0 px-3 pt-1" href="community.php">Community</a>
      </li>
    </ul>
  </div> 
  <div id ="nav-absolute" class= "d-flex">
    <div id ="profilPicture" class="mr-2 nav-item">
      <a class="nav-link py-0 pl-5 pr-3" href="profil.php">
        <?php
          if($user->img == ""){
            echo "<i class='fa fa-user-circle'></i><img id='navUserImage' class= 'hidden' src='' alt='picture'>";
          } else {
            echo "<img id='navUserImage' src='img/userImages/$user->img' alt='picture'>";
          }
        ?>
      </a>
    </div>
    <div class=" row align-items-center">
     <form action="index.php?logout=true" method="post">
        <button id="btn-logout" type="submit" value="logout" class="btn border-grey btn-sm mr-5">Logout</button>
      </form>
    </div>
  </div>
  
  
</nav>
    
</header>