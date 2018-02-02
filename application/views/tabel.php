<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
<?php $no=0; foreach($data_user as $row) { $no++ ?>
	<tr><th>username</th></tr>
	<tr><td><td><? echo $row['username']; ?></td></td></tr>
<?php } ?>
</table>
</body>
</html>