# Project00 - Persiapan Kelas


## Garis Besar

✅ Perkenalan
✅ Spesifikasi laptop
✅ Koneksi internet
✅ Google Classroom
✅ Google Calendar
✅ GitHub
✅ Git
✅ Xampp (Apache, MySQL, PHPMyAdmin)
✅ Text Editor
✅ Web Browser
✅ Discord

## Cacatan 

### Perintah Git 

Perintah untuk melihat versi git
```
git --version
```

Perintah untuk mengupdate versi git di Windows

```
Git update-git-for-windows
```

perintah untuk cek status git 

```
git status
```

### Membuat Koneksi Database

Skrip PHP & MySQL untuk membuat koneksi ke database

```php

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
```