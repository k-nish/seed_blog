<?php
    class Blog{
        //プロバティ
        private $dbconnect = '';

        //コンストラクタ
        public function __construct(){
        	//DB接続ファイルの読み込み
        	require('dbconnect.php');
        	//DB変数設定の値を代入
        	$this->dbconnect = $db;

        }

    	public function index(){
    		$sql = 'SELECT * FROM `blogs` WHERE `delete_flag`=0';
    		$results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));

    		$rtn = array();
    		while ($result = mysqli_fetch_assoc($results)) {
    			$rtn[] = $result;
    		}
    		//取得結果を返す
    		return $rtn;
    	}
    	public function show($value){
    		// echo 'モデルのshowメソッドを呼び出しました。';
    		$sql = 'SELECT * FROM `blogs` WHERE `id` ='.$value;
    		$results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    		$record = mysqli_fetch_assoc($results);
    		return $record;
    	}
    	public function add(){

    	}
    	public function create($title,$body){
    		// $sql = sprintf('INSERT INTO `blogs`(`title`, `body`, `delete_flag`, `created`) VALUES ("%s","%s",0,now())',
    		// 	mysqli_real_escape_string($this->dbconnect,$title),
    		// 	mysqli_real_escape_string($this->dbconnect,$body));
    		$sql = 'INSERT INTO `blogs`(`title`, `body`, `delete_flag`, `created`) VALUES ("'.$title.'","'.$body.'",0,now())';
    		$record = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    	}
    	public function edit($value){
    		// echo 'モデルのshowメソッドを呼び出しました。';
    		$sql = 'SELECT * FROM `blogs` WHERE `id` ='.$value;
    		$results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    		$record = mysqli_fetch_assoc($results);
    		return $record;
    	}
    	public function update($id,$title,$body){
    		// $sql = 'INSERT INTO `blogs`(`title`, `body`, `delete_flag`, `created`) VALUES ("'.$title.'","'.$body.'",0,now())';
    		$sql = 'UPDATE `blogs` SET `title`="'.$title.'",`body`="'.$body.'" WHERE id='.$id;
    		$record = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    	}
    	public function delete($id){
    		$sql = 'UPDATE `blogs` SET `delete_flag`=1 WHERE id='.$id;
    		$results = mysqli_query($this->dbconnect,$sql) or die(mysqli_error($this->dbconnect));
    	}
    }
 ?>