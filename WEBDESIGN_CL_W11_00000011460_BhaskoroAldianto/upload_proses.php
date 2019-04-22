<?php 

$judul = $_POST['judul'];
$foto = $_FILES['foto'];

$ext = explode(".", $foto['name']);
$ext = end("$ext");
$ext = strtolower($ext);

$ext_boleh = ['jpg', 'png', 'jpeg'];

if(in_array($ext, $ext_boleh)){
	echo "File valid";

}
else {
	echo "File tidak valid";
}

if(in_array($ext, $ext_boleh)){
	$sumber = $foto['tmp_name'];
	$tujuan = 'uploads/' . $foto['name'];
	move_uploaded_file($sumber, $tujuan);

	$k = new PDO("mysql:host=localhost;dbname=unimedia_senin", "root", "");
	$sql = "INSERT INTO gallery (judul, foto) VALUES (?, ?)";

	$result = $k->prepare($sql);
	$result->execute([$judul, $tujuan]);
}
else {
	echo "File tidak valid";
}
?>