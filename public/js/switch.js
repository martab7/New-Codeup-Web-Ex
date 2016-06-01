/*---Question 1---*/

var luckyNumber = Math.floor(Math.random()* 6)

switch(luckyNumber) {
	case 0:
	console.log("You have no discount. Sorry bro.")
	break;
	case 1:
	console.log("Your new price is $" + (60 * .9));
	break;
	case 2:
	console.log("Your new price is $" + (60 * .75));
	break;
	case 3:
	console.log("Your new price is $" + (60 * .70));
	break;
	case 4:
	console.log("Your new price is $" + (60 * .50));
	break;
	case 5:
	console.log("Lucky you! You get your receipt is $0!!!!")
}


/*---Question 2---*/

var number = Math.floor(Math.random()* 12 + 1)

switch(number) {
	case 1:
	console.log("January")
	break;
	case 2:
	console.log("February");
	break;
	case 3:
	console.log("March");
	break;
	case 4:
	console.log("April");
	break;
	case 5:
	console.log("May");
	break;
	case 6:
	console.log("June");
	break;
	case 7:
	console.log("July");
	break;
	case 8:
	console.log("August");
	break;
	case 9:
	console.log("September");
	break;
	case 10:
	console.log("October");
	break;
	case 11:
	console.log("November");
	break;
	case 12:
	console.log("December");
}
