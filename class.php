<script>
function validate()
{
var sid=document.forms["batch"]["sid"];
var bid=document.forms["batch"]["bid"];

if(sid.value=="")
        {
            alert("Enter a Valid Batch Name");
            document.forms["batch"]["sid"].focus();
				return false;
        }
if(bid.value=="")
        {
            alert("Enter a Valid Batch Name");
            document.forms["batch"]["bid"].focus();
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
<table align="center" width="50%" border="0" style="padding:20px;"><h1>Class Insertion<h1>
<tr>
<td>Student Id:</td><td><input type="text" name="sid"></td>
</tr>
<tr>
<td>Batch Id:</td><td><input type="text" name="bid"></td>
</tr>
<td></td><td><input type="submit" name="batch"value="Submit"> </td>
</tr>
</tr>
</table>
</form>
</div>
</center>
</html>


