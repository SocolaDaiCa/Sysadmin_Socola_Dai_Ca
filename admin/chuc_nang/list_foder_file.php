<!-- include -->
<?php include_once './chuc_nang/list_foder_file/hien_dung_luong.php'; ?>
<?php include_once './chuc_nang/list_foder_file/hien_icon_theo_dinh_dang.php'; ?>
<?php include_once './chuc_nang/list_foder_file/delete_file_or_foder.php'; ?>
<?php include_once './chuc_nang/list_foder_file/rename.php'; ?>
<?php include_once './chuc_nang/modal.php'; ?>
<?php include_once './chuc_nang/list_foder_file/modal_xoa.php'; ?>
<?php include_once './chuc_nang/list_foder_file/modal_rename.php'; ?>
    <table class="table table-hover">
    <thead>
        <tr>
            <th width="1px">Check</th>
            <th>Name</th>
            <th width="92px">Size</th>
            <th width="1px">View</th>
            <th width="1px">Delete</th>
            <th width="1px">Rename</th>
            <th width="1px">Download</th>
        </tr>
    </thead>
    <fiv class="neo">
    <tbody>
    <?php
        $directory=$link;
    	if ($directory != '.')
            $directory = rtrim($directory, '/') . '/';
        else
            $directory = './';
        if ($handle = opendir($directory))
        {
            while (false !== ($file = readdir($handle)))
            {
                if ($file != '.' && $file != '..')
                {
                    $path=$directory.$file;
                    $dinh_dang=array_pop( explode('.', $file));/*lấy định dạng file*/
                    /*nếu đây là thư mục admin thì ẩn nó đi*/
                    $tg=explode('/', str_replace( $root, '', $path ));
                    if($tg[0]=='admin')
                        continue;
                    echo('<tr>');
                    echo('  <td>&nbsp; &nbsp; <input type="checkbox" value=""></td>');
                    echo('<td>');
                    if(is_dir($path))// dẫn link foder nếu nó là 1 foder
                    {
                        echo('<span style="color:orange"class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> ');
                        echo('<a href="./?link='.str_replace( $root, '', $path ).'">'.$file.'</a>');
                    }
                    else // nếu nó là 1 file
                    {
                        hien_icon_theo_dinh_dang($dinh_dang);
                        echo($file);
                    }
                    echo('</td>');
                    echo('<td>'.  hien_dung_luong($path).'</td>'."\n");
                    echo('<td>');   view($link, $file, $dinh_dang); echo('</td>');
                    $modal_link=md5($file);// modal_link k đc phép chứa các kí tự đặc biệt
                    echo('<td>');   modal($modal_link, $modal_xoa, $path, $file);   echo('</td>');
                    echo('<td>');   modal($modal_link, $modal_rename, $path, $file);echo('</td>');
                    echo('<td>');   dowload($link, $file, $dinh_dang);  echo('</td>');
                    echo('</tr>');
                }
            }
            closedir($handle);
        }
    ?>
    </tbody>
    </fiv>
    </table> 
<?php 
function view($link, $file, $dinh_dang)
{
    $echo="";
    switch ($dinh_dang) {
        case 'mp4':
        echo'<a href="'.$link.'/'.$file.'" target="blank"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>';    break;
        case 'mp3':
            echo'<span class="glyphicon glyphicon-headphones" aria-hidden="true">';break;
        case 'html':
        case 'php':
            echo'<a href="'.$link.'/'.$file.'" target="blank"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></a>';break;    
        default:
    }
}
function dowload($link, $file, $dinh_dang)
{
    
    switch ($dinh_dang) {
        case 'zip':
        case 'mp3':
            echo('<a href="'.$link.'/'.$file.'"><button type="" class="btn btn-link"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></button></a>');
            break;
            echo('<button type="" class="btn btn-link"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></button>');
        default:
    }
}
 ?>