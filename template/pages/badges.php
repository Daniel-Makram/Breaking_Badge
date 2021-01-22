<?php
require_once('components/badges.inc.php');

    if(isAdmin()){   
        
        ?>
        <section class='shapes'>
        <form name="userBadges" method='post' action='#'>
            <select type="text" id="userBadges" name="userBadges">
                <?php $rows= getUsers();
                    foreach($rows as $row){
                        echo"<option value=". $row['id'].">".$row['firstname']." ".$row['lastname']."</option>".'</br>';  
                    }
                    echo"<option value=idUsers >All Users </option></br>";          
                ?>
            </select>
            <input type="submit">
        </form>
        <?php
        getBadges($user_badges);    
    }else{
        getBadges($_SESSION['user_id']);
    }
    ?>
</section>

<section class='stats'><section>
