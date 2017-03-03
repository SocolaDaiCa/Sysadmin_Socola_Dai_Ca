<?php 
echo('');
function modal_rename_header()
{
	echo('<form action="" method="post" enctype="text">');

}
function modal_rename_body($path, $file)
{
	echo('<p>Mày có chắc muốn đổi tên</p>'."\n");
	echo('	<div class="input-group">');
	echo('		<span class="input-group-addon">'.$file.'</span>');
	echo('		<input type="text" name="old_name" placeholder="" value="'.$file.'" hidden="">');
	echo('		<input type="text" name="path_tg" placeholder="" value="'.$path.'" hidden="">');
	echo('		<input id="msg" type="text" class="form-control" name="new_name" placeholder="New name">');
	echo('	</div>');
	
}

function modal_rename_footer($path)
{
	echo('<input type="submit" name="lenh_rename" value="Đổi luôn" placeholder="" class="btn btn-primary">');
	echo('</form>');
}
?>