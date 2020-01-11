<?php 
$username = "sss_syyyyyyyyyyyyyyyyyyy";
echo  username($username);
echo "<br/>";
function username($username){
	$cekhurufkecil = preg_match('@[a-z]@', $username);
	$cekhurufbesar = preg_match('@[A-Z]@', $username);
	$cekspesialkarakter = preg_match('[\W]', $username);
	$cekunderscorse = preg_match('@[_]@', $username);
	if ($cekhurufkecil == 0) {
		echo  "username harus mengandung huruf kecil";
	}elseif ($cekhurufbesar == 1) {
		echo "username harus mengandung huruf kecil";
	}elseif ($cekspesialkarakter == 1) {
		echo "username tidak boleh mengandung spesial karakter kecuali underscorse";
	}elseif ($cekunderscorse == 0) {
		echo "usernme harus menggunakan underscorse";
	}elseif (strlen($username) < 5) {
		echo "username anda tidak boleh kurang dari 5 karakter";
	}elseif (strlen($username) > 12) {
		echo "maksimal 12 karakter";
	}
	else {
		echo "username anda adalah $username";
	}
}

$password = "1@ABCDEF";
echo password($password);
function password($password){
	$cekangka = preg_match('@[0-9]@', $password);
	$cekhurufbesar = preg_match('@[A-Z]@', $password);
	$ceksimbol = preg_match('[\W]', $password);
	$ambilhruf = substr($password, 2);
	$besar = ctype_upper($ambilhruf);
	if ($ceksimbol == 0) {
		echo "masukan 1 simbol";
	} else if ($cekangka == 0) {
		echo "masukan 1 angka";
	}else if ($besar == 0) {
		echo "harus huruf besar";
	}elseif (strlen($ambilhruf) > 5) {
		echo "huruf besarnya harus 5";
	}else {
		echo "$password";
		echo "<br/>";
	}

}

 ?>