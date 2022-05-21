<?php require_once './connect.php' ?>


<?php

  $firstname = $_POST['firstname'];
  $accountNo = $_POST['accountNo'];
  $address = $_POST['address'];
  $agree = $_POST['agree'];
  $cardType = $_POST['cardType'];
  $City = $_POST['City'];
  $country = $_POST['country'];
  $dob = $_POST['dob'];
  $employeeStaus = $_POST['employeeStaus'];
  $lastname = $_POST['lastname'];
  $monthlyincome = $_POST['monthlyincome'];
  $OldBankAccount = $_POST['OldBankAccount'];
  $PostalCode = $_POST['PostalCode'];
  $Province = $_POST['Province'];
  $street = $_POST['street'];
  $Workplace = $_POST['Workplace'];
  $workTPNumber = $_POST['workTPNumber'];


?>

<?php $connection->close() ?>