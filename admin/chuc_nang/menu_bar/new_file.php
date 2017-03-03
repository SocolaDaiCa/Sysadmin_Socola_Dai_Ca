<form action="" method="post" enctype="multipart/form-data">
	<div class="input-group">
		<span class="input-group-addon">Name</span>
		<input id="msg" type="text" class="form-control" name="new_file" placeholder="New file">
	</div>
</form>

<?php
	if (isset($_POST["new_file"]))
	{
		$file_name=$_POST["new_file"];
		if(file_exists($link.'/'.$file_name))
		{
			$erorr='File đã tồn tại';
		}
		else
		{
			$fp = @fopen($link.'/'.$file_name, "w");
			fclose($fp);
		}
	}
?>