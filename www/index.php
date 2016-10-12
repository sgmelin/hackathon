<?php
$host="temperature.clmv89mfjqjm.eu-west-1.rds.amazon-aws.com"; // Host name 
$username="hackathon"; // Mysql username 
$password="hackathon123"; // Mysql User
$db_name="hackathon"; // Database name 
$tbl_name="weather"; // Table name 

// Connect to server and select database.
mysqli_connect("$host", "$username", "$password")or die("cannot connect server "); 
mysqli_select_db("$db_name")or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysqli_query($sql);
while($rows=mysqli_fetch_array($result)){
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td>ID</td>
<td>:</td>
<td><?php echo $rows['id']; ?></td>
</tr>
<tr>
<td width="117">Type</td>
<td width="14">:</td>
<td width="357"><?php echo $rows['type']; ?></td>
</tr>
<tr>
<td>Value</td>
<td>:</td>
<td><?php echo $rows['value']; ?></td>
</tr>
<tr>
<td valign="top">Date/Time </td>
<td valign="top">:</td>
<td><?php echo $rows['datetime']; ?></td>
</tr>
</table></td>
</tr>
</table>
<?php
}
mysqli_close(); //close database
?>