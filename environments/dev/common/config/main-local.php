<?php

return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com;dbname=jxr3mhdig4xed529',
            'username' => 'hmsfwufmmq2wqypa',
            'password' => 'tfm6wf9l5u0kxca3',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];