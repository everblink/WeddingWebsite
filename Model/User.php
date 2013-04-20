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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Guest' => array(
			'className' => 'Guest',
			'foreignKey' => 'guest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
