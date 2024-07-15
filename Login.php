<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpwd";
$link = mysqli_connect($servername, $username, $password, $dbname);
$conn = mysqli_select_db($link, $dbname);
?>

<html>
    <head>
        <title>Case Study - Delos Reyes, Edrian V</title>
        <style>
            body {margin:0px; padding:0px; background-color: #D7D8DA; font-family:'Bookman Old Style'; }

            /* TEXT FORMATTING */
            h1, h2, h3 {font-family: Cooper Black;}
            h1 {font-size: 48px; margin-top:20px; }
            h2 {font-size: 32px; }
            h3 {font-size: 24px; }
            p {font-size: 24px; margin-left:50px; }

            label {font-size: 24px; }
            table, tr, td {border: 1px solid black; border-collapse: collapse;;}
            input {margin: 10px 5px; height: 40px; width: 20%; }
            .btn {background-color:#00008a; color: #fff; height: 50px; width: 200px; font-size: 16px; }

            .div_col1 {width:75%; }
        </style>
    </head>
    
    <body> <center>
        <div class="div_col1">
            <img src="CDSL Logo Transparent.png" alt="Logo of Colegio de San Lorenzo" width="200px">
            <H1>Persons with Disability Database</h1>  
            <h2>Login</h2>
            <label for="username">Username: </label>
            <input type="text" id="username">
            <br>
            <label for="password">Password: </label>
            <input type="password" id="password">
            <br>
            <button class="btn" id="login" onclick="login()">Login</button>
            <br><br>
            <a href="" onclick="forgotPwd()">Forgot password?</a>
                
        </div>
    </center>

    <script>
        document.getElementById("username").focus()
        function login()
        {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;
            
            if (username == "admin")
            {
                if (password == "sanlo")
                {
                    window.open("Admin.php", "_self");
                }
                else
                {
                    alert("Incorrect password. Please try again.");
                }
            }
            else
            {
                alert("Incorrect username and password. Please try again.");
            }
        }

        function forgotPwd()
        {
            alert("Username: admin\nPassword: sanlo");
        }
    </script>
    </body>
</html>

<?php
// UPDATE using PHP
if (isset($_POST["update"]))
{
    mysqli_query($link, "update fullName set `First Name`='$_POST[firstName]' where ID='$_POST[id]'");
    mysqli_query($link, "update fullName set `Middle Name`='$_POST[middleName]' where ID='$_POST[id]'");
    mysqli_query($link, "update fullName set `Last Name`='$_POST[lastName]' where ID='$_POST[id]'");
}

// SEARCH using PHP
if (isset($_POST["search"]))
{
    $res = mysqli_query($link, "select * from pwdinfo where PwdIdNumber='$_POST[PwdIdNumber]'");
    echo "<table border=1>";
    echo "<tr>";
    echo "<th>"; echo "ID"; echo "</th>";
    echo "<th>"; echo "First Name"; echo "</th>";
    echo "<th>"; echo "Middle Name"; echo "</th>";
    echo "<th>"; echo "Last Name"; echo "</th>";
    echo "<th>"; echo "Birthday"; echo "</th>";
    echo "<th>"; echo "Gender"; echo "</th>";
    echo "<th>"; echo "Marital Status"; echo "</th>";
    echo "<th>"; echo "Address"; echo "</th>";
    echo "<th>"; echo "Contact Number "; echo "</th>";
    echo "<th>"; echo "Email Address"; echo "</th>";
    echo "<th>"; echo "Disability Type"; echo "</th>";
    echo "<th>"; echo "Cause of Disability"; echo "</th>";
    echo "<th>"; echo "PWD ID Number"; echo "</th>";
    echo "<th>"; echo "Educational Attainment"; echo "</th>";
    echo "<th>"; echo "Occupation"; echo "</th>";
    echo "<th>"; echo "Bank Name"; echo "</th>";
    echo "<th>"; echo "Bank Account Number"; echo "</th>";
    echo "</tr>";
    while ($row = mysqli_fetch_array($res))
    {
    echo "<tr>";
    echo "<td>"; echo $row["ID"]; echo "</td>";
    echo "<td>"; echo $row["FirstName"]; echo "</td>";
    echo "<td>"; echo $row["MiddleName"]; echo "</td>";
    echo "<td>"; echo $row["LastName"]; echo "</td>";
    echo "<td>"; echo $row["Birthday"]; echo "</td>";
    echo "<td>"; echo $row["Gender"]; echo "</td>";
    echo "<td>"; echo $row["MaritalStatus"]; echo "</td>";
    echo "<td>"; echo $row["Address"]; echo "</td>";
    echo "<td>"; echo $row["ContactNumber"]; echo "</td>";
    echo "<td>"; echo $row["EmailAddress"]; echo "</td>";
    echo "<td>"; echo $row["DisabilityType"]; echo "</td>";
    echo "<td>"; echo $row["CauseOfDisability"]; echo "</td>";
    echo "<td>"; echo $row["PwdIdNumber"]; echo "</td>";
    echo "<td>"; echo $row["EducationalAttainment"]; echo "</td>";
    echo "<td>"; echo $row["Occupation"]; echo "</td>";
    echo "<td>"; echo $row["BankName"]; echo "</td>";
    echo "<td>"; echo $row["BankAccountNumber"]; echo "</td>";
    echo "</tr>";
    }
    echo "</table>";
    
    // Ask if user wants to UPDATE
    echo '<center>';
    echo '<input class="btn" type="submit" name="update" value="Update"> <br>';
    echo '</center>';
}
?>