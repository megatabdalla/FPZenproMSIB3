<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Anews</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style type="text/css">
      body {
        background-color: #262626;
        font-family: 'Montserrat';
        color: white;
      }
      .navbar-brand {
        color: #25AAE2;
      }

      a{
        color: white;
        text-decoration:none
      }

      a:hover{
        color: #80bfff;
      }

      h1{
        color: #348898;
        margin-top: 50px;
      }

      form{
        border: 3px solid #f1f1f1;
        margin: 0px auto;
        width: 70%;
      }

      input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: #348898;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      .container {
        padding: 16px;
        color: #348898;
      }

      span.psw {
        float: right;
        padding-top: 30px;
      }
      @media screen and (max-width: 300px){
        span.psw{
           display: block;
           float: none;
        }
      }

      .container-fluid {
        border-bottom: 2px solid black !important;
        padding-bottom: 10px;
    }
    </style>
</head>
<body>
    <div class="container">
      <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php">
            <img src="img/Anews.png" alt="Logo" width="100" height="22">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <div class="me-auto"></div>
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin: 0px 20px;">Data Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="margin: 0px 20px;">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="logout.php" style="margin: 0px 20px;">Login</a>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <center><h1>LOGIN ADMIN</h1></center>
    <br>
    <form action="logact.php" method="post">
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input class="form-control" type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input class="form-control" type="password" placeholder="Enter Password" name="psw" required>
            
        <button type="submit">Login</button>
        <span class="psw"><a href="#" style="color: white;">Forgot password?</a></span>
      </div>
    </form>
    <br><br>
    <?php
      include "footer.php";
    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>