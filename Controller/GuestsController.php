<?php
App::uses('AppController', 'Controller');
/**
 * Guests Controller
 *
 * @property Guest $Guest
 */
class GuestsController extends AppController {

public function isAuthorized($user) {
    // All registered users can add posts
    if ($this->action === 'add') {
        return true;
    }

    return parent::isAuthorized($user);
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Guest->recursive = 0;
		$this->set('guests', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Guest->exists($id)) {
			throw new NotFoundException(__('Invalid guest'));
		}
		$options = array('conditions' => array('Guest.' . $this->Guest->primaryKey => $id));
		$this->set('guest', $this->Guest->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Guest->create();
			if ($this->Guest->save($this->request->data)) {
				$this->Session->setFlash(__('The guest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Guest->exists($id)) {
			throw new NotFoundException(__('Invalid guest'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Guest->save($this->request->data)) {
				$this->Session->setFlash(__('The guest has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The guest could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Guest.' . $this->Guest->primaryKey => $id));
			$this->request->data = $this->Guest->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Guest->id = $id;
		if (!$this->Guest->exists()) {
			throw new NotFoundException(__('Invalid guest'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Guest->delete()) {
			$this->Session->setFlash(__('Guest deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Guest was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
