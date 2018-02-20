<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.02.2018
 * Time: 14:34
 */

namespace frontend\components;

use Yii;
use frontend\models\Comment;
use yii\base\Widget;
class CommentsWidget extends Widget
{

    public $id;
    public $comments;


    public function init()
    {
        parent::init();
        if($this->id === null) $this->id = 0;
    }

//    public function selectAllComments()
//    {
//        $customer = Comment::find()
//            ->where(['id' => $this->id])
//            ->one();
//    }



    public function run()
    {
        $fmod = new Comment();
        $this->comments = Comment::find()->where(['entityId' => $this->id])->indexBy('id')->all();
        if ($fmod->load(Yii::$app->request->post())){// && $fmod->save()) {
            $fmod->entityId = $this->id;
            $fmod->save();
            print_r(Yii::$app->request->post());
        }
        return $this->render('comments',[
            'comments' => $this->comments,
            'fmod' => $fmod,
       ]);
    }



}