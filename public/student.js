'use strict';
var student = {
    awesomeGrade: 80,
    name: null,
    subjects: [],
    grades: [],
    // calculateAverage: function () {
    //     var average = 0;
    //     this.subjects.forEach(function (subject) {
    //         average += subject.grade;
    //     });
    //     return average / this.subjects.length;
    // },
    // addSubject: function (name, grade) {
    //     var subject = {
    //         name: name,
    //         grade: grade
    //     };
    //     this.subjects.push(subject);
    // },
    // isAwesome: function () {
    //     return this.calculateAverage() > this.awesomeGrade;
    // }
};

var awesomeGrade = 80;
var nameForm = document.getElementById('name');
var subject = document.getElementById('subject');
var grade = document.getElementById('grade');
var saveButton = document.getElementById('save-name');
var addGrade = document.getElementById('add-grade');
var calAvgBtn = document.getElementById('calculate-average');
var studentName = document.getElementById('student-name');
var table = document.getElementById('grades');
var averageCalculated = document.getElementById('student-average');
var studentAwesome = document.getElementById('student-awesome');
var studentPractice = document.getElementById('student-Practice');


//----------Click Action Functions-----------
var submitName = function() {
    addGrade.removeAttribute('disabled');
    calAvgBtn.removeAttribute('disabled');
    studentName.innerHTML = nameForm.value;
    student.name = nameForm.value;
}

var updateStudentInfo = function() {
   student.subjects.push(subject.value);
   student.grades.push(Number(grade.value));
   var newRow = document.createElement('tr');
   var newContent = "<td>"+ subject.value +"</td>" + "<td>"+ grade.value +"</td>";
    newRow.innerHTML = newContent;
    table.insertBefore(newRow, table.firstChild);
    subject.value = '';
    grade.value = '';
};

 var calculateAverage = function () {
        updateStudentInfo();
        var average = 0;
        var numberOfGrades = student.grades.length;
        student.grades.forEach(function (grade) {
            average += grade;
            });
        average = average / numberOfGrades;
        averageCalculated.innerHTML = average;

        var isAwesome = function () {
        return calculateAverage() > awesomeGrade;
        }

        if(isAwesome) {
            studentAwesome.removeAttribute('class');
        } else {
            studentPractice.removeAttribute('class');
        };
    };


//---------Button Commands-------------------
saveButton.addEventListener('click', submitName, false);
addGrade.addEventListener('click', updateStudentInfo, false);
calAvgBtn.addEventListener('click', calculateAverage, false);



