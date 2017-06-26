<!DOCTYPE html>
	<html>
		<head>
			<title>Product Insert</title>

			<!--JQUERY CORE-->
			<script
			  src="https://code.jquery.com/jquery-3.2.1.js"
			  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
			  crossorigin="anonymous"></script>
			<!--JQUERY CORE-->

		</head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
		<style>
	    	
				td {
				padding: 20px;
				}
		</style>
<body>

<form action="product_insert_data.php" method="POST" enctype="multipart/form-data" name="item_form">
	<table border="1" align="center">
		<tr>
			<td>
				<strong>Image</strong>
			</td>

			<td>
				<strong>Item</strong>
			</td>

			<td>
				<strong>Quantity</strong>
			</td>

			<td>
				<strong>Price</strong>
			</td>
		</tr>

		<tr>
			<td>
				<input type="file" name="product_image">
			</td>

			<td>
				<select name="item" id="item_name">
					<option value="selected" selected>Select Item</option>
					<option value="Stone">Stone</option>
					<option value="Lagunitas">Lagunitas</option>
					<option value="Samuel Adams">Samuel Adams</option>
					<option value="Sierra Nevada">Sierra Nevada</option>
					<option value="Victoria">Victoria</option>

				</select>
			</td>

			<td>
				<select name="quantity">
					<option value="" selected>Select Quantity</option>
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</td>

			<td>
				<input type="text" name="price" value="" maxlength="8">
			</td>
		</tr>

		<tr>
			<td>
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
	</table>
</form>

<script>
	$(function(){

		$('#item_name').change(function(){
			var beer= $('#item_name').val();

			$.ajax({
				url: "product_insert_ajax.php",
				method: "POST",
				data: {name: beer},
				success: function(data){
					
					document.item_form.price.value= 
				}
			});
		});

	});
			</script>
				<a href="" id="test">TEST</a>

</body>
</html>