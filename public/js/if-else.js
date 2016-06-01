/*---Question 1---*/
var studAvg = (70+80+95)/3

if(studAvg >= 80) {
	console.log("You're awesome")
} else {
	console.log("You need to practice more.")
}

/*---Question 2---*/
var withOffer = .65;

var cameron = 180;

var ryan = 250;

var george = 320;

if(cameron > 200) {
	console.log("Cameron paid $" + cameron + " and has a discounted price of $" + (cameron*withOffer));
} else {
	console.log("Cameron paid $" + cameron + " and does not have a discounted price.")
};

if(ryan > 200) {
	console.log("Ryan paid $" + ryan + " and has a discounted price of $" + (ryan*withOffer));
} else {
	console.log("Ryan paid $" + ryan + " and does not have a discounted price.")
};

if(george > 200) {
	console.log("Ryan paid $" + ryan + " and has a discounted price of $" + (ryan*withOffer));
} else {
	console.log("ryan paid $" + ryan + " and does not have a discounted price.")
};

/*---Question 3---*/
var flipACoin = Math.floor(Math.random()* 2)

if(flipACoin == 0) {
	console.log("Buy a Car, homie.");
} else {
	console.log("Buy a House, foo!");
};
