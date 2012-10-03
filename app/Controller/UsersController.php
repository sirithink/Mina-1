<?php
class UsersController extends AppController {
	public $name = 'Users';
	
	public function beforeRender(){
		parent::beforeFilter();	
	}
	
	public function login(){
		
		if (!empty($this->request->data)) {
			if ($this->Auth->login()) {
				$this->Session->write('username',$this->Auth->user('username'));
				$this->redirect(array('controller'=>'Pages','action'=>'display'));
			}else{
				$this->set('login_error',TRUE);
				$this->Session->setFlash('Username/Password not match! Please try again!');
			}
		}
		return;
	}
	
	public function logout(){
		$this->Session->destroy();
		$this->redirect( $this->Auth->logout() );
		return;
	}
}