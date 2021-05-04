<?php
require_once("scripts/db_config.php");
$user_taken = "";
if (isset($_POST['user_msg']) && $_POST['user_msg'] != "") {
    $user_taken = $_POST['user_msg'];
}
if (isset($_GET['user_msg']) && $_GET['user_msg'] != "") {
    $user_taken = $_GET['user_msg'];
}

$total_questions = 10;
$total_time = 10;

if ($total_questions != 0 && $total_time != 0)
    $first_item = 'You have ' . $total_time . ' mins for attempting ' . $total_questions . ' questions.';
else
    $first_item = '<strong>Sorry,but the quiz is not available right now!</strong>';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MCQ Website | Quiz Instruction</title>
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

        <script type="text/javascript">
            function validateform() {
                var name = document.forms["userForm"]["username"].value;
                var email = document.forms["userForm"]["email"].value;
                if (name == null || name == "") {
                    document.getElementById("username").innerHTML = "Please Enter Your Name!";
                    document.forms["userForm"]["username"].focus();
                    return false;
                }
                if (email != null || email != "") {
                    ValidateEmail(email);
                } else {
                    document.getElementById("email").innerHTML = "Please Enter Your Email Address!";
                    document.forms["userForm"]["email"].focus();
                    return false;
                }
                document.getElementById('myForm').submit();
                return true;
            }

            function ValidateEmail(email) {
                var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                if (email.value.match(mailformat)) {
                    return true;
                } else {
                    document.getElementById("email").innerHTML = "You have entered an invalid email address!";
                    document.forms["userForm"]["email"].focus();
                    return false;
                }
            }
        </script>

        <script language="javascript">
            document.addEventListener("contextmenu", function (e) {
                e.preventDefault();
            }, false);
        </script>

    </head>
    <body class="hold-transition login-page">
        <div class="login-box" style="width: 60%!important">
            <div class="login-logo">
                <div class="image">
                    <img src="img/quiz1.png" alt="Logo Image" style="width: 363px; height:139px">
                </div>
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    <h3 class="content-header text-dark">Multiple Choice Questions Online <big>QUIZ</big></h3>
                    <div class="content px-2">
                        <p>Following quize contains the questions from different subjects and topics for example, general knowledge (GK), current affairs, everyday science (or general science). where each question has four options and one correct answer.</p>
                        <h3 align="left" class="text-bold text-dark mt-3">Insructions</h3>
                        <div align="left">
                            <ul>
                                <li><?php echo $first_item; ?></li>
                                <li>If time runs out, your quiz will automatically be submitted.</li>
                                <li>You will only be getting confirmation pop-up once if you try to leave during the quiz.</li>
                                <li>To attempt quiz you need to first fill name and email then click button to continue.</li>
                            </ul>
                        </div>
                        <h6>GOOD LUCK!</h6>
                    </div>
                    <form id="myForm" name="userForm" action="quiz.php" method="post" onsubmit="return validateform()" style="width: 40%;margin: 0 auto;display: block">
                        <div class="input-group mb-3">
                            <input name="username" id="username" type="text" class="form-control" placeholder="Full Name" required="">
                            <div id="usernameerr"></div>
                        </div>
                        <div class="input-group mb-3">
                            <input name="email" id="email" type="text" class="form-control" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required="">
                            <div id="emailerr"></div>
                        </div>
                        <div class="row" style="padding-bottom:25px;">
                            <div class="col-12">
                                <input class="myButton btn btn-info btn-block" id="submitfrm" id="submitfrm" type="submit" value="Click Here to Start">
                            </div>
                        </div>
                        <input type="hidden" id="attempt" name="attempt" value="<?php echo $user_taken ?>">
                    </form>
                    <div class="content px-2">
                        <p id="errorMain"><?php echo $user_taken ?></p>
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
        .login-card-body .input-group .form-control, .register-card-body .input-group .form-control{
            border-right: 1px solid #ced4da!important;
            border-radius: .25rem!important;
        }
        p#errorMain {
            color: red;
            font-weight: bold;
        }
    </style>
</html>

