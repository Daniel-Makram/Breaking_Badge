<?php
include_once ('./components/functions.php');
?>
<div class="container">
    <img class="logoBB" src="./assets/logoBB.png"/>
<form class="formulaire_connexion" method="POST">
        <p>
            <label for="fst"><b>Firstname </b></label>
            <input type="text" name="firstname" placeholder="Enter your firstname..."  />
        </p>
        <p>
            <label for="lst"><b>Lastname </b></label>
            <input type="text" name="flastname" placeholder="Enter your lastname..."  />
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
            <input type="submit" id="confirm_connexion" value="SignUp" /> 
        </p>
</form>
<div>