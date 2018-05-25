<?php 
	
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		//Get value
		
		if(isset($_POST['ma_sinh_vien'])){
			$ma_sv = $_POST['ma_sinh_vien'];
		}else{
			$ma_sv = '';
		}
		if(isset($_POST['ho_ten'])){
			$hoten = $_POST['ho_ten'];
		}else{
			$hoten = '';
		}		
		if(isset($_POST['ngaybatdau'])){
			$ngaybatdau = $_POST['ngaybatdau'];
		}else{
			$ngaybatdau = '';
		}
		if(isset($_POST['khoahoc'])){
			$khoahoc = $_POST['khoahoc'];
		}else{
			$khoahoc = '';
		}
		if(isset($_POST['ngayketthuc'])){
			$ngayketthuc = $_POST['ngayketthuc'];
		}else{
			$ngayketthuc = '';
		}
		$ngaycapnhat = date('Y-m-d H:i:s');
		$values = array(
			'ma_lop' => $ma_sv, 
			'ten_lop' => $hoten,			
			'khoahoc' => $khoahoc,	
			'ngaynhaphoc' => $ngaybatdau,
			'ngaytotnghiep' => $ngayketthuc,
		);

		$idsv = $_GET['id'];
		$query = $fluent->update('lop')->set($values)->where('id_lop', $idsv);
		$query->execute();
		header("Location:http://localhost/qlsv/lop/");
	}	
	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$idsv = $_GET['id'];	
		$query = $fluent->from('lop')->where('id_lop = ?', $idsv);	
		foreach ($query as $sv) {		
?>
<form class="form-horizontal row-fluid" method="post">
				
		<div class="control-group">
			<label class="control-label" for="ma_sinh_vien">Mã giáo viên</label>
			<div class="controls">
				<input type="text" name="ma_sinh_vien" id="ma_sinh_vien" value="<?=$sv['ma_lop'] ?>" class="span8">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ho_ten">Họ và tên</label>
			<div class="controls">
				<input type="text" name="ho_ten" id="ho_ten" value="<?=$sv['ten_lop']?>" class="span8">
				<span class="help-inline">Ít nhất là 5 ký tự</span>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="ngaybatdau">Ngày nhập học</label>
			<div class="controls">
				<input type="date" name="ngaybatdau" value="<?=$sv['ngaynhaphoc']?>" class="span8 tip">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="khoahoc">Họ và tên</label>
			<div class="controls">
				<input type="text" name="khoahoc" id="khoahoc" value="<?=$sv['khoahoc']?>" class="span8">				
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ngayketthuc">Ngày tốt nghiệp</label>
			<div class="controls">
				<input type="date" name="ngayketthuc" value="<?=$sv['ngaytotnghiep']?>" class="span8 tip">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn-update btn btn-primary">Lưu lại</button>
			</div>
		</div>
		
			</form>
	<?php } } ?>
	