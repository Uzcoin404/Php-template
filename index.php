<? include_once('./functions.php');

include_once('./components/header.php');

include_once('./components/aside.php');

if ($pages[$path]) {
    include_once("./page/$path.php");
}
else{
    include_once("./page/page404.php");
}     
include_once('./components/footer.php');
?>