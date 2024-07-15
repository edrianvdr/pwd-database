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
            input, select {margin: 10px 5px; height: 40px; width: 20%; }
            .btn {background-color:#00008a; color: #fff; height: 50px; width: 200px; font-size: 16px; margin: 5px; }
            #inputAddress, #inputCauseOfDisability {height: 40px; width: 60%; }

            .div_col1 {width:75%; }

            .btn a {color:#fff; padding: 15px 75px; text-decoration:none; }
        </style>
    </head>
    
    <body> <center>
    <div class="div_col1">
        <div id="admin">
            <img src="CDSL Logo Transparent.png" alt="Logo of Colegio de San Lorenzo" width="200px">

            <H1>Persons with Disability Database</h1>  
                <form name="form2" action="" method="post">
                    <button class="btn">
                        <a href="Admin.php">
                            Home
                        </a>
                    </button>  

                    <input class="btn" type="submit" name="view" value="View">

                    <button class="btn">
                        <a href="Index.php">
                            Logout
                        </a>
                    </button>
                    <br>

                    <!-- INPUT FIELDS -->
                    <h2>Personal Information</h2>
                    <input type="text" name="FirstName" placeholder="First Name">
                    <input type="text" name="MiddleName" placeholder="Middle Name">
                    <input type="text" name="LastName" placeholder="Last Name"> <br>
                    
                    <input type="date" name="Birthday" placeholder="First Name">  <br>
                    <select name="Gender" > 
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <select name="MaritalStatus" > 
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                        <option value="Separated">Separated</option>
                        <option value="Divorced">Divorced</option>
                    </select><br>

                    <input id="inputAddress" type="text" name="Address" placeholder="Address"> <br>
                    
                    <h2>Contact Information</h2>
                    <input type="text" name="ContactNumber" placeholder="Contact Number"> <br>
                    <input type="text" name="EmailAddress" placeholder="Email Address"> 

                    <h2>Disability Information</h2>
                    <select name="DisabilityType" > 
                        <option value="Psychosocial Disability">Psychosocial Disability</option>
                        <option value="Chronic Illness">Chronic Illness</option>
                        <option value="Learning Disability">Learning Disability</option>
                        <option value="Mental Disability">Mental Disability</option>
                        <option value="Visual Disability">Visual Disability</option>
                        <option value="Orthopedic Disability">Orthopedic Disability</option>
                        <option value="Communication Disability">Communication Disability</option>
                    </select>
                    <input type="text" name="PwdIdNumber" placeholder="PWD ID Number"> <br>
                    <input id="inputCauseOfDisability" type="text" name="CauseOfDisability" placeholder="Cause Of Disability"> <br>

                    <h2>Education & Employment</h2>
                    <input type="text" name="EducationalAttainment" placeholder="Educational Attainment"> <br>
                    <input type="text" name="Occupation" placeholder="Occupation"> <br>

                    <h2>Bank Details</h2>
                    <input type="text" name="BankName" placeholder="Bank Name"> <br>
                    <input type="text" name="BankAccountNumber" placeholder="Bank Account Number"> 
                    
                    <br>                    

                    <input class="btn" type="submit" name="add" value="Add"> 
                </form>
            </div>
        </div>
    </center>
    </body>
</html>

<?php
// ADD record to SQL
if (isset($_POST["add"]))
{
    mysqli_query($link, "insert into pwdinfo values
    ('', 
    '$_POST[FirstName]', 
    '$_POST[MiddleName]', 
    '$_POST[LastName]', 
    '$_POST[Birthday]', 
    '$_POST[Gender]', 
    '$_POST[MaritalStatus]', 
    '$_POST[Address]', 
    '$_POST[ContactNumber]', 
    '$_POST[EmailAddress]', 
    '$_POST[DisabilityType]', 
    '$_POST[CauseOfDisability]', 
    '$_POST[PwdIdNumber]', 
    '$_POST[EducationalAttainment]', 
    '$_POST[Occupation]', 
    '$_POST[BankName]', 
    '$_POST[BankAccountNumber]')");
    echo "<script>alert('Record added');</script>";
}

// VIEW DATABASE with FILTER
if (isset($_POST["view"]))
{
    echo '<form name="form3" action="" method="post">';
    echo '<center>';
    echo '<h2>Filter by</h2>';
    echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
    echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
    echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
    echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
    echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
    echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
    echo '<br>';
    echo '</center>';
    echo '</form>';
}

    // VIEW ALL DATA
    if (isset($_POST["NoFilter"]))
    {
        echo '<form name="form3" action="" method="post">';
        echo '<center>';
        echo '<h2>Filter by</h2>';
        echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
        echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
        echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
        echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
        echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
        echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
        echo '<br>';
        echo '</center>';
        echo '</form>';

        $res = mysqli_query($link, "select * from pwdinfo");
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
    }

    // VIEW PERSONAL INFORMATION ONLI
    if (isset($_POST["PersonalInformation"]))
    {
        echo '<form name="form3" action="" method="post">';
        echo '<center>';
        echo '<h2>Filter by</h2>';
        echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
        echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
        echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
        echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
        echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
        echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
        echo '<br>';
        echo '</center>';
        echo '</form>';

        $res = mysqli_query($link, "select * from pwdinfo");
        echo '<center>';
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
        echo "</tr>";
        }
        echo "</table>";
        echo '</center>';
    }

    // VIEW CONTACT INFOMATION ONLY
    if (isset($_POST["ContactInformation"]))
    {
        echo '<form name="form3" action="" method="post">';
        echo '<center>';
        echo '<h2>Filter by</h2>';
        echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
        echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
        echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
        echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
        echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
        echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
        echo '<br>';
        echo '</center>';
        echo '</form>';

        $res = mysqli_query($link, "select * from pwdinfo");
        echo '<center>';
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Middle Name"; echo "</th>";
        echo "<th>"; echo "Last Name"; echo "</th>";
        echo "<th>"; echo "Contact Number "; echo "</th>";
        echo "<th>"; echo "Email Address"; echo "</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res))
        {
        echo "<tr>";
        echo "<td>"; echo $row["ID"]; echo "</td>";
        echo "<td>"; echo $row["FirstName"]; echo "</td>";
        echo "<td>"; echo $row["MiddleName"]; echo "</td>";
        echo "<td>"; echo $row["LastName"]; echo "</td>";
        echo "<td>"; echo $row["ContactNumber"]; echo "</td>";
        echo "<td>"; echo $row["EmailAddress"]; echo "</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo '</center>';
    }

    // VIEW DISABILITY INFORMATION ONLY
    if (isset($_POST["DisabilityInformation"]))
    {
        echo '<form name="form3" action="" method="post">';
        echo '<center>';
        echo '<h2>Filter by</h2>';
        echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
        echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
        echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
        echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
        echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
        echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
        echo '<br>';
        echo '</center>';
        echo '</form>';

        $res = mysqli_query($link, "select * from pwdinfo");
        echo '<center>';
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Middle Name"; echo "</th>";
        echo "<th>"; echo "Last Name"; echo "</th>";
        echo "<th>"; echo "Disability Type"; echo "</th>";
        echo "<th>"; echo "Cause of Disability"; echo "</th>";
        echo "<th>"; echo "PWD ID Number"; echo "</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res))
        {
        echo "<tr>";
        echo "<td>"; echo $row["ID"]; echo "</td>";
        echo "<td>"; echo $row["FirstName"]; echo "</td>";
        echo "<td>"; echo $row["MiddleName"]; echo "</td>";
        echo "<td>"; echo $row["LastName"]; echo "</td>";
        echo "<td>"; echo $row["DisabilityType"]; echo "</td>";
        echo "<td>"; echo $row["CauseOfDisability"]; echo "</td>";
        echo "<td>"; echo $row["PwdIdNumber"]; echo "</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo '</center>';
    }

    // VIEW EDUCATION & EMPLOYMENT ONLY
    if (isset($_POST["EducationEmployment"]))
    {
        echo '<form name="form3" action="" method="post">';
        echo '<center>';
        echo '<h2>Filter by</h2>';
        echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
        echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
        echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
        echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
        echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
        echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
        echo '<br>';
        echo '</center>';
        echo '</form>';

        $res = mysqli_query($link, "select * from pwdinfo");
        echo '<center>';
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Middle Name"; echo "</th>";
        echo "<th>"; echo "Last Name"; echo "</th>";
        echo "<th>"; echo "Educational Attainment"; echo "</th>";
        echo "<th>"; echo "Occupation"; echo "</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res))
        {
        echo "<tr>";
        echo "<td>"; echo $row["ID"]; echo "</td>";
        echo "<td>"; echo $row["FirstName"]; echo "</td>";
        echo "<td>"; echo $row["MiddleName"]; echo "</td>";
        echo "<td>"; echo $row["LastName"]; echo "</td>";
        echo "<td>"; echo $row["EducationalAttainment"]; echo "</td>";
        echo "<td>"; echo $row["Occupation"]; echo "</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo '</center>';
    }
    
    // VIEW BANK DETAILS ONLY
    if (isset($_POST["BankDetails"]))
    {
        echo '<form name="form3" action="" method="post">';
        echo '<center>';
        echo '<h2>Filter by</h2>';
        echo '<input class="btn" type="submit" name="NoFilter" value="No Filter">';
        echo '<input class="btn" type="submit" name="PersonalInformation" value="Personal Information">';
        echo '<input class="btn" type="submit" name="ContactInformation" value="Contact Information">';
        echo '<input class="btn" type="submit" name="DisabilityInformation" value="Disability Information">';
        echo '<input class="btn" type="submit" name="EducationEmployment" value="Education & Employment">';
        echo '<input class="btn" type="submit" name="BankDetails" value="Bank Details">';
        echo '<br>';
        echo '</center>';
        echo '</form>';
        
        $res = mysqli_query($link, "select * from pwdinfo");
        echo '<center>';
        echo "<table border=1>";
        echo "<tr>";
        echo "<th>"; echo "ID"; echo "</th>";
        echo "<th>"; echo "First Name"; echo "</th>";
        echo "<th>"; echo "Middle Name"; echo "</th>";
        echo "<th>"; echo "Last Name"; echo "</th>";
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
        echo "<td>"; echo $row["BankName"]; echo "</td>";
        echo "<td>"; echo $row["BankAccountNumber"]; echo "</td>";
        echo "</tr>";
        }
        echo "</table>";
        echo '</center>';
    }