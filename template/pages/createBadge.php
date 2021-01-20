<form class="badge__form--column" action="components/createBadge.inc.php" method='post'>

  <h2>Create a Badge </h2>
  <div class='badge__form--row'>
  <label for="name">Enter badge name:</label>
  <input type="text" name="name" maxlength="13" size="13" placeholder="13 Characters">
  

  <label for="color">Select badge color:</label>
  <input type="color" id="color" name="color" value="#ff0000">

  <label for="description">Enter badge description:</label>
  <input type="text" name="description" >
</div>
<div class='badge__form--row'>
  <label for="shape">Select badge shape:</label>
  <input type="text" id="shape" list="shapes" name="shape" >

  <label for="category">Select badge category:</label>
  <input type="text" id="category" list="categories" name="category" >
</div>
  <input type="submit">
  
  <datalist id="shapes">
    <option value="square">
    <option value="circle">
    <option value="parallelogram">
    <option value="talkbubble">
    <option value="rectangle">
  </datalist>

  <datalist id="categories">
    <option value="front-end">
    <option value="back-end">
    <option value="html/css">
    <option value="javacsript">
    <option value="php">
    <option value="mysql">
  </datalist>

</form>
<script src="app.js"></script>