<?php
	$nut_he_thong=$arrayName = array(
	'upload' => 'Upload',
	'unzip' => 'Unzip',
	'new_dir' => 'New dir',
	'new_file' => 'New file',
	);
?>
<!-- danh sách chức năng của các nút -->
<?php foreach ($nut_he_thong as $key => $name){ ?>
	<div class="modal fade" id="myModal_<?php echo $key;?>" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">
						<?php echo $name;?>
					</h4>
				</div>
				<div class="modal-body">
					<?php include_once './chuc_nang/menu_bar/'.$key.'.php'; ?>
				</div>
				<div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Đóng! Em nhấn nhầm thôi :))</button></div>
			</div>
		</div>
	</div>
<?php } ?>
<!-- Danh sách các nút hệ thống -->
	<div class="btn-group">
		<?php foreach ($nut_he_thong as $key => $name){ ?>
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal_<?php echo $key; ?>"><?php echo$name;?></button>
		<?php } ?>
	</div>
