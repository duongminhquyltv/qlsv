<div class="btn-controls">
	<div class="btn-box-row row-fluid btn-box">		
		<div class="pwd15">
			<a class="btn btn-mini btn-success pull-left" href="./ke-hoach-giang-day-add.html">Thêm mới</a>
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
			Danh sách kế hoạch giảng dạy</h3>
	</div>
	<div class="module-body table">
		<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
			width="100%">
			<thead>
				<tr>
					<th>
						Mã kế hoạch
					</th>
					<th>
						Giáo viên dạy
					</th>
					<th>
						Sỉ số
					</th>
					<th>
						Số tiết
					</th>
					<th>
						Ngày bắt đầu
					</th>	
					<th>
						Thao tác
					</th>
				</tr>
			</thead>
			<tbody>
				<?php  
					$query = $fluent->from('ke_hoach_giang_day')
						->select('id_kh,si_so,so_tiet,ngay_bat_dau,hoten_gv')
						->leftJoin('giao_vien ON giao_vien.id_gv = ke_hoach_giang_day.id_gv')
						->orderBy('ke_hoach_giang_day.id_gv');
					$sv_number = 1;
					foreach ($query as $row) {
					$sv_number%2 == 0 ? $class = 'odd' : $class = 'even';
 				?>
				<tr class="<?=$class ?>">
					<td >
						<?=$row['id_kh']?>
					</td>
					<td class="center">
						<?=$row['hoten_gv']?>
					</td>
					<td>
						<?=$row['si_so']?>
					</td>
					<td>
						<?=$row['so_tiet']?>
					</td>
					<td class="center">
						<?=$row['ngay_bat_dau']?>
					</td>					
					<td class="control">
						<a class="btn btn-small btn-warning" title="Chỉnh sửa" href="./ke-hoach-giang-day-edit-<?=$row['id_gv'] ?>.html"><i class="icon-edit"></i></a>
						<a class="btn btn-small btn-danger" title="Xoá" href="./ke-hoach-giang-day-del-<?=$row['id_gv'] ?>.html"><i class="icon-remove-sign"></i></a>
					</td>
				</tr>		
				<?php $sv_number++; } ?>			
			</tbody> 
			<tfoot>
				<tr>
					<th>
						Mã kế hoạch
					</th>
					<th>
						Giáo viên dạy
					</th>
					<th>
						Sỉ số
					</th>
					<th>
						Số tiết
					</th>
					<th>
						Ngày bắt đầu
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