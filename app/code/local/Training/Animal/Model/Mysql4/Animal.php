<?php

//app/code/local/Training/Animal/Model/Animal.php
class Training_Animal_Model_Animal extends Mage_Core_Model_Abstract 
{
    protected function _construct()
    {
        //initialize resource model
        $this->_init('training/animal');
    }
}
