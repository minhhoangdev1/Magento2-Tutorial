<?php
namespace Packt\HelloWorld\Controller\Index;
class Saveproduct extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $firstname=$this->getRequest()->getParam('firstname');
        $lastname=$this->getRequest()->getParam('lastname');
        $email=$this->getRequest()->getParam('email');
        $message=$this->getRequest()->getParam('message');

        $subscription = $this->_objectManager->create('Packt\HelloWorld\Model\Subscription');
        $subscription->setFirstname($firstname);
        $subscription->setLastname($lastname);
        $subscription->setEmail($email);
        $subscription->setMessage($message);
        $subscription->save();
//        $this->getResponse()->setBody("<script> alert('success')</script>");
        return $this->_redirect('helloworld/index/index');

    }
}
