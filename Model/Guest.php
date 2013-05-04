<?php
App::uses('AppModel', 'Model');
/**
 * Guest Model
 *
 */
class Guest extends AppModel {

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
	public $displayField = 'FirstName';

}
