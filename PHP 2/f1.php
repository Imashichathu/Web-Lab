<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            background-color: rgb(132, 178, 194);
            margin: 0 auto;
        }
        .head h2{
        text-align: center;
        }

        form{
            border: 1px solid black;
            width: 350px;
            height: 360px;
            margin-left: auto;
            margin-right: auto;
        }
    
    </style>
</head>


<body>
<div class="main">
    <form action="f.php" method="post">
        
        <div class="head"><h2>Registration Form</h2></div>

        <table>
            <tr>
                <td>Frist Name:</td>
                <td><input type="text" placeholder="Enter First Name" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" placeholder="Enter Last Name" name="lname"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" placeholder="Username" name="uname"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" placeholder="Password" name="pwsd"></td>
            </tr>
            <td>Gender:</td>
            <td></td>
            <tr>
                <td></td>
                <td> <input type="radio" name="gen" value="Male">Male<br>
                <input type="radio" name="gen" value="Female">Female</td>
            </tr>
            <tr>
                <td>Academic Year:</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td><select name="years">
                    <option value="years">Years</option>
                    <option value="1st year">1st Year</option>
                    <option value="2nd year">2nd Year</option>
                    <option value="3rd year">3rd Year</option>
                    <option value="4tt year">4th Year</option>

                  </select></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" placeholder="E-mail" name="email"></td>
            </tr>
            <tr>
                <td>Phone No:</td>
                <td><input type="text" placeholder="Phone No" name="phone"></td>
            </tr>
            <tr>
                <td></td>
                <td><button id="button" name="submit" type="submit" >Submit</button></td>
            </tr>
        </table>
   
    </form>
</div>
</body>
</html>