<?php
/* 
 * php delete function that deals with directories recursively
 */
function delete_files($target="")
{
    if(is_dir($target))
    {
        $files = glob( $target . '*', GLOB_MARK ); //GLOB_MARK adds a slash to directories returned
        foreach( $files as $file )
        {
            delete_files( $file );      
        }
        if(is_dir($target))
            rmdir($target);
    }
    else
    if(is_file($target))
    {
        unlink( $target );  
    }
}
?>
<!-- lệnh xóa file -->
<?php
    if (isset($_POST["lenh_xoa"]))
    {
        $file_name=$_POST["xoa"];
        delete_files($file_name);
    }
?>