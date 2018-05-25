<div class="btn-controls">
	<div class="btn-box-row row-fluid btn-box">		
		<div class="pwd15">
			<a class="btn btn-mini btn-success pull-left" href="./giao-vien-add.html">Thêm mới</a>
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
			Danh sách giáo viên</h3>
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
						Thao tác
					</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					$list_sv = $fluent->from('giao_vien')->fetchAll();
					$sv_number = 1;
					foreach ($list_sv as $row) {
					$sv_number%2 == 0 ? $class = 'odd' : $class = 'even';
 				?>
				<tr class="<?=$class ?>">
					<td style="display: none;">
						<?=$row['ma_sv']?>
					</td>
					<td>
						<?=$row['hoten_gv']?>
					</td>
					<td>
						<?=$row['ngaysinh_gv']?>
					</td>
					<td class="center">
						<?=$row['dienthoai']?>
					</td>
					<td class="center">
						<?=$row['email']?>
					</td>
					<td class="control">
						<a class="btn btn-small btn-warning" title="Chỉnh sửa" href="./giao-vien-edit-<?=$row['id_gv'] ?>.html"><i class="icon-edit"></i></a>
						<a class="btn btn-small btn-danger" title="Xoá" href="./giao-vien-del-<?=$row['id_gv'] ?>.html"><i class="icon-remove-sign"></i></a>
					</td>
				</tr>		
				<?php $sv_number++; } ?>			
			</tbody> 
			<tfoot>
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
						Thao tác
					</th>
				</tr>
			</tfoot>
		</table>
	</div>
</div>
<!--/.module-->