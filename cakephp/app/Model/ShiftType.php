<?php
App::uses('AppModel', 'Model');
/**
 * ShiftType Model
 *
 * @property Certification $Certification
 * @property Shift $Shift
 */
class ShiftType extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
			'Certification',
			'Shift'
			);

}
