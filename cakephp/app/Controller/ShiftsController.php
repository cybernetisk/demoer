<?php
App::uses('AppController', 'Controller');
/**
 * Shifts Controller
 *
 */

class ShiftsController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
	
	public function add()
	{
		if($this->request->isPost())
		{
			if($this->Shift->save($this->request->data))
			{
				$this->redirect('/shifts/view/' . $this->Shift->id);
			}
		}
		
		// Må hente en liste med ting som skal vises i skifttype lista
		$this->set('shiftTypes', $this->Shift->ShiftType->find('list'));
	}
	
	public function index()
	{
		$shifts = $this->Shift->getAvailableShifts();
		
		$this->set(compact('shifts'));
	}
}
