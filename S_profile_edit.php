<?PHP
session_start();
$con=mysqli_connect("localhost","root","1234") or die("error in connect".mysqli_error($con));
$db=mysqli_select_db($con,"sport") or die("error in db selection".mysqli_error($con));
echo"<style>";
echo"#pro{font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;border-collapse: collapse;width: 100%;}";
echo"#pro td, #pro th {border: 1px solid #ddd;padding: 8px;}";
echo"#pro tr:nth-child(even){background-color: #f2f2f2;}";
echo"#pro tr:hover {background-color: #ddd;}";
echo"#pro th {padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: #6666ff;color: white;}";
echo"input[type=\"submit\"],input[type=\"reset\"]{background-color: #6666ff;color: white;padding: 16px 20px;margin: 8px 0;border: none;cursor: pointer;width: 15%;opacity: 0.9;}";
echo"input[type=\"submit\"],input[type=\"reset\"]:hover {opacity: 1;}";
echo"input[type=text], input[type=password],input[type=number],input[type=email] {width: 30%;padding: 15px;margin: 5px 0 22px 0;display: inline-block;border: none;background: #f1f1f1;}";
echo"</style>";
$y=$_SESSION["ID"];
$q="SELECT * from player where p_id='$y'";
$x=mysqli_query($con,$q) or die("error in selecting data".mysqli_error($con));
$row = mysqli_fetch_array($x);
echo"<h1>Player Profile</h1>";
echo "<table id=\"pro\" align=\"center\" border=1>";
echo"<form method=\"POST\" action=\"S_profile_edit_conf.php\">";
echo"<tr><th>First Name:</th><td><input type=\"text\" name=\"sfname\" value=\"$row[3]\" ></td></tr>";
echo"<tr><th>Middle Name:</th><td><input type=\"text\" name=\"smname\" value=\"$row[4]\"></td></tr>";
echo"<tr><th>Last Name:</th><td><input type=\"text\" name=\"slname\" value=\"$row[5]\"></td></tr>";
echo"<tr><th>Phone number:</th><td><input type=\"number\" step=\"1\" name=\"pno\" value=\"$row[7]\"></td></tr>";
echo"<tr><th>Email:</th><td><input type=\"email\" name=\"em\" value=\"$row[8]\"></td></tr>";
echo"<tr><th>Date of Birth:</th><td><input type=\"date\" name=\"dob\" value=\"$row[9]\"></td></tr>";
echo"<tr><th>State:</th><td><input type=\"text\" name=\"state\" value=\"$row[10]\"></td></tr>";
echo"<tr><th>City:</th><td><input type=\"text\" name=\"city\" value=\"$row[11]\"></td></tr>";
echo"<tr><th>Pin:</th><td><input type=\"number\" step=\"1\" name=\"pin\" value=\"$row[12]\"></td></tr>";
echo"</table> <form align=\"center\" method=\"POST\" action=\"S_profile_edit_conf.php\"> <input type=\"Submit\" value=\"Confirm\">";
echo"</form>";