<?php
App::uses('AppModel', 'Model');
/**
 * Certification Model
 *
 * @property User $User
 * @property ShiftType $ShiftType
 */
class Certification extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'shift_type_id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User',
		'ShiftType'
	);
}
