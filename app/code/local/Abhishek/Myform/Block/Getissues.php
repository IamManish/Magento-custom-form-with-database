<?php
class Abhishek_Myform_Block_Getissues  extends Mage_Core_Block_Template
{
  public function _prepareLayout()
    {
    return parent::_prepareLayout();
    }
    
    
  public function getSelectedIssues()
    {
        $get_issues = Mage::getModel('myform/issue')->getCollection()->addFieldToFilter('t_id', $this->ticketid);

        return  $get_issues; 

    }
}