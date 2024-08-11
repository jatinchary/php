<?php

    interface ProductFeatures{
        public function images();
        public function owner_details();
    }

    class Products implements ProductFeatures{
        function images(){
            echo "product image";

        }
;
        function owner_details()
        {
            echo "jatin is owner";
        }

    }
 

    $product = new Products;
    $product->images();
    echo "\n";
    $product->owner_details();


?>