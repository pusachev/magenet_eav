<?php

class MageNet_Eav_Model_Resource_Post extends Mage_Eav_Model_Entity_Abstract
{
    public function __construct()
    {
        $resource = Mage::getSingleton('core/resource');
        $this->setType('magenet_eav_post');
        $this->setConnection(
            $resource->getConnection('magenet_eav_read'),
            $resource->getConnection('magenet_eav_write')
        );
    }
}
