<style type="text/css">
    i{
      margin-top: 8px;
      font-size: 20px;
    }

    a {
      color: white !important;
    }

    .container-fluid {
      border-bottom: 2px solid black !important;
      padding-bottom: 10px;
    }

    .form-input {
      background-color: white !important;
      border-radius: 5px;
    }
  </style>

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
              <a class="nav-link" href="index.php" style="margin: 0px 20px;">Data Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crudkat.php" style="margin: 0px 20px;">Data Kategori</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="crudberita.php" style="margin: 0px 20px;">Data Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="margin: 0px 20px;"><b><?php echo $_SESSION['username']?></b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" style="margin: 0px 20px;">Logout</a>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
</div>