<!DOCTYPE html>
<html>
<head>
	<title>STUDENT DETAILS</title>
</head>
<body>
	<h>Student Records</h>
	
<form action="/insert" method="POST">
		      {{ csrf_field() }}
	Student Number<br><input type="text" name="student_number"><br><br>
	Full Name<br><input type="text" name="fullname"><br><br>

	Date of Birth<br><input type="date" name="dob"><br><br>
	Address<br><input type="text" name="address"><br><br>

	<input type="submit" name="submit" value="submit">


</form>


</body>
</html>