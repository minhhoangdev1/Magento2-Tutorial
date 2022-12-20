<?php
namespace Packt\HelloWorld\Controller\Index;
class Collection extends \Magento\Framework\App\Action\Action {
    public function execute() {
        $productCollection = $this->_objectManager
            ->create('Magento\Catalog\Model\ResourceModel\Product\Collection')
            ->addAttributeToSelect(['name', 'price', 'image',])
            ->addAttributeToFilter('name', 'Overnight Duffle')
            ->addAttributeToFilter('entity_id', array('in' => array(159, 160, 161)))
            ->addAttributeToFilter('name', array('like' => '%Sport%'))
            ->setPageSize(10,1);

//        $productCollection->setDataToAll('price', 20);
//        $productCollection->save();
        $output = '';
        foreach ($productCollection as $product) {
            $output .= \Zend_Debug::dump($product->debug(), null, false);
        }
        //$output = $productCollection->getSelect()->__toString();
        $this->getResponse()->setBody($output);
    }

}
