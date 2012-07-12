<?php
class ContactsController extends AppController {
	
	//使用モデルの設定。アソシエーションで定義したモデルは使える。
	public $uses = array('Contact');
	
	//beforeRenderコールバック(アクション実行前に呼び出される)
	public function beforeRender() {
		
		//フォーム選択用リストを作成
		$this->set('sexList', $this->Contact->MtrSex->find('list'));
		$this->set('ageList', $this->Contact->MtrAge->find('list'));
		$this->set('favoliteList', $this->Contact->MtrFavolite->find('list'));
	}
	
	//indexアクション(確認画面あり)
	public function index() {
		
		//$this->request->dataにフォームからの返答があるので
		//それが見つかったら登録処理を行う
		if(!empty($this->request->data)) {
			//TRUEなら
			if($this->request->data['Contact']['confirmed']) {
			
				//保存実行
				//成功時に画面遷移・失敗時にメッセージを表示
				if($this->Contact->saveAll($this->request->data)) {
//					$this->redirect(array('action' => 'done'));
					$this->render('done');
				} else {
					$this->request->data['Contact']['confirmed'] = false;
					$this->Session->setFlash('登録を失敗しました');
				}
                                //フォームからのデータがなければ
			} else {
				//確認画面を表示
				//バリデーションのみを行い、成功・失敗時にメッセージを表示
				if($this->Contact->saveAll($this->request->data, array('validate' => 'only'))) {
					//入力データに問題がなかった場合は確認画面を呼び出し
					$this->render('confirm');
				} else {
					$this->Session->setFlash('エラーがあります。入力内容をご確認下さい');
				}
			}
		}
	}
	
	//doneアクション(登録が成功したとき)
	public function done() {
	}

}
