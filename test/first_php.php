<!DOCTYPE html>
<?php
			$dagdeel = date("H"); // 23

			$klok = date("H:i");
			
			
			if ($dagdeel <= 5.59){
				 $time = "nacht";
			}
			 elseif ($dagdeel <= 11.59) {
				 $time = "morgen";
			} elseif ($dagdeel <= 17.59) {
				 $time = "middag";
			} else {
				 $time = "avond";
			}
?>
<html>
	<head>
		<title> goede <?php echo $time ?> </title>
	<link href="../css/layout.css" type="text/css" rel="stylesheet">
	</head>
	<body class="<?php echo $time ?>">
	
	<p>goede <?php echo $time ?> </p>
	<p>het is nu <?php echo $klok ?> </p>
	</body>
</html>