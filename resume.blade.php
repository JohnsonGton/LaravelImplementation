<?php
// Database connection details
$servername = "localhost"; // or your server address
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "laravel"; // updated to match your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to select data from the resumedetails table
$sql = "SELECT fullname, email, phone, skill1, skill2, skill3, skill4, exp1, exp2, exp3, exp4 FROM resumedetails;";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

// Variables to store data
$fullname = ''; 
$email = '';
$phone = '';
$skill1 = '';
$skill2 = ''; 
$skill3 = '';
$skill4 = '';
$exp1 = '';
$exp2 = ''; 
$exp3 = '';
$exp4 = '';

// Check if there are results
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fullname = $row['fullname']; 
        $email = $row['email'];
        $phone = $row['phone'];
        $skill1 = $row['skill1'];
        $skill2 = $row['skill2']; 
        $skill3 = $row['skill3'];
        $skill4 = $row['skill4'];
        $exp1 = $row['exp1'];
        $exp2 = $row['exp2']; 
        $exp3 = $row['exp3'];
        $exp4 = $row['exp4'];
    }
} else {
    $fullname = "No results found.";
}

// close connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Name - Resume</title>
  <link rel="stylesheet" href="{{ asset('vanila/index.css') }}">
<body>
  <header>
    <h1><?php echo $fullname; ?></h1>
    <p>Johnson Z. Gahaton | 0965 091 7330 </p>
  </header>

  <section id="summary">
    <h2>Summary</h2>
    <p>Motivated Bachelor of science in Information Technology student with a solid foundation in programming (javascript, HTML, css), computer hardware, and networking fundamentals. Experienced in working with various operating systems like Windows, with skills in troubleshooting and basic system setup. Passionate about learning new technologies and problem-solving, with a keen interest in expanding knowledge in cybersecurity, software development, and IT support.

.</p>
  </section>

  <section id="skills">
    <h2>Skills</h2>
    <ul>
      <li><?php echo $skill1; ?></li>
      <li><?php echo $skill2; ?></li>
      <li><?php echo $skill3; ?></li>
      <li><?php echo $skill4; ?></li>
    </ul>
  </section>

  <section id="experience">
    <h2>Experience</h2>
    <div class="job">
      <h3><?php echo $exp1; ?></h3>
      <h3><?php echo $exp2; ?></h3>
      <h3><?php echo $exp3; ?></h3>
      <h3><?php echo $exp4; ?></h3>
    </div>
    </section>

  <section id="education">
     <h2>Education</h2>
    <div class="degree">
      <h3>Bachelor of System Information Technology</h3>
      <p>Baliwag Polytechnic College | Baliwag Bulacan | 2021- Present</p>
      <h3>Relevent coursework</h3>
      <ul>
        <li><span>Programming and Development:</span></li>
        <li><span>Design and User Experience: </span></li>
        <li><span>Project Management and Business Analysis:</span></li>
        <li><span>Networking and Cybersecurity:</span></li>
      </ul>
    </div>
    </section>

  <section id="projects">
    <h2>Projects</h2>
    <div class="project">
      <h3>Project Name</h3>
      <p>Description of project</p>
      <ul>
        <li>Zesto Inventory System</li>
      </ul>
    </div>
    </section>
</body>
</html>