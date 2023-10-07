<?php
 
 $f_name= $_POST["f_name"];
 $l_name= $_POST["l_name"];
 $date=$_POST["u_date"];
 $gender=$_POST["gender"];
 $email=$_POST["u_email"];
 $number=$_POST["u_number"];
 $subject=$_POST["Subject"];
 $password=$_POST["u_pass"];



   ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2 style="text-align: center; ">Personal Information</h2>
  
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Fast Name</th>
        <th>Last Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Subject</th>
        <th>Password</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $f_name; ?></td>
        <td><?php echo $l_name; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $gender; ?></td>
        <td><?php echo $email; ?></td>
        <td><?php echo $number; ?></td>
        <td><?php echo $subject; ?></td>
        <td><?php echo $password; ?></td>
      </tr> 
    </tbody>
  </table>
</div>

</body>
</html>




