<!DOCTYPE html>

<html>

<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="Sign%20Up.css">
</head>

<?php
if (isset($_POST['insert']))
{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "acadmy";

    $fname = $_POST['fname'];
    $lname = $_POST['lanme'];
    $psw = $_POST['psw'];

    $connect = mysqli_connect($hostname,$username,$password,$databaseName);
    $query = "INSERT INTO 'member'('fname','lname','psw') VALUES ('$fname','$lname','$psw')";
    $result = mysqli_query($connect,$query);

    if ($result)
    {
        echo 'data inserted';
    }else{
        echo 'data not inserted';
    }
    mysqli_free_result($result);
    mysqli_close($connect);
}
?>

<body>
<form>
    <div>
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
    </div>

    <table align="center">
        <tr>
            <th>
                <label><b>Email</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Email" name="email" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Password</b></label>
            </th>
            <th colspan="2">
                <input type="password" placeholder="Enter Password" name="psw" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Repeat Password</b></label>
            </th>
            <th colspan="2">
                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>First Name</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter First Name" name="fname" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Last Name</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Last Name" name="lname" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Address</b></label>
            </th>
            <th colspan="2">
                <input type="z" placeholder="Enter Address" name="psw-repeat" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Mobil Number</b></label>
            </th>
            <th colspan="2">
                <input type="text" placeholder="Enter Mobil Number" name="email" required>
            </th>
        </tr>

        <tr>
            <th>
                <label><b>Gender</b></label>
            </th>
            <th colspan="2">
                <input type="password" placeholder="Enter Gender" name="psw" required>
            </th>
        </tr>

        <tr>
            <th>
                <input type="submit" name="insert" >Sign Up</input>
            </th>
            <th>
                <button type="button" onclick="location.href = '../Login screen/Login screen.html';">Cancel</button>
            </th>
            <th>
                <button onclick="document.getElementById('myInput').value = ''">Clear</button>
            </th>
        </tr>

    </table>

</form>

</body>

</html>