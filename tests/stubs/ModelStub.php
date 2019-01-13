<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\web\tests\stubs;

use yii\base\Model;

class ModelStub extends Model
{
    public $id;
    public $title;
    public $hidden;

    public function toArray(array $fields = [], array $expand = [], $recursive = true): array
    {
        return ['id' => $this->id, 'title' => $this->title];
    }
}
