<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="enrollment.css">
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
      <div class="body-of-Enrollment">
         <form action="">
          <div class="enroll-form">
            <div class="wrapper">
              
             <div class="stud-info">
             
              <div class="nameCon">
                <label id="title1">Student"s Name: </label>
              <div class="wrapper2"><input type="text" id="lname" name="last_name" placeholder="Last name">
                <input type="text" id="fname" name="first_name" placeholder="First name">
                <input type="text" id="mname" name="middle_name" placeholder="Middle name">
                <input type="text" id="ename" name="extension_name" placeholder="Extension name"></div>
              </div>

                <div class="addressCon">
                  <label id="title2">Address:</label>
                  <input type="text" id="address" name="address" placeholder="Current Address">
                </div>

                <div class="birthdayCon">
                  <div class="wrapper-uli">
                   <label id="title3">Student"s Birth Date:</label>
                   <input type="date" name="date_of_birth" id="bday" placeholder="Date">
                  </div>
                  <div class="wrapper-uli">
                    <label id="title4">Student"s Birth Place:</label>
                   <input type="text" name="place_of_birth" id="birth-place" placeholder="Complete address">
                  </div>
                </div>
                
                <div class="sex">   
            <label id="title5">Sex:</label>
            <input type="radio" id="f" name="sex" value="female">
            <label for="f">Female</label>
            <input type="radio" id="m" name="sex" value="male">
            <label for="m">Male</label>
            <input type="radio" id="o" name="sex" value="others">
            <label for="o">Others</label>
                </div>

                <div class="personal-background">
                 <div class="NT">
                  <label id="title6">Nationality:</label>
                  <input type="text" id="nationality" name="nationality" placeholder="Nationality">
                 </div>
            <div class="RE">
              <label id="title7">Religion:</label>
            <input type="text" id="religion" name="religion" placeholder="Religion"> 
            </div> 
            <div class="LANG">
              <label id="title8">MotherTongue:</label>
            <input type="text" id="language" name="mother_tongue" placeholder="Mother Tongue">
            </div>
            <div class="STATUS">
              <label for="status-select" id="title9">Civil Status</label>
              <select name="civil_status" id="status-select">
               <option value="">Civil Status</option>
               <option value="Single">Single</option>
               <option value="Married">Married</option>
               <option value="Separated">Separated</option>
               <option value="Widowed">Widowed</option>
               <option value="Complicated">Complicated</option>
              </select>
            </div>
          </div>

              <div class="Ip-group">
                <label id="title10">Belonging to any Indigenous People’s Group? </label><br>
                <div class="Candywrapper">
                  <input type="radio" id="y" name="belonging_to_ipg" value="yes">
                  <label for="y">Yes</label>
                  <input type="radio" id="n" name="belonging_to_ipg" value="no">
                  <label for="n">No</label>
                  <input type="text" id="others" name="others" placeholder="If yes, please specify ">
              </div>
              </div>
              <div class="beneficiary">
                <label id="title11">Is your family a beneficiary of 4ps? </label><br>
                <div class="wrap">
                  <input type="radio" id="e" name="beneficiary_of_4ps" value="yes">
                  <label for="e">Yes</label>
                  <input type="radio" id="q" name="beneficiary_of_4ps" value="no">
                  <label for="q">No</label>
                </div>
              </div>

             <div class="ira-wrap-ko-uli">
              <div class="stud-number">
                <label id="title12">Student’s Contact Number: </label>
                <input type="number" id="Contactnum" name="contact_number" placeholder="Cellphone/Telephone #">
              </div>
              
              <div class="stud-email">
                <label id="title13">Student’s Email:</label>
           <input type="text" name="email" id="email" placeholder="Active Email Address">
              </div>

              <div class="stud-lrn">
                <label id="title14">Learner Reference Number (LRN):</label>
                <input type="number" name="lrn_number" id="LRN" placeholder="LRN Number">
              </div>
             </div>

             <div class="wrapper-for-grade-and-strand">
              <div class="grades">
                <label for="select-year" id="title15">Grade Year to Enroll:</label>
                 <select name="grade_year" id="select-year">
                   <option value="">Grade Year</option>
                   <option value="Grade-11">Grade 11</option>
                   <option value="Grade-12">Grade 12</option>
                 </select>
              </div>

              <div class="strand-course">
                <label for="select-course" id="title16">What course/strand would you like to take?</label>
                   <select name="course_or_strand" id="select-course">
                      <option value="">Strands/Courses available</option>
                      <option value="ICT">ICT</option>
                      <option value="STEM">STEM</option>
                      <option value="ADM">ADM</option>
                      <option value="HUMSS">HUMSS</option>
                      <option value="GAS">GAS</option>
                      <option value="HE">HE</option>
                      <option value="ST">ST</option>
                      <option value="AD">AD</option>    
                   </select>
              </div>
             </div>

             <div class="Guardian-nameCon">
              <label id="title17">Name of Parent/Guardian:  </label>
              <div class="wrapper3">
              <input type="text" id="Gaurdian-lname" name="parent_last_name" placeholder="Last name">
              <input type="text" id="Gaurdian-fname" name="parent_first_name" placeholder="First name">
              <input type="text" id="Gaurdian-mname" name="parent_middle_name" placeholder="Middle name">
              <input type="text" id="Gaurdian-ename" name="parent_extension_name" placeholder="Extension name">
              </div>
              </div>

              <div class="relationship-and-number-of-gaurdian">
                <div class="relationship-to-gaurdian">
                  <label id="title18">Relation with guardian: </label>
                  <input type="text" id="relation" name="relationship" placeholder="Relationship">
                </div>
                <div class="contact-number-of-gaurdian">
                  <label id="title19">Contact Number: </label>
                  <input type="number" id="Contact2" name="parent_contact_number" placeholder="Contact #">
                </div>
              </div>

              <div class="req">
                <h2>Requirements</h2>
              </div>
              <div class="files">
                <div class="select-pdf">
                  <label for="file" class="pdf-container" id="pdfcontainer">
                    <span class="pdf-title">PSA Birth Certificate (PDF File)</span>
                    <input type="file" id="file" name="psa_birth_certificate_pdf" accept=".PDF" required>
                  </label>
                </div>
                <div class="select-picture">
                  <label for="file" class="picture-container" id="picturecontainer">
                    <span class="picture-title">2X2 ID Picture </span>
                    <input type="file" id="picture" name="id_picture" accept="image/jpeg, image/png" required>
                  </label>
                </div>
                <div class="select-pdf-card">
                  <label for="file" class="pdf-card-container" id="pdf-card-container">
                    <span class="pdf-card-title">PSA Birth Certificate (PDF File)</span>
                    <input type="file" id="file-card" name="grade_10_report_card_pdf" accept=".PDF" required>
                  </label>
                </div>
              </div>

              <div class="paragraph">
                <p>I hereby give consent to Arellano University to collect, use and process my personal information, and do certify that the information provided in this form is complete, true and correct.</p>
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox" id="Agree" name="interest" value="Agree" />
                  I AGREE
                </label>
              </div>

              <div class="buttonClass">
                <button class="submitBTN" name="submit">Submit</button>
              </div>
           

             </div><!--dito matatapos ung stud-info-->
            </div><!--dito matatapos ung wrapper-->
          </div><!--dito matatapos ung enroll-form-->
         </form><!--dito matatapos ung form-->
      </div>
      

      <script src="scripts.js"></script>
</body>
</html>