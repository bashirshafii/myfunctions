

<?php
/**
 * Created by PhpStorm.
 * User: bashirshafii
 * Date: 7/16/18
 * Time: 2:36 PM
 */

//evoking the three functions

calculateHouseSize(200, 10);
echo "<br/>";
printFullNameAndAge("Jane", "Doe", $age = 34);
echo "<br/>";
printListofStudentNames();




//Numeric Function

function calculateHouseSize ($length,$width){

	$size= $length * $width;

	if ($size <= 3000) {
		print "too small for our needs";
	} else if ($size >= 6000){
		print "too large for our family";
	} else {
		print "Perfect house size";
	}
}


//String Function
function printFullNameAndAge ($firstname, $lastname, $age){

	echo "Your Fullname is $firstname  $lastname and you are $age years old";

}




//Array Function

function printListofStudentNames(){
	$students = array("Adel", "Asya", "Bashir", "Eli","Joy", "Joe","Sarah", "Caleb", "Jude", "Marlon","Ryan","Ryo","Chelsea");
	$numberOfStudents = count($students);

	for ($i=0; $i< $numberOfStudents; $i++){
		echo ($students)[$i];
		echo "<br/>";
	};
}








