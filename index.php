<!DOCTYPE html>
<html>
<head>
  <title>JQuery LazzyNumeric</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/autoNumeric.js"></script>
  <script src="js/jquery.lazzynumeric.js"></script>
</head>
<body>
  <h1>JQuery LazzyNumeric</h1>
  <p>The lazzy plugin to format number with thousand separator on typing. This plugin extends the <b>autoNumeric</b> plugin (<a href="http://www.decorplanit.com/plugin/" target="_blank">http://www.decorplanit.com/plugin/</a>) so when the form is submitted the number format will be cleared and you don't need to do anything to clear the format at your server side script.</p>
  <?php
  $price1 = "";
  $price2 = "";

  // Check submitted value to see if the number format is cleared.
  if (isset($_POST['submit'])) {
    $price1 = $_POST["item_price1"];
    $price2 = $_POST["item_price2"];

    echo '<div style="border:1px solid #999;background-color:#ddd">';
    echo 'Hooray the value is back to the pure number!';
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo '</div>';
  }
  ?>  
  <form action="" method="post">
    <table>
      <tr><td>Item name</td><td>:</td><td><input type="text" name="item_name" value="Laptop" /></td></tr>
      <tr><td>Qty</td><td>:</td><td><input type="text" name="item_qty" /></td></tr>
      <tr><td>Price 1</td><td>:</td><td><input type="text" name="item_price1" class="money" value="<?php echo $price1 ?>" /></td></tr>
      <tr><td>Price 2</td><td>:</td><td><input type="text" name="item_price2" class="money" value="<?php echo $price2 ?>" /></td></tr>
    </table>
    <br/>
    <input type="submit" name="submit" id="submit" />
  </form>
  <script language="javascript" type="text/javascript">
    $(".money").lazzynumeric();
  </script>
</body>
</html>