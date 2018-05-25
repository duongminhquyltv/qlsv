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
		if(isset($_POST['lop'])){
			$id_lop = $_POST['lop'];
		}else{
			$id_lop = '';
		}
		$ngaycapnhat = date('Y-m-d H:i:s');
		$values = array(
			'ma_sv' => $ma_sv, 
			'hoten_sv' => $hoten,
			'ngaysinh_sv' => $ngaysinh, 
			'dienthoai_sv' => $dienthoai,
			'email_sv' => $email, 
			'diachi_sv' => $diachi,
			'noisinh_sv' => $noisinh, 
			'hokhau_sv' => $hokhau,
			'quequan_sv' => $quequan, 
			'chedo_sv' => $chedo,
			'ngayvaodoan_sv' => $ngayvaodoan,
			'ngayvaodang_sv' => $ngayvaodang, 			
			'noivaodang' => $noivao, 
			'khenthuong' => $khenthuong,
			'kyluat' => $kyluat,
			'ngaycapnhat' => $ngaycapnhat,
			'id_lop' => $id_lop
		);

		//insert
		$query = $fluent->insertInto('sinh_vien', $values);
		$lastInsert = $query->execute();	
		header("Location:http://localhost/qlsv/sinh-vien");		
	}
?>
<form class="form-horizontal row-fluid" method="post">
				
	<div class="control-group">
		<label class="control-label" for="ma_sinh_vien">Mã sinh viên</label>
		<div class="controls">
			<input type="text" name="ma_sinh_vien" id="ma_sinh_vien" placeholder="Bạn không thể thay đổi mã sinh viên..." class="span8" disabled="">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="ho_ten">Họ và tên</label>
		<div class="controls">
			<input type="text" name="ho_ten" id="ho_ten" placeholder="Nhập họ tên ở đây..." class="span8">
			<span class="help-inline">Ít nhất là 5 ký tự</span>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="ngay_sinh">Ngày sinh</label>
		<div class="controls">
			<input type="date" name="old" class="span8 tip">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="so_dien_thoai">Điện thoại</label>
		<div class="controls">
			<input type="text" name="so_dien_thoai" id="so_dien_thoai" placeholder="Nhập số điện thoại..." class="span8 tip">
		</div> 
	</div>
	<div class="control-group">
		<label class="control-label" for="sv_email">Email</label>
		<div class="controls">
			<input type="text" name="sv_email" id="sv_email" placeholder="Nhập số email..." class="span8 tip" >
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
			<input type="text" name="noi_sinh" id="noi_sinh" placeholder="Nơi sinh..." class="span8">			
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
			<input type="text" name="que_quan" id="que_quan" placeholder="Quê quán..." class="span8">			
		</div>
	</div>
	<div class="control-group">
		<label class="control-label">Chế độ</label>
		<div class="controls">
			<label class="radio inline">
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
				Option one
			</label> 
			<label class="radio inline">
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				Option two
			</label> 
			<label class="radio inline">
				<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
				Option three
			</label>
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="ngay_vao_doan">Ngày vào đoàn</label>
		<div class="controls">
			<input type="date" name="ngayvaodoan" class="span8 tip">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="ngay_vao_dang">Ngày vào đảng</label>
		<div class="controls">
			<input type="date" name="ngay_vao_dang" class="span8 tip">
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
					<option value="<?=$row['id'] ?>"><?=$row['name']?></option>		
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
		<label class="control-label" for="basicinput">Lớp</label>
		<div class="controls">
			<select name="lop" tabindex="1" data-placeholder="Select here.." class="span8">
				<option value="">Select here..</option>
				<?php 
						$list_lop = $fluent->from('lop')->fetchAll();
						foreach ($list_lop as $row) {
					?>
					<option value="<?=$row['id_lop'] ?>"><?=$row['ten_lop']?></option>		
					<?php } ?>	
			</select>
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-primary">Lưu lại</button>
		</div>
	</div>
	
</form>