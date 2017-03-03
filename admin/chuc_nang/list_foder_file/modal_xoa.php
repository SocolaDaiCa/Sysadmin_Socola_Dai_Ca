<?php 
function modal_xoa_body($path, $file)
{
	echo('<p>Mày có chắc muốn xóa ');
	if(is_dir($path))
		echo('thư mục ');
	else
		echo('File ');
	echo($file.'</p>');
}

function modal_xoa_footer($path)
{
	echo('<div class="btn-group">');
	echo('<form action="" method="post" enctype="multipart/form-data">');
	echo('	<input type="text" name="xoa" placeholder="" value="'.$path.'" hidden="">');
	echo('	<input type="submit" name="lenh_xoa" value="Xóa luôn" placeholder="" class="btn btn-primary"></form>');
	echo('</div>');
}
?>