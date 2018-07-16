//Evoking the three functions:
calculateHouseSize(20,250);
printFullNameAndAge("Jane", "Doe", 32);
printListofStudentNames();



//Numeric Function

function calculateHouseSize (length,width) {

	let size = length * width;

	if(size <= 3000) {
		console.log("too small for our needs");
	} else if(size >= 6000) {
		console.log("too large for our family");
	} else {
		console.log("Perfect house size");
	}
}



//String Function
function printFullNameAndAge (firstname, lastname, age){

	console.log("Your Fullname is  "+firstname +"  " +lastname+" and you are " +age+" years old");

}



//Array Function

function printListofStudentNames(){
	let students =["Adel", "Asya", "Bashir", "Eli","Joy", "Joe","Sarah", "Caleb", "Jude", "Marlon","Ryan","Ryo","Chelsea"];
   let i;
	for (i=0; i< students.length; i++){
		console.log(students[i]);
	};
}

