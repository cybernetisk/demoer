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
		// php er litt snodig når det gjelder referanser til funksjoner innimellom, så her sender vi bare med
		// navnet til funksjonen som en string i rule (se funksjonen rett under her)
		'stop' => array('rule'=>'checkStopDate','message'=>'Stop should be after start')
			);
	
	// Denne funksjonen sjekker om stop tidspunktet er etter start tidspunktet, og brukes til validering av dataen
	function checkStopDate($stop)
	{
		// strtotime er en fin funksjon som takler nesten alt av dato/tidstrenger og returnerer
		// unix timestamp som vi kan sammenlikne enklere.
		return strtotime($this->data['Shift']['stop']) > strtotime($this->data['Shift']['start']);
	}
	
	// find('all', ...) returnerer masse data, den henter relasjoner rekusivt og mye fint. Innimellom blir det
	// for mye av det gode, cakephp kan laste for mye data og bli tregt om det er store applikasjoner, men er
	// relativt lett å jobbe seg rundt det.
	function getAvailableShifts($shift_type = null)
	{
		return $this->find('all', array('conditions'=>array('Shift.user_id'=>null)));
	}
	
	
}
