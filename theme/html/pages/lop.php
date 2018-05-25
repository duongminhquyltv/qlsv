<div class="btn-controls">
	<div class="btn-box-row row-fluid btn-box">		
		<div class="pwd15">
			<a class="btn btn-mini btn-success pull-left" href="./lop-add.html">Thêm mới</a>
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
			Danh sách lớp</h3>
	</div>
	<div class="module-body table">
		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
			width="100%">
			<thead>
				<tr>
					<th>
						Mã lớp
					</th>
					<th>
						Tên lớp
					</th>
					<th>
						Ngày nhập học
					</th>
					<th>
						Niên khoá
					</th>
					<th>
						Ngày tốt nghiệp
					</th>	
					<th>
						Thao tác
					</th>					
				</tr>
			</thead>
			<tbody>
				<?php  
					$list_sv = $fluent->from('lop')->fetchAll();
					$sv_number = 1;
					foreach ($list_sv as $row) {
					$sv_number%2 == 0 ? $class = 'odd' : $class = 'even';
 				?>
				<tr class="<?=$class ?>">
					<td>
						<?=$row['ma_lop']?>
					</td>
					<td>
						<?=$row['ten_lop']?>
					</td>
					<td>
						<?=$row['ngaynhaphoc']?>
					</td>
					<td>
						<?=$row['khoahoc']?>
					</td>
					<td>
						<?=$row['ngaytotnghiep']?>
					</td>
					<td class="control">
						<a class="btn btn-small btn-warning" title="Chỉnh sửa" href="./lop-edit-<?=$row['id_lop'] ?>.html"><i class="icon-edit"></i></a>
						<a class="btn btn-small btn-danger" title="Xoá" href="./lop-del-<?=$row['id_lop'] ?>.html"><i class="icon-remove-sign"></i></a>
					</td>
				</tr>		
				<?php $sv_number++; } ?>			
			</tbody> 
			<tfoot>
				<tr>
					<th>
						Mã lớp
					</th>
					<th>
						Tên lớp
					</th>
					<th>
						Ngày nhập học
					</th>
					<th>
						Ngày tốt nghiệp
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