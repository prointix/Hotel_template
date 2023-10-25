<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class BookingController extends Controller
{


    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    public function actionRoomDetail()
    {
        return $this->render('room-detail');
    }
    public function actionBooking()
    {
        return $this->render('booking');
    }
    public function actionPayment()
    {
        return $this->render('payment');
    }
    public function actionSuccess()
    {
        return $this->render('success');
    }
}
