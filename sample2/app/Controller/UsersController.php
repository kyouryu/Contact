<?php
class UsersController extends AppController {

	//利用するモデルの設定
	public $uses = array('User');
	
	/**
	 * beforeFilterコールバック
	 */
	public function beforeFilter(){
		
		//ログインなしでアクセス可能なページを列挙
		//$this->Auth->allow('add');
	}
	
	/**
	 * ログイン処理
	 */
	public function login(){
		
		//フォームに入力があった場合にログイン処理後ダッシュボードへ
		if($this->request->isPost()){
                    //ログイン処理ができたら
			if($this->Auth->login()){
				$this->redirect(array('action' => 'index'));
			}
		}
	}
	
	/**
	 * ログアウト処理
	 */
	public function logout(){
//            ログアウトする
		$this->Auth->logout();
	}
	
	/**
	 * ダッシュボード
	 */
	public function index(){
		
		//ビューテンプレートを表示するのみ
	}
	
	/**
	 * ユーザリスト
	 */
	public function userlist() {
		
		//ページネーション機能でデータを入手し、リスト作成
		$userData = $this->paginate();
		
		$this->set(compact('userData'));
	}
	
	/**
	 * ユーザ詳細
	 */
	public function view($id = null) {
		
		//ユーザを捜して見つかったら表示
		$userData = $this->User->findById($id);
		if(empty($userData)) {
			$this->Session->setFlash('ユーザが見つかりませんでした');
			$this->redirect(array('action'=> 'userlist'));
		}
		
		$this->set(compact('userData'));
	}
	
        
        
	/**
	 * ユーザ追加
	 */
	public function add() {
		
                
		//addはeditと同じ処理。ただしidは無指定
		return $this->edit();
	}
	
        
        
	/**
	 * ユーザ編集(追加ページと併用)
         * addからきたらnullが入る
	 */
	public function edit($id = null) {
		
		/*
                 * フォーム入力があった場合には保存処理。そうでない場合は初期値の準備
                 * 新規追加はpost、編集はputでフォームからデータを受け取る
                 */
		if($this->request->isPost() || $this->request->isPut()) {
			
			//新規追加でないなら
			if($id !== null) {
                            //edit時にもしパスワードが空白だったら
				if($this->request->data[$this->User->alias]['password'] == '') {
//                                   フィールドを削除「空での登録を阻止」
					unset($this->request->data[$this->User->alias]['password']);
				}
			}
			//idが存在しないならデータを追加、あれば上書きする
			if($this->User->save($this->request->data)) {
				$this->Session->setFlash('ユーザ情報を保存しました');
				$this->redirect(array('action' => 'userlist'));
			} else {
				$this->Session->setFlash('入力に間違いがあります');
			}
		} else {
                    //編集ページを表示するだけの処理
			if($id !== null) {
                            //編集ページを表示した際に登録データが設定される
				$this->request->data = $this->User->findById($id);
				unset($this->request->data[$this->User->alias]['password']);
				if(empty($this->request->data)) {
					$this->Session->setFlash('ユーザが見つかりませんでした');
					$this->redirect(array('action'=> 'userlist'));
				}
			}
		}
		
		/*
                 * addもeditもedit.ctpを表示する(明示)
                 * なければ、editアクションのeditページに飛ぶ
                 */
		$this->render('edit');
	}
	
	/**
	 * ユーザ削除(確認ページ付き)
	 */
	public function delete($id) {
		
		//フォーム入力があった場合に削除処理。そうでない場合は初期値の準備
		if($this->request->isDelete()) {
			
			//削除実行。削除できない場合はエラー
			if ($this->User->delete($id)) {
				$this->Session->setFlash('ユーザを削除しました');
				$this->redirect(array('action'=>'userlist'));
			}
			$this->Session->setFlash('ユーザの削除に失敗しました');
			$this->redirect(array('action' => 'userlist'));
		
		//フォーム入力がなかった場合は、確認画面用にユーザデータ入手
		//見つからなかったらエラー
		} else {
			$this->request->data = $this->User->findById($id);
			if (empty($this->request->data)) {
				$this->Session->setFlash('ユーザが見つかりませんでした');
				$this->redirect(array('action' => 'userlist'));
			}
		}
	}
	
}
