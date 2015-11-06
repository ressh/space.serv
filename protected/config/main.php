<?php
/**
* This is the base config file.  Other config files may extend this.  See development.php
*/


// uncomment the following to define a path alias
 //Yii::setPathOfAlias('local','path/to/local-folder');


// Common Jui Widget preferences:
//$jui_prefs =array(
//	'themeUrl'=>'css/jui/',
//	'theme'=>'base',
//);


// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SpaceWarsGame',
    'language' => 'ru',

	// preloading 'log' component
	'preload'=>array('log', 'dbManager', 'uiSettings', 'lc', 'bootstrap'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.widgets.*',
        'ext.eoauth.*',
        'ext.eoauth.lib.*',
        'ext.lightopenid.*',
        'ext.eauth.*',
        'ext.eauth.services.*',
	),

    'modules' => array(
        'email' => array(
            'delivery' => 'php',
        ),
    ),


	'localeDataPath'=>'protected/i18n/data/',
    'timeZone' => 'UTC',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
            'loginUrl' => '/player/login'
		),

        'loid' => array(
            'class' => 'ext.lightopenid.loid',
        ),

        'eauth' => array(
            'class' => 'ext.eauth.EAuth',
            'popup' => true, // Use the popup window instead of redirecting.
                'cache' => false, // Cache component name or false to disable cache. Defaults to 'cache'.
                'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
            'services' => array( // You can change the providers and their classes.
                'twitter' => array(
                    'class' => 'TwitterOAuthService',
                    'key' => 'iTGHjMdTKD2BoRg1zu0CiYxbg',
                    'secret' => '3v7amMLhkbbFZuqd4JYeo8cwKUMQeOoVDqJCMsKqHyq3gq0Qx0',
                ),
                'facebook' => array(
                    'class' => 'FacebookOAuthService',
                    'client_id' => '323494037821171',
                    'client_secret' => 'dc0e966431e6c3e7f73f3a62b6a87fad',
                ),
                'vkontakte' => array(
                    'class' => 'VKontakteOAuthService',
                    'client_id' => '5134434',
                    'client_secret' => 'YdH8S6ylJM8wi0HvIg5i',
                ),
                'mailru' => array(
                    'class' => 'MailruOAuthService',
                    'client_id' => '738811',
                    'client_secret' => 'a9f80edad7659d449420e3310ef7c99f',
                ),
            ),
        ),




		'uiSettings'=>array(
			'class'=>'UiSettings',
		),

        'request' => array(
            'enableCsrfValidation' => true,
            'class'=>'application.components.HttpRequest',
            'noCsrfValidationRoutes'=>array(
                'billing/ResultPayeer',
            ),
        ),

        'robokassa' => array(
            'class' => 'application.components.yii-robokassa.Robokassa',
            'sMerchantLogin' => 'ressh',
            'sMerchantPass1' => 'artressh777',
            'sMerchantPass2' => 'artressh123',
         //   'sMerchantPass1' => 'testtest1',
         //   'sMerchantPass2' => 'testtest2',
            'sCulture' => 'ru',
            'sIncCurrLabel' => '',
            'orderModel' => 'Pays', // ваша модель для выставления счетов
            'priceField' => 'summ', // атрибут модели, где хранится сумма
            'isTest' => false, // тестовый либо боевой режим работы
        ),

        'payeer' => array(
            'class' => 'application.components.Payeer',
            'sMerchantLogin' => '100708835',
            'orderModel' => 'Pays', // ваша модель для выставления счетов
            'priceField' => 'summ', // атрибут модели, где хранится сумма
            'isTest' => false, // тестовый либо боевой режим работы
        ),

        'urlManager'=>array(
            'urlFormat'=>'path',
            'showScriptName'=>false,
            'rules'=>array(
                'page/<name>-<id:\d+>.html'=>'cms/node/page',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
            ),
        ),
        /*
		'db'=>array(
			'autoConnect'=>false, // we will activate the connection from dbManager
			'connectionString' => '', // we set connectionString from dbManager
			'tablePrefix'=>'tbl_',
		),
        */

		'sc'=>array(
			'class' => 'application.components.SrcCollect',
		),
		'dbManager'=>array(
			'class' => 'application.components.DbManager',
		),
		'lc'=>array(
			'class' => 'application.components.LocaleManager',
		),
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=ressh_space',
			'emulatePrepare' => true,
			'username' => 'ressh_space',
			'password' => '^?a]0Rq%',
			'charset' => 'utf8',
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
//		'widgetFactory' => array(
//			'widgets' => array(
//				'CJuiDialog' => $jui_prefs,
//				'CJuiTabs' => $jui_prefs,
//				'CJuiDatePicker' => $jui_prefs,
//				'CJuiAutoComplete' => $jui_prefs,
//			),
//		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		'bootstrap'=>array(
			'class'=>'ext.bootstrap.components.Bootstrap', // assuming you extracted bootstrap under extensions
		),
	),

	'modules' => array(
		'AjaxModule',
		'UiModule',
		'InternationalizationModule',
		'SecurityModule',
		'ExtensionModule',
        'email' => array(
            'delivery' => 'php',
        ),
	),


);