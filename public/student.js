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
var nameForm = $('#name');
var subject = $('#subject');
var grade = $('#grade'); 
var studentName = document.getElementById('student-name');
var table = document.getElementById('grades');
var averageCalculated = document.getElementById('student-average');
var studentAwesome = document.getElementById('student-awesome');
var studentPractice = document.getElementById('student-Practice');


//----------Click Action Functions-----------
var submitName = function() {
    $('#add-grade').removeAttr('disabled');
    $('#calculate-average').removeAttr('disabled');
    $('#student-name').text($('#name').val());
    student.name = $('#name').val();
}

var updateStudentInfo = function() {
   student.subjects.push(subject.val());
   student.grades.push(Number(grade.val()));
   var newRow = document.createElement('tr');
   var newContent = "<td>"+ subject.val() +"</td>" + "<td>"+ grade.val() +"</td>";
    newRow.innerHTML = newContent;
    table.insertBefore(newRow, table.firstChild);
    subject.val('');
    grade.val('');
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
        return calculateAverage() >= awesomeGrade;
        }

        if(isAwesome) {
            studentAwesome.removeAttribute('class');
        } else {
            studentPractice.removeAttribute('class');
        };
    };


//---------Button Commands-------------------
$('#save-name').click(submitName);
$('#add-grade').click(updateStudentInfo);
$('#calculate-average').click(calculateAverage);



