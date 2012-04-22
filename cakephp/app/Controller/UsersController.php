<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 */
class UsersController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;


	function login()
	{
		if($this->request->isPost() && $id = @$this->request->data['User']['user_id'])
		{
			$user = $this->User->findById($id);
			$this->Auth->login($user['User']);
			$this->redirect('/');
		}
		$users = $this->User->find('list');
		$this->set(compact('users'));	
	}

	function logout()
	{
		$this->redirect($this->Auth->logout());
	}
}
