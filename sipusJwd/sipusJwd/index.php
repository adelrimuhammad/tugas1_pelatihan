<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body >
<div id="viewport">
  <!-- Sidebar -->
  <div id="sidebar">
    <header>
      <a>Perpustakaan</a>
    </header>
    <ul >
	
				<li style="color:white;"> <a " href="index.php?p=beranda">Beranda </a> </li>
				<li style="color:white;" id="label-navigasi">Data Dan Transaksi</li>
				<li style="color:white;" ><a href="index.php?p=anggota">Data Anggota</a></li>
				<li style="color:white;"><a href="index.php?p=buku">Data Buku</a></li>
				<li style="color:white;"><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
			
    </ul>
  </div>
  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-default">
	<?php
	$pages_dir = 'pages';
	if (!empty($_GET['p'])) {
		$pages = scandir($pages_dir, 0);
		unset($pages[0], $pages[1]);
		$p = $_GET['p'];
		if (in_array($p . '.php', $pages)) {
			include($pages_dir . '/' . $p . '.php');
		} else {
			echo 'Halaman Tidak Ditemukan';
		}
	} else {
		include($pages_dir . '/beranda.php');
	}
	?>
      </div>
    </nav>
  </div>
</div>
		
		
</body>


</html>