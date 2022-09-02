<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Prueba Técnica</title>
	<style>

		div {

			margin-top: 10px;
		}

		body {

			padding-left: 15px;

		}

	</style>
	<script src="LibreriaJQuery/jquery-3.6.1.min.js"></script>
	<script>

		$().ready(function() {

			$("form").on("submit", function(event) {

				event.preventDefault();

				var v1 = $("#v1").val();

				var v2 = $("#v2").val();

				$.get("suma.php", {"v1": v1,"v2": v2}, function(respuesta) {

					$("#capa").html(respuesta);
				});


			});


		});
	
	</script>

<body>

	<h2>Prueba técnica</h2>

		<form>

			<div>

				<label for="numero-a">Introduzca el primer número: </label>

				<input type="text" name="a" id="v1">

			</div>
			<div>

				<label for="numero-b">Introduzca el segundo número: </label>

				<input type="text" name="b" id="v2">

			</div>
			<div>

				<input type="submit" value="Sumar">

			</div>

			<div id="capa"></div>

		</form>

</body>
</html>