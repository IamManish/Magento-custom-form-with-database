<?php
 
class Abhishek_Myform_Model_Resource_Ticket extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('myform/ticket', 'ticket_id');
    }
}