<?php

namespace app\modules\sqrt\controllers;

use Yii;
use app\components\CalcBaseController;
use app\modules\sqrt\models\SqrtCalc;

class DefaultController extends CalcBaseController
{
    public function actionIndex($value)
    {
        $model = new SqrtCalc();
        $model->setAttributes(['value' => $value]);

        return $model->resolve();
    }
}
