

<?php $total=0; ?>
<!DOCTYPE html>
<html>
<head>
	<title>AMOUNT INDIVIDUAL STUDENT HAS PAID</title>
</head>
<body>
<h>AMOUNT OF FEES FOR INDIVIDUAL STUDENT</h>


@if(isset($details))
<table>
	<tr>
		
<th>Student ID Number</th>
<th>Amount</th>
<th>Payment Date</th>



	</tr>
@foreach($details as $result)
<tr>
	<td>{{$result->student_number}}</td>
	<td>{{$result->amount}}</td>
	<td>{{$result->date_of_payment}}</td>
</tr>
<?php $total+=$result->amount; ?>

@endforeach

</table>

@endif
<?php echo "Total Fees Paid=$total";?>
</body>
</html>