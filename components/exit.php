<?
    ob_start();
    session_start();
    session_destroy();
    header("Location: ../?route=main");
    ob_end_flush();
?>