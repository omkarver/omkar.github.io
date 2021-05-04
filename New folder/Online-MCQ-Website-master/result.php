<?php
//print_r($_POST);
if (isset($_POST["total_ques"]) && isset($_POST["username"]) && isset($_POST["email"])) {
    if ($_POST["total_ques"] != "" && $_POST["username"] != "" && $_POST["email"] != "") {

        require_once("scripts/db_config.php");

        //initializing the variables
        $marks = 0;
        $total_questions = $_POST["total_ques"];
        $username = trim($_POST["username"]);
        $email = trim($_POST["email"]);
        $total_time = $_POST["total_time"];
        $quecnt = $_POST["quecnt"];

        $userCheck = mysqli_query($con, " SELECT guestId FROM guest WHERE username ='$username' AND email ='$email'")or die(mysqli_error());
        $selecting_quiz_row = mysqli_fetch_array($userCheck);
        $guestId = $selecting_quiz_row[0];
        if ($guestId == "") {
            $guestId = $_POST["last_id"];
        } else {
            $guestId = $selecting_quiz_row[0];
        }

        if ($total_questions > 0) {
            $ct = 1;
            $marks = 0;
            for ($i = 0; $i < $quecnt; $i++) {
                $question = mysqli_real_escape_string($con, $_POST["quest" . $ct]);
                $questionCorrectAns = mysqli_real_escape_string($con, $_POST["corrans" . $ct]);
                if (isset($_POST["rads" . $ct])) {
                    $userAns = mysqli_real_escape_string($con, $_POST["rads" . $ct]);
                } else {
                    $userAns = '';
                }
                $current_date = date("Y-m-d H:i:s");
                $sql = mysqli_query($con, "INSERT INTO answers (id, guestId, question, answer_given, date_time) 
					 VALUES (NULL,'$guestId','$question','$userAns','$current_date')")or die(mysqli_error());

                if ($questionCorrectAns == $userAns) {
                    $marks = $marks + 1;
                } else {
                    $marks = $marks;
                }
                $ct++;
            }

            //getting total time taken by the user to complete the quiz
            $get_time_query = mysqli_query($con, "SELECT now() - date_time FROM guest 
	                                            WHERE username = '$username' AND email ='$email' ") or die(mysqli_error());
            $get_time = mysqli_fetch_array($get_time_query);
            $time_taken = $get_time[0];

            $duration = $total_time;

            //updating the time taken and marks by the user in the DB
            mysqli_query($con, "UPDATE guest 
	                	         SET marks='$marks', duration= '$time_taken'
	                    	      WHERE username = '$username' AND email ='$email' ")or die(mysqli_error());
        } else {
            $user_msg = 'Sorry but it seems the quiz had no questions!';
            header('location: index.php?user_msg=' . $user_msg . '');
            exit();
        }
    } else {
        $user_msg = 'Something went wrong! Contact to the Admin!!';
        header('location: index.php?user_msg=' . $user_msg . '');
        exit();
    }
} else {
    $user_msg = 'Hello candidate, to start quiz enter username and email here first!';
    header('location: index.php?user_msg=' . $user_msg . '');
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MCQ Website | Quiz Result</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        <script language="javascript">
            document.addEventListener("contextmenu", function (e) {
                e.preventDefault();
            }, false);
        </script>

    </head>
    <body class="hold-transition login-page">
        <div class="login-box" style="width: 70%!important">
            <div class="login-logo">
                <div class="image">
                    <img src="img/quiz1.png" alt="Logo Image" style="width: 363px; height:139px">
                </div>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <div id="score" align="center">

                        <div class="live_score_container">
                            <p style="font-weight: bold;font-size: 28px;">Hello <i>'<?php echo ucwords($username); ?>'</i> , Your Score</p>
                            <div>
                                <img src="img/trophy_free_score.png" style="vertical-align: bottom;">
                                <span class="trophy_score"><?php echo $marks; ?>/<?php echo $total_questions; ?> </span>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.login-card-body -->
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.min.js"></script>

    </body>
    <style>
        .trophy_score {
            color: #2C7E20;
            font-size: 40px;
            font-weight: bold;
            margin-left: 10px;
            line-height: 52px;
        }
    </style>

</html>

