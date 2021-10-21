<?php
 
 $query = mysqli_query($db, "SELECT max(idanggota) as kodeTerbesar FROM tbanggota");
 $data = mysqli_fetch_array($query);
 $idanggota = $data['kodeTerbesar'];
  

 $urutan = (int) substr($idanggota, 3, 3);
  
 $urutan++;
  
 
 $huruf = "AG";
 $idanggota = $huruf . sprintf("%03s", $urutan);
 
  
 ?>

<div id="label-page">
	<h3>Input Data Anggota</h3>
</div>
<div id="content">
	<form action="proses/anggota-input-proses.php" method="POST">
		<div class="mb-3">
			<label for="id_anggota" class="form-label">Id Anggota</label>
			<input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $idanggota;?>" required readonly>
		</div>
		<div class="mb-3">
			<label for="nama" class="form-label">nama</label>
			<input type="text" class="form-control" id="nama" name="nama" required>
		</div>
		<div class="mb-3">
			<label for="jenis_kelamin">Kota tinggal</label>
			<select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
				<option value="">pilih</option>
				<option value="Pria">Pria</option>
				<option value="Wanita">Wanita</option>
			</select>
		</div>
		<div class="mb-3">
			<label for="alamat" class="form-label">alamat</label>
			<input type="textarea" class="form-control" id="alamat" name="alamat">
		</div>
		<button type="submit" name= "simpan" class="btn btn-primary">Submit</button>
	</form>
</div>
