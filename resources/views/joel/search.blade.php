<!DOCTYPE html>
<html>
<head>
	<title>Search Record</title>
</head>
<body>
	<h>SEARCH RECORDS</h>
	<form action="/searchrecord" method="post">
		 {{ csrf_field() }}

		 Enter ID Number:<br>
		 <input type="Number" name="searchid"><br>
		 <button type="submit">Search Record</button>


	</form>

</body>
</html>