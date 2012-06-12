<?php
class recruit extends Buzzsql {
	
	function getAvailable() {
		$org = organization::select()->where(array('owner_user_id' => user::get_auth()))->one();
		
		$pre_m = array();
		$missioned = org_missioned::select()->where($org)->many();
		if ($missioned) {
			foreach ($missioned as $k =>  $r) {
				$pre_m[$k] = $r->id;
			}
			$pre_m = 'OR `prereq_mission_id` = '. implode(' OR `prereq_mission_id` = ', $pre_m);
		} else {
			$pre_m = '';
		}
		
		$pre_b = array();
		$built = org_built::select()->where($org)->many();
		if ($built) {
			foreach ($built as $k =>  $b) {
				$pre_b[$k] = $b->id;
			}
			$pre_b = ' OR `prereq_building_id` = '.implode(' OR `prereq_building_id` = ', $pre_b);
		} else {
			$pre_b = '';
		}
			
		$pre_res = array();
		$researched = org_researched::select()->where($org)->many();
		if ($researched) {
			foreach ($researched as $k =>  $r) {
				$pre_res[$k] = $r->id;
			}
			$pre_res =' OR `prereq_research_id` = ' . implode(' OR `prereq_research_id` = ', $pre_res);
		} else {
			$pre_res = '';
		}
		
		$pre_rec = array();
		$recruited = org_recruited::select()->where($org)->many();
		if ($recruited) {
			foreach ($recruited as $k => $r) {
				$pre_rec[$k] = $r->recruit_id;
			}
			$pre_rec =' AND  `specialist` = 0 ) OR ( `prereq_recruit_id` = ' . implode('AND `specialist` = 0 ) OR (`prereq_recruit_id` = ', $pre_rec).' AND `specialist` = 0';
		} else {
			$pre_rec = '';
		}
		
		
		$available_recruits = recruit::select()->where( 
			'( `prereq_recruit_id` = 0 ' . $pre_rec . ' )' .
			' AND ( `prereq_mission_id` = 0 ' . $pre_m . ' )' .
			' AND ( `prereq_building_id` = 0 ' . $pre_b . ' )' .
			' AND ( `prereq_research_id` = 0 ' . $pre_res . ' )'
		)->many();
		
		return $available_recruits;
	}

}