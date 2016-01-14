<?php
 
class Abhishek_Myform_Model_Resource_Issue extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {   
        $this->_init('myform/issue', 'issue_id');
    }
}