<div class="container_box">

<div class="admin_info">
<?php
    include ('./pages/createBadge.php');
    ?>
</div>

<div class="user_dash">
  
<div class="badgePlus">
    <h1> Grant Badges </h1>
    <?php
    include ('./pages/giveBadge.php');
    ?>
  </div>
  
  <div class="progression">
    <h1> Users </h1>
    
  </div>
</div>

<div class="display_badge">
    <h1> Display Badges </h1>
    <div class="badgeDisplay">
    <?php
    getBadges('all');
    ?>
    </div>
</div>
</div>