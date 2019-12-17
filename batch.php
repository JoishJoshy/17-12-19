
<script>
function validate()
{
var bname=document.forms["batch"]["bname"];
var sdate=document.forms["batch"]["sdate"];
var edate=document.forms["batch"]["edate"];
var cid=document.forms["batch"]["cid"];
var did=document.forms["batch"]["did"];
var tid=document.forms["batch"]["tid"];

if(bname.value=="")
        {
            alert("Enter a Valid Batch Name");
            document.forms["batch"]["bname"].focus();
				return false;
        }
if(sdate.value=="")
        {
            alert("Enter a Valid date");
            document.forms["batch"]["sdate"].focus();
				return false;
        }
if(edate.value=="")
        {
            alert("Enter a Valid date");
            document.forms["batch"]["edate"].focus();
				return false;
        }
if(cid.value=="choice")
        {
            alert("please select a choice");
            document.forms["batch"]["cid"].focus();
				return false;
        }
if(did.value=="choice")
        {
            alert("please select a choice");
            document.forms["batch"]["did"].focus();
				return false;
        }
if(tid.value=="choice")
        {
            alert("please select a choice");
            document.forms["batch"]["tid"].focus();
				return false;
        }
}
</script>
<html>
<head>
<style>
td
{padding:10px;
 }
</style>
</head>
<body>
<center>


<div style="border:2px solid black; width:700px; height:450px;">

<form method="POST" name="batch" onsubmit="return validate()">
<table align="center" width="50%" border="0" style="padding:20px;"><h1>Batch Insertion<h1>
<tr>
<td>Batch name:</td><td><input type="text" name="bname"></td>
</tr>
<tr>
<td >Start date:</td><td><input type="date" name="sdate"></td>
</tr>
<tr>
<td>End date:</td><td><input type="date" name="edate"></td>
</tr>
<tr>
<td>Course Id:</td><td><?php
 include('dbcon.php');
 
 $sql="select * from  courses";
 $res=$con->query($sql);
 echo '<select name="ff">';
 echo '<option> Choice </option>';
 while($row=$res->fetch_assoc())
 {
	 echo'<option value="'.$row['course_id'].'">'.$row['course_id'].'</option>';
 }
 echo "<select name='ff'>";
 
 echo '</select>';

?></td>
</tr>
<tr>
<td>Division Id:</td><td><?php
 include('dbcon.php');
 
 $sql="select * from  division";
 $res=$con->query($sql);
 echo '<select name="ff">';
 echo '<option> Choice </option>';
 while($row=$res->fetch_assoc())
 {
	 echo'<option value="'.$row['division_id'].'">'.$row['division_id'].'</option>';
 }
 echo "<select name='ff'>";
 
 echo '</select>';

?></td>

</tr>
<tr>
<td>Teacher Id:</td><td><?php
 include('dbcon.php');
 
 $sql="select * from  division";
 $res=$con->query($sql);
 echo '<select name="ff">';
 echo '<option> Choice </option>';
 while($row=$res->fetch_assoc())
 {
	 echo'<option value="'.$row['division_id'].'">'.$row['division_id'].'</option>';
 }
 echo "<select name='ff'>";
 
 echo '</select>';

?></td>
</tr>
<td></td><td><input type="submit" name="batch"value="Submit"> </td>
</tr>
</tr>
</table>
</form>
</div>
</center>
</html>


