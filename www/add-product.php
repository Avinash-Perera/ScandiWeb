<?php require 'includes/header.php';?>

<form id="product_form">
  <div>
    <label> SKU </label>
    <input type="text" name="sku" id="sku">
  </div>
  <div>
    <label> Name </label>
    <input type="text" name="name" id="name">
  </div>
  <div>
    <label> Price </label>
    <input type="text" name="price" id="price">
  </div>
  <div>

    <label>Type Switcher</label>
    <select name="type" id="productType">
      <option value="selectT">Select type</option>
      <option value="dvd">DVD</option>
      <option value="book">Book</option>
      <option value="furniture">Furniture</option>
    </select>
  </div>

  <div id="dvd_details" style="display: none;">
    <label>Size</label>
    <input type="text" name="size" id="size">
  </div>

  <div id="book_details" style="display: none;">
    <label>Weight</label>
    <input type="text" name="weight" id="weight">
  </div>

  <div id="furniture_details" style="display: none;">
    <label>Height:</label>
    <input type="text" name="height" id="height">
    <label>Width:</label>
    <input type="text" name="width" id="width">
    <label>Length:</label>
    <input type="text" name="length" id="length">
  </div>

  <button type="submit">Save</button>
  <button type="reset">Cancel</button>
</form>

<?php require 'includes/footer.php';?>
   