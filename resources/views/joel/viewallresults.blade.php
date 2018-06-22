<?php $total=0; ?>

<!DOCTYPE html>
<html>
<head>
	<title>TOTAL OF ALL STUDENT FEES</title>
</head>
<body>
<h>ALL STUDENT FEES PAYMENTS</h>


@if(isset($viewall))
<table>
	<tr>
		
<th>Student ID Number</th>
<th>Amount</th>
<th>Payment Date</th>



	</tr>
@foreach($viewall as $result)
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