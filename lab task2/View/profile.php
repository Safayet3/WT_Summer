<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Page</title>
</head>
<body>
    <h1>Registration Form</h1>
    <hr>
    <form action="../control/process.php" method="post">
        <table>
            <tr>
                <td>First Name : </td>
                <td><input type="text" name="fname" value=""></td>
            </tr>
            <tr>
                <td>Last Name : </td>
                <td><input type="text" name="lname" value=""></td>
            </tr>
            <tr>
                <td>Age : </td>
                <td><input type="number" name="age" value=""></td>
            </tr>
            <tr>
                <td>Designation : </td>
                <td>
                    <input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                    <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                    <input type="radio" name="designation" value="Project Lead">Project Lead
            
                </td>
            </tr>
            <tr>
                <td>Preferred Language : </td>
                <td>
                    <input type="checkbox" name="language" value="java">JAVA
                    <input type="checkbox" name="language" value="PHP">PHP
                    <input type="checkbox" name="language" value="C++">C++
                </td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="email" name="email" value=""></td>
            </tr>
            <tr>
                <td>Password : </td>
                <td><input type="password" name="pass" value=""></td>
            </tr>
            <tr>
                <td>Please Choose a file : </td>
                <td><input type="file" name="file" value=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="submit"></td>
                <td><input type="reset" value="Reset"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>