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
    ];

    /**
     * {@inheritdoc}
     */
    public string $controllerNamespace = 'garmayev\task\controllers';

    public function init()
    {
        parent::init();
    }
}