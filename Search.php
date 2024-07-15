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
            .btnList {background-color:#013220 ; color: #fff; height: 30px; width: 160px; font-size: 14px; margin: 5px; }
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
                    <br><br>

                    <input type="number" name="id" placeholder="Search by ID"> 
                    <input class="btn" type="submit" name="search" value="Search"> 

                    <h2>or Search by
                    <!-- LIST OF DATA TO UPDATE -->
                    <table id="tblListOfData"><tr>
                    <td>
                    <input class="btnList" type="submit" name="FirstNameSearch" value="First Name">  <br>
                        <input class="btnList" type="submit" name="MiddleNameSearch" value="Middle Name">  <br>
                        <input class="btnList" type="submit" name="LastNameSearch" value="Last Name">  <br>
                        <input class="btnList" type="submit" name="BirthdaySearch" value="Birthday">  <br>
                        <input class="btnList" type="submit" name="GenderSearch" value="Gender">  <br>
                        <input class="btnList" type="submit" name="MaritalStatusSearch" value="Marital Status">  <br>
                        <input class="btnList" type="submit" name="AddressSearch" value="Address">  <br>
                        <input class="btnList" type="submit" name="ContactNumberSearch" value="Contact Number">  <br>
                    </td>
                    <td>
                        <input class="btnList" type="submit" name="EmailAddressSearch" value="Email Address">  <br>
                        <input class="btnList" type="submit" name="DisabilityTypeSearch" value="Disability Type">  <br>
                        <input class="btnList" type="submit" name="CauseOfDisabilitySearch" value="Cause Of Disability">  <br>
                        <input class="btnList" type="submit" name="PwdIdNumberSearch" value="PWD ID Number">  <br>
                        <input class="btnList" type="submit" name="EducationalAttainmentSearch" value="Educational Attainment">  <br>
                        <input class="btnList" type="submit" name="OccupationSearch" value="Occupation">  <br>
                        <input class="btnList" type="submit" name="BankNameSearch" value="Bank Name">  <br>
                        <input class="btnList" type="submit" name="BankAccountNumberSearch" value="Bank Account Number">  <br>
                    </td>
                    </tr></table>
                </form>
            </div>
        </div>
    </center>
    </body>
</html>

<?php
// SEARCH DATABASE
// if (isset($_POST["search"]))
// {
//     $res = mysqli_query($link, "select * from pwdinfo where ID='$_POST[id]'");
//     echo "<table border=1>";
//     echo "<tr>";
//     echo "<th>"; echo "ID"; echo "</th>";
//     echo "<th>"; echo "First Name"; echo "</th>";
//     echo "<th>"; echo "Middle Name"; echo "</th>";
//     echo "<th>"; echo "Last Name"; echo "</th>";
//     echo "<th>"; echo "Birthday"; echo "</th>";
//     echo "<th>"; echo "Gender"; echo "</th>";
//     echo "<th>"; echo "Marital Status"; echo "</th>";
//     echo "<th>"; echo "Address"; echo "</th>";
//     echo "<th>"; echo "Contact Number "; echo "</th>";
//     echo "<th>"; echo "Email Address"; echo "</th>";
//     echo "<th>"; echo "Disability Type"; echo "</th>";
//     echo "<th>"; echo "Cause of Disability"; echo "</th>";
//     echo "<th>"; echo "PWD ID Number"; echo "</th>";
//     echo "<th>"; echo "Educational Attainment"; echo "</th>";
//     echo "<th>"; echo "Occupation"; echo "</th>";
//     echo "<th>"; echo "Bank Name"; echo "</th>";
//     echo "<th>"; echo "Bank Account Number"; echo "</th>";
//     echo "</tr>";
//     while ($row = mysqli_fetch_array($res))
//     {
//     echo "<tr>";
//     echo "<td>"; echo $row["ID"]; echo "</td>";
//     echo "<td>"; echo $row["FirstName"]; echo "</td>";
//     echo "<td>"; echo $row["MiddleName"]; echo "</td>";
//     echo "<td>"; echo $row["LastName"]; echo "</td>";
//     echo "<td>"; echo $row["Birthday"]; echo "</td>";
//     echo "<td>"; echo $row["Gender"]; echo "</td>";
//     echo "<td>"; echo $row["MaritalStatus"]; echo "</td>";
//     echo "<td>"; echo $row["Address"]; echo "</td>";
//     echo "<td>"; echo $row["ContactNumber"]; echo "</td>";
//     echo "<td>"; echo $row["EmailAddress"]; echo "</td>";
//     echo "<td>"; echo $row["DisabilityType"]; echo "</td>";
//     echo "<td>"; echo $row["CauseOfDisability"]; echo "</td>";
//     echo "<td>"; echo $row["PwdIdNumber"]; echo "</td>";
//     echo "<td>"; echo $row["EducationalAttainment"]; echo "</td>";
//     echo "<td>"; echo $row["Occupation"]; echo "</td>";
//     echo "<td>"; echo $row["BankName"]; echo "</td>";
//     echo "<td>"; echo $row["BankAccountNumber"]; echo "</td>";
//     echo "</tr>";
//     }
//     echo "</table>";
// }

function viewDb($columnName, $inputName)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpwd";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    $conn = mysqli_select_db($link, $dbname);

    $res = mysqli_query($link, "select * from pwdinfo where $columnName='$_POST[$inputName]'");
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

function searchby($inputPlaceholder, $inputName, $searchName)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phpwd";
    $link = mysqli_connect($servername, $username, $password, $dbname);
    $conn = mysqli_select_db($link, $dbname);

    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the '; echo $inputPlaceholder; echo '</h2>
        <input type="text" name="'; echo $inputName; echo '" placeholder="'; echo $inputPlaceholder; echo'">  <br>
        
        <br>

        <input class="btn" type="submit" name="'; echo $searchName; echo '" value="Search"> 
        </form>
        </center>
    ';
}

// Asks the user for the specific data
// Setting the name of input 
// Setting the placeholder of input 
// Setting the name of the SEARCH button
if (isset($_POST["FirstNameSearch"])) {
    searchby("First Name", 'FirstName', 'search1');
} if (isset($_POST["MiddleNameSearch"])) {
    searchby("Middle Name", 'MiddleName', 'search2');
} if (isset($_POST["LastNameSearch"])) {
    searchby("Last Name", 'LastName', 'search3');
} if (isset($_POST["BirthdaySearch"])) {
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the Birthday</h2>
        <input type="date" name="Birthday" placeholder="Birthday">  <br>
        
        <br>

        <input class="btn" type="submit" name="search4" value="Search"> 
        </form>
        </center>
    ';
} if (isset($_POST["GenderSearch"])) {
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the Gender</h2>
        <select name="Gender" > 
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        
        <br>

        <input class="btn" type="submit" name="search5" value="Search"> 
        </form>
        </center>
    ';
} if (isset($_POST["MaritalStatusSearch"])) {
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the Marital Status</h2>
        <select name="MaritalStatus" > 
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widowed">Widowed</option>
            <option value="Separated">Separated</option>
            <option value="Divorced">Divorced</option>
        </select>
        
        <br>

        <input class="btn" type="submit" name="search6" value="Search"> 
        </form>
        </center>
    ';
} if (isset($_POST["AddressSearch"])) {
    searchby("Address", 'Address', 'search7');
} if (isset($_POST["ContactNumberSearch"])) {
    searchby("Contact Number", 'ContactNumber', 'search8');
} if (isset($_POST["EmailAddressSearch"])) {
    searchby("Email Address", 'EmailAddress', 'search9');
} if (isset($_POST["DisabilityTypeSearch"])) {
    echo '
        <center>
        <form name="form3" action="" method="post">
        <h2>Enter the Disability Type</h2>
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

        <input class="btn" type="submit" name="search10" value="Search"> 
        </form>
        </center>
    ';
} if (isset($_POST["CauseOfDisabilitySearch"])) {
    searchby("Cause of Disability", 'CauseOfDisability', 'search11');
} if (isset($_POST["PwdIdNumberSearch"])) {
    searchby("PWD ID Number", 'PwdIdNumber', 'search12');
} if (isset($_POST["EducationalAttainmentSearch"])) {
    searchby("Educational Attainment", 'EducationalAttainment', 'search13');
} if (isset($_POST["OccupationSearch"])) {
    searchby("Occupation", 'Occupation', 'search14');
} if (isset($_POST["BankNameSearch"])) {
    searchby("Bank Name", 'BankName', 'search15');
} if (isset($_POST["BankAccountNumberSearch"])) {
    searchby("Bank Account Number", 'BankAccountNumber', 'search16');
} 

// Search databased by preference
if (isset($_POST["search"])) {
    viewDb('ID', 'id');
} if (isset($_POST["search1"])) {
    viewDb('FirstName', 'FirstName');
} if (isset($_POST["search2"])) {
    viewDb('MiddleName', 'MiddleName');
} if (isset($_POST["search3"])) {
    viewDb('LastName', 'LastName');
} if (isset($_POST["search4"])) {
    viewDb('Birthday', 'Birthday');
} if (isset($_POST["search5"])) {
    viewDb('Gender', 'Gender');
} if (isset($_POST["search6"])) {
    viewDb('MaritalStatus', 'MaritalStatus');
} if (isset($_POST["search7"])) {
    viewDb('Address', 'Address');
} if (isset($_POST["search8"])) {
    viewDb('ContactNumber', 'ContactNumber');
} if (isset($_POST["search9"])) {
    viewDb('EmailAddress', 'EmailAddress');
} if (isset($_POST["search10"])) {
    viewDb('DisabilityType', 'DisabilityType');
} if (isset($_POST["search11"])) {
    viewDb('CauseOfDisability', 'CauseOfDisability');
} if (isset($_POST["search12"])) {
    viewDb('PwdIdNumber', 'PwdIdNumber');
} if (isset($_POST["search13"])) {
    viewDb('EducationalAttainment', 'EducationalAttainment');
} if (isset($_POST["search14"])) {
    viewDb('Occupation', 'Occupation');
} if (isset($_POST["search15"])) {
    viewDb('BankName', 'BankName');
} if (isset($_POST["search16"])) {
    viewDb('BankAccountNumber', 'BankAccountNumber');
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