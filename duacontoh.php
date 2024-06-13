<?php
class web {
    public static $title = "My Page";

    public function changeTitle() {
        self::$title = 'My page2';
        return self::$title;
    }

    public function changeTitle2(){
        return self::$title;
    }
}

class YourWeb extends web {
    public function changeTitle(){
        self::$title = 'Your Page';
        return self::$title;
    }
}

echo we::$title . "<br>";
$myweb = new web;
echo $myweb->changeTitle() . "<br>" . $myweb->changeTitle2
?>