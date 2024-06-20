<?php
include("database.php");


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = '';
    $note = '';
    $file_name = '';
    $file_tmp = '';
    $file_type = '';
    $file_ext = '';
    $errors = [];


    if (isset($_POST['title']) &&!empty($_POST['title'])) {
        $title = $_POST['title'];
    }

    if (isset($_POST['note']) &&!empty($_POST['note'])) {
        $note = $_POST['note'];
    }


    $stmt = $conn->prepare("INSERT INTO announcementtb(title, note) VALUES (?,?)");
    $stmt->bind_param("ss", $title, $note);

    if ($stmt->execute()) {
      
    } else {
        echo "Error: ". $stmt->error;
    }

    $stmt->close();


    if (isset($_FILES['file'])) {
        $file_name = $_FILES['file']['name'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
        
        $extensions = ["jpeg", "jpg", "png", "pdf"];
        
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "uploads/". $file_name);
            echo "File uploaded successfully";
        } else {
            foreach ($errors as $error) {
                echo $error. "<br>";
            }
        }
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin-announcement.css">
    <link rel="icon" type="image/x-icon" href="/assets/R.png">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <title>Admin</title>
</head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
        <i class="bx bx-menu" ></i>
      <span class="logo_name">Dashboard</span>
    </div>
    <ul class="nav-links">
        
      <li>
        <a href="admin-announcement.php">
            <i class="bx bxs-megaphone" ></i>
          <span class="link_name">Announcement</span>
        </a>
      </li>
        
      <li>
        <a href="admin-students.php">
            <i class="bx bx-edit"></i>
          <span class="link_name">Student’s Data</span>
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
  <form action="admin-announcement.php" method="post">
    <div class="wrapper-title">
      <label for="title">Title</label>
      <input type="text" name="title" class="title" placeholder="title"/>
    </div>
     <div class="wrapper-body">
      <label for="body">body</label>
      <textarea name="note" class="body" rows="10" cols="60" placeholder="Input the announcement here"></textarea>
     </div>
     <div class="wrapper-file">
      <label for="file" class="files" id="files">
        <span class="files-title">select file</span>
        <input type="file" id="file" name="file" accept=".PDF,image/jpeg, image/png" multiple>
      </label>
    </div>
   
     <div class="wrapper-button">
      <input type="submit" name="submit-button" class="submit-button" value="Post"/>
     </div>
    </form>
  </div>
</div>

      <script src="scripts.js"></script>
</body>
</html>
