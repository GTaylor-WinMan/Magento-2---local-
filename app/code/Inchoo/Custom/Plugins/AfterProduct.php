<?php

namespace Inchoo\Custom\Plugins;

Class AfterProduct {
  public function afterGetName(\Magento\Catalog\Model\Product $product, $name){

      $price = $product ->getData('price');
      if ($price < 60 ) {
        $name .= " - - So cheap" ;
    }
      else {
        $name .= " - - Too expensive";
    }
      return $name;
        }
  }




