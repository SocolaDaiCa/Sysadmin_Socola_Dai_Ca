<form action="" method="post" enctype="multipart/form-data">
    Select File to upload:<br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br>
    <input type="submit" name="submit" value="Upload">
</form>
	
	<?php
		echo '<font color="red">';
		if (isset($_POST['submit']))
		{
			echo('<font color="red">');
			$target_dir = $directory;
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo "Sorry, file already exists.";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0)
			{
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			}
			else
			{
			    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			    {
			        echo "The file [ ". basename( $_FILES["fileToUpload"]["name"])." ] has been uploaded.";
			        echo ('<br> Reload để thấy file');
			    } 
			    else
			    {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
			echo('</font>');
		}
	?>