<?php

namespace Inchoo\Custom\Plugins;

Class Product 
{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) 
    { 
      
        return $result*2; 
    }
} 