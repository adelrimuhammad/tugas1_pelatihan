<?php
 
 $query = mysqli_query($db, "SELECT max(idtransaksi) as kodeTerbesar FROM tbtransaksi");
 $data = mysqli_fetch_array($query);
 $idtransaksi= $data['kodeTerbesar'];
  

 $urutan = (int) substr($idtransaksi, 3, 3);
  
 $urutan++;
  
 
 $huruf = "TR";
 $idtransaksi= $huruf . sprintf("%03s", $urutan);
 
  
 ?>

<div id="label-page"><h3>Input Transaksi Peminjaman</h3></div>
<div id="content">
	<form action="proses/transaksi-peminjaman-input-proses.php" method="post">
	<div class="mb-3">
			<label for="id_transaksi" class="form-label">Id Transaksi</label>
			<input type="text" class="form-control" id="id_transaksi" name="id_transaksi" value="<?= $idtransaksi;?>" required>
		</div>

		<div class="mb-3">
			<label for="jenis_kelamin"> Anggota</label>
			<select class="form-control" id="jenis_kelamin" name="id_anggota" required>
			<option value="" select="selected"> Pilih Data Anggota </option>
					<?php
						$q_tampil_anggota=mysqli_query($db,
							"SELECT * FROM tbanggota
							WHERE status='Tidak Meminjam'
							ORDER BY idanggota"
						);
						while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
							echo"<option value=$r_tampil_anggota[idanggota]>$r_tampil_anggota[idanggota] | $r_tampil_anggota[nama]</option>";
						}
					?>
				</select>
		</div>

		<div class="mb-3">
			<label for="jenis_kelamin">Buku</label>
			<select class="form-control" id="jenis_kelamin" name="id_buku" required>
			<option value="" select="selected"> Pilih Data Buku </option>
					<?php
						$q_tampil_buku=mysqli_query($db,
							"SELECT * FROM tbbuku
							WHERE status='Tersedia'
							ORDER BY idbuku"
						);
						while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
							echo"<option value=$r_tampil_buku[idbuku]>$r_tampil_buku[idbuku] | $r_tampil_buku[judulbuku]</option>";
						}
					?>
				</select>
		</div>
		<div class="mb-3">
			<label for="tgl_pinjam" class="form-label">Tanggal Pimjam</label>
			<input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?php echo $tgl; ?>" required>
		</div>

		<button type="submit" name="simpan" class="btn btn-primary">Submit</button>


	</form>
</div>