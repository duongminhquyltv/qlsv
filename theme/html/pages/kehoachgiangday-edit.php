<?php 
	
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$ma_sv = '';
		if(isset($_POST['ho_ten'])){
			$hoten = $_POST['ho_ten'];
		}else{
			$hoten = '';
		}
		if(isset($_POST['old'])){
			$ngaysinh = $_POST['old'];
		}else{
			$ngaysinh = '';
		}
		if(isset($_POST['so_dien_thoai'])){
			$dienthoai = $_POST['so_dien_thoai'];
		}else{
			$dienthoai = '';
		}
		if(isset($_POST['sv_email'])){
			$email = $_POST['sv_email'];
		}else{
			$email = '';
		}
		if(isset($_POST['addr'])){
			$diachi = $_POST['addr'];
		}else{
			$diachi = '';
		}
		if(isset($_POST['noi_sinh'])){
			$noisinh = $_POST['noi_sinh'];
		}else{
			$noisinh = '';
		}
		if(isset($_POST['hokhau'])){
			$hokhau = $_POST['hokhau'];
		}else{
			$hokhau = '';
		}
		if(isset($_POST['que_quan'])){
			$quequan = $_POST['que_quan'];
		}else{
			$quequan = '';
		}
		if(isset($_POST['optionsRadios'])){
			$chedo = $_POST['optionsRadios'];
		}else{
			$chedo = '';
		}
		if(isset($_POST['ngayvaodoan'])){
			$ngayvaodoan = $_POST['ngayvaodoan'];
		}else{
			$ngayvaodoan = '';
		}
		if(isset($_POST['ngay_vao_dang'])){
			$ngayvaodang = $_POST['ngay_vao_dang'];
		}else{
			$ngayvaodang = '';
		}
		if(isset($_POST['noi_vao_dang'])){
			$noivao = $_POST['noi_vao_dang'];
		}else{
			$noivao = '';
		}
		if(isset($_POST['khenthuong'])){
			$khenthuong = $_POST['khenthuong'];
		}else{
			$khenthuong = '';
		}
		if(isset($_POST['ky_luat'])){
			$kyluat = $_POST['ky_luat'];
		}else{
			$kyluat = '';
		}
		if(isset($_POST['ngaybatdau'])){
			$ngaybatdau = $_POST['ngaybatdau'];
		}else{
			$ngaybatdau = '';
		}
		if(isset($_POST['ngayketthuc'])){
			$ngayketthuc = $_POST['ngayketthuc'];
		}else{
			$ngayketthuc = '';
		}
		$ngaycapnhat = date('Y-m-d H:i:s');
		$values = array(							
			'si_so' => $dienthoai,		
			'so_tiet' => $quequan, 			
			'ngay_bat_dau' => $ngaybatdau,		
			'id_gv' => $noivao, 	
		);
		$idsv = $_GET['id'];
		$query = $fluent->update('ke_hoach_giang_day')->set($values)->where('id_kh', $idsv);
		$query->execute();
		header("Location:http://localhost/qlsv/ke-hoach-giang-day/");
	}	
	if($_SERVER['REQUEST_METHOD'] === 'GET'){
		$idsv = $_GET['id'];	
		$query = $fluent->from('ke_hoach_giang_day')->where('id_kh = ?', $idsv);	
		foreach ($query as $sv) {		
?>
<form class="form-horizontal row-fluid" method="post">
				
		<div class="control-group" style="display: none;">
			<label class="control-label" for="ma_sinh_vien">Mã kế hoạch</label>
			<div class="controls">
				<input type="text" name="ma_sinh_vien" id="ma_sinh_vien" value="<?=$sv['id_kh'] ?>" class="span8" disabled="">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Giáo viên giảng dạy</label>
			<div class="controls">
				<select name="noi_vao_dang" tabindex="1" data-placeholder="Select here.." class="span8">
					<option value="">Select here..</option>
					<?php 
						$list_adr = $fluent->from('giao_vien')->fetchAll();
						foreach ($list_adr as $row) {
					?>
					<option value="<?=$row['id_gv'] ?>"  <?php if($row['id_gv'] == $sv['id_gv']) echo 'selected'; ?>><?=$row['hoten_gv']?></option>		
					<?php } ?>			
				</select>
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="so_dien_thoai">Sỉ số</label>
			<div class="controls">
				<input type="text" name="so_dien_thoai" id="so_dien_thoai" class="span8 tip" value="<?=$sv['si_so']; ?>">
			</div> 
		</div>		
		<div class="control-group">
			<label class="control-label" for="que_quan">Số tiết</label>
			<div class="controls">
				<input type="text" name="que_quan" id="que_quan" value="<?=$sv['so_tiet']; ?>" class="span8">			
			</div>
		</div>		
				
		
		<div class="control-group">
			<label class="control-label" for="ngaybatdau">Ngày bắt đầu</label>
			<div class="controls">
				<input type="date" name="ngaybatdau" value="<?=$sv['ngay_bat_dau']?>" class="span8 tip">
			</div>
		</div>		
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn-update btn btn-primary">Lưu lại</button>
			</div>
		</div>
		
			</form>
	<?php } } ?>
	