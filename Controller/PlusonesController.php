<?php
App::uses('AppController', 'Controller');
/**
 * Plusones Controller
 *
 * @property Plusone $Plusone
 */
class PlusonesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Plusone->recursive = 0;
		$this->set('plusones', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Plusone->exists($id)) {
			throw new NotFoundException(__('Invalid plusone'));
		}
		$options = array('conditions' => array('Plusone.' . $this->Plusone->primaryKey => $id));
		$this->set('plusone', $this->Plusone->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Plusone->create();
			if ($this->Plusone->save($this->request->data)) {
				$this->Session->setFlash(__('The plusone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plusone could not be saved. Please, try again.'));
			}
		}
		$guests = $this->Plusone->Guest->find('list');
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
		if (!$this->Plusone->exists($id)) {
			throw new NotFoundException(__('Invalid plusone'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Plusone->save($this->request->data)) {
				$this->Session->setFlash(__('The plusone has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The plusone could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Plusone.' . $this->Plusone->primaryKey => $id));
			$this->request->data = $this->Plusone->find('first', $options);
		}
		$guests = $this->Plusone->Guest->find('list');
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
		$this->Plusone->id = $id;
		if (!$this->Plusone->exists()) {
			throw new NotFoundException(__('Invalid plusone'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Plusone->delete()) {
			$this->Session->setFlash(__('Plusone deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Plusone was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
