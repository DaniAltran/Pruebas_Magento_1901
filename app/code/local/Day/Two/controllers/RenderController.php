<?php

class Day_Two_RenderController extends Mage_Core_Controller_Front_Action
{
    public function blockAction()
    {
        $this->getResponse()->setBody("Hello Magento!!");
    }
    
    public function overrideAction()
    {
        $blockHtml = $this->getLayout()->createBlock('day_two/sample')->toHtml();
        
        $this->getResponse()->setBody($blockHtml);
    }
}

