<div class="btn-controls">
	<div class="btn-box-row row-fluid btn-box">		
		<div class="pwd15">
			<a class="btn btn-mini btn-success pull-left" href="./sinh-vien-add.html">Thêm mới</a>
			<a class="btn btn-mini btn-success pull-right">Export XML</a>
		</div>
	</div>
</div>

<!-- Thêm mới -->
<div id="addNews" class="modal fade" role="dialog">
  	
</div>



<div class="module">
	<div class="module-head">
		<h3>
			Danh sách sinh viên</h3>
	</div>
	<div class="module-body table">
		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
			width="100%">
			<thead>
				<tr>
					<th style="display: none;">
						Mã sinh viên
					</th>
					<th>
						Họ và tên
					</th>
					<th>
						Ngày sinh
					</th>
					<th>
						Điện thoại
					</th>
					<th>
						Email
					</th>	
					<th>
						Lớp
					</th>	
					<th>
						Thao tác
					</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$list_sv = $fluent->from('sinh_vien')
							->select('ma_sv,hoten_sv,ngaysinh_sv,dienthoai_sv,email_sv,ten_lop')
							->leftJoin('lop ON lop.id_lop = sinh_vien.id_lop')
							->orderBy('sinh_vien.id_sv');
					$sv_number = 1;
					foreach ($list_sv as $row) {
					$sv_number%2 == 0 ? $class = 'odd' : $class = 'even';
 				?>
				<tr class="<?=$class ?>">
					<td  style="display: none;">
						<?=$row['ma_sv']?>
					</td>
					<td>
						<?=$row['hoten_sv']?>
					</td>
					<td>
						<?=$row['ngaysinh_sv']?>
					</td>
					<td class="center">
						<?=$row['dienthoai_sv']?>
					</td>
					<td class="center">
						<?=$row['email_sv']?>
					</td>
					<td class="center">
						<?=$row['ten_lop']?>
					</td>
					<td class="control">
						<a class="btn btn-small btn-warning" title="Chỉnh sửa" href="./sinh-vien-edit-<?=$row['id_sv'] ?>.html"><i class="icon-edit"></i></a>
						<a class="btn btn-small btn-danger" title="Xoá" href="./sinh-vien-del-<?=$row['id_sv'] ?>.html"><i class="icon-remove-sign"></i></a>
					</td>
				</tr>		
				<?php $sv_number++; } ?>			
			</tbody> 
			<tfoot>
				<tr>
					<th  style="display: none;">
						Mã sinh viên
					</th>
					<th>
						Họ và tên
					</th>
					<th>
						Ngày sinh
					</th>
					<th>
						Điện thoại
					</th>
					<th>
						Email
					</th>
					<th>
						Lớp
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<!--/.module-->