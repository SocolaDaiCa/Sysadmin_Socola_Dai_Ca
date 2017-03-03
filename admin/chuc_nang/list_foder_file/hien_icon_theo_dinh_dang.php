<?php 
function hien_icon_theo_dinh_dang($dinh_dang)
{
    $logo=null;
    $color=null; 
    // hiện icon
    switch ($dinh_dang)
    {
        case 'jpg':
        case 'png':
        case 'img':  $logo='glyphicon glyphicon-picture'; $color='Brown'; break;
        case 'mp4':  $logo='glyphicon glyphicon-film';    $color='';      break;
        case 'mp3':  $logo='glyphicon glyphicon-music';   $color='blue';  break;
        case 'rar':
        case 'zip':  $logo='glyphicon glyphicon-tasks';   $color='red';   break;
        case 'html':
        case 'php':  $logo='glyphicon glyphicon-globe';   $color='blue';  break;
        case 'css':  $logo='glyphicon glyphicon-cog';     $color='#555';  break;
        default:     $logo='glyphicon glyphicon-file';
    }
    echo('<span style="color:'.$color.'" class="'.$logo.'" aria-hidden="true"></span> ');
}
?>