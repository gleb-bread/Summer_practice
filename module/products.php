<?php

    class ProductModel extends Model{
        public function __construct()
        {
           parent::__construct();
        }

        public function getAllProducts(){
            try {
                $query = $this->db->query("SELECT * FROM `product`");
                return $query->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {echo $e->getMessage();}
        }
        
        public function getProductsWithLimit($limit){
            try {
                $query = $this->db->query("
                SELECT * 
                FROM `product` 
                LIMIT $limit");
                return $query->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {echo $e->getMessage();}
        }
    }