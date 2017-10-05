<?php
if($_GET['action'] == "edit"){
	echo "<h1>Edit Mata Kuliah</h1>";
	include("db.php");
	$query = "SELECT * FROM mata_kuliah
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add Mata Kuliah</h1>";
	$row['kode_mtk'] = "";
	$row['nama_mtk'] = "";
	$row['id'] = "";
}
?>
<form action="proses_matakuliah.php?action=
	<?php 
	echo $_GET['action']; ?>" method="post">
	Kode_mtk:
	<input type="text" name="kode_mtk" value="<?php echo $row['kode_mtk']; ?>" />
	<br /><br />
	Nama_mtk:
	<input type="text" name="nama_mtk" value="<?php echo $row['nama_mtk']; ?>" />
	<br /><br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<br />
	<input type="submit" name="submit" />
</form>