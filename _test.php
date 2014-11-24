<?php

    include 'app/Mage.php';
    Mage::app();
    
    /* EJERCICIOS DE SOBREESCRITURA DE CLASES */
    
    /*Primer Ejercicio catalog product model*/
    
    //$object = Mage::getModel('catalog/product')->load(1);
    
    /*Segundo Ejercicio catalog product view block*/
    
    //$object = Mage::app()->getLayout()->createBlock('catalog/product_view');
    
    /*Tercer Ejercicio Catalog product resource model*/
    
    // $object = Mage::getResourceModel('catalog/product');
     
    /*Cuarto ejercicio sales helper*/
    
    //$object = Mage::helper('sales/data');
    
    /*5o ejercicio customer address helper*/
    
    $object = Mage::helper('customer/address');
    
    //var_dump($object->getName());
    
    
    echo get_class($object);
    
    