<?php
	class Common {
		
		function Common(){}

		function GetAge($DOB){
			$ArrayDOB = explode("-",$DOB);
			$Year = $ArrayDOB[0];	
			$Month = $ArrayDOB[1];	
			$Day = $ArrayDOB[2];
			$ageTime = mktime(0, 0, 0, $Month, $Day, $Year);
			$t = time();
			$age = ($ageTime < 0) ? ( $t + ($ageTime * -1) ) : $t - $ageTime;
			$year = 60 * 60 * 24 * 365;
			$ageYears = $age / $year;
			$years = floor($ageYears);
			return $years;
		}

		function GetGender($Gender){
			if($Gender=='M')
				return "Male";
			else if($Gender=='F')
				return "Female";
			else
				return "";
		}

		function CheckEmpty($FieldValue){
			if( empty($FieldValue) )
				return true;
			else
				return false;
		}

		function CheckMaxLength($FieldValue,$FieldLength){ 
			if( strlen($FieldValue) > $FieldLength )
				return true;
			else
				return false;
		}

		function CheckMinLength($FieldValue,$FieldLength){ 
			if( strlen($FieldValue) < $FieldLength )
				return true;
			else
				return false;
		}

		function CheckFormat($FieldValue,$FieldFormat){ 
			if( !preg_match($FieldFormat,$FieldValue) )
				return true;
			else
				return false;
		}

		function CheckFirstDigit($FieldValue,$ArrayValidationValue){
			if( !in_array( substr($FieldValue,0,1) , $ArrayValidationValue )  )
				return true;
			else
				return false;
		}

		function CheckValue($FieldValue,$ArrayValidationValue){
			if( !in_array( $FieldValue , $ArrayValidationValue )  )
				return true;
			else
				return false;
		}

		function CheckComparison($SourceString,$TargetString){
			if( !strcmp($SourceString,$TargetString) )
				return true;
			else
				return false;
		}

		function msg_date($time){

			if(time() < $time)	return "invalid time";
			$seconds = time()-$time;
			if($seconds < 60)	return "$seconds secs back";
			$minutes = floor( $seconds / ( int )60 );
			if($minutes < 60)	return "$minutes min back";
			$hours = floor( $minutes / ( int )60 );
			if($hours < 24)	return "$hours hrs back";
			$days = floor( $hours / ( int )24 );
			if($days < 7)	return "$days days ago";
			$weeks = floor( $days / ( int )7 );
			if($weeks < 5)	return "$weeks weeks ago";
			$months = floor( $days / ( int )30 );
			if($months < 12)	return "$months months ago";
			$years = floor( $days / ( int )365 );
			return "$years years ago";

		}

		function text_decrypt_symbol($s, $i) {
		# $s is a text-encoded string, $i is index of 2-char code. function returns number in range 0-255

			$CRYPT_SALT = 85; # any number ranging 1-255
			$START_CHAR_CODE = 100; # 'd' letter

			return (ord(substr($s, $i, 1)) - $START_CHAR_CODE)*16 + ord(substr($s, $i+1, 1)) - $START_CHAR_CODE;
		}
		
		function text_decrypt($s) {
			$CRYPT_SALT = 85; # any number ranging 1-255
			$START_CHAR_CODE = 100; # 'd' letter

			if ($s == "")
				return $s;
			$enc = $CRYPT_SALT ^ $this->text_decrypt_symbol($s, 0);
			$result = "";
			for ($i = 2; $i < strlen($s); $i+=2) { # $i=2 to skip salt
				$result .= chr($this->text_decrypt_symbol($s, $i) ^ $enc++);
				if ($enc > 255)
					$enc = 0;
			}
			return $result;
		}

		function text_crypt_symbol($c) {
			# $c is ASCII code of symbol. returns 2-letter text-encoded version of symbol

				$CRYPT_SALT = 85; # any number ranging 1-255
				$START_CHAR_CODE = 100; # 'd' letter

				return chr($START_CHAR_CODE + ($c & 240) / 16).chr($START_CHAR_CODE + ($c & 15));
		}

		function text_crypt($s) {
			$CRYPT_SALT = 85; # any number ranging 1-255
			$START_CHAR_CODE = 100; # 'd' letter

			if ($s == "")
				return $s;
			$enc = rand(1,255); # generate random salt.
			$result = $this->text_crypt_symbol($enc); # include salt in the result;
			$enc ^= $CRYPT_SALT;
			for ($i = 0; $i < strlen($s); $i++) {
				$r = ord(substr($s, $i, 1)) ^ $enc++;
				if ($enc > 255)
					$enc = 0;
				$result .= $this->text_crypt_symbol($r);
			}
			return $result;
		}
	}
?>