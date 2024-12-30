<div class="b-example-divider b-example-vr"></div>

<div class="flex-shrink-0 p-3  " style="width: 280px; position:fixed;">


    <div class="mb-4">
        <?php echo $_SESSION['username'] ?>

    </div>



    <ul class="list-unstyled ps-0">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item">
                    <a href="admin.php" class="nav-link">
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