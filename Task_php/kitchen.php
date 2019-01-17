<?php 
// function strongPassword($pass){
// 		$uppercase = preg_match('@[A-Z]@', $pass);
// 		$lowercase = preg_match('@[a-z]@', $pass);
// 		$special = preg_match('/[w!@$£#%&*\^]/', $pass);
// 		$number    = preg_match('@[0-9]@', $pass);

// 		if( !$special || !$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
// 		   echo "weak password";
// 		}else{
// 			echo "strong password";
// 		}
// }

// function strongPassword2($pass){
// 	$special = preg_match('/[w!@$£#%&*\^]/', $pass);
// 	if(!$special) {
// 		   echo "weak password";
// 	}else{
// 			echo "strong password";
// 	}
// }

function strongPassword($pass){
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $special = preg_match('/[w!@$£#%&*\^]/', $pass);
        $number    = preg_match('@[0-9]@', $pass);

        if( !$special || !$uppercase || !$lowercase || !$number || strlen($pass) < 8) {
           return false;
        }else{
            return true;
        }
}



if (strongPassword("Aa123456")){
	echo "correct";;
}


 ?>