<?php

class Day_Two_Block_Html_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
   
    protected function _construct() //de la clase abstracta
    {
        //parent::__construct();
       
        $this->addCrumb('google link',array(
           'label'=>  'Google' , 
           'title'=>   'Go to the Google', 
           'link'=>  'https://google.es' , 

        ));
    }
   
}

