/*---Question 1 (UPDATED) ---*/
//var studAvg = (70+80+95)/3

//if(studAvg >= 80) {
//	console.log("You're awesome")
//} else {
//	console.log("You need to practice more.")
//}


// 'use strict';

// var name = prompt('Give me your name');
// var subject = prompt(name + ', what is the subject?');
// var gradesPrompt = prompt('Please enter your first grade');
// var arrayGrades = [Number(gradesPrompt)];
// var awesomeGrade = 80;
// var otherGrades = confirm('Are there any other grades?');

// while (otherGrades == true) {
// 	var nextGrade = prompt('Please enter next grade');
// 	arrayGrades.push(Number(nextGrade));
// 	otherGrades = confirm('Are there any other grades?');
// } 
// console.log(arrayGrades);
// var average = {
// 	grades: this.arrayGrades,
// 	totalGrades: this.arrayGrades.length,

// 	getAverage: function() {
// 		var total = 0;
// 		for(var i = 0; i < this.totalGrades; i++) {
// 			 total = (total + this.grades[i]);
// 		}
// 		return (total / this.totalGrades);	
// 	}
// };


// if (average.getAverage() > awesomeGrade) {
// 	alert("You're Awesome " + name + "!!!! Your average for " + subject + " is " + average.getAverage());
// } else {
// 	alert("You need more practice " + name + ". Your average for " + subject + " is " + average.getAverage());
// }



/*---Question 2 (UPDATED) ---*/


console.log('heb question');
var discountCostRequirement = 200;
var discount = 0.35;

var customers = [];
do {
	var customer = {
		name: null,
		products: [],
		getTotal: function() {
			var total = 0;
			for(var i = 0; i < this.products.length; i++) {
				total = (total + this.products[i].price);
			}
			if(total >=  discountCostRequirement) {
	 		finalCost = total - (total * discount);
			} else {
				finalCost = total;
			}
			return finalCost;
		}
	}

	customer.name = prompt('What is your name?');
	var moreProducts = confirm('Do you have any products?');

	while(moreProducts == true) {
		var product = {name: null, price: null};
		product.name = prompt('Please list your product name');
		product.price = Number(prompt('Price'));
		customer.products.push(product);
		moreProducts = confirm('Are there any more products?')
	}
	console.log(customer.getTotal());
	customers.push(customer);
	var moreCustomers = confirm('Are there more customers?')
} while (moreCustomers);

console.log(customers);
// alert('Here are all the total costs: ' + customers.getTotal())


for(var i = 0; i < customers.length; i++) {
document.write(customers[i].name + ": $" + customers[i].getTotal() + " ");
};
// if(getTotal() >  discountCostRequirement) {
// 	 finalCost = getTotal() - (getTotal() * discount);
// } else {
// 	finalCost = getTotal();
// }

// console.log(finalCost);
// var customerDiscount;
// if (cameronCost > discountCostRequirement) {
//     cameronCostWithDiscount = cameronCost - (cameronCost * discount);
// } else {
//     cameronCostWithDiscount = cameronCost;
// }
// console.log('Cameron: ' + cameronCost + ', ' + cameronCostWithDiscount);





// var customers = [];
// do {
// 	var customer = {
// 		name: null,
// 		//**actions
// 	}
// 	customers.push(customer);
// } while(mostCustomers);
// var withOffer = .65;

// var cameron = 180;

// var ryan = 250;

// var george = 320;

// if(cameron > 200) {
// 	console.log("Cameron paid $" + cameron + " and has a discounted price of $" + (cameron*withOffer));
// } else {
// 	console.log("Cameron paid $" + cameron + " and does not have a discounted price.")
// };

// if(ryan > 200) {
// 	console.log("Ryan paid $" + ryan + " and has a discounted price of $" + (ryan*withOffer));
// } else {
// 	console.log("Ryan paid $" + ryan + " and does not have a discounted price.")
// };

// if(george > 200) {
// 	console.log("Ryan paid $" + ryan + " and has a discounted price of $" + (ryan*withOffer));
// } else {
// 	console.log("ryan paid $" + ryan + " and does not have a discounted price.")
// };

// /*---Question 3---*/
// var flipACoin = Math.floor(Math.random()* 2)

// if(flipACoin == 0) {
// 	console.log("Buy a Car, homie.");
// } else {
// 	console.log("Buy a House, foo!");
// };
