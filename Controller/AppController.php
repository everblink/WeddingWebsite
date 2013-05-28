<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $helpers = array('Form', 'Html', 'Js', 'Time');

    public $components = array(
            'Session',
            'Auth' => array(
                'loginRedirect' => array('controller' => 'pages', 'action' => 'index'),
                'logoutRedirect' => array('controller' => 'pages', 'action' => 'index'),
                'authorize' => array('Controller')
            )
    );

    public function isAuthorized($user) {
        return true;
    }

    public function beforeFilter(){
        $this->set('controller', $this->params['controller']);
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('role', $role = $this->Auth->user('role'));
        $this->set('guest_id', $guest_id = $this->Auth->user('guest_id'));

        //load up data to determine whether or not the user has rsvpd or not
        $this->loadModel("Rsvp");
        $this->set('rsvp_done', $rsvp_done = $this->Rsvp->find('first',
                            array('conditions' =>
                                array('Rsvp.Guest_id' => $guest_id))));
        if ($rsvp_done == true)
            $this->set('rsvp_id', $rsvp_id = $rsvp_done['Rsvp']['Id']);
        else
            $this->set('rsvp_id', $rsvp_id = '0');

        // load up data to display the plusones on the RSVP view page
        $this->loadModel("Plusone");
        $this->set('rsvp_plusones', $rsvp_plusones = $this->Plusone->find('list',
                            array('conditions' =>
                                    array('Plusone.Guest_id' => $guest_id)),
                            array('fields' => ('Plusone.Name'))
                        )
                  );
    }
}
