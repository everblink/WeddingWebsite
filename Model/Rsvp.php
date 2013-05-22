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
	public $displayField = 'Guest_id';

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
