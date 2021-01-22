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
  <div class="addUser">
    <h1> Users </h1>

    <span style="color: white;" onclick="document.getElementClass("formulaire_connexion");">
    <a href="#id01"><i class="fas fa-user-plus" id='addUsers'></i></a>  
  </div>
  
  
</span>

    
    <div class="displayUserCenter">
    <?php if (isAdmin ()) {
                        
                        include('./pages/students.php');
                          }
                        
                          ?>
    </div>




  </div>

</div>

</div>



<div id="id01" class="modal">

  <div class="modal-dialog">
 
    <div class="modal-content">
    <header class="container"> 
        <a href="#" class="closebtn">×</a>        
      </header>
      <div class="container">
     
      <form class="formulaire_connexion" method="POST" action="components/createUser.inc.php">
     
        <p>
            <label for="fst"><b>Firstname </b></label>
            <input type="text" name="firstname" placeholder="Enter your firstname..."  />
        </p>
        <p>
            <label for="lst"><b>Lastname </b></label>
            <input type="text" name="lastname" placeholder="Enter your lastname..."  />
        </p>
        <p>
            <label for="email"><b>E-mail </b></label>
            <input type="email" name="email" placeholder="Enter a valid e-mail adress..."  />
        </p>
        <p>
            <label for="pwd"><b>Password </b></label>
            <input type="password" name="pwd" placeholder="Enter your password..."  />
        </p>
        <p>
            <label for="pwd"><b>Password </b></label>
            <input type="password" name="confirmpwd" placeholder="Confirm your password..."  />
        </p>
        <p>
            <label for="status"><b>Status </b></label>
            <select id="status" name='account_type'>
              <option value="admin">Admin</option>
              <option value="normie">Normie</option>
              
            </select>
        </p>
        <p>
            <input type="submit" id="confirm_connexion" value="Add user" /> 
        </p>
        </form>
      </div>
      
    </div>
  </div>
</div> 
