<div class="btn-controls">
	<div class="btn-box-row row-fluid btn-box">		
		<div class="pwd15">
			<a class="btn btn-mini btn-success pull-left" href="./mon-hoc-add.html">Thêm mới</a>
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
			Danh sách môn học</h3>
	</div>
	<div class="module-body table">
		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
			width="100%">
			<thead>
				<tr>
					<th>
						Mã môn
					</th>
					<th>
						Tên môn học
					</th>
					
					<th>
						Ngày cập nhật
					</th>						
					<th>
						Thao tác
					</th>					
				</tr>
			</thead>
			<tbody>
				<?php  
					$list_sv = $fluent->from('mon_hoc')->fetchAll();
					$sv_number = 1;
					foreach ($list_sv as $row) {
					$sv_number%2 == 0 ? $class = 'odd' : $class = 'even';
 				?>
				<tr class="<?=$class ?>">
					<td>
						<?=$row['id_mh']?>
					</td>
					<td>
						<?=$row['ten_mh']?>
					</td>
					<td>
						<?=$row['ngay_cap_nhat']?>
					</td>					
					<td class="control">
						<a class="btn btn-small btn-warning" title="Chỉnh sửa" href="./mon-hoc-edit-<?=$row['id_mh'] ?>.html"><i class="icon-edit"></i></a>
						<a class="btn btn-small btn-danger" title="Xoá" href="./mon-hoc-del-<?=$row['id_mh'] ?>.html"><i class="icon-remove-sign"></i></a>
					</td>
				</tr>		
				<?php $sv_number++; } ?>			
			</tbody> 
			<tfoot>
				<tr>
					<th>
						Mã môn
					</th>
					<th>
						Tên môn học
					</th>
					<th>
						Ngày cập nhật
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