<?php
    //$GETパラメータ取得
    //explode関数:第二引数の文字列を第一引数で分割し、配列で返す関数
    $params = explode('/', $_GET['url']);

    //パラメータの分解
    $resource = $params[0];
    $action = [1];
    $id = 0;

    //idがあった場合idも取得する
    if (isset($params[2])) {
        $id = $params[2];
    }

    //コントローラの呼び出し
    require('controllers/'.$resource.'_controller.php');
?>