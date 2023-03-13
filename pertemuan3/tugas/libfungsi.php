<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

/**
* Function kelulusan, jika:
* total nilai lebih dari 55 maka lulus
* total nilai kurang dari 55 maka tidak lulus
*/
function kelulusan($nilai){
if($nilai >= 55){
	return 'Lulus';
} elseif($nilai <= 55){
	return 'Tidak Lulus';
}
}


/**
* Function grade, jika:
* total nilai <= 100 maka A
* total nilai <= 84 maka B
* total nilai <= 69 maka C
* total nilai <= 55 maka D
* total nilai <= 35 maka E
* selain itu maka I
*/ 
function grade($nilai) {
	if($nilai <= 35){
		return 'E';
	} elseif($nilai <= 55){
		return 'D';
	} elseif($nilai <= 69){
		return 'C';
	} elseif($nilai <= 84){
		return 'B';
	} elseif($nilai <= 100){
		return 'A';
	} else {
		return 'I';
	}
}

/**
* Function predikat, jika:
* grade A maka Sangat Memuaskan
* grade B maka Memuaskan
* grade C maka Cukup
* grade D maka Kurang
* grade E maka Sangat Kurang
* selain itu maka Tidak Ada
*
* Tips: Gunakan switch untuk mempermudah 
* melakukan pengecekan kondisi berdasarkan function grade
*/
function predikat($grade){
	switch($grade){
		case 'A':
			return 'Sangat Memuaskan';
			break;
		case 'B':
			return 'Memuaskan';
			break;
		case 'C':
			return 'Cukup';
			break;
		case 'D':
			return 'Kurang';
			break;
		case 'E':
			return 'Sangat Kurang';
			break;
		default:
			return 'Tidak Ada';
			break;
	}
}
?>