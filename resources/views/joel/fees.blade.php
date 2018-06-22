<!DOCTYPE html>
<html>
<head>
	<title>Fees Registration for students</title>

</head>
<body>
<h>FEES REGISTRATION</h>
<form action="/pay" method="POST">
	      {{csrf_field()}}
Student  Number<br>
<input type="text" name="studentnumber"><br><br>


Amount<br><input type="text" name="amount"><br><br>
Date of Payment<br><input type="date" name="dateofpayment"><br><br>
	
	<input type="submit" name="submit" value="submit">


</form>
</body>
</html>