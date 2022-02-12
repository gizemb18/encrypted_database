<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
<?php
$user = 'root';
$pass = '';
$server = 'localhost';
$db='test';
$baglanti = mysqli_connect("$server","$user","$pass","$db");

	$sorgu="show tables";
    echo "<tr>";
	$gonder = mysqli_query($baglanti, $sorgu);
	while($satir = mysqli_fetch_array($gonder))
	{
		$table=$satir[0];
        echo "<th>".base_convert($table, 16, 32)."</th>";
	}
    echo "</tr>";
    $sorgu="select * from $table";
	$gonder = mysqli_query($baglanti, $sorgu);
    if (!$gonder) {
        printf("Error: %s\n", mysqli_error($baglanti));
        exit();
    }
    while($satir = mysqli_fetch_array($gonder))
	{
		echo "<tr><td>".base_convert($satir[0], 16, 32)."</td><td>".base_convert($satir[1], 16, 32)."</td><td>".base_convert($satir[2], 16, 32)."</td></tr>";
	}

?>
</table>

</body>
</html>


