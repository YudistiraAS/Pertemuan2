<?php //filename: proses_matakuliah.php

include("db.php");

if($_GET['action'] == "add") {
	// 2. Query
	$query = "INSERT INTO mata_kuliah (kode_mtk, nama_mtk)
			  VALUES('$_POST[kode_mtk]', '$_POST[nama_mtk]')";			 

	} else if($_GET['action'] == "edit") {
	// 2. Query
	$query = "UPDATE mata_kuliah
			  SET kode_mtk = '$_POST[kode_mtk]',
				  nama_mtk = '$_POST[nama_mtk]'
				  WHERE id = $_POST[id]";
	}
	else if($_GET['action'] == "delete"){
		$query = "DELETE FROM mata_kuliah
				  WHERE id=$_GET[id]";
	}
	
	mysqli_query($koneksi, $query);
	
	// REDIRECT ke template.php
	header ('Location: template.php?page=mata_kuliah');