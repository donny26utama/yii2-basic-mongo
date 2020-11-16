<?php

$config = [
    'components' => [
        'db' => [
            'class' => 'yii\mongodb\Connection',
            'dsn' => 'mongodb://localhost:27017/mydatabase',
        ],
        'mongodb' => [
            'class' => 'yii\mongodb\Connection',
            'dsn' => 'mongodb://localhost:27017/mydatabase',
        ],
    ],
];

return $config;
