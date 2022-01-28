<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<center>
 
		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.MALASNGODING.COM</h4>
 
	</center>
 
	<?php 
	include "../inc/koneksi.php";
	
		$tanggal = date("m/y");
		$tgl = date("d/m/y");
	?>
 
	<table border="1" style="width: 100%">
		<tr>
				<th width="1%">No</th>
				<th>NIK</th>
				<th>NAMA</th>
				<th>TEMPAT LAHIR</th>
                <th>TANGGAL LAHIR</th>
				<th>JENIS KELAMIN</th>
				<th>DESA</th>
				<th>RT</th>
                <th>RW</th>
				<th>AGAMA</th>
				<th>KAWIN</th>
				<th>PEKERJAAN</th>
                <th>STATUS</th>
		<?php 
		$no = 1;
		if (isset ($_POST['Cetak']))
		$sql = mysqli_query($koneksi,"select * from tb_pdd");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
		<td><?php echo $no++; ?></td>
				<td><?php echo $data['nik']; ?></td>
				<td><?php echo $data['nama']; ?></td>
				<td><?php echo $data['tempat_lh']; ?></td>
				<td><?php echo $data['tgl_lh']; ?></td>
				<td><?php echo $data['jekel']; ?></td>
				<td><?php echo $data['desa']; ?></td>
				<td><?php echo $data['rt']; ?></td>
				<td><?php echo $data['rw']; ?></td>
				<td><?php echo $data['agama']; ?></td>
                <td><?php echo $data['kawin']; ?></td>
                <td><?php echo $data['pekerjaan']; ?></td>
                <td><?php echo $data['status']; ?></td>
			</tr>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>