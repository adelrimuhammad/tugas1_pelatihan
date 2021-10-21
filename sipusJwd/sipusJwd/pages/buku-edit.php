<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post">
	<div class="mb-3">
			<label for="id_buku" class="form-label">Id Buku</label>
			<input type="text" class="form-control" id="id_buku" name="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly">
		</div>
		<div class="mb-3">
			<label for="judul_buku" class="form-label">Judul Buku</label>
			<input type="text" class="form-control" id="nama" name="judul_buku" value="<?php echo $r_tampil_buku['judulbuku']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="kategori">Kategori</label>
			<select class="form-control" id="jenis_kelamin" name="kategori" value="<?php echo $r_tampil_buku['kategori']; ?>" required>
				<option value="" select="selected">~ Pilih Kategori ~</option>
				<option value="Ilmu Komputer">Ilmu Komputer</option>
				<option value="Ilmu Agama">Ilmu Agama</option>
				<option value="Karya Sastra">Karya Sastra</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="pengarang" class="form-label ">Pengarang</label>
			<input type="text" class="form-control" id="alamat" name="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>"required>
		</div>
		<div class="mb-3">
			<label for="penerbit" class="form-label">Penerbit</label>
			<input type="text" class="form-control" id="alamat" name="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>"required>
		</div>

		<button type="submit" name="simpan" class="btn btn-primary">Submit</button>
	</form>
</div>