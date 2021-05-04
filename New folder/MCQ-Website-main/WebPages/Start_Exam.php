<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <meta charset="UTF-8">
    <title>Start Exam</title>
    <script src="custom.js"></script>
    <style>
        td {
            padding: 20px;
        }

        .wrapper {
            width: 93%;
            height: auto;
            border-radius: 10px;
            border-width: 2px;
            border-style: solid;
            padding: 5px;
            margin: 0 auto;
        }

    </style>
</head>

<body>

    <?php 
    session_start();
    $tbl_name=$_SESSION["tablename"];
    $con=mysqli_connect("localhost","root","","MyDatabase");
    $SQL="select * from ".$tbl_name." where sl=".$_SESSION["id"];
   
    $result=mysqli_query($con,$SQL);

    if(mysqli_num_rows($result)==0)
    {
        echo "<center><h1><font color='red'>No Questions Available In Database</font></h1></center>";
    }
    else
    {
    $row=mysqli_fetch_array($result);
        
        if(isset($_POST['submit_button']))
        {
            if(isset($_POST['op']))
            {
            $radio_ans=$_POST['op'];
            $database_ans=$_POST['ans'];
            if($database_ans==$radio_ans)
            {
              $_SESSION["marks"]=$_SESSION["marks"]+1;
            }
            }
            $id=$_POST['id_no'];
            if($id!=50)
            {
            $id++;
            $SQL="select * from ".$tbl_name." where sl=".$id;
    $result=mysqli_query($con,$SQL);
    $row=mysqli_fetch_array($result);
            }
            else{
                $marks=$_SESSION["marks"];
                echo '<script>alert("Question Ends. Your Marks is: '.$marks.'");</script>';
            }
        }
    ?>
    <div class="wrapper">
        <form method="post">
            <h2 id="title" name="table" style="font-family:Century Schoolbook;">
            </h2><br>
            <h3>Question:<?php echo $row['sl'] ?></h3>
            <table style="width: 100%;">
                <tr>
                    <td><textarea wrap="hard" style="height:110px;width:90%;font-size:23px; font-family:Century Schoolbook; resize:none; border-style:none; -webkit-user-select:none; height:110px;" readonly><?php echo $row['qs'] ?></textarea></td>
                </tr>
                <tr>
                    <td><input type="radio" name="op" id="op1" onclick="click(this.id)" value="<?php echo $row['op1'] ?>">
                        <font size="5px;"><?php echo $row['op1'] ?></font>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="op" id="op2" onclick="click(this.id)" value="<?php echo $row['op2'] ?>">
                        <font size="5px;"><?php echo $row['op2'] ?></font>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="op" id="op3" onclick="click(this.id)" value="<?php echo $row['op3'] ?>">
                        <font size="5px;"><?php echo $row['op3'] ?></font>
                    </td>
                </tr>
                <tr>
                    <td><input type="radio" name="op" id="op4" onclick="click(this.id)" value="<?php echo $row['op4'] ?>">
                        <font size="5px;"><?php echo $row['op4'] ?></font>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit_button" value="Next" style="width:150px; height:40px;float:right;background:black;color:white;" onclick="click()"></td>
                </tr>

                <input type="hidden" name="ans" id="js_ans" value="<?php echo $row['ans'] ?>">
                <input type="hidden" name="id_no" value="<?php echo $row['sl'] ?>">
            </table>
        </form>
    </div>
    <script>
        var text = localStorage.getItem("header");
        document.getElementById("title").innerHTML = text;

        function click(radio_id) {

            var us_ans = document.getElementById(radio_id).value;
            var ser_ans = document.getElementById("js_ans").value;
            var marks = localStorage.getItem("marks");
            if (us_ans == ser_ans) {
                marks++;
                localStorage.setItem("marks", marks);
            }
        }

    </script>
</body>
<?php }
?>
</html>
