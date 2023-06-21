<?php

    class MainController{
        protected $productModel;
        protected $View;

        public function __construct()
        {   
            $this->productModel = new ProductModel();
            $this->View = new View();
        }

        public function Action(){
            $product = $this->productModel->getAllProducts();
            $view = './view/main.php';
            $data = array(
                'products' => $product
            );
            $this->View->render($data, $view);
        }
    }