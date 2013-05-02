<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property Guest $Guest
 */
class Message extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'Id';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Message';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'Message' => array(
			'rule' => 'notEmpty'
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Guest' => array(
			'className' => 'Guest',
			'foreignKey' => 'Guest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
