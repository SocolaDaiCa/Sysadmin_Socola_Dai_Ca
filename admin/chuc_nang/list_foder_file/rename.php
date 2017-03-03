<?php
    if (isset($_POST["lenh_rename"]))
    {
        $old_name=$_POST["old_name"];
        $new_name=$_POST["new_name"];
        $path_tg=$_POST["path_tg"];
        if(file_exists($path_tg))
            rename($path_tg, str_replace($old_name, $new_name, $path_tg));
    }
?>