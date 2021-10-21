<?php
 
 $query = mysqli_query($db, "SELECT max(idbuku) as kodeTerbesar FROM tbbuku");
 $data = mysqli_fetch_array($query);
 $idbuku= $data['kodeTerbesar'];
  

 $urutan = (int) substr($idbuku, 3, 3);
  
 $urutan++;
  
 
 $huruf = "BK";
 $idbuku = $huruf . sprintf("%03s", $urutan);
 
  
 ?>

<div id="label-page">
	<h3>Input Data Buku</h3>
</div>
<div id="content">
	<form action="proses/buku-input-proses.php" method="post">
		<div class="mb-3">
			<label for="id_buku" class="form-label">Id Buku</label>
			<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $idbuku;?>" required>
		</div>
		<div class="mb-3">
			<label for="judul_buku" class="form-label">Judul Buku</label>
			<input type="text" class="form-control" id="nama" name="judul_buku" required>
		</div>
		<div class="mb-3">
			<label for="kategori">Kategori</label>
			<select class="form-control" id="jenis_kelamin" name="kategori" required>
				<option value="" select="selected">~ Pilih Kategori ~</option>
				<option value="Ilmu Komputer">Ilmu Komputer</option>
				<option value="Ilmu Agama">Ilmu Agama</option>
				<option value="Karya Sastra">Karya Sastra</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="pengarang" class="form-label">Pengarang</label>
			<input type="text" class="form-control" id="alamat" name="pengarang" required>
		</div>
		<div class="mb-3">
			<label for="penerbit" class="form-label">Penerbit</label>
			<input type="text" class="form-control" id="alamat" name="penerbit" required>
		</div>

		<button type="submit" name="simpan" class="btn btn-primary">Submit</button>
	
	</form>
</div>