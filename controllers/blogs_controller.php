<?php
    require('models/blog.php');


    $controller = new BlogsController();

    //アクション名によって、呼び出すメソッドを変える
    //$action(グローバル変数)は、routes.phpで定義されているもの
    switch ($action) {
        case 'index':
            $controller->index();
            break;
        case 'show':
            $controller->show($id);
            break;
        case 'add':
            $controller->add();
            break;

        default:

            break;



    }


    class BlogsController{
    	//プロパティ
        private $action = '';
        private $resource = '';
        private $viewOptions = '';
        private $id = '';

        public function index(){
        	//モデルを呼び出す
        	$blog = new Blog();
            $this->viewOptions = $blog->index();

            // foreach ($this->viewOptions as $viewOption) {
            	// echo $viewOption['id'];
            	// echo $viewOption['title'];
            	// echo $viewOption['created'];
            // }

            //アクション名を設定
            $this->action = 'index';

            //ビューを呼び出す
            require('views/layout/application.php');
            // require('views/blogs/index.php');

        }
        public function show($id){
        	//モデルを呼び出す
        	$blog = new Blog();
        	$this->showOptions = $blog->show($id);

        	//アクション名を設定
        	$this->action = 'show';

        	//ビューを呼び出す
        	require('views/layout/application.php');
        }
        public function add(){
        	//モデルを呼び出す
        	$blog = new Blog();
        	$this->addOptions = $blog->add();

        	//アクション名を指定
        	$this->action = 'add';

        	//ビューを呼び出す
        	require('views/layout/application.php');
        }
}
 ?>