<?php 
	$modal_xoa = array(
		'type' => 'xoa',
		'header' => 'Xóa',
		'icon' => 'glyphicon glyphicon-trash',
		'icon_color' => '#555',
		'button_type' => 'btn btn-link',
		'button_name' => ''
		);
?>
<?php 
	$modal_rename = array(
		'type' => 'rename',
		'header' => 'Đổi tên',
		'icon' => 'glyphicon glyphicon-pencil',
		'icon_color' => '#555',
		'button_type' => 'btn btn-link',
		'button_name' => ''
		);
?>
<?php
function modal($modal_name, $modal, $path='', $file='')
{
	echo('<!-- hiện button -->'."\n");
	echo('	<button type="button" class="'.$modal['button_type'].'" data-toggle="modal" data-target="#myModal_'.$modal['type'].'_'.$modal_name.'">'."\n");
	echo('<!-- hiện icon button -->'."\n");
	echo('		<span style="color:'.$modal['icon_color'].'" class="'.$modal['icon'].'" aria-hidden="true"></span>'."\n");
	echo('	'.$modal['button_name'].'</button>'."\n");
	echo('<!-- hiện modal -->'."\n");
	echo('<div id="myModal_'.$modal['type'].'_'.$modal_name.'" class="modal fade" role="dialog">'."\n");
	echo('	<div class="modal-dialog">'."\n");
	echo('	<!-- Modal content-->'."\n");
	echo('		<div class="modal-content">'."\n");
	echo('			<div class="modal-header">'."\n");
	echo('				<button type="button" class="close" data-dismiss="modal">&times;</button>'."\n");
	echo('				<h4 class="modal-title">'.$modal['header'].'</h4>'."\n");
	switch ($modal['type']) {
		case 'rename':	modal_rename_header();break;
		default:
	}
	echo('			</div>'."\n");
	echo('			<div class="modal-body">'."\n");
	switch ($modal['type']) {
		case 'xoa':		modal_xoa_body($path, $file);break;
		case 'rename':	modal_rename_body($path, $file);break;
		default:	echo('Tính năng này không tồn tại') ;
	}
	echo('			</div>'."\n");
	echo('		<div class="modal-footer">'."\n");
	switch ($modal['type']) {
		case 'xoa':		modal_xoa_footer($path);break;
		case 'rename':	modal_rename_footer($path);break;
		default:
	}
	echo('			<button type="button" class="btn btn-default" data-dismiss="modal">Đóng! Em nhấn nhầm :))</button>'."\n");
	echo('			</div>'."\n");
	echo('		</div>'."\n");
	echo('	</div>'."\n");
	echo('</div>'."\n");
}
?>