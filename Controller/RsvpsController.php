<?php
App::uses('AppController', 'Controller');
/**
 * Rsvps Controller
 *
 * @property Rsvp $Rsvp
 */
class RsvpsController extends AppController {

public function beforeFilter(){
    parent::beforeFilter();
    if ($this->Auth->loggedIn()) {
        $this->Auth->allow(array('add', 'view', 'edit'));
    }
}

public function isAuthorized($user) {
    if ($user['role'] == 'admin') {
        return true;
    }
    if (in_array($this->action, array('delete')))  {
        return false;
    }
}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rsvp->recursive = 0;
		$this->set('rsvps', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rsvp->exists($id)) {
			throw new NotFoundException(__('Invalid rsvp'));
		}
		$options = array('conditions' => array('Rsvp.' . $this->Rsvp->primaryKey => $id));
		$this->set('rsvp', $this->Rsvp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	    if ($this->request->is('post')) {
            $errors = 0;
            $this->Rsvp->create();

            foreach($this->request->data['Plusone'] as $plusone) {
                if ($plusone['Name'] != '') {
                    $this->Rsvp->Guest->Plusone->create();
                    if(!$this->Rsvp->Guest->Plusone->save($plusone)) {
                        $errors++;
                    }
                }
            }

            if ($this->Rsvp->save($this->request->data['Rsvp']) && $errors == 0) {
                $this->Session->setFlash(__('The rsvp has been saved'));
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash(__('The rsvp could not be saved. Please, try again.'));
            }
        }

        $guests = $this->Rsvp->Guest->find('list');
        $user = $this->Auth->user('guest_id');

        $this->set('user', $user);
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
		if (!$this->Rsvp->exists($id)) {
			throw new NotFoundException(__('Invalid rsvp'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
		    if ($this->Rsvp->save($this->request->data)) {
				$this->Session->setFlash(__('The rsvp has been saved'));
				$this->redirect(array('action' => 'view/'.$id));
			} else {
				$this->Session->setFlash(__('The rsvp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rsvp.' . $this->Rsvp->primaryKey => $id));
			$this->request->data = $this->Rsvp->find('first', $options);
		}

		$guests = $this->Rsvp->Guest->find('list');
        $user = $this->Auth->user('guest_id');

        $this->set('user', $user);
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
		$this->Rsvp->id = $id;
		if (!$this->Rsvp->exists()) {
			throw new NotFoundException(__('Invalid rsvp'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rsvp->delete()) {
			$this->Session->setFlash(__('Rsvp deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rsvp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

