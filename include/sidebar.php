<div class="b-example-divider b-example-vr"></div>

<div class="flex-shrink-0 p-2" style="width: 280px; position:fixed;">
  <a href="#" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">


    <p style="pointer-events: none;" class="ps-4"><?php echo $_SESSION['emailid'];  ?></p>

  </a>
  <ul class="list-unstyled ps-0">
    <li class="mb-1">
      <a href="user_dashboard.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">


          <i class="fa-solid fa-house"></i> &nbsp;
          Home
        </button>

      </a>

    </li>
    <li class="mb-1">
      <a href="viewallbook.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          <i class="fas fa-books"></i>

          <img src="books.png" height="17"> &nbsp; View All Books
        </button>
      </a>
    </li>
    <li class="mb-1">
      <a href="requestedbooks.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">

          <i class="fa-solid fa-book"></i> &nbsp;&nbsp;
          Booked Books
        </button>
      </a>
    </li>



    </li>
    <li class="mb-1">
      <a href="takenBook.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          <i class="fa-solid fa-book-open"></i> &nbsp;

          Taken Books
        </button>
      </a>
    </li>
    <li class="mb-1">
      <a href="returnedbook.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          <i class="fa-solid fa-rotate-left"></i> &nbsp;

          Returned Books
        </button>
      </a>
    </li>


    <li class="border-top my-3"></li>

    <li class="mb-1">
      <a href="accountinfo.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <i class="fa fa-user"></i> &nbsp;

          Account Info
        </button>
      </a>
    </li>

    <li class="mb-1">
      <a href="changepassword.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <i class="fa fa-user"></i> &nbsp;

          Change Password
        </button>
      </a>
    </li>

    <li class="mb-1">
      <a href="logout.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <i class="fa-solid fa-right-from-bracket"></i> &nbsp;

          Logout
        </button>
      </a>
    </li>

     <li class="mb-1">
      <a href="payfine.php">
        <button class="btn ps-4 fw-semibold d-inline-flex align-items-center rounded border-0 collapsed" style="width:400px;" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          <i class="fa-solid fa-right-from-bracket"></i> &nbsp;

          Pay Fine
        </button>
      </a>
    </li>
  </ul>
</div>



<script>
  /* global bootstrap: false */
  (() => {
    'use strict'
    const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    tooltipTriggerList.forEach(tooltipTriggerEl => {
      new bootstrap.Tooltip(tooltipTriggerEl)
    })
  })()
</script>