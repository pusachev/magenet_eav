<?php

class MageNet_Eav_Model_Post extends Mage_Core_Model_Abstract
{
    const ENTITY = 'magenet_eav_post';

    protected function _construct()
    {
        $this->_init('magenet_eav/post');
    }

    protected function _getDefaultAttributes()
    {
        return array(
            'entity_type_id',
            'attribute_set_id',
            'created_at',
            'updated_at',
            'increment_id',
            'store_id',
            'website_id'
        );
    }
}
