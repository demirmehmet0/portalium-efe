<?php

namespace diginova\efe;

class Module extends \portalium\base\Module
{
    public $apiRules = [
        [
            'class' => 'yii\rest\UrlRule',
            'controller' => [
                'efe/default',
            ]
        ],
    ];
    
    public static function moduleInit()
    {
        self::registerTranslation('efe','@diginova/efe/messages',[
            'efe' => 'efe.php',
        ]);
    }

    public static function t($message, array $params = [])
    {
        return parent::coreT('efe', $message, $params);
    }
}