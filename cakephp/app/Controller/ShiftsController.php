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
	// scaffold er en kul sak, som genererer mesteparten av sidene i prosjektet akkurat nå.
	// alt under user, certification og shift_type autogenereres pga. at denne variabelen
	// er satt.
	
	// denne funksjonen håndterer /shifts/add urlen
	public function add()
	{
		// cakephp er veldig enkelt og fint for enkle ting som håndtering av 
		// forms uten noe sær funksjonalitet og lagring av disse, det kan gjøres som under
		 
		// er dette en POST request?
		if($this->request->isPost())
		{
			// i såfall, prøv å lagre. Save validerer også dataen opp mot modellen,
			// og om noe er feil så returnerer den false
			if($this->Shift->save($this->request->data))
			{
				// alt er ok, så send brukeren til "view" siden for det nye skiftet
				$this->redirect('/shifts/view/' . $this->Shift->id);
			}
		}
		
		// Må hente en liste med ting som skal vises i skifttype lista
		$this->set('shiftTypes', $this->Shift->ShiftType->find('list'));
	}
	
	// denne funksjonen erstatter /shifts siden (index er "default")
	public function index()
	{
		// kaller på getAvailableShifts metoden i Shift modellen, som returnerer ledige skift
		$shifts = $this->Shift->getAvailableShifts();
		
		// lagerer variabelen så man får tak i den fra viewet
		// compact('shift') == array('shift'=>$shift) (en dictionary hvor shift peker på $shift - resultatet vi hentet)
		$this->set(compact('shifts'));
	}
}
