<?php

class Day_Two_IndexController extends Mage_Core_Controller_Front_Action
{
    
    public function indexAction()
    { 
        echo 'We\'re cooking now!!';
    }
    
    public function modelAction()
    {
        echo get_class(Mage::getModel('day_two/whatever'));
    }
    
    
    //http://localhost/magento_1901/heyo/index/layout
    
    public function layoutAction()
    {
        $xml = $this->loadLayout()->getLayout()->getUpdate()->asString();
        
        $this->getResponse()->setHeader('Content-Type','text/plain')->setBody($xml);
        
        //Mage::log($xml,Zend_log::INFO,'layout_log',true);
        
        $model = Mage::getModel('day_two/whatever');
        //Mage::log($model,Zend_log::INFO,'model_log',true);
        
        Mage::log($model->debug(),Zend_log::INFO,'model_log',true);
    }
    
    //http://localhost/magento_1901/heyo/index/default
    
    public function defaultAction()
    {
        $this->loadLayout()->renderLayout();
    }
}

