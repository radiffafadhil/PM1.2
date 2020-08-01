<!-- <?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet" />
  </head>

  <body>
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Start Bootstrap</div>
        <div class="list-group list-group-flush">
          <a href="admin.php" class="list-group-item list-group-item-action bg-light"
            >Admin</a
          >
          <a href="pelapor.php" class="list-group-item list-group-item-action bg-light"
            >Pelapor</a
          >
          <a href="anonim.php" class="list-group-item list-group-item-action bg-light"
            >Anonim</a
          >
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Events</a
          >
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Profile</a
          >
          <a href="#" class="list-group-item list-group-item-action bg-light"
            >Status</a
          >
        </div>
      </div>
      <!-- /#sidebar-wrapper -->

      <!-- Page Content -->
      <div id="page-content-wrapper">
        <nav
          class="navbar navbar-expand-lg navbar-dark border-bottom"
          style="background-color: #00a547;"
        >
          <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="laporan.php">Laporan Anda</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  Dropdown
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right"
                  aria-labelledby="navbarDropdown"
                >
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <!-- <a class="dropdown-item" href="#">Something else here</a> -->

                  <?php  if (isset($_SESSION['username'])) : ?>
                  <!-- <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p> -->
                  <a
                    class="dropdown-item"
                    href="index.php?logout='1'"
                    style="color: red;"
                    >Logout</a
                  >
                  <?php endif ?>
                </div>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container-fluid">
          <h1 class="mt-4">Simple Sidebar</h1>
          <p>
            The starting state of the menu will appear collapsed on smaller
            screens, and will appear non-collapsed on larger screens. When
            toggled using the button below, the menu will change.
          </p>
          <p>
            Make sure to keep all page content within the
            <code>#page-content-wrapper</code>. The top navbar is optional, and
            just for demonstration. Just create an element with the
            <code>#menu-toggle</code> ID which will toggle the menu when
            clicked.
          </p>
        </div>
      </div>
      <!-- /#page-content-wrapper -->
      <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
          <h3>
            <?php 
        echo $_SESSION['success']; 
        unset($_SESSION['success']);
      ?>
          </h3>
        </div>
        <?php endif ?>

        <!-- logged in user information -->
        <!-- <?php  if (isset($_SESSION['username'])) : ?>
  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
  <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
<?php endif ?> -->
      </div>
    </div>

    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
      integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
      crossorigin="anonymous"
    ></script>

    <!-- Menu Toggle Script -->
    <script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });

      $(".collapse navbar-collapse").click(function () {
        var menu = $(this).attr("id");
        if (menu == "home") {
          $(".badan").load("home.php");
        } else if (menu == "tentang") {
          $(".badan").load("tentang.php");
        } else if (menu == "tutorial") {
          $(".badan").load("tutorial.php");
        } else if (menu == "sosmed") {
          $(".badan").load("sosmed.php");
        }
      });
    </script>
  </body>
</html>
