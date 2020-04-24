<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="../assets/css/style.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
</head>
<body>
	<form action="../controller/mantenimiento_controller.php" method="POST" id="forma">
		<?php  
		include '../controller/mantenimiento_controller.php';
		echo $select;
		echo "<input type=\"submit\" value=\"ver tabla\" name=\"avanzar\">";
		if (isset($table))
			echo $table;
		?>
		<label for="spinner">Select a value:</label>
		<input id="spinner" name="value">
		<script>
			var spinner = $( "#spinner" ).spinner();


			$( "#spinner" ).on( "spinstop", function() {
				alert(spinner.spinner( texto));
				
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.write = this.spinner.spinner( texto);
					}
				};
				xmlhttp.open("GET", "gethint.php?q=" + str, true);
				xmlhttp.send();



				document.write(texto);
				document.write("hola");
				//window.location.replace("../controller/mantenimiento_controller.php");
				

			});
			$( "#destroy" ).on( "click", function() {
				if ( spinner.spinner( "instance" ) ) {
					spinner.spinner( "destroy" );
				} else {
					spinner.spinner();
				}
			});
			$( "#getvalue" ).on( "click", function() {
				alert( spinner.spinner( "value" ) );
			});
			$( "#setvalue" ).on( "click", function() {
				spinner.spinner( "value", 5 );
			});

			$( "button" ).button();
		</script>

	</form>
</body>
</html>