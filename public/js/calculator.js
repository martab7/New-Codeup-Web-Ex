'use strict'
// var result = document.getElementById('result');
var buttons = document.getElementsByClassName('button');
var left = document.getElementById('left');
var middle = document.getElementById('middle');
var right = document.getElementById('right');
var inputs = document.getElementsByTagName('input');
var clear = document.getElementById('clear');
   
left.value = '';
middle.value = null;
right.value = '';

function click() {
  var selection = this.getAttribute('data-value');

  if(selection === '+' || selection === '-' || selection === 'x' || selection === '/') {
    middle.value = '';
    middle.value = selection;
  } else if (middle.value === '' && selection) {
    leftInput();
  } else if ((left.value && middle.value) && selection != '+' && selection != '=') {
    rightInput();
  } else if(selection === '=') {
    operate();
  } 

  function leftInput() {
    left.value += selection;
    return left.value;
  };

  function rightInput() {
    right.value += selection;
    return right.value;
  };

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
    } else {
      answer = 'undefined';
    }
    console.log(answer);
    left.value = answer;
  }
};

function clearInputs() {
  left.value = '';
  middle.value = null;
  right.value = '';
}

for(var i = 0; i < buttons.length; i++) {
  buttons[i].addEventListener('click', click, false);
};

clear.addEventListener('click', clearInputs, false);





