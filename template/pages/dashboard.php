<?php 
if(!isAuthenticated()){

  header("location: ./index.php?error=loginFirst");
}

?>
<section class="dash">

<div class="user_view">
  <h1 class="title_user">Welcome back </h1>
  <h2>
  
  </h2>
</div>

<?php if (isAdmin ()) {include('./pages/adminDash.php');}
else{
  include ('./pages/userDash.php');
}
?>
<!--if admin include (./pages/adminDash.php)--> 


</section>