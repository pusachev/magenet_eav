<?php

$demoData = [
    [
        'title'  => 'My first post',
        'author' => 'John Doe'
    ],
    [
        'title'  => 'Hello world',
        'author' => 'John Doe'
    ],
    [
        'title'  => 'My first eav mode',
        'author' => 'John Doe'
    ],
];



foreach ($demoData as $data) {
    /** @var MageNet_Eav_Model_Post $model */
    $model = Mage::getModel('magenet_eav/post');
    $model->setData($data);
    $model->save();
}
