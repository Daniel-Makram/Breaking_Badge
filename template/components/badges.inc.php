<?php
$user_badges='idUsers';
if(isset($_POST['userBadges'])){
    $user_badges=$_POST['userBadges'];
}

if(isAdmin()){   
?>
        <h2>All Badges</h2>
    <section class='shapes'>
<?php
    getBadges('all');
?>
    </section>
<?php }
$rows=getUsers();
if($user_badges=='idUsers'){
    echo'<h2> List of Badges from : All Users </h2>';
}else{
    foreach($rows as $row){
        if($row['id']==$user_badges) {
        echo'<h2> List of Badges from : '. $row['firstname'].' '.$row['lastname'].' </h2>';}
    }
}