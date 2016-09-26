<?php

namespace app\modules\sqrt\models;

use Yii;
use yii\base\Model;

class SqrtCalc extends Model
{
    public $value;

    public function rules()
    {
        return [
            [['value'], 'required'],
            [['value'], 'number'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'value' => 'Число',
        ];
    }

    public function resolve()
    {
        if(!$this->validate()) {
            return ['errors' => $this->getErrors()];
        }

        return sqrt($this->value);
    }
}
