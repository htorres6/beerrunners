<!DOCTYPE html>
<html>
<head>
	<title>new product</title>
</head>
<body>

<form action="new_product_data.php" method="POST">

<select name="products_dropdown">
	<option selected>Beers</option>
	<option value="coors_light">Coors Light</option>
	<option value="stone">Stone</option>
	<option value="lagunitas">Lagunitas</option>
	<option value="victoria">Victoria</option>
</select>

	<input type="text" name="check"><br>

	<input type="checkbox" value="helium_tanks" name="party_supplies[]">Helium Tanks<br>
	<input type="checkbox" value="jumpers" name="party_supplies[]">Jumpers<br>
	<input type="checkbox" value="tables" name="party_supplies[]">Tables<br>
	<input type="checkbox" value="balloons" name="party_supplies[]">Balloons<br>
	<input type="checkbox" value="pinatas" name="party_supplies[]">Pinatas<br><br>

<label>Helium</label><br>
<select name="helium">
	<option selected>0</option>
	<option value="1 helium tank">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select><br><br>

<label>Jumpers</label><br>
<select name="jumpers">
	<option selected>0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select><br><br>

<label>Tables</label><br>
<select name="tables">
	<option selected>0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select><br><br>

<label>Ballons</label><br>
<select name="ballons">
	<option selected>0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select><br><br>

<label>Pinatas</label><br>
<select name="pinatas">
	<option selected>0</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
</select><br><br>




	<input type="submit" value="Submit" name="submit">
</form>


</body>
</html>