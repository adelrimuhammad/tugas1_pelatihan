<?php
$id_anggota = $_GET['id'];
$q_tampil_anggota = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
$r_tampil_anggota = mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page">
	<h3>Edit Data Anggota</h3>
</div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="POST">
		<div class="mb-3">
			<label for="id_anggota" class="form-label">Id Anggota</label>
			<input type="text" class="form-control" id="id_anggota" name="id_anggota" readonly="readonly" value="<?php echo $r_tampil_anggota['idanggota']; ?> " required>
		</div>
		<div class="mb-3">
			<label for="nama" class="form-label">nama</label>
			<input type="text" class="form-control" id="nama" name="nama"value="<?php echo $r_tampil_anggota['nama']; ?>" required>
		</div>
		<div class="mb-3">
			<label for="nama" class="form-label">nama</label>
			<input type="text" class="form-control" id="nama" name="name" value="<?php echo $r_tampil_anggota['nama']; ?>" required >
		</div>
		<div class="mb-3">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $r_tampil_anggota['jeniskelamin']; ?>"required>
				<option value="">pilih</option>
				<option value="Pria">Pria</option>
				<option value="Wanita">Wanita</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="alamat" class="form-label">alamat</label>
			<input type="textarea" class="form-control" id="alamat" name="alamat" value="<?php echo $r_tampil_anggota['alamat']; ?>" required>
		</div>
		<button type="submit" name="simpan" class="btn btn-primary">Submit
	</form>
</div>
