 <?php 
	
	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$idsv = $_GET['id'];	
		$query = $fluent->deleteFrom('sinh_vien')
			->where('id_sv', $idsv);
		header("Location:http://localhost/qlsv/sinh-vien");
	}
 ?>