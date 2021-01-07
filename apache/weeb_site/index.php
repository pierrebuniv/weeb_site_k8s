<html>
	<head>
		<title>Weebbay</title>
		<?php include "lib.php"?>
	</head>
	<body>
		<?php
			$anime_list = display_anime();

			foreach ($anime_list as $anime){
				$image = $anime['path_image'];
				echo $image ;
		}
		?>
		<table>
			<tr><td><img src = "<?php echo $image; ?>"></td></tr>
		</table>
	</body>
</html>
