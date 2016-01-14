<?php
 
class Abhishek_Myform_Model_Issue extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('myform/issue');
    }
}