<? php 

	// buat koneksi
	$hotsname = "localhost";
	$username = "root";
	$password = "";
	$database = "phpii_project00_lidiar"

	$connection = mysql_connect($hotsname, $username, $password, $database);

	if($connection->maxdb_connect_errno) {
		echo "Koneksi gagal!";
	} else {
		echo "Koneksi berhasil";
	}

 // fungsi tambah

 // fungsi ubah

 // fungsi tambah



?>