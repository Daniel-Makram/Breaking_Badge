<?php 
if(!isAuthenticated()){

  header("location: ./index.php?error=loginFirst");
}

?>
<section class="dash">

  <div class="user_view">
    <?php 
      $rows= getUsers();
      foreach($rows as $row){
        if($row['id']==$_SESSION['user_id']){
          echo"<h1 class='title_user'>Welcome back </br>".$row['firstname']." ".$row['lastname']." ! </h1>".'</br>';  
          echo"<h3 class='userInfo'> Your Email : ".$row['email']."</h3>";
          echo"<h3 class='userInfo'> You are  ".$row['account_type']." !</h3>";
        }
      }
    ?>
   
    
  
  </div>

  <?php if (isAdmin ()) {include('./pages/adminDash.php');}
  else{
    include ('./pages/userDash.php');
  }
  ?>
  <!--if admin include (./pages/adminDash.php)--> 


</section>