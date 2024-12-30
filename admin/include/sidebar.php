<aside class="main-sidebar sidebar-dark-primary elevation-4" style="margin-bottom: 0px !important;">
  <!-- Brand Logo -->


  <!-- For admin head logo and name -->
  <!-- <a href="index3.html" class="brand-link">
      <img src="img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> -->

  <!-- Sidebar -->
  <div class="sidebar " style="min-height: none;">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 d-flex">
      <div class="image">
        <img src="background.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION['username'] ?></a>
      </div>
    </div>



    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Admin

            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Manage Librarian

            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="managemember.php" class="nav-link">
            <i class="nav-icon fa fa-user"></i>
            <p>
              Manage Members

            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="viewbook.php" class="nav-link">
            <i class="fa-solid fa-book"></i>
            <p>
              View Books

            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="addbook.php" class="nav-link">
            <i class="fa-solid fa-pen-to-square"></i>
            <p>
              Add Books

            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="requestedbook.php" class="nav-link">
            <i class="fa-solid fa-book-open"></i>
            <p>
              Requested Books

            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="returnedbook.php" class="nav-link">
            <i class="fa-solid fa-book-open"></i>
            <p>
              Issue/Return Books

            </p>
          </a>
        </li>


        <li class="nav-item">
          <a href="currentlyissuedbook.php" class="nav-link">
            <i class="fa-solid fa-bars"></i>
            <p>
              Currently Issued Books

            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="adminlogout.php" class="nav-link">
            <i class="nav-icon far fa-circle text-info"></i>
            <p>Log Out</p>
            <!-- <button> Log Out</button> -->
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>