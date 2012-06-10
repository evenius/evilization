<?php
class mission extends Buzzsql {
	
	function getAvailable () {
		
		
		$org = organization::select()->where(array('owner_user_id' => user::get_auth()->id))->one();
		
		$pre_r = array();
		$recruited = org_recruited::select()->where($org)->many();
		if ($recruited) {
			foreach ($recruited as $k =>  $r) {
				$pre_r[$k] = $r->id;
			}
			$pre_r = 'OR `prereq_recruit_id` = '. implode(' OR `prereq_recruit_id` = ', $pre_r);
		} else {
			$pre_r = '';
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
		
		$available_missions = mission::select()->where(
			'( `prereq_recruit_id` = 0 ' . $pre_r . ' )' .
			' AND ( `prereq_building_id` = 0 ' . $pre_b . ' )' .
			' AND ( `prereq_research_id` = 0 ' . $pre_res . ' )'
		)->many();

		return $available_missions;
		
	}
}