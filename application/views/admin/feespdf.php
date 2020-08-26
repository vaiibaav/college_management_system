	<?php
 		foreach ($printdata as $row) :
 			?> 
<!DOCTYPE html>
<html>
<head>
	<title><?=$row->studname;?> college fees</title>
	<style type="text/css">
		table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
	</style>
</head>
<body>
	<table border="1" id="t01">
		<tr>
			<td align="center" colspan="3">
				<h2> MATOSHREE NILIMATAI SHINDE ARTS, COMMERCE & SACIENCE COLLEGE, BHADRAWATI</h2>
			</td>
		</tr>
			<tr>
				<td>
					<strong>Date : </strong><?php $date = $row->admdate; echo date("d-m-Y", strtotime($date)); ?>
				</td>
				<td align="right" colspan="2">
					<strong>Admission Form No. : </strong><?=$row->formno; ?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Course : </strong><?=$row->course; ?>
				</td>
				<td align="right" colspan="2">
					<strong>Admission Year : </strong><?=$row->courseyear; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<strong>Student Name : </strong> <?=$row->studname;?>
				</td>
			</tr>
			<tr>
				<td>
					Sr.No.
				</td>
				<td>
					Details
				</td>
				<td>
					Amount Rs.
				</td>
			</tr>
			<tr>
				<td>
					1.
				</td>
				<td>
					Tution Fee
				</td>
				<td>
					Nill
				</td>
			</tr>
			<tr>
				<td>
					2.
				</td>
				<td>
					Practical Fee
				</td>
				<td>
					Nill
				</td>
			</tr>
			<tr>
				<td>
					3.
				</td>
				<td>
					Admission Fee
				</td>
				<td>
					<?=$row->admfee;?>
				</td>
			</tr>
			<tr>
				<td>
					4.
				</td>
				<td>
					Any Other Fee
				</td>
				<td>
					Nill
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right"> 
					Total
				</td>
				<td>
					<?=$row->admfee;?>
				</td>
			</tr>
			<tr>
				<td>
					Student _____________________________
				</td>
				<td colspan="2">
					Account Clerk _____________________________
				</td>
			</tr>
	</table>
	<hr>
	<hr>
	<hr>
	<table border="1" id="t01">
		<tr>
			<td align="center" colspan="3">
				<h2> MATOSHREE NILIMATAI SHINDE ARTS, COMMERCE & SACIENCE COLLEGE, BHADRAWATI</h2>
			</td>
		</tr>
			<tr>
				<td>
					<strong>Date : </strong><?php $date = $row->admdate; echo date("d-m-Y", strtotime($date)); ?>
				</td>
				<td align="right" colspan="2">
					<strong>Admission Form No. : </strong><?=$row->formno; ?>
				</td>
			</tr>
			<tr>
				<td>
					<strong>Course : </strong><?=$row->course; ?>
				</td>
				<td align="right" colspan="2">
					<strong>Admission Year : </strong><?=$row->courseyear; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<strong>Student Name : </strong> <?=$row->studname;?>
				</td>
			</tr>
			<tr>
				<td>
					Sr.No.
				</td>
				<td>
					Details
				</td>
				<td>
					Amount Rs.
				</td>
			</tr>
			<tr>
				<td>
					1.
				</td>
				<td>
					Tution Fee
				</td>
				<td>
					Nill
				</td>
			</tr>
			<tr>
				<td>
					2.
				</td>
				<td>
					Practical Fee
				</td>
				<td>
					Nill
				</td>
			</tr>
			<tr>
				<td>
					3.
				</td>
				<td>
					Admission Fee
				</td>
				<td>
					<?=$row->admfee;?>
				</td>
			</tr>
			<tr>
				<td>
					4.
				</td>
				<td>
					Any Other Fee
				</td>
				<td>
					Nill
				</td>
			</tr>
			<tr>
				<td colspan="2" align="right"> 
					Total
				</td>
				<td>
					<?=$row->admfee;?>
				</td>
			</tr>
			<tr>
				<td>
					Student _____________________________
				</td>
				<td colspan="2">
					Account Clerk _____________________________
				</td>
			</tr>
	</table>
</body>
</html>
<?php endforeach ?>