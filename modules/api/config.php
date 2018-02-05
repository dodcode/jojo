<?php
/**
 * Created by PhpStorm.
 * User: rex

 * Date: 31/12/2017
 * Time: 10:29 PM
 */

return [
    'components' => [
//         This will over the settings in global configuration where locates config/web.php.
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'api/article',
                    'pluralize' => false
                ],
                [
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'rest',
                    'pluralize' => false
                ]
            ],
        ],
    ]
];