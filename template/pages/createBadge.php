<form class="badge__form--column" action="components/createBadge.inc.php" method='post'>
  <h2>Create a Badge </h2>

  <div class='badge__form--row'>
    <label for="name">Enter badge name:</label>
    <input type="text" name="name" id='name' maxlength="13" size="13" placeholder="13 Characters">
    
    <label for="description">Enter badge description:</label>
    <input type="text" name="description" >
  </div>

  <div class='badge__form--row'>
    <label for="shape">Select badge shape:</label>
    <select  type="text" id="shape" list="shapes" name="shape">
      <option value="square">square</option>
      <option value="circle">circle</option>
      <option value="parallelogram">parallelogram</option>
      <option value="talkbubble">talkbubble</option>
      <option value="rectangle">rectangle</option>
    </select>
    
    <label for="category">Select badge category:</label>
    <select  type="text" id="category" list="categories" name="category">
      <option value="front-end">front-end</option>
      <option value="back-end">back-end</option>
      <option value="html/css">html/css</option>
      <option value="javacsript">javacsript</option>
      <option value="php">php</option>
      <option value="mysql">mysql</option>
    </select>
  </div>

  <div class='badge__form--row'>
    <label for="color">Select badge color:</label>
    <input type="color" id="color" name="color" value="#ff0000">
    <input type="submit">
  </div>

  <section class='shapes'>
    <div class='square' style='' id="currentShape"><p id='currentShapeName'></p></div>
  </section>

</form>

<script src="app.js"></script>