<?php
include 'config.php'; 
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST["name"]);
  $gender = mysqli_real_escape_string($conn, $_POST["Gender"]);
  $dob = mysqli_real_escape_string($conn, $_POST["dob"]);
  $address = mysqli_real_escape_string($conn, $_POST["address"]);
  $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $blood_group = mysqli_real_escape_string($conn, $_POST["blood-group"]);
  $year = mysqli_real_escape_string($conn, $_POST["year"]);
  $degree = mysqli_real_escape_string($conn, $_POST["degree"]);
  $branch = mysqli_real_escape_string($conn, $_POST["branch"]);
  $college_university = mysqli_real_escape_string($conn, $_POST["name_of_the_college_or_university"]);
  $experience = mysqli_real_escape_string($conn, $_POST["experience"]);
  $previous_job = isset($_POST["previousJob"]) ? mysqli_real_escape_string($conn, $_POST["previousJob"]) : "";
  $designation = isset($_POST["designation"]) ? mysqli_real_escape_string($conn, $_POST["designation"]) : "";
  $years_experience = isset($_POST["yearsExperience"]) ? mysqli_real_escape_string($conn, $_POST["yearsExperience"]) : "";
  $salary = isset($_POST["salary"]) ? mysqli_real_escape_string($conn, $_POST["salary"]) : "";
  $resume = mysqli_real_escape_string($conn, $_FILES["resume"]["name"]);
  $photo = mysqli_real_escape_string($conn, $_FILES["photo"]["name"]);
  $degree_certificate = mysqli_real_escape_string($conn, $_FILES["Degree_Certificate"]["name"]);
  $id_proof = mysqli_real_escape_string($conn, $_FILES["id_proof"]["name"]);
  $interview_date = mysqli_real_escape_string($conn, $_POST["interview_date"]);
  $selection_status = mysqli_real_escape_string($conn, $_POST["selectionStatus"]);
  $date_of_joining = isset($_POST["dateOfJoining"]) ? mysqli_real_escape_string($conn, $_POST["dateOfJoining"]) : "";
  $sql = "INSERT INTO candidate_details (name, gender, dob, address, contact, email, blood_group, year, degree, branch, college_university, experience, previous_job, designation, years_experience, salary, resume, photo, degree_certificate, id_proof, interview_date, selection_status, date_of_joining)
  VALUES ('$name', '$gender', '$dob', '$address', '$contact', '$email', '$blood_group', '$year', '$degree', '$branch', '$college_university', '$experience', '$previous_job', '$designation', '$years_experience', '$salary', '$resume', '$photo', '$degree_certificate', '$id_proof', '$interview_date', '$selection_status', '$date_of_joining')";
  mysqli_query($conn, $sql);
  header('location:admin_page.php');
  $upload_dir = "uploads/";
  move_uploaded_file($_FILES["resume"]["tmp_name"], $upload_dir . $resume);
  move_uploaded_file($_FILES["photo"]["tmp_name"], $upload_dir . $photo);
  move_uploaded_file($_FILES["Degree_Certificate"]["tmp_name"], $upload_dir . $degree_certificate);
  move_uploaded_file($_FILES["id_proof"]["tmp_name"], $upload_dir . $id_proof);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BIT- Interview Candidates Details</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body><center>
  <h1 class="center">BIT- Interview Candidates Details</h1><br><br>
  <form method="POST" enctype="multipart/form-data">
    
    <table border="2">
      
      <tr>
        <td> <label for="name">Name:</label></td>
        <td> <input type="text" id="name" name="name" required></td>
      </tr>
      <tr>
        <td>  <label for="gender">Gender:</label></td>
        <td>  
            <input type="radio"  name="Gender" value="Male">Male
            <input type="radio"  name="Gender" value="Female">Female 
        </td>
      </tr>  
      <tr>
        <td> <label for="dob">Date of Birth:</label></td>
        <td> <input type="date" id="dob" name="dob" required></td>
      </tr>
      <tr>
        <td> <label for="address">Address:</label> </td>
        <td> <textarea id="address" name="address" rows="4" cols="50" required></textarea> </td>
      </tr>
      <tr>
        <td>  <label for="contact">Contact Number:</label> </td>
        <td> <input type="tel" id="contact" name="contact" pattern="[0-9]{10}" required></td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td><input type="email" id="email" name="email" required></td>
      </tr>
      <tr>
        <td><label for="blood-group">Select Blood Group:</label></td>
        <td> <select id="blood-group" name="blood-group">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select></td>
      </tr>
    </table><br><br>
    <table border="2">
      <tr>
        <td><label for="year">Year of Passing:</label></td>
        <td><input type="number" id="year" name="year" min="1900" max="2024" required></td>
      </tr>
      <tr>
        <td><label for="degree">Select Degree:</label></td>
        <td><select id="degree" name="degree">
            <option value="Bachelor of Science (B.Sc.)">Bachelor of Science (B.Sc.)</option>
            <option value="Bachelor of Arts (B.A.)">Bachelor of Arts (B.A.)</option>
            <option value="Bachelor of Engineering (B.E.)">Bachelor of Engineering (B.E.)</option>
            <option value="Bachelor of Technology (B.Tech)">Bachelor of Technology (B.Tech)</option>
            <option value="Master of Science (M.Sc.)">Master of Science (M.Sc.)</option>
            <option value="Master of Arts (M.A.)">Master of Arts (M.A.)</option>
            <option value="Master of Engineering (M.E.)">Master of Engineering (M.E.)</option>
            <option value="Master of Technology (M.Tech)">Master of Technology (M.Tech)</option>
            <option value="Ph.D.">Ph.D.</option>
        </select></td>
      </tr>
      <tr>
        <td><label for="branch">Branch:</label></td>
        <td><input type="text" id="branch" name="branch" required></td>
      </tr>
      <tr>
        <td><label for="name of the college or university">Name of the college or university:</label></td>
        <td><textarea id="name of the college or university" name="name of the college or university" rows="3" cols="37" required></textarea></td>
      </tr>
    </table><br><br>
    <table border="2">
      <tr>
        <td><label for="experience">Working experience</label></td>
        <td><select id="experience" name="experience" onchange="showDetails()">
            <option value="fresher">Fresher</option>
            <option value="experienced">Experienced</option>
        </select></td>
        <td>
            <div id="experienceDetails" style="display: none;">
                <label for="previousJob">Previous Job:</label>
                <input type="text" id="previousJob" name="previousJob"><br>
                <label for="designation">Designation:</label>
                <input type="text" id="designation" name="designation"><br>
                <label for="yearsExperience">Years of Experience:</label>
                <input type="number" id="yearsExperience" name="yearsExperience">
                <label for="salary">Last Salary:</label> 
                <input type="number" id="salary" name="salary">
            </div>
        </td>
      </tr>
    </table><br><br>
    <table border="2">
      <tr>
        <td><label for="resume">Resume Upload:</label></td>
        <td><input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required></td>
      </tr>
      <tr>
        <td><label for="photo">Photo:</label></td>
        <td><input type="file" id="photo" name="photo" accept="image/*" required></td>
      </tr> 
      <tr>
        <td><label for="photo">Degree Certificate:</label></td>
        <td><input type="file" id="Degree Certificate:" name="Degree Certificate:" accept="image/*" required></td>
      </tr>
      <tr>
        <td><label for="photo">id proof:</label></td>
        <td><input type="file" id="id proof:" name="id proof:" accept="image/*" required></td>
      </tr>
    </table><br><br>
    <table border="2">
      <tr>
        <td><label for="interview_date">Date of Interview:</label></td>
        <td><input type="date" id="interview_date" name="interview_date" required></td>
      </tr>
      <tr>
        <td><label for="selectionStatus">Selection Status:</label></td>
        <td>
          <select id="selectionStatus" name="selectionStatus" onchange="toggleFields()">
            <option value="selected">Selected</option>
            <option value="notSelected">Not Selected</option>
          </select>
        </td>
      </tr>
      <tr id="dateOfJoiningRow" style="display: none;">
        <td><label for="dateOfJoining">Date of Joining:</label></td>
        <td><input type="date" id="dateOfJoining" name="dateOfJoining"></td>
      </tr>
      <tr id="designationRow" style="display: none;">
        <td><label for="designation">Designation:</label></td>
        <td><input type="text" id="designation" name="designation"></td>
      </tr>
      <tr id="salaryRow" style="display: none;">
        <td><label for="salary">Salary per anum:</label></td>
        <td><input type="number" id="salary" name="salary"></td>
      </tr>
    </table><br><br>
    <input type="reset" value="Reset" class="form-btn">
    <input type="submit" name="submit" value="Submit" class="btn"> <br><br>
       <a href="admin_page.php">Back</a>
  </form>
  <script>
    function showDetails() {
      var experienceSelect = document.getElementById("experience");
      var experienceDetailsDiv = document.getElementById("experienceDetails");

      if (experienceSelect.value === "experienced") {
        experienceDetailsDiv.style.display = "block";
      } else {
        experienceDetailsDiv.style.display = "none";
      }
    }
    function toggleFields() {
      var selectionStatus = document.getElementById("selectionStatus").value;
      var dateOfJoiningRow = document.getElementById("dateOfJoiningRow");
      var designationRow = document.getElementById("designationRow");
      var salaryRow = document.getElementById("salaryRow");
      if (selectionStatus === "selected") {
        dateOfJoiningRow.style.display = "table-row";
        designationRow.style.display = "table-row";
        salaryRow.style.display = "table-row";
      } else {
        dateOfJoiningRow.style.display = "none";
        designationRow.style.display = "none";
        salaryRow.style.display = "none";
      }
    }
    toggleFields();
  </script>
  </center>
</body>
</html>
