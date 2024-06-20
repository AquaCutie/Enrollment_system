<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="announcement.css">
    <link rel="icon" type="image/x-icon" href="/assets/R.png">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>AU-Enrollment</title>
</head>
<body>
<div class="sidebar close">
    <div class="logo-details">
        <i class="bx bx-menu" ></i>
      <span class="logo_name">Dashboard</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="index.php">
                <i class="bx bx-file"></i>
              <span class="link_name">Requirements</span>
            </a>
          </li> 
      <li>
        <a href="announcement.php">
            <i class="bx bxs-megaphone" ></i>
          <span class="link_name">Announcement</span>
        </a>
      </li>
      <li>
        <a href="strands.php">
            <i class="bx bxs-book-open"></i>
          <span class="link_name">Strands</span>
        </a>
      </li>  
      <li>
        <a href="enrollment.php">
            <i class="bx bx-edit"></i>
          <span class="link_name">Enrollment</span>
        </a>
      </li>    
      <li>
        <div class="dummyspace">
          <a href="/">
            <i class="bx bx-log-out"></i>
            <span class="link_name">Logout</span>
          </a>
        </div>   
      </li>  
    </ul>
    
</div>
  

<div class="body-of-announcement">
<div class="wrapper">
  <div class="text">ANNOUNCEMENTS</div>
<?php
include("database.php");


$sql = "SELECT id, title, note FROM announcementtb ORDER BY id DESC";
$result = $conn->query($sql);


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo '<div class="announcement">';
        echo '<h3>'. $row["title"]. '</h3>';
        echo '<p>'. $row["note"]. '</p>';
        echo '</div>';
    }
} else {
    echo "No announcements found.";
}

$conn->close(); 
?>
</div>
</div>


<script src="scripts.js"></script>
</body>
</html>