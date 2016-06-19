'use strict'
// var result = document.getElementById('result');
var buttons = document.getElementsByClassName('button')
var left = document.getElementById('left')
var middle = document.getElementById('middle')
var right = document.getElementById('right')
var inputs = document.getElementsByTagName('input')
var clear = document.getElementById('clear')
var operators = document.getElementsByClassName('button-operator')
var completed = false
var squareRoot = document.getElementById('square')
var plusMinus = document.getElementById('plus-minus')
var percentage = document.getElementById('percentage')

left.value = '';
middle.value = '';
right.value = '';

function click() {
  var selection = this.getAttribute('data-value');


  if (middle.value === '' && selection && selection != '=') {
    left.value += selection;
  } else if ((left.value && middle.value) && selection != '+' && selection != '=') {
    right.value += selection;
    // if(completed == true) {
    //   clearInputs();
    //   left.value += selection;
    // }
  } else if(selection === '=') {
    operate();
  }

  function operate() {
    var left_number = parseFloat(left.value);
    var right_number = parseFloat(right.value);
    var answer = '';

    if(middle.value == '+') {
      answer = left_number + right_number;
    } else if(middle.value == '-') {
      answer = left_number - right_number;
    } else if(middle.value == 'x') {
      answer = left_number * right_number;
    } else if(middle.value == '/') {
      answer = left_number / right_number;
    } else if(middle.value == '^') {
      answer = Math.pow(left_number, right_number);
    } else {
      answer = 'undefined';
    }
    console.log(answer);
    left.value = answer;
    //completed = true;
  }
};

function operatorSymbol() {
  var selection = this.getAttribute('data-value');
  if(selection === '+' || selection === '-' || selection === 'x' || selection === '/' || selection === '√' || selection === '^' || selection === '±' || selection === '%') {
    middle.value = '';
    middle.value = selection;
  };
};

function clearInputs() {
  left.value = '';
  middle.value = null;
  right.value = '';
}

function squareNumber() {

}

for(var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', click, false);
};

for(var i = 0; i < operators.length; i++) {
  operators[i].addEventListener('click', operatorSymbol, false);
}

clear.addEventListener('click', clearInputs, false);
