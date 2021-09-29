<? 
include_once('./functions.php');
if ($pages[$path] || $path == 'login' || $path == 'registration' || $path == 'uploader') {
    include_once('./components/header.php');
    include_once('./components/aside.php');
    include_once("./page/$path.php");
    include_once('./components/footer.php');
}
else{
    include_once("./page/page404.php");
}
?>