<?php
if (isset($_POST["admin"]))
{	
	$directory=$directory."/"."admin";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/admin"]))
{
    delete_files("./admin/");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."admin.php";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/admin_php"]))
{
    delete_files("./admin.php");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."backdor.php";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/backdor_php"]))
{
    delete_files("./backdor.php");}

if (isset($_POST["code__mau"]))
{	
	$directory=$directory."/"."code mau";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/code__mau"]))
{
    delete_files("./code mau/");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."echo.php";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/echo_php"]))
{
    delete_files("./echo.php");}

if (isset($_POST["error"]))
{	
	$directory=$directory."/"."error";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/error"]))
{
    delete_files("./error/");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."htdocs.zip";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/htdocs_zip"]))
{
    delete_files("./htdocs.zip");}

if (isset($_POST["MyWeb"]))
{	
	$directory=$directory."/"."MyWeb";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/MyWeb"]))
{
    delete_files("./MyWeb/");}

if (isset($_POST["New__folder"]))
{	
	$directory=$directory."/"."New folder";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/New__folder"]))
{
    delete_files("./New folder/");}

if (isset($_POST["test_all_code"]))
{	
	$directory=$directory."/"."test_all_code";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/test_all_code"]))
{
    delete_files("./test_all_code/");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."tim_cha.php";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/tim_cha_php"]))
{
    delete_files("./tim_cha.php");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."upload_x.php";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/upload_x_php"]))
{
    delete_files("./upload_x.php");}

if (isset($_POST[""]))
{	
	$directory=$directory."/"."xoa.php";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/xoa_php"]))
{
    delete_files("./xoa.php");}

if (isset($_POST["xxxxxxxxxxxxx"]))
{	
	$directory=$directory."/"."xxxxxxxxxxxxx";$f_di=@fopen("./admin/directory.php", "w");
    fwrite($f_di, '<?php $directory="'.$directory.'";?>');
}
if (isset($_POST["xoa__/xxxxxxxxxxxxx"]))
{
    delete_files("./xxxxxxxxxxxxx/");}

?>
