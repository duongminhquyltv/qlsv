 <?php
	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$idgv = $_GET['id'];	
		$query = $fluent->deleteFrom('giao_vien')
			->where('id_gv', $idgv);
		//header("Location:http://localhost/qlsv/giao-vien/");
	}
 ?>   