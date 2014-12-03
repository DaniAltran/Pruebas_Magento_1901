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
        
        //Mage::log($blockHtml,Zend_log::INFO,'template_log',true);
    }
    
     public function registryAction()
    {
        //Don't work!!
        Mage::register('some_var','some value');
         
        $blockHtml = $this->getLayout()->createBlock('day_two/registry')->setTemplate('day_two/registry.phtml')->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
        
        //Mage::log($blockHtml,Zend_log::INFO,'registry_log',true);
    }
    
    public function listBlockAction()
    {
        //Goes well!!!
        
        $tlb = $this-> getLayout()->createBlock('core/text_list');
        $blockA =  $this->getLayout()->createBlock('core/text')->setText('<h1>Block A</h1>');
        $blockB =  $this->getLayout()->createBlock('core/text')->setText('<h1>Block B</h1>');
        //block objects
        $tlb->insert($blockA)->insert($blockB);
        
        //Goes well!!
        //$this->getResponse()->setBody($tlb->toHtml());
        $this->loadLayout();
        
        $this->getLayout()->getBlock('content')->insert($tlb);
        
        $this->renderLayout();
    }
    
    public function layoutAction()
    {
        $this->loadLayout()->renderLayout();
    }
    
}

