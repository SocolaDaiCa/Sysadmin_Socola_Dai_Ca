
<?php 
	ini_set('upload_max_filesize', '1000M');
	ini_set('post_max_size', '1000M');
	ini_set('max_input_time',' 300000');
	ini_set('max_execution_time', '300000');
?>
<script>
    $(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
	$(document).on('change', '.file', function(){
		$(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});
</script>
    <div class="form-group">
        <input type="file" name="img[]" class="file">
        <div class="input-group col-xs-12">
            <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span> -->
            <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
            <span class="input-group-btn">
                <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
            </span>
        </div>
    </div>
<form action="" method="post" enctype="multipart/form-data">
	<p>Select File to upload:</p>
	<p>Host lởm nên up cái nào nhẹ nhẹ nhỏ hơn 10MB thôi nhé :))</p>
	<!-- 
			class="custom-file-input"
	-->
<!-- 	<div class="form-group">
    <input type="file" name="img[]" class="file">
    <div class="input-group col-xs-12">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
      <span class="input-group-btn">
        <button class="browse btn btn-primary input-lg" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
      </span>
    </div>
  </div> -->
	<!-- <span class="custom-file-control"></span> -->
    <input type="file" name="fileToUpload" class="form-control input-lg">
	


    <input type="submit" name="upload" value="Upload">
</form>
<?php
	if (isset($_POST['upload']))
	{
		$target_dir = $link;
		$target_file = $target_dir.'/'. basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if file already exists
		if (file_exists($target_file)) {
		    $erorr="File đã tồn tại.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0)
		{
		    $erorr="Sorry, your file was not uploaded.";
		}
		// if everything is ok, try to upload file
		else
		{
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
		    {
		        // $erorr="The file [ ". basename( $_FILES["fileToUpload"]["name"])." ] has been uploaded.";
		    } 
		    else
		    {
		        $erorr="Sorry, there was an error uploading your file.";
		    }
		}
	}
	?>