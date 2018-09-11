<?php
namespace Greg\Calc\Model;

class ProductData
{


    protected $urlInterface;

    protected $scopeConfig;

    public function __construct(
        \Magento\Framework\UrlInterface $urlInterface,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
        ) {
        $this->urlInterface = $urlInterface;
        $this->scopeConfig = $scopeConfig;
    }

    public function aroundGetProductDetailsHtml(
        \Magento\Catalog\Block\Product\ListProduct $subject,
        \Closure $proceed,
        \Magento\Catalog\Model\Product $product
        )
    {
        $result = $proceed($product);

         return $result . '<a href="#">mydata</a>';

        return $result;
    }
}