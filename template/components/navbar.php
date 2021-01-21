<nav>
<div class="header">
  <a href="#default" class="logo"><img src="./assets/logoBB.png" height=50px width=110px/></a>
 
  <ul>
  <?php
    foreach($routes as $key=>$value){
    ?>
      <li><a href="?p=<?php echo $key; ?>"><?php echo $value; ?></a></li>
    <?php
    }
  ?>
  </ul>
  <div class="header-right">
  <a href="./logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a>
  </div>
  </div>
</nav>
