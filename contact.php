<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Form Validation</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
<link href="http://localhost/wd/assets/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="http://localhost/PHP+JS/validation.js" type="text/javascript"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="http://localhost/wd/carousel.css" rel="stylesheet">
    
  </head>
  <body style="background-image: url('bak.png')";>

<header>

  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Carousel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="help.html">Help</a>
          </li>
        </ul>
        <form class="d-flex" style="margin-right: 500px">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

           <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Sign-Up</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sigin.php">Sign-in</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script >
    
    
    </script>
</header>

<div style="
width: 900px;
height: 730px;
padding:20px;
font-size: 20px;
margin-left: 350px;
margin-top:100px;

border: solid 2px;
background-color:gray;

">
<h1 style="text-align: center; margin-top:20px; x; font-family:'Courier New', monospace">Registation Form</h1>

<form method="POST" action="contactData.php"> 
  <div class="container text-center">
<div class="row g-2">
  <div class="col-6"> <label>Fast Name</label>
    <div class="form-floating">

      <input type="text" id="v_fname" class="form-control" name="f_name" >
      
    </div>
    <label style="color:red;font-size:20px;" id="err_fname"></label>
     
  </div>
  <div class="col-6">
    <label>Last Name</label>
    <div class="form-floating">
       <input type="text" name="l_name" class="form-control" id="v_lname">
       
    </div>
    <label style="color:red;font-size:20px;" id="err_lname"></label>
  </div>
</div>

<div class="row g-2">
  <div class="col-6"> <label>Birthday</label>
    <div class="form-floating">

      <input type="date" name="u_date" class="form-control" id="v_date">
      
  </div>
  <label style="color:red;font-size:20px;" id="err_date"></label>
    </div><br>
  <div class="col-6">
  <label>Gender:</label>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="v_m_gender" value="Male">Male
   
  
  </div>
 

  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="v_f_gender" value="Female">Female
   
  
  </div>
  <label style="color:red;font-size:20px;" id="err_gender"></label>
</div>

<div class="row g-2">
  <div class="col-6"> <label>Email address</label>
    <div class="form-floating">

      <input type="email" name="u_email" class="form-control" id="v_email">
      
    </div>
    <label style="color:red;font-size:20px;" id="err_email"></label>
  </div>
  <div class="col-6">
    <label>Phone Number</label>
    <div class="form-floating">
       <input type="tel" name="u_number" class="form-control" id="v_number">
      
    </div>
     <label style="color:red;font-size:20px;" id="err_number"></label>
  </div>
</div>
<div class="row g-3">
<div class="col-5">
    <label>Subject</label>
    <div class="form-floating">
       <select class="form-select" name="Subject" id="v_subject">
        <option value="Choose option">Choose option</option>
        <option value="Computer Graphices">Computer Graphice</option>
        <option value="Microcontroller">Microcontroller</option>
        <option value="Digital Image Processing">Digital Image Processing</option>
      </select>
      
    </div>
    <label style="color:red;font-size:20px;" id="err_subject"></label>
      
    </div>
    <div class="col-4">
       <label>Enter the Password</label>
       <div class="form-floating">
        <input type="Password" name="u_pass" class="form-control" id="v_pass">  
       </div>
       <label style="color:red;font-size:20px;" id="err_pass"></label>
    </div>
    <div class="col-3">
          <div class="form-floating">
          <br>
        <input type="checkbox" onclick="showpass()"> Show password
   
      </div>
    </div>
  </div>
</div>
<br>
  <button type="submit" onclick="return form_validation()" class="btn btn-primary btn-lg" style="width:100px;">Submit</button>
</form>
</div>
 

<!-- <script src="http://localhost/wd/assets/dist/js/bootstrap.bundle.min.js"></script>
 -->
      
  </body>
</html>
