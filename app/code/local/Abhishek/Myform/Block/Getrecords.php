<?php
class Abhishek_Myform_Block_Getrecords  extends Mage_Core_Block_Template
{
  public function _prepareLayout()
    {
    return parent::_prepareLayout();
    }
    
    
  public function getTickets()
    {
      
      $get_tickets = Mage::getModel('myform/ticket')->getCollection();
        
      return  $get_tickets; 
    }
}