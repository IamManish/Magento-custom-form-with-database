<?php
class Abhishek_Myform_ViewController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
            $this->loadLayout();
			
			
			$collection = Mage::getModel('myform/myform')->getCollection();
 
            $this->renderLayout();
    }
	
	 
}