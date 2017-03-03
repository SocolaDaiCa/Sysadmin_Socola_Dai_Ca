<form action="" method="post" enctype="multipart/form-data">
	<div class="input-group">
		<span class="input-group-addon">Name</span>
		<input id="msg" type="text" class="form-control" name="new_dir" placeholder="New foder">
	</div>
</form>
<?php
	if (isset($_POST["new_dir"]))
	{
		$foder_name=$_POST["new_dir"];
		$foder_name=to_ascii($foder_name);
		 $foder_name= $foder_name;
		if(is_dir($link.'/'.$foder_name))
		{
			$erorr='Foder đã tồn tại';
		}
		else
		{
			mkdir($link.'/'.$foder_name);
		}
	}
?>