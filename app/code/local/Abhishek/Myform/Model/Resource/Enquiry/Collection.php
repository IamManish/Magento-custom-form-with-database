<?php
 
class  Abhishek_Myform_Model_Resource_Enquiry_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        //parent::__construct();
        $this->_init('myform/enquiry');
    }
}