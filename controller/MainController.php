<?php
class MainController{
    protected $productModel;
    protected $html;

    public function __construct()
    {   
        $this->productModel = new ProductModel();
        $this->html = new View();
    }

    public function Action(){
        $product = $this->productModel->getAllProducts();
        $view = './view/main.php';
        $data = array(
            'products' => $product,
        );
        $this->html->render($data, $view);
    }
}