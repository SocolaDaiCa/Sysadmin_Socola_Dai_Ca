<?php
    function hien_dung_luong($path='')
    {
        $size=' KiB';
        $dung_luong=lay_dung_luong($path);
        if($dung_luong>=8)
        {
            $dung_luong=$dung_luong/8;
            $size='B';
        }

        if($dung_luong>=128)
        {
            $dung_luong=$dung_luong/128;
            $size='KB';
        }

        if($dung_luong>=1024)
        {
            $dung_luong=$dung_luong/1024;
            $size='MB';
        }

        if($dung_luong>=1024)
        {
            $dung_luong=$dung_luong/1024;
            $size='GB';
        }
        return round($dung_luong,2).' '.$size;
    }
    function lay_dung_luong($path='')
    {
        $dung_luong=0;
        if(is_dir($path))// nếu $path là 1 foder
        {
            if ($handle = opendir($path)) // lấy danh sách các file, foder có trong path
            {
                while (false !== ($file = readdir($handle)))
                {
                    if ($file != '.' && $file != '..')
                    {
                        if(is_dir($path.'/'.$file.'/'))// nếu $path/$file là 1 foder
                        {
                            $dung_luong=$dung_luong+lay_dung_luong($path.'/'.$file);
                        }
                        else // nếu $path/$file là 1 file
                            $dung_luong=$dung_luong+filesize($path.'/'.$file);
                    }
                }
            }
            // nếu trong $path rỗng thì thôi
        }
        else // nếu $path là 1 file 
        {
            $dung_luong=$dung_luong+filesize($path);
        }
        return $dung_luong;
    }
?>