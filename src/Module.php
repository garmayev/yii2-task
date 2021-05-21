<?php


namespace garmayev\task;


use yii\base\ErrorException;

/**
 * Class Module
 * @package garmayev\task
 */
class Module extends \yii\base\Module
{
    public $urlPrefix = "task";
    public $urlRules = [
        "/" => "default/index",
        "callback" => "default/callback",
    ];

    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'garmayev\task\controllers';

}