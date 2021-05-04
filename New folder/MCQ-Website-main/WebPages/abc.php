<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="custom.js"></script>
    <style type="text/css">
        input[type="text"] {
            border-style: none;
            font-size: 20px;
        }

        input[type="submit"] {
            height: 50px;
            width: 150px;
            background: black;
            color: white;
        }

    </style>
</head>

<body>

    <div style="padding:20px;">
        <h1 id="exam_name"></h1><br><br><br>
        <form method="post">
            <input type="hidden" name="textbox" id="table_name">
            <label style="font-size:23px;">You are in the starting page of examination.The exam will start after pressing the <b>Start Exam</b> button.This Full website is developed By Soumya Manna and this website built for helping the Intellegent students to carry a GREAT MARKS in MCQ examination.Which has 50 question and if you give the right answer of all questions you will get full marks.so this examination is very Important for students. </label><br><br>
            <label style="font-size:21px;">আপনি এখন পরীক্ষা শুরু করার প্রথম পৃষ্ঠাতে আছেন ,এখানে স্টার্ট বতামে ক্লিক করার সাথে সাথে আপনার সময় শুরু হয়ে যাবে এবং এর পর আপনি আর থামতে পারবেন না পরীক্ষা শেষ না করা পর্যন্ত।এই ওয়েবসাইটটি রামকৃষ্ণ মিশন শিল্প মান্দিরের ছাত্র <b>সৌম্য মান্না </b>নির্মাণ করেছেন। এটি প্রতিষ্ঠানের ছাত্রদের MCQ পরিক্ষাতে অনেক ভাল ফলাফল করতে সাহায্য করবে। </label>
            <br><br><br>
            <center><input type="submit" name="start" value="Start Exam"></center>
        </form>
    </div>

    <script>
        var text = localStorage.getItem("table");
        var exam = localStorage.getItem("header_str");
        document.getElementById("table_name").value = text;
        document.getElementById("exam_name").innerHTML = localStorage.getItem("header");

    </script>

</body>

</html>
<?php
if(isset($_POST['start']))
{
$value=$_POST['textbox'];
session_start();

$_SESSION["tablename"]=$value;
    $_SESSION["id"]=1;
    $_SESSION["marks"]=0;
    header("Location: Start_Exam.php");
}
?>
