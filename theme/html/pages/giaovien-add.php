<?php 
	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		//Get value
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
			'ma_gv' => $ma_sv, 
			'hoten_gv' => $hoten,
			'ngaysinh_gv' => $ngaysinh, 
			'dienthoai' => $dienthoai,
			'email' => $email, 
			'diachi' => $diachi,
			'noisinh' => $noisinh, 
			'hokhau' => $hokhau,
			'quequan' => $quequan, 
			'gioitinh' => $chedo,
			'ngayvaodoan' => $ngayvaodoan,
			'ngayvaodang' => $ngayvaodang, 			
			'noivaodang' => $noivao, 
			'khenthuong' => $khenthuong,
			'kyluat' => $kyluat,
			'ngaybatdau' => $ngaybatdau,
			'ngayketthuc' => $ngayketthuc,
		);

		//insert
		$query = $fluent->insertInto('giao_vien', $values);
		$lastInsert = $query->execute();	
		header("Location:http://localhost/qlsv/giao-vien/");		
	}
?>
<form class="form-horizontal row-fluid" method="post">
				
		<div class="control-group" style="display: none;">
			<label class="control-label" for="ma_sinh_vien">Mã giáo viên</label>
			<div class="controls">
				<input type="text" name="ma_sinh_vien" id="ma_sinh_vien" class="span8" disabled="">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ho_ten">Họ và tên</label>
			<div class="controls">
				<input type="text" name="ho_ten" id="ho_ten" class="span8">
				<span class="help-inline">Ít nhất là 5 ký tự</span>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ngay_sinh">Ngày sinh</label>
			<div class="controls">
				<input type="date" name="old" class="span8 tip" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Giới tính</label>
			<div class="controls">
				
				<label class="radio inline">
					<input type="radio" name="optionsRadios" id="optionsRadios1" value="0" >
					Nam
				</label> 
				<label class="radio inline">
					<input type="radio" name="optionsRadios" id="optionsRadios2" value="1" >
					Nử
				</label> 				
				</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="so_dien_thoai">Điện thoại</label>
			<div class="controls">
				<input type="text" name="so_dien_thoai" id="so_dien_thoai" class="span8 tip">
			</div> 
		</div>
		<div class="control-group">
			<label class="control-label" for="sv_email">Email</label>
			<div class="controls">
				<input type="text" name="sv_email" id="sv_email" class="span8 tip" >
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="dia_chi">Địa chỉ</label>
			<div class="controls">
				<textarea class="span8" name="addr" rows="5"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="noi_sinh">Nơi sinh</label>
			<div class="controls">
				<input type="text" name="noi_sinh" id="noi_sinh" class="span8">			
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ho_khau">Hộ khẩu</label>
			<div class="controls">
				<textarea class="span8" name="hokhau" rows="5"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="que_quan">Quê quán</label>
			<div class="controls">
				<input type="text" name="que_quan" id="que_quan" class="span8">			
			</div>
		</div>		
		<div class="control-group">
			<label class="control-label" for="ngay_vao_doan">Ngày vào đoàn</label>
			<div class="controls">
				<input type="date" name="ngayvaodoan"  class="span8 tip">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ngay_vao_dang">Ngày vào đảng</label>
			<div class="controls">
				<input type="date" name="ngay_vao_dang"  class="span8 tip">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Nơi vào đảng</label>
			<div class="controls">
				<select name="noi_vao_dang" tabindex="1" data-placeholder="Select here.." class="span8">
					<option value="">Select here..</option>
					<?php 
						$list_adr = $fluent->from('address')->fetchAll();
						foreach ($list_adr as $row) {
					?>
					<option value="<?=$row['id'] ?>" ><?=$row['name']?></option>		
					<?php } ?>			
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="khen_thuong">Khen thưởng</label>
			<div class="controls">
				<textarea class="span8" name="khenthuong" rows="5"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ky_luat">Kỹ luật</label>
			<div class="controls">
				<textarea class="span8" name="ky_luat" rows="5"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="basicinput">Bộ môn</label>
			<div class="controls">
				<select name="bo_mon" tabindex="1" data-placeholder="Select here.." class="span8">
					<option value="">Select here..</option>
					<?php 
						$list_adr = $fluent->from('mon_hoc')->fetchAll();
						foreach ($list_adr as $row) {
					?>
					<option value="<?=$row['id_mh'] ?>" ><?=$row['ten_mh']?></option>		
					<?php } ?>			
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="bang_cap">Bằng cấp</label>
			<div class="controls">
				<input type="text" name="bang_cap" id="bang_cap" class="span8">				
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ngaybatdau">Ngày bắt đầu</label>
			<div class="controls">
				<input type="date" name="ngaybatdau"  class="span8 tip">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ngayketthuc">Ngày kết thúc</label>
			<div class="controls">
				<input type="date" name="ngayketthuc"  class="span8 tip">
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button type="submit" class="btn-update btn btn-primary">Lưu lại</button>
			</div>
		</div>
		
			</form>