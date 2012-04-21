<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Certification $Certification
 * @property Shift $Shift
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Certification',
		'Shift'
		);

}
