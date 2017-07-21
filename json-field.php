<?php 
function jsonval($jsonArray,$json_param = '',$str_type = 'str',$default_val = ''){
	
	if($str_type == 'str'){
		if($default_val == ''){
			if(isset($jsonArray[$json_param])){
				if(!empty($jsonArray[$json_param])){
					return trim(str_replace("'","''",$jsonArray[$json_param]));
				}else{
					return '';
				}
			}else{
				return '';
			}
			
		}else{
			if(isset($jsonArray[$json_param])){
				if(!empty($jsonArray[$json_param])){
					return trim(str_replace("'","''",$jsonArray[$json_param]));
				}else{
					return $default_val;
				}
			}else{
				return '';
			}
			
			/*return isset($jsonArray[$json_param]) ? trim($jsonArray[$json_param])	 : $default_val;*/
		}
		
	}elseif($str_type == 'int'){
		if($default_val == ''){
			return isset($jsonArray[$json_param]) ? intval($jsonArray[$json_param])	 : '';
		}else{
			return isset($jsonArray[$json_param]) ? intval($jsonArray[$json_param])	 : $default_val;
		}
		
	}
}
?>
