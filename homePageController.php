<?php

require_once('model/db.php');

   class homePageController {

    public $productDetails;
      
      /* Method to get product details */
      function getProductDetails(){
        return fetchProductDetails();
      }

      function insertShippingDetails(){
        
      }
   }
?>