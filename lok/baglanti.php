<?php






try {
	$baglanti= new PDO('mysql:host=localhost; dbname=burger; charset=utf8',   'root', ''     );
	#echo "bağlantı başarılı";
} catch (Exception $e) {
	
	echo $e->getMessage();
}



