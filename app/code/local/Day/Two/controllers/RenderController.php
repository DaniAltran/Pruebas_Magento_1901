<?php

class Day_Two_RenderController extends Mage_Core_Controller_Front_Action
{
    //$this -> == Day_Two_RenderController CLASS
    
    public function blockAction()
    {
        $this->getResponse()->setBody("Hello Magento!!");
    }
    
    public function overrideAction()
    {
        $blockHtml = $this->getLayout()->createBlock('day_two/sample')->toString(); //->toHtml()
        
        $this->getResponse()->setBody($blockHtml);
        
        //Mage::log($blockHtml,Zend_log::INFO,'override_log',true);
        
//$this->getResponse()->setRedirect('http://www.google.es');
    }
    
    public function templateAction()
    {
        $blockHtml = $this->getLayout()->createBlock('core/template')->setTemplate('day_two/random.phtml')->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
        
        //Mage::log($blockHtml,Zend_log::INFO,'override_log',true);
    }
}

