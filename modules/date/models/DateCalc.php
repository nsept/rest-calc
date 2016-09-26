<?php

namespace app\modules\date\models;

use Yii;
use yii\base\Model;

class DateCalc extends Model
{
    public $date;
    public $value;
    public $unit;

    public $responseDateFormat = 'd.m.Y';

    public function rules()
    {
        return [
            [['date', 'value', 'unit'], 'required'],
            [['date'], function($attribute) {
                // Для простоты
                try {
                    new \DateTime($this->date);
                } catch (\Exception $e) {
                    $this->addError($attribute, "Значение «{$this->getAttributeLabel($attribute)}» не верно");
                }
            }],
            ['value', 'integer', 'min' => 0, 'max' => 99],
            ['unit', 'in', 'range' => ['days', 'months', 'years']]
        ];
    }

    public function attributeLabels()
    {
        return [
            'date' => 'Дата',
            'value' => 'Увеличить на',
            'unit' => 'Еденица',
        ];
    }

    public function resolve()
    {
        if(!$this->validate()) {
            return ['errors' => $this->getErrors()];
        }

        $date = new \DateTime($this->date);
        $timestamp = $date->getTimestamp();

        return date($this->responseDateFormat, strtotime("+{$this->value} {$this->unit}", $timestamp));
    }
}
