<?php
require_once("scripts/db_config.php");

//Check post values
if (isset($_POST['username']) && $_POST['username'] != "") {
    $username = mysqli_real_escape_string($con, $_POST['username']);

    if (isset($_POST['email']) && $_POST['email'] != "") {
        $email = mysqli_real_escape_string($con,$_POST['email']);

        //total time converted to seconds
        $total_time = 10 * 60;

        //checking if user has already taken this quiz
        $userCheck = mysqli_query($con, " SELECT guestId as id FROM guest WHERE username ='$username' AND email ='$email'")or die(mysqli_error());

        if (!(mysqli_num_rows($userCheck) < 1)) {
            $getdata = mysqli_fetch_array($userCheck);
            $user_msg = 'Sorry, but ' . $username . ', has already attempted the quiz.Please try again after 6 month!';
            header('location: index.php?user_msg=' . $user_msg . '');
            exit();
        } else {
            //else inserting into the table 0000-00-00 00:00:00 2020-09-25 11:03:32
            $current_date = date("Y-m-d H:i:s");
            $sql = mysqli_query($con, "INSERT INTO guest (guestId,username, email, marks,duration, date_time) 
					 VALUES (NULL,'$username', '$email','0','0','$current_date')")or die(mysqli_error());
            if ($sql) {
                $last_id = mysqli_insert_id($con);
            } else {
                $last_id = 0;
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
        }
    } else {
        $email = "";
        $user_msg = 'Hello candidate, to start quiz enter email here first!';
        header('location: index.php?user_msg=' . $user_msg . '');
        exit();
    }
} else {
    $username = "";
    $user_msg = 'Hello candidate, to start quiz enter username here first!';
    header('location: index.php?user_msg=' . $user_msg . '');
    exit();
}

//getting body i.e. questions, options and submit button for the page
//if (isset($_POST['amount']) && $_POST['amount']!="") {
$amount = 10;

// API URL
$url = "https://opentdb.com/api.php?amount=" . $amount;

$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);

// Convert JSON string to Array
$mcqArray = json_decode($response, true);

//print_r($mcqArray);        // Dump all data of the Array
//Shuffle function maintaing key value
function shuffle_assoc($my_array) {
    $keys = array_keys($my_array);
    shuffle($keys);

    foreach ($keys as $key) {
        $new[$key] = $my_array[$key];
    }
    $my_array = $new;
    return $my_array;
}

//initialize the optput variable
$m_output = '';
//print_r($mcqArray["results"]);exit();
if (empty($mcqArray["results"] || count($mcqArray["results"]) == 0)) {
    $user_msg = 'Hey, weird, but it seems there are no questions for the quiz!';
    header('location: index.php?user_msg=' . $user_msg . '');
    exit();
}

//setting Question No. to 1 on quiz page
$m_display_ID = 1;

//looping through the questions and adding them on the page
//Access Array data
foreach ($mcqArray["results"] as $key => $value) {
//initializing the options
    $m_answers = '';

//getting row attributes in variables
    $category = $value["category"]; //question category
    $type = $value["type"]; // question type
    $difficulty = ucfirst($value["difficulty"]); //question difficulty level
    $question = $value["question"]; // question
    $correct_answer = $value["correct_answer"]; // question correct answer
    $incorrect_answers = $value["incorrect_answers"]; // question incorrect answer
    $incorrect_answers_string = implode("-", $value["incorrect_answers"]); // question incorrect option string
    $question_options = array_merge((array) $correct_answer, $incorrect_answers); // question options
    $question_rand_options = shuffle_assoc($question_options); // question with random options
//    print_r($question_rand_options);
//html for question
    $m_q = '<tr>
		<td width="40px" rowspan="1" align="center">
                    <strong>' . $m_display_ID . '.</strong>
                    <input type="hidden" name="quecnt" value="' . $m_display_ID . '">
		</td>
		<td>
                    <pre class="question_style" style=" margin-bottom: 0px;"><strong><div style="width: 730px;word-break: break-word;white-space: normal;">' . $question . '</div></strong></pre>
                        <input type="hidden" name="quest' . $m_display_ID . '"[]" value="' . $question . '">
                        <input type="hidden" name="corrans' . $m_display_ID . '"[]" value="' . $correct_answer . '">
		</td>
            </tr>';

    if ($type != "" && $difficulty != "") {
        $m_q .= '<tr>'
                . '<td></td>'
                . '<td>'
                . '<pre class="brush: ' . $difficulty . ';" style="padding: 0px 5px;text-align:right;margin-bottom: 2px;"> Difficulty Level : ' . $difficulty . '</pre>
                    </td>
                    </tr>';
    }

//gathering options of the question here
    $m_answers .= '<tr><td></td><td style="background-color: #f6f6ce;padding-left: 20px;padding-top: 20px;">';
//adding html to individual options here
    foreach ($question_rand_options as $value) {
        $m_answers .= ' <label style="cursor:pointer;">
			<input type="radio" name="rads' . $m_display_ID . '" value="' . $value . '" style="margin-right: 10px!important;">' . $value . '</label>
			<br /><br />';
    }

    $m_answers .= '</td></tr><tr height="20px"></tr>';

// the complete div that is sent back to quiz.php
    $m_output .= '' . $m_q . $m_answers;

    $m_display_ID++;
}

$m_display_ID--;

//adding html for submit button
$m_output .= '  <tr>
    <td colspan="2" align="center">
    <span id="m_btnSpan">
    <a href="javascript:{}" onclick="quiz_submit()" class="myButton btn btn-info"> Finish </a>
    </span>
    </td>
    </tr>';

//adding html for hidden values to be sent to result.php
$m_output .= '<input type="hidden" name="username" value="' . $username . '">
					  <input type="hidden" name="email" value="' . $email . '">
					  <input type="hidden" name="total_ques" value="' . $m_display_ID . '">
					  <input type="hidden" name="total_time" value="' . $total_time . '">
					  <input type="hidden" name="last_id" value="' . $last_id . '">
					  ';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MCQ Website | Quiz</title>
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
            //function that submits the quiz
            function quiz_submit() {
                window.onbeforeunload = null;
                document.getElementById('quiz_form').submit();
            }

            //function that keeps the counter going
            function timer(secs) {
                var ele = document.getElementById("countdown");
                ele.innerHTML = "Your Time Starts Now";
                var mins_rem = parseInt(secs / 60);
                var secs_rem = secs % 60;

                if (mins_rem < 10 && secs_rem >= 10)
                    ele.innerHTML = "Time Remaining: " + "0" + mins_rem + ":" + secs_rem;
                else if (secs_rem < 10 && mins_rem >= 10)
                    ele.innerHTML = "Time Remaining: " + mins_rem + ":0" + secs_rem;
                else if (secs_rem < 10 && mins_rem < 10)
                    ele.innerHTML = "Time Remaining: " + "0" + mins_rem + ":0" + secs_rem;
                else
                    ele.innerHTML = "Time Remaining: " + mins_rem + ":" + secs_rem;

                if (mins_rem == "00" && secs_rem < 1) {
                    quiz_submit();
                }
                secs--;
                //to animate the timer otherwise it'd just stay at the number entered
                //calling timer() again after 1 sec
                var time_again = setTimeout('timer(' + secs + ')', 1000);
            }

            //wwarning confirmation that appears on closing/refreshing the quiz window/tab
            function closeEditorWarning() {
                return "Really want to quit!?";
            }
            window.onbeforeunload = closeEditorWarning;
        </script>
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
                    <div id="countdown">
                        <script type="text/javascript">
                            timer(<?php echo $total_time; ?>);
                        </script>
                    </div>
                    <div id="main_body" align="center" style="margin-bottom: 100px;">
                        <form id="quiz_form" name="quiz_form_name" action="result.php" method="POST">
                            <br />
                            <table width="780px" align="center">
                                <?php echo $m_output ?>
                            </table>
                        </form>
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
        div#countdown {
            text-align: right!important;
            font-style: italic!important;
            font-family: cursive!important;
        }

    </style>
</html>

