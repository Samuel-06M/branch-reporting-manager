<?php
$mysqli = new mysqli('localhost', 'root', '', 'loginsystem');
?>
<?php
//include('dbconnection.php');
include("checklogin.php");


		$center = $_POST['center'];
		$report_by = $_POST['report_by'];
		$date_of_entry = $_POST['date_of_entry'];
		$station_of_operation = $_POST['station_of_operation'];
		$challenges = $_POST['challenges'];
		$employee1 = $_POST['employee1'];
		$employee2 = $_POST['employee2'];
		$employee3 = $_POST['employee3'];
		$employee4 = $_POST['employee4'];
		$comment = $_POST['comment'];
		$m_float = $_POST['m_float'];
		$m_cash = $_POST['m_cash'];
		$kcb_float = $_POST['kcb_float'];
		$kcb_cash = $_POST['kcb_cash'];
		$cash = $_POST['cash'];
		$total = $_POST['total'];
		

$sql = "INSERT INTO sales(center, report_by, date_of_entry, station_of_operation, challenges, employee1, employee2, employee3, employee4, comment, m_float, m_cash, kcb_float, kcb_cash, cash, total)
values ('$center','$report_by','$date_of_entry','$station_of_operation','$challenges','$employee1','$employee2','$employee3','$employee4','$comment','$m_float','$m_cash','$kcb_float','$kcb_cash','$cash','$total',)";

/*$sql = "INSERT INTO users(firstname, middlename, lastname, birthdate, username, password) 
VALUES('$firstname', '$middlename', '$lastname', '$birthdate', '$username', '$password')";*/
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Report Submited Sucessfully");';
	echo 'window.location="welcome.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Deplicate entry");';
	echo 'window.location="daily_report1.php";';
	echo '</script>';
}
?>