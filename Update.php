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
            .btnList {background-color:#8A0000; color: #fff; height: 30px; width: 160px; font-size: 14px; margin: 5px; }
            #tblListOfData, #tblListOfData tr, #tblListOfData td {border: 1px solid #D5D7D9;}
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
                    <p>
                        <b>Note: </b>View the database first to be certain of the record you're going to update.
                    </p>
                    
                    <h2>Select the type of data to update</h2>
                    <!-- LIST OF DATA TO UPDATE -->
                    <table id="tblListOfData"><tr>
                    <td>
                        <input class="btnList" type="submit" name="FirstNameUpdate" value="First Name">  <br>
                        <input class="btnList" type="submit" name="MiddleNameUpdate" value="Middle Name">  <br>
                        <input class="btnList" type="submit" name="LastNameUpdate" value="Last Name">  <br>
                        <input class="btnList" type="submit" name="BirthdayUpdate" value="Birthday">  <br>
                        <input class="btnList" type="submit" name="GenderUpdate" value="Gender">  <br>
                        <input class="btnList" type="submit" name="MaritalStatusUpdate" value="Marital Status">  <br>
                        <input class="btnList" type="submit" name="AddressUpdate" value="Address">  <br>
                        <input class="btnList" type="submit" name="ContactNumberUpdate" value="Contact Number">  <br>
                    </td>
                    <td>
                        <input class="btnList" type="submit" name="EmailAddressUpdate" value="Email Address">  <br>
                        <input class="btnList" type="submit" name="DisabilityTypeUpdate" value="Disability Type">  <br>
                        <input class="btnList" type="submit" name="CauseOfDisabilityUpdate" value="Cause Of Disability">  <br>
                        <input class="btnList" type="submit" name="PwdIdNumberUpdate" value="PWD ID Number">  <br>
                        <input class="btnList" type="submit" name="EducationalAttainmentUpdate" value="Educational Attainment">  <br>
                        <input class="btnList" type="submit" name="OccupationUpdate" value="Occupation">  <br>
                        <input class="btnList" type="submit" name="BankNameUpdate" value="Bank Name">  <br>
                        <input class="btnList" type="submit" name="BankAccountNumberUpdate" value="Bank Account Number">  <br>
                    </td>
                    </tr></table>
                </form>
            </div>
        </div>
    </center>
    </body>
</html>

<?php
// UPDATE DATABASE
if (isset($_POST["FirstNameUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new First Name</h2>
        <input type="text" name="FirstName" placeholder="New First Name"> 
        
        <br>

        <input class="btn" type="submit" name="update1" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["MiddleNameUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Middle Name</h2>
        <input type="text" name="MiddleName" placeholder="New Middle Name"> 
        
        <br>

        <input class="btn" type="submit" name="update2" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["LastNameUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Last Name</h2>
        <input type="text" name="LastName" placeholder="New Last Name"> 
        
        <br>

        <input class="btn" type="submit" name="update3" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["BirthdayUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Birthday</h2>
        <input type="date" name="Birthday" placeholder="New Birthday"> 
        
        <br>

        <input class="btn" type="submit" name="update4" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["GenderUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Gender</h2>
        <select name="Gender" > 
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        
        <br>

        <input class="btn" type="submit" name="update5" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["MaritalStatusUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Marital Status</h2>
        <select name="MaritalStatus" > 
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
            <option value="Divorced">Divorced</option>
        </select>
        
        <br>

        <input class="btn" type="submit" name="update6" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["AddressUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Address</h2>
        <input type="text" name="Address" placeholder="New Address"> 
        
        <br>

        <input class="btn" type="submit" name="update7" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["ContactNumberUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Contact Number</h2>
        <input type="text" name="ContactNumber" placeholder="New Contact Number"> 
        
        <br>

        <input class="btn" type="submit" name="update8" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["EmailAddressUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Email Address</h2>
        <input type="text" name="EmailAddress" placeholder="New Email Address"> 
        
        <br>

        <input class="btn" type="submit" name="update9" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["DisabilityTypeUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Disability Type</h2>
        <select name="DisabilityType" > 
            <option value="Psychosocial Disability">Psychosocial Disability</option>
            <option value="Chronic Illness">Chronic Illness</option>
            <option value="Learning Disability">Learning Disability</option>
            <option value="Mental Disability">Mental Disability</option>
            <option value="Visual Disability">Visual Disability</option>
            <option value="Orthopedic Disability">Orthopedic Disability</option>
            <option value="Communication Disability">Communication Disability</option>
        </select>
        
        <br>

        <input class="btn" type="submit" name="update10" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["CauseOfDisabilityUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Cause Of Disability</h2>
        <input type="text" name="CauseOfDisability" placeholder="New Cause Of Disability"> 
        
        <br>

        <input class="btn" type="submit" name="update11" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["PwdIdNumberUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new PWD ID Number</h2>
        <input type="text" name="PwdIdNumber" placeholder="New PWD ID Number"> 
        
        <br>

        <input class="btn" type="submit" name="update12" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["EducationalAttainmentUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Educational Attainment</h2>
        <input type="text" name="EducationalAttainment" placeholder="New Educational Attainment"> 
        
        <br>

        <input class="btn" type="submit" name="update13" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["OccupationUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Occupation</h2>
        <input type="text" name="Occupation" placeholder="New Occupation"> 
        
        <br>

        <input class="btn" type="submit" name="update14" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["BankNameUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Bank Name</h2>
        <input type="text" name="BankName" placeholder="New Bank Name"> 
        
        <br>

        <input class="btn" type="submit" name="update15" value="Update"> 
        </form>
        </center>
    ';
}
if (isset($_POST["BankAccountNumberUpdate"]))
{
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the unique ID</h2>
        <input type="number" name="id" placeholder="ID">  <br>
        <h2>Enter the new Bank Account Number</h2>
        <input type="text" name="BankAccountNumber" placeholder="New Bank Account Number"> 
        
        <br>

        <input class="btn" type="submit" name="update16" value="Update"> 
        </form>
        </center>
    ';
}

        function updateDb($columnName, $inputName)
        {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "phpwd";
            $link = mysqli_connect($servername, $username, $password, $dbname);
            $conn = mysqli_select_db($link, $dbname);
            
            mysqli_query($link, "update pwdinfo set $columnName='$_POST[$inputName]' where ID='$_POST[id]'");
            echo '<script>alert("Record updated");</script>';
        }


        if (isset($_POST["update1"])) {
            updateDb('FirstName', 'FirstName');
        } if (isset($_POST["update2"])) {
            updateDb('MiddleName', 'MiddleName');
        } if (isset($_POST["update3"])) {
            updateDb('LastName', 'LastName');
        } if (isset($_POST["update4"])) {
            updateDb('Birthday', 'Birthday');
        } if (isset($_POST["update5"])) {
            updateDb('Gender', 'Gender');
        } if (isset($_POST["update6"])) {
            updateDb('MaritalStatus', 'MaritalStatus');
        } if (isset($_POST["update7"])) {
            updateDb('Address', 'Address');
        } if (isset($_POST["update8"])) {
            updateDb('ContactNumber', 'ContactNumber');
        } if (isset($_POST["update9"])) {
            updateDb('EmailAddress', 'EmailAddress');
        } if (isset($_POST["update10"])) {
            updateDb('DisabilityType', 'DisabilityType');
        } if (isset($_POST["update11"])) {
            updateDb('CauseOfDisability', 'CauseOfDisability');
        } if (isset($_POST["update12"])) {
            updateDb('PwdIdNumber', 'PwdIdNumber');
        } if (isset($_POST["update13"])) {
            updateDb('EducationalAttainment', 'EducationalAttainment');
        } if (isset($_POST["update14"])) {
            updateDb('Occupation', 'Occupation');
        } if (isset($_POST["update15"])) {
            updateDb('BankName', 'BankName');
        } if (isset($_POST["update16"])) {
            updateDb('BankAccountNumber', 'BankAccountNumber');
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