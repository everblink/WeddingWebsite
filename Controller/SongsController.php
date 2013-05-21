<?php
App::uses('AppController', 'Controller');
/**
 * Songs Controller
 *
 * @property Song $Song
 */
class SongsController extends AppController {

public function beforeFilter(){
    parent::beforeFilter();
    if ($this->Auth->loggedIn()) {
        $this->Auth->allow('add');
    }
}

public function isAuthorized($user) {
    if ($user['role'] == 'admin') {
        return true;
    }
    if (in_array($this->action, array('edit', 'delete', 'view')))  {
        return false;
    }
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Song->recursive = 0;
		$this->set('songs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Song->exists($id)) {
			throw new NotFoundException(__('Invalid song'));
		}
		$options = array('conditions' => array('Song.' . $this->Song->primaryKey => $id));
		$this->set('song', $this->Song->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Song->create();
			if ($this->Song->save($this->request->data)) {
				$this->Session->setFlash(__('The song has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song could not be saved. Please, try again.'));
			}
		}
		$guests = $this->Song->Guest->find('list');
		$user = $this->Auth->user('guest_id');
		$role = $this->Auth->user('role');
        $this->set('user', $user);
        $this->set('role', $role);
		$this->set(compact('guests'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Song->exists($id)) {
			throw new NotFoundException(__('Invalid song'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Song->save($this->request->data)) {
				$this->Session->setFlash(__('The song has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The song could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Song.' . $this->Song->primaryKey => $id));
			$this->request->data = $this->Song->find('first', $options);
		}
		$guests = $this->Song->Guest->find('list');
		$this->set(compact('guests'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Song->id = $id;
		if (!$this->Song->exists()) {
			throw new NotFoundException(__('Invalid song'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Song->delete()) {
			$this->Session->setFlash(__('Song deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Song was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
