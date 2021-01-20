<?php
  include_once('db.php');


  // Similar to "include_once" but for sessions
  // Calls "session_start()" unless it has already been called on the page
  function session_start_once(){
    if(session_status() == PHP_SESSION_NONE){
      return session_start();
    }
  }

  function isAuthenticated(){
    session_start_once();
    return !empty($_SESSION['id']);
  }

  function isAdmin(){
    session_start_once();
    return isAuthenticated && $_SESSION['account_type'] == 'ADMIN';
  }

  function login($email, $password){
    session_start_once();

    $cursor = createCursor();
    $query = $cursor->prepare('SELECT id, password,account_type from users WHERE email=?');
    $query->execute([$email]);
    $results = $query->fetch();
    

    if(password_verify($password, $results['password'])){
      $_SESSION['user_id'] = $results['id'];
      $_SESSION['account_type'] = $results['account_type'];
      $_SESSION['email'] = $email;

      return true;
    }
    return false;
  }

  function logout(){
    session_start_once();
    session_destroy();
  }

  //Display the badges by creating divs with db input
  function displayBadges($name,$shape,$desc,$color,$category){

    echo "<div class='".$shape."' style='background:".$color.";border-color:".$color."'><p>".$name."</p></div>";
  }

  //Retrieves badges from db and displays them via the displayBadges() function 
  function getBadges(){

   


    session_start_once();
    $cursor=createCursor();
   
    $data = $cursor->query("SELECT `name`, `description`, `shape`, `color`, `category` FROM `badges` ")->fetchAll();
    // and somewhere later:
    foreach ($data as $rows) {
      // print_r($rows);
      displayBadges($rows['name'],$rows['shape'],$rows['description'],$rows['color'],$rows['category']);
      // echo $rows['name'].'  '.$rows['shape'].'  '. $rows['description'].'  '.$rows['color'].'  '.$rows['category']."<br />\n";
//       foreach($rows as $row){
//         echo $row . '  ';     
//       }
//       echo "<br />\n";
}


  }

  function getUsers(){
   

  }
  //pdo input new badges to DB
  function createBadge($badge_name,$badge_colour,$badge_desc,$badge_shape,$badge_cat){
    session_start_once();

    $data = [
      'name' => $badge_name,
      'colour' => $badge_colour,
      'description' => $badge_desc,
      'shape' => $badge_shape,
      'cat' => $badge_cat,
    ];
    $cursor=createCursor();
    $sql = "INSERT INTO `badges`( `name`, `description`, `shape`, `color`, `category`) VALUES (:name, :description, :shape, :colour, :cat)";
    $stmt= $cursor->prepare($sql);
    $stmt->execute($data);
  }

  function editBadge($badge_id){

  }

  function removeBadge($badge_id){

  }

  function grantBadgeToUser($badge_id, $user_id){

  }

  function removeBadgeFromUser($badge_id, $user_id){

  }
  function phpAlert($msg){
    echo'<script type="text/javascript">alert("'.$msg.'")</script>';
  }
?>
