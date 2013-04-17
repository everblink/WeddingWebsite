<?php
App::uses('AppModel', 'Model');
/**
 * Rsvp Model
 *
 * @property Guest $Guest
 */
class Rsvp extends AppModel {

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
	public $displayField = 'IsCeremony';


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
