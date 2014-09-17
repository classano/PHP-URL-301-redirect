<?php
/*
    List all old pages and new pages.
    The old pages in the left as array key and the new pages in the right as array value.
*/
$urlRedirection = array(
    '/oldpage1.html'    => '/newpage1/',
    '/oldpage2.aspx'    => '/newpage2/',
    '/oldpage3.asp'     => '/newpage3/',
    '/oldpage4'         => '/newpage4/'
);
/*
    Use the PHP function array_key_exists to search for the current page.
    If it's a match then tell the browser header 301 Moved Permanently and redirect to the new page.
*/
if(array_key_exists($_SERVER['REQUEST_URI'],$url_redirection)){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: ".$urlRedirection[$_SERVER['REQUEST_URI']]);
    die();
}
?>