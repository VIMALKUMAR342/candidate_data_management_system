<?php
include 'config.php';
session_start();
if(!isset($_SESSION['user_name']))
{
   header('location:login_form.php');
}
$name = $_SESSION['user_name'];
$sql = "SELECT * FROM candidate_details WHERE name = '$name'";
$result = $conn->query($sql);
if (!$result) {
    die("Query failed: " . $conn->error);
}
if ($result->num_rows > 0) 
{
    while ($row = $result->fetch_assoc()) 
    {
        $name = $row['name'];
        $gender = $row['gender'];
        $dob = $row['dob'];
        $address = $row['address'];
        $contact = $row['contact'];
        $email = $row['email'];
        $blood_group = $row['blood_group'];
        $year = $row['year'];
        $degree = $row['degree'];
        $branch = $row['branch'];
        $college_university = $row['college_university'];
        $experience = $row['experience'];
        $designation = $row['designation'];
        $years_experience = $row['years_experience'];
        $salary = $row['salary'];
        $resume = $row['resume'];
        $photo = $row['photo'];
        $degree_certificate = $row['degree_certificate'];
        $id_proof = $row['id_proof'];
        $interview_date = $row['interview_date'];
        $selection_status = $row['selection_status'];
        $date_of_joining = $row['date_of_joining'];
        
        
    }
} 
else 
{
    echo "No data found for this user.";
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Personal Information</title>
  <link rel="stylesheet" href="info.css">  </head>
<body>
  <?php
  echo "<h1>User Information</h1>";  
  echo "<table >";
  echo "<tr><th>Name</th><td>$name</td></tr>";
  echo "<tr><th>Gender</th><td>$gender</td></tr>";
  echo "<tr><th>Date of Birth</th><td>$dob</td></tr>";
  echo "<tr><th>Address</th><td>$address</td></tr>";  
  echo "<tr><th>Contact</th><td>$contact</td></tr>"; 
  echo "<tr><th>Email</th><td>$email</td></tr>";  
  echo "<tr><th>Blood Group</th><td>$blood_group</td></tr>";  
  echo "<tr><th>Year</th><td>$year</td></tr>";  
  echo "<tr><th>Degree</th><td>$degree</td></tr>";  
  echo "<tr><th>Branch</th><td>$branch</td></tr>"; 
  echo "<tr><th>College/University</th><td>$college_university</td></tr>";    
  echo "<tr><th>Designation</th><td>$designation</td></tr>";   
  echo "<tr><th>Salary</th><td>$salary</td></tr>";   
  echo "<tr><th>Resume</th><td>$resume</td></tr>";  
  echo "<tr><th>Photo</th><td>$photo</td></tr>";  
  echo "<tr><th>Degree Certificate</th><td>$degree_certificate</td></tr>";  
  echo "<tr><th>ID Proof</th><td>$id_proof</td></tr>";  
  echo "<tr><th>Date of Joining</th><td>$date_of_joining</td></tr>"; 
  echo "</table>";
  ?>
</body>
</html>
