<?php
	include('../../resources/functions/servis/servis.php');
	$jenis = $_GET['jenis'];
	deleteServis($jenis);
	
	header('Location: lihat_servis.php');
?>