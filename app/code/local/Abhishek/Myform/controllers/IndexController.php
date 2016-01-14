<?php
class Abhishek_Myform_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
            $this->loadLayout();
            $this->renderLayout();
    }
	
	
	 public function savepostAction()
    {    
     
            if ( $this->getRequest()->getPost() ) {
                
                    $postData = $this->getRequest()->getPost();
                    $myformModel = Mage::getModel('myform/enquiry');
                   
                    $myformModel->setId($this->getRequest()->getParam('id'))
                        ->setTitle($postData['title'])
                        ->setContent($postData['content'])
                        ->setTicketId($postData['sel_tickets'])
                        ->setIssueId($postData['sel_issues'])
                        ->save();
                    
            $this->_redirect('*/*/');
        }
     
	
    }


    public function getvalAction()
    {   
            
            $ticket_id  = $this->getRequest()->getParam('id') ; 
              
            echo $this->getLayout()->createBlock('myform/getissues')->setData('ticketid', $ticket_id )->setTemplate('myform/get_issues.phtml')->toHtml();
            
    }

}