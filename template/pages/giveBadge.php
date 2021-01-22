<!-- Form that send user id to super globale for the get badges function that follows -->
<?php
if(isset($_POST['grantBadge'])){
    $badge_id=$_POST['badgeToGrant'];
    $user_id=$_POST['userToGrant'];
    grantBadgeToUser($badge_id, $user_id);
};

?>

<form name="grantBadge" method='post' action='#'>
            
            <select type="text" id="userBadges" name="userToGrant">
                <?php $rows= getUsers();
                    foreach($rows as $row){
                        echo"<option value=". $row['id'].">".$row['firstname']." ".$row['lastname']."</option>".'</br>';
                   }
                    echo"<option value=idUsers >All Users </option></br>";
                ?>
            </select>
            <select type="text" id="userBadges" name="badgeToGrant">
            <?php $rows= getBadges('all');
                    foreach($rows as $row){
                        echo"<option value=". $row['id'].">".$row['name']."</option>".'</br>';
                    }
                    
                ?>
            </select>

            <input type="submit">
        </form>