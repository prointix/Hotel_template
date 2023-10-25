<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;

class HomeController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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
    public function actionAccommodation()
    {
        return $this->render('accommodation');
    }
    public function actionFacility()
    {
        return $this->render('facility');
    }
    public function actionAboutUs()
    {
        return $this->render('about-us');
    }
    public function actionNewsAndUpdate()
    {
        return $this->render('news-and-update');
    }
    public function actionContactUs()
    {
        return $this->render('contact-us');
    }
    public function actionBooking()
    {
        return $this->render('booking');
    }
    public function actionDetailFacility()
    {
        return $this->render('detail-facility');
    }
    public function actionDetailNewsAndUpdate()
    {
        return $this->render('detail-news-and-update');
    }
}
