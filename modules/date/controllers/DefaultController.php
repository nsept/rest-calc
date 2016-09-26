<?php

namespace app\modules\date\controllers;

use Yii;
use app\components\CalcBaseController;
use app\modules\date\models\DateCalc;

class DefaultController extends CalcBaseController
{
    public function actionIndex($date, $value, $unit)
    {
        $model = new DateCalc();
        $model->setAttributes(compact('date', 'value', 'unit', [$date, $value, $unit]));

        return $model->resolve();
    }
}
