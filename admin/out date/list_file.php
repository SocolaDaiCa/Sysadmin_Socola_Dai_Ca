<?php
$text='$f_di=@fopen("./admin/directory.php", "w");'."
    fwrite(".'$f_di'.", '<?php"." $"."directory=".'"'."'.$"."directory.'".'";'."?>');";

	$left='<input type="submit" name="';
	$center='" value="';
	$right='"><br>';
	
	if ($directory != '.')
        $directory = rtrim($directory, '/') . '/';
    else
        $directory = './';


    if ($handle = opendir($directory))
    {
    	// mo file de ghi
    	$fp = @fopen($data, "w");
    	fwrite($fp, "<?php"."\n");
        while (false !== ($file = readdir($handle)))
        {
            $file_post_name="";
            if ($file != '.' && $file != '..')
            {
            	if(is_dir($directory.'/'.$file))
                {
                    $file_post_name=str_replace('.', '_', $file);
                    $file_post_name=str_replace(' ', '__', $file_post_name);
                    $file_post_name=str_replace('[', '___', $file_post_name);
 					echo '<tr><td><input type="submit" name="'.$file_post_name.'" value="'.$file.'"></td>';
                }
 				else
 					echo(''.$file.'');


 				$name_link= str_replace('.', '_', $directory.$file);
                $name_link= str_replace(' ', '__', $name_link);
                $name_link= str_replace('[', '___', $name_link);

 				echo '<td><input type="submit" name="xoa_'.$name_link.'" value="Xóa"></td></tr>'."\n";
 				// lệnh chuyển link
 				
 				fwrite($fp, 'if (isset($_POST["'.$file_post_name.'"]))
{	
	$directory=$directory."/"."'.$file.'";'.$text.
	"\n".'}'."\n");
 				// lệnh xóa
                if(is_dir($directory.'/'.$file))
                {
                    fwrite($fp, 'if (isset($_POST["xoa_'.$name_link.'"]))
{
    delete_files("'.$directory.$file.'/");}
'."\n");
                }
                else
                {
                    fwrite($fp, 'if (isset($_POST["xoa_'.$name_link.'"]))
{
    delete_files("'.$directory.$file.'");}
'."\n");
                }
            }
        }
        fwrite($fp, "?>\n");
        closedir($handle);
    }
?>