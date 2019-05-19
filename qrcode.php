	

<!-- NEXT Start From 1540981065501 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
include "D:/xampp/php/lib/qrlib/phpqrcode/qrlib.php";

for ($i=1540981065501; $i < 1540981065515; $i++) { 

	QRcode::png($i);
	$tempDir = "D:/xampp/htdocs/barcode_generate/images/";

	$codeContents = $i;
	$codeContents = "বই ভান্ডার বই নংঃ ".$i;  // Scan Content

	$fileName = "".$i.".jpg";
	

	$pngAbsoluteFilePath = $tempDir.$fileName;
	//$urlRelativeFilePath = "C:/xampp/htdocs/qrCode".$fileName;

	QRcode::png($codeContents, $pngAbsoluteFilePath, QR_ECLEVEL_L, 5, 3); // Save heres
	
}
?>
</body>
</html>