<?php
class web {
    const NAMA_WEB = "myweb.com";
}

echo web::NAMA_WEB;

class web {
    public static $title = "my page";
}

echo web::$title;
?>