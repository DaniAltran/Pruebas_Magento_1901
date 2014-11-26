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
}

