<?php
	ob_start();
	include "config.php";

	$sql = "SELECT * FROM berita";

	$datas = $config -> query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Berita</title>
	<style type="text/css">
		h1{
			text-align: center;
		}
	</style>
</head>
<body>
	<?php foreach($datas as $data): ?>	
			<h1><b><?php echo $data['judul'];?></b></h1>
			<p><?php echo $data['isi'];?></p>
	<?php endforeach;?>
</body>
</html>

<?php
	require './mpdf/vendor/autoload.php';

	$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8',
							'format' => 'A4',
							'margin_top' => 25,
							'margin_bottom' => 25,
							'margin_left' => 25,
							'margin_right' => 25]);

	$html = ob_get_contents();

	ob_end_clean();
	$mpdf -> WriteHTML(utf8_encode($html));

	$content = $mpdf -> Output("Berita.pdf", "D")
?>