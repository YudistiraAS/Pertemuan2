<?php //filename: mata_kuliah.php

// 1. koneksi
include("db.php");

// 2. query
$query = "SELECT * FROM mata_kuliah";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Mata Kuliah</h1>
<a href="template.php?page=form_mtkkuliah&action=add">Tambah Data</a>
<table border="1"> 
	<thead>
		<tr>
			<th>No.</th>
			<th>Kd.MataKuliah</th>
			<th>Nm.MataKuliah </th>
			<th>Action</th>
		</tr>
	<thead>
	<tbody>
	<?php
		while($row = mysqli_fetch_assoc($hasil)){
		?>
		<tr>
			<td><?php echo $row['id']; ?></td>
			<td><?php echo $row['kode_mtk']; ?></td>
			<td><?php echo $row['nama_mtk']; ?></td>
			<td>
		
				<a href="template.php?page=form_mtkkuliah&id=<?php echo $row['id'];
				?>&action=edit">Edit</a> |
				<a href="proses_matakuliah.php?action=delete&id=<?php echo $row['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>