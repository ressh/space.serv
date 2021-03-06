<?php

class SiteController extends Controller
{

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{

        if( isset($_GET['ref']) )
        {
            $session = new CHttpSession;
            $session->open();
            $session['ref_id'] = (int)$_GET['ref'];
        }

        if( Yii::app()->user->isGuest )
        {
            // renders the view file 'protected/views/site/index.php'
            // using the default layout 'protected/views/layouts/main.php'
            $this->render('index');
        }
        else
        {
            $this->redirect( $this->createUrl( 'player/myship' ) );
        }

	}

	
	public function actionRulesGame()
    {
        $this->render('rules');
    }



}