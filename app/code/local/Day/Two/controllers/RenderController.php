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
        $blockHtml = $this->getLayout()->createBlock('day_two/sample')->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
        
        //$this->getResponse()->setRedirect('http://www.google.es');
    }
    
    public function templateAction()
    {
        $blockHtml = $this->getLayout()->createBlock('day_two/template')->setTemplate('day_two/random.phtml')->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
        
    }
}

