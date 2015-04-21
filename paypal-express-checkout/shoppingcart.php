<?php
include_once("config.php");
?>
<style type="text/css">
<!--
body{font-family: arial;color: #7A7A7A;margin:0px;padding:0px;}
.procut_item {width: 550px;margin-right: auto;margin-left: auto;padding: 20px;background: #F1F1F1;margin-bottom: 1px;font-size: 12px;border-radius: 5px;text-shadow: 1px 1px 1px #FCFCFC;}
.procut_item h4 {margin: 0px;padding: 0px;font-size: 20px;}
-->
</style>

<h2 align="center">Shopping Carts</h2><h2 align="center"><a href="homepage.html">Homepage</h2>
<div class="product_wrapper">
<table class="procut_item" border="0" cellpadding="4">
  <tr>
    <td width="70%"><h4>Bradford Caster Leather Stool</h4>(Impeccably upholstered in a rich, brown leather, this elegant stool features a shapely shapely.)</td>
    <td width="30%">
    <form method="post" action="process.php">
	<input type="hidden" name="itemname" value="Bradford Caster Leather Stool" /> 
	<input type="hidden" name="itemnumber" value="10000" /> 
    <input type="hidden" name="itemdesc" value="Impeccably upholstered in a rich, brown leather, this elegant stool features a shapely shapely." /> 
	<input type="hidden" name="itemprice" value="225.00" />
    Quantity : <select name="itemQty"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select> 
    <input class="dw_button" type="submit" name="submitbutt" value="Buy (225.00 <?php echo $PayPalCurrencyCode; ?>)" />
    </form>
    </td>
  </tr>
</table>

<table class="procut_item" border="0" cellpadding="4">
  <tr>
    <td width="70%"><h4>Masterpiece Umber 24 1/2" Round Side Table</h4>(Selected solid woods and choice cherry veneers. Four-way matched cherry veneer top with center veneer inlay.)</td>
    <td width="30%">
    <form method="post" action="process.php">
	<input type="hidden" name="itemname" value="Masterpiece Umber 24 1/2" Round Side Table" /> 
	<input type="hidden" name="itemnumber" value="20000" /> 
    <input type="hidden" name="itemdesc" value="Selected solid woods and choice cherry veneers. Four-way matched cherry veneer top with center veneer inlay." /> 
	<input type="hidden" name="itemprice" value="109.99" /> Quantity : <select name="itemQty"><option value="1">1</option><option value="2">2</option><option value="3">3</option></select> 
    <input class="dw_button" type="submit" name="submitbutt" value="Buy (109.99 <?php echo $PayPalCurrencyCode; ?>)" />
    </form></td>
  </tr>
</table>
</div>

</body>
</html>