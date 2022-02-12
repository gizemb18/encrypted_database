<?php 
$gelen_kul = strip_tags($_POST['KullaniciAdi']); 
$gelen_pas = strip_tags($_POST['Sifre']);
$gelen_kul = base_convert($gelen_kul, 32, 16);
$gelen_pas = base_convert($gelen_pas, 32, 16);

echo $gelen_kul." ".$gelen_pas; 
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
	}
	$sorgu="select * from $table";
	$gonder = mysqli_query($baglanti, $sorgu);
	while($satir = mysqli_fetch_array($gonder)){
		echo "\n".$satir['24d'];
		if($satir[1]==$gelen_kul){
			$_SESSION['user'] = $gelen_kul;
			header('Location: anasayfa.php');	
			break;
		}else{
			header('Location: index.php?sonuc=Kullanıcı Adı veya Şifre Hatalı :(');
		}
	}
?>