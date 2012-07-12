<?php
class AppController extends Controller {
	
	//コンポーネントの設定
	public $components = array(
		//Authコンポーネントの使用
		'Auth' => array(
                    //認証設定
			'authenticate' => array(
//                            共通して利用するものは「all」をキーとする
				'all' => array(
//                                    認証に必要なフィールド名
					'fields' => array(
//                                            使用するusernameフィールド
						'username' => 'username', 
//                                            使用するpasswordフィールド
						'password' => 'password', 
					), 
				), 
//                            認証方法
				'Form', 
			), 
		), 
		//セッションコンポーネントの使用
		'Session', 
	);
	
}
