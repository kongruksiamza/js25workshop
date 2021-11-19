<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password,"testing");

$output='';

$sql="select * from employees where firstName LIKE '%".$_POST['search']."%'";
$result = mysqli_query($conn,$sql);
$output.="<h4 align='center'>Search Result</h4>";
if(mysqli_num_rows($result)>0){
$output.="<table class='table table-bordered'>
      <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>";
while($row = mysqli_fetch_array($result)) {
          $output.="<tr><td>".$row["employeeNumber"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td></tr>";
}
  $output.="</table>";
  echo $output;
}else{
  echo "Data Not Found";
}
?>
