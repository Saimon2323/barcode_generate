<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


	<style>
		.okk{
			margin: 20px;
			display: inline-block;
		}
	</style>
</head>
<body>
		<?php
		$code = "154-098-106-";
		for ($i=5490; $i <= 5503; $i++) { 
			?>
			<div class="okk" >
				<div>
					<img src="sticker.png">
					<img style="width: 92px;height: 90px;margin-left: -295px;margin-top: -45px" src="imagesWithDass/<?= "$code".$i; ?>.jpg">
				</div>
			</div>
			<?php
		}
		?>
	</body>
	</html>