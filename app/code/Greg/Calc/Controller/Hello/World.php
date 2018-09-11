<?php
namespace Greg\calc\Controller\Hello;
class World extends \Magento\Framework\App\Action\Action
{


    public $calculator; 

    public function __construct(
        \Magento\Framework\App\Action\Context $context, 
        \Greg\Calc\Block\Calculator $calculator
        ){
            $this->calculator = $calculator; 
            return parent::__construct($context);
        }


    public function execute()
    {
        echo '<p>Calculator!</p>';
        //var_dump(__METHOD__);

        echo $this->calculator->divide(10,5) . "<br/>" ; 
    
        echo $this->calculator->multiply(10,5). "<br/>"; 
 
        echo $this->calculator->add(10,5). "<br/>"; 

        echo $this->calculator->sub(10,5); 

        $myarray = array ( 
            0 => 'Hi', 
            1 => 'Hello',
            2 => 'Hola' 
        ) ;

        foreach($myarray as $value) {
            print "<br/>" . $value;
          }

    }


}
