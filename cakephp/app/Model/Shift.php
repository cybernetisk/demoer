<?php
App::uses('AppModel', 'Model');
/**
 * Shift Model
 *
 * @property ShiftType $ShiftType
 * @property User $User
 * @property Verified $Verified
 */
class Shift extends AppModel {
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
		'ShiftType',
		'User',
		'Verified' => array('className' => 'User')
	);
	
	
	public $validate = array(
		'start' => array('rule'=>'notempty', 'message'=>'You need a start for the shift'),
		'stop' => array('rule'=>'checkStopDate','message'=>'Stop should be after start')
			);
	
	function checkStopDate($stop)
	{
		return strtotime($this->data['Shift']['stop']) > strtotime($this->data['Shift']['start']);
	}
	
	function getAvailableShifts($shift_type = null)
	{
		return $this->find('all', array('conditions'=>array('Shift.user_id'=>null)));
	}
	
	
}
