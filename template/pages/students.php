

<div class="userListScroll">

<?php $rows= getUsers();
   
    foreach($rows as $row){
        echo $row['firstname'].'  '.$row['lastname'].'  </br>';
    }

?>

</div>


