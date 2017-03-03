<ol class="breadcrumb">
    <!-- <li class="active">Vacation</li> -->        
<?php
	echo '<li><a href="./" title="Root">Root</a>';
	$mang=explode ( '/' , $link);
	$duong_dan="";
	foreach ($mang as $value)
	{
		if($value.'/'!=$root && $value!='')
		{
			if($duong_dan!='')
				$duong_dan=$duong_dan.'/';
			$duong_dan=$duong_dan.$value;
			echo '<li><a href="?link='.$duong_dan.'">'.$value.'</a></li>';
		}
	}
?>
</ol>