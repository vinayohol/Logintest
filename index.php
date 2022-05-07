<html>
<head>
<title>Login </title>
</head>
<body>
    <form name="form1" method="post">
    <table align="center" width="80%" border="0" cellpadding="3" cellspacing="1">
    <tr >
        <td colspan=2 align="center">
            <b><h2>Application User Login</h2></b>
        </td>
    </tr>
        <br/>
    <tr>
        <td><b>Username <b> </td>
        <td><input name="uname" type="text"></td>
    </tr>
    <tr>
        <td><b>Password  <b></td>
        <td><input name="pwd" type="password"></td>
    </tr>
    <tr>
        <td></td>
        <td ><input type="submit" name="Submit" value="Login" style="background-color:green;color:white;width:80px;height:30px;"></td>
    </tr>
    </table>
</form>
<?php

if(isset($_POST["Submit"]))
{
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$xml=simplexml_load_file('users.xml') or die("Error: Cannot create object");
foreach($xml->children() as $users) 
{ 
    if($users->userid==$uname)
    {
        if($users->password==$pwd)
        {
            echo "<center><b>Hello..".$uname; 
            echo "<br/>";
            echo "<br/>";
            echo "Login Successful</b></center> ";
            return;
        }
        else
        {
            echo "<center><b>Login failed due to incorrect username and password </b></center>";
            return;
        }
   
    }
}
        echo "<center><b>Login failed due to incorrect username and password</b></center>";
}
?>
</body>
</html>
