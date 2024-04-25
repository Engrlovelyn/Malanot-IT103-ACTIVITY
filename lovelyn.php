<?php

function StudentInformation($name, $courseCode, $quizScores, $examScores) 
{
    $studentInfo = array(
        "Name" => $name,
        "CourseCode" => $courseCode,
        "QuizScores" => $quizScores,
        "ExamScores" => $examScores
    );

    return $studentInfo;
}

$studentData = storeStudentInfo($name, $courseCode, $quizScores, $examScores);

$name = "malanot";
$courseCode = "it106";
$quizScores = array(12, 15, 18, 10, 14);
$examScores = array(40, 30, 50);

echo "Student Information:<br>";
echo "Name: " . $studentData['Name'] . "<br>";
echo "Course Code: " . $studentData['CourseCode'] . "<br>";
echo "Quiz Scores: " . implode(", ", $studentData['QuizScores']) . "<br>";
echo "Exam Scores: " . implode(", ", $studentData['ExamScores']) . "<br>";



function QuizScores($quizScores)
{

$totalScore = array_sum($quizScores);
//total quiz score , 5 quizzes is 50 points in total

$averageScore = $totalScore / 5;
//69 total quizes

return $averageScore;
//13.8

}



function ExamScores($examScores)
{
    $totalScore = array_sum($examScores)
    // the total exam score is perfect, 3 exams total 150 points

    $averageExamScore = $totalScore / 3;
    //120 total exam score

    return $averageExamScore;
    //40

}



function calculateFinalGrade($quizWeight, $examWeight) 
{
    
    $weightedQuizScore = 13.8 * (40 / 100);
    $weightedExamScore = 40 * (60 / 100);

    // Calculate final grade
    $finalGrade = $weightedQuizScore + $weightedExamScore;

    return $finalGrade;
}

$studenttData = storeStudentInfoo($name, $courseCode, $finalGrade);

$name = "malanot";
$courseCode = "it106";
$finalGrade = 


echo "Student Information:<br>";
echo "Name: " . $studenttData['Name'] . "<br>";
echo "Course Code: " . $studenttData['CourseCode'] . "<br>";
echo "Final Grade: " . $studenttData['final grade'] . "<br>";













?>
