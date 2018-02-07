<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	
	$dayOfWeek = date("w");
	

	switch($dayOfWeek){
		case 1;
		echo "Today is Monday!";
		break;
		case 2;
		echo "Today is Tuesday !";
		break;
		case 3;
		echo "Today is Wednesday!";
		break;
		case 4;
		echo "Today is Thursday!";
		break;
		case 5;
		echo "Today is Friday!";
		break;
		case 6;
		echo "Today is Saturday!";
		break;
		case 0;
		echo "Today is Sunday!";
		break;

		default:
		echo "Better luck next time.";
		break;
	}

?>
</body>
</html>