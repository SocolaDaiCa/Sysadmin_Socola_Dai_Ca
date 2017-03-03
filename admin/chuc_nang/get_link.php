<?php 
	$root='../';
	$link=$root;
	$get=null;
	if (isset($_GET["link"]))
	{
		$get = $_GET["link"];
		$get = str_replace( '../', '', $get );
		$get = str_replace( './', '', $get );
		if(is_dir($root.$get)==false) /*nếu đường dẫn k phải là 1 foder thì quay lại trang admin*/
		{
			echo('<meta http-equiv=refresh content="0; URL=./">');
			exit();
		}
		else
		{
			$mang=explode('/', $get);
			if($mang[0]=='admin')
			{

				echo('<meta http-equiv=refresh content="0; URL=./">');
				exit();
			}
		}
		
		$link=$root.$get; /*nếu mọi thứ đều ồn*/
	}
?>