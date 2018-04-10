<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 10.04.2018
 * Time: 17:41
 */
namespace frontend\widgets\banners;

use frontend\models\Banner;
use yii\base\Widget;
class Banners extends Widget
{
    public function run()
    {
        $banners = Banner::find()->all();
        return $this->render('index',
            [
                'banners'=>$banners,
            ]);

    }

}