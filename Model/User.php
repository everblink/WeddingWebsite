<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Guest $Guest
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'username';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
    		'Guest' => array(
    			'className' => 'Guest',
    			'foreignKey' => 'guest_id',
    			'conditions' => '',
    			'fields' => '',
    			'order' => ''
    		)
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
}
