<?php

class MageNet_Eav_Model_Resource_Setup extends Mage_Eav_Model_Entity_Setup
{

    public function getDefaultEntities()
    {
        $entities = [
            'magenet_eav_post' => [
                'entity_model' => 'magenet_eav/post',
                'attribute_model' => '',
                'table' => 'magenet_eav/post_entity',
                'attributes' => [
                    'title' => [
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Title',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => true,
                        'unique' => false,
                    ],
                    'author' => [
                        'type' => 'varchar',
                        'backend' => '',
                        'frontend' => '',
                        'label' => 'Author',
                        'input' => 'text',
                        'class' => '',
                        'source' => '',
                        'global' => 0,
                        'visible' => true,
                        'required' => true,
                        'user_defined' => true,
                        'default' => '',
                        'searchable' => false,
                        'filterable' => false,
                        'comparable' => false,
                        'visible_on_front' => false,
                        'unique' => false,
                    ],
                ],
            ]
        ];

        return $entities;
    }
}
