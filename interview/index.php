<?php

require_once("db_konek_native.php");

if ($_REQUEST){
	var_dump($_REQUEST);
}



$DBH = new dbKonekMySQL('localhost','root','admin','interview');

$query1 = 'select * from tbl_berita';

$DBH->execute($query1);

$data = $DBH->get_array();

//var_dump($data);

?>

<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Heading</h1>
<p>This is a paragraph.</p>
<table style="width:100%;" border=1>
  <thead>
	  <tr>
		<td>id</td>
		<td>title</td> 
		<td>description</td>
		<td>penulis</td>
		<td>tanggal buat</td>
		<td>action</td>
	  </tr>
  </thead>
  <tbody>
  <?php
	$i=0;
	foreach ($data as $key => $value) {  
  ?>
  <tr>
    <td><?php echo $data[$i]['id'];?></td>
    <td><?php echo $data[$i]['title'];?></td> 
    <td><?php echo $data[$i]['description'];?></td>
    <td><?php echo $data[$i]['penulis'];?></td>
    <td><?php echo $data[$i]['timestamp'];?></td>	
	<td><a href='edit.php?id=<?php echo $data[$i]['id'];?>'>edit</a></td>
  </tr>
  
  <?php
		$i++;
	}
  ?>  
  

  
  </tbody>
</table>

</body>
</html>


