<?php

require_once("db_konek_native.php");

if ($_GET['id']){
	
	$DBH = new dbKonekMySQL('localhost','root','admin','interview');

	$query1 = 'select * from tbl_berita where id=' . $_GET['id'];

	$DBH->execute($query1);

	$data = $DBH->get_array();

	var_dump($data);	
	
	$title = 0;
}

var_dump($_GET['id']);



?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Heading</h1>
<p>This is a paragraph.</p>
<form action="index.php" id="form_edit" method="POST">
<table style="width:40%;" border=1>
  <tbody>
  <tr>
    <td>Title</td>
	<td><input type="text" name="title" value="<?php echo $title; ?>"></input></td>
  </tr>
  <tr>
    <td>Short Description</td>
	<td><input type="text" name="short" value="<?php echo $short; ?>"></input></td>
  </tr>  
  <tr>
    <td>Description</td>
	<td><textarea name="description"><?php echo $description; ?></textarea></td>
  </tr>
  <tr>
    <td>Penulis</td>
	<td><input type="text" name="penulis" value="<?php echo $penulis; ?>"></input></td>
  </tr>  
  </tbody>
</table>
  <div><button action="index.php">Simpan</button></div>
</form>
</body>
</html>


