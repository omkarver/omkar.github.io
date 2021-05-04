<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    <style>
        td {
            text-align: center;
            width: 25%;
        }

        li {
            padding: 10px;
        }

    </style>
    <script src="custom.js"></script>
</head>

<body>

    <h2>Choose Your Question Set:</h2>
    <h4>You have to choose your question set for start exam.</h4>
    <br><br>
    <table style="width: 100%;">
        <tr>
            <th>CCA</th>
            <th>CCPA</th>
        </tr>

        <tr>
            <td>
                <ol>
                    <li onclick="pass_data(this.id)" id="cca1">MS Windows,MS Office</li>
                    <li onclick="pass_data(this.id)" id="cca2">Introduction to Multimedia</li>
                    <li onclick="pass_data(this.id)" id="cca3">Internet Technology & Web Design</li>
                    <li onclick="pass_data(this.id)" id="cca4">Introduction to ICT Resources</li>
                    <li onclick="pass_data(this.id)" id="cca5">.NET TECHNOLOGY (VB.NET)</li>
                </ol>
            </td>
            <td>
                <ol>
                    <li onclick="pass_data(this.id)" id="ccpa1">Web Application with PHP & MYSQL</li>
                    <li onclick="pass_data(this.id)" id="ccpa2">Programming with C Language</li>
                    <li onclick="pass_data(this.id)" id="ccpa3">Introduction to DBMS Oracle</li>
                    <li onclick="pass_data(this.id)" id="ccpa4">.NET TECHNOLOGY (C#.NET)</li>
                </ol>
            </td>
        </tr>
        <tr>
            <th>CACPA</th>
            <th>CSE</th>
        </tr>
        <tr>

            <td>
                <ol>
                    <li onclick="pass_data(this.id)" id="cacpa1">Web Application using ASP.NET</li>
                    <li onclick="pass_data(this.id)" id="cacpa2">Programming with C++</li>
                    <li onclick="pass_data(this.id)" id="cacpa3">Introduction to OOPS with JAVA</li>
                    <li onclick="pass_data(this.id)" id="cacpa4">linux & Android Application</li>
                    <li onclick="pass_data(this.id)" id="cacpa5">Digital Marketing</li>
                </ol>
            </td>
            <td>
                <ol>
                    <li onclick="pass_data(this.id)" id="cse1">Data structure through C</li>
                    <li onclick="pass_data(this.id)" id="cse2">Web application with PHP,Joomla,Wordpress</li>
                    <li onclick="pass_data(this.id)" id="cse3">Advance Digital Marketing</li>
                    <li onclick="pass_data(this.id)" id="cse4">Computer Hardware & Network Technology</li>
                </ol>
            </td>
        </tr>
    </table>


    <h4>All the course are based on current syllabus of the institution.If and change in the syllabus happen that will be reflects in this website as soon as possible.</h4>
    <h4> <font color="red">Only CACPA Questions are available in database</font></h4>
</body>

</html>
