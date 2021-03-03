<?php


namespace backend\controllers;


use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;

class BaseController extends Controller
{
    public $enableCsrfValidation = false;
    /**
     * {@inheritdoc}
     */
//    public function behaviors()
//    {
//        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
////                    [
////                        'actions' => ['logout', 'index'],
////                        'allow' => true,
////                        'roles' => ['@'],
////                    ],
//                ],
//            ],
//            'verbs' => [
//                'class' => VerbFilter::className(),
//                'actions' => [
//                    'logout' => ['post'],
//                ],
//            ],
//        ];
//    }
}