<?php

return [
    'id' => 'rest-calc',
    'name' => 'Rest Calc',
    'basePath' => dirname(__DIR__),
    'language' => 'ru',
    'components' => [
        'request' => [
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ],
            'baseUrl' => ''
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'showScriptName' => false,
            'rules' => [
                // короткие адреса к модулям
                'GET date' => 'date/default/index',
                'GET sqrt' => 'sqrt/default/index',
            ],
        ],
    ],
    'modules' => [
        'date' => [
            'class' => 'app\modules\date\Module',
        ],
        'sqrt' => [
            'class' => 'app\modules\sqrt\Module',
        ],
    ]
];
