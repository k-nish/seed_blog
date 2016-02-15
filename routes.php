<?php
    //$GETパラメータ取得
    //explode関数:第二引数の文字列を第一引数で分割し、配列に入れる
    $paras = explode('/', $_GET['url']);
    var_dump($paras);
?>