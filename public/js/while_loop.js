/*---Question 1---*/

var allCones = Math.floor(Math.random() * 50) + 50;
var remainingCones;
console.log("I have " + allCones + " to sell before I can go home.");

do {
	var cones = Math.floor(Math.random() * 5) + 1;
	if(cones > allCones) {
		console.log("Sorry bro. I cannot sell you " + cones + " . I only have " + allCones + " .")
		cones = allCones;
	}

	allCones = allCones - cones;

	console.log("I sold " + cones +".")
} while (allCones > 0);

console.log("I can go home!!!!")



/*---Question 2---*/
var i = 1;

while(i < 17) {
	console.log(Math.pow(2, i));
	 i++;
};