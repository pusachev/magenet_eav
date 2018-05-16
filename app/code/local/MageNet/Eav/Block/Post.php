<?php

class MageNet_Eav_Block_Post extends Mage_Core_Block_Template
{
    /**
     * @return MageNet_Eav_Model_Resource_Post_Collection
     */
    public function getPostCollection()
    {
        return Mage::getModel('magenet_eav/post')
                    ->getCollection()
                    ->addAttributeToSelect('*')
                    ->load();
    }
}
