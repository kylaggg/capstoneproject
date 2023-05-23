<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('master.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style='background-color:#F5F6FA'>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bx-menu'></i>
            <span class="logo_name">Adamson University</span>
        </div>
        <ul class="nav-links">
            <!-- Admin Links -->
            @if (session()->get('user_level') === 'AD')
                <li>
                    <a href="{{ route('viewAdminDashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="{{ route('viewAdminDashboard') }}">Dashboard</a></li>
                    </ul>
                </li>
                <li id="appraisalsNav">
                    <a href="">
                        <i class='bx bx-file'></i>
                        <span class="link_name">Appraisal</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Appraisal</a></li>
                    </ul>
                </li>
                <li id='employeesNav'>
                    <a href="{{ route('viewEmployeeTable') }}">
                        <i class='bx bx-user-plus'></i>
                        <span class="link_name">Employees</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="{{ route('viewEmployeeTable') }}">Employees</a>
                        </li>
                    </ul>
                </li>
                <li id='evalYearNav'>
                    <a href="{{ route('viewEvaluationYear')}}">
                        <i class='bx bx-box'></i>
                        <span class="link_name">Evaluation<br>Year</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="{{ route('viewEvaluationYear') }}">Evaluation Year</li>
                    </ul>
                </li>
                <li id='editableFormsNav'>
                    <div class="iocn-link">
                        <a href="#">
                            <i class='bx bx-book-alt'></i>
                            <span class="link_name">Editable Forms</span>
                        </a>
                        <i class='bx bxs-chevron-down arrow'></i>
                    </div>
                    <ul class="sub-menu">
                        <li><a href="">Appraisal Form</a></li>
                        <li><a href="">Internal
                                Customer<br>Form</a></li>
                    </ul>
                </li>
            @endif

            <!-- Immediate Superior Links -->
            @if (session()->get('user_level') === 'IS')
                <li>
                    <a href="{{ route('viewISDashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Dashboard</a></li>
                    </ul>
                </li>
                <li id="appraisalsNav">
                    <a href="">
                        <i class='bx bx-file'></i>
                        <span class="link_name">Appraisal</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Appraisal</a>
                        </li>
                    </ul>
                </li>

                <li id='internalCustomersNav'>
                    <a href="">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Appraisal</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Appraisal</a>
                        </li>
                    </ul>
                </li>
            @endif

            <!-- Permanent Employee Links-->
            @if (session()->get('user_level') === 'PE')
                <li>
                    <a href="{{ route('viewPEDashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Dashboard</a></li>
                    </ul>
                </li>
                <li id="appraisalsNav">
                    <a href="">
                        <i class='bx bx-file'></i>
                        <span class="link_name">Appraisal</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Appraisal</a>
                        </li>
                    </ul>
                </li>
                <li id='internalCustomersNav'>
                    <a href="">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Internal Customer<br>Appraisal</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Internal Customer Appraisal</a></li>
                    </ul>
                </li>
            @endif

            <!-- Contractual Employee Link -->
            @if (session()->get('user_level') === 'CE')
                <li>
                    <a href="{{ route('viewCEDashboard') }}">
                        <i class='bx bx-grid-alt'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Dashboard</a></li>
                    </ul>
                </li>
                <li id='internalCustomersNav'>
                    <a href="">
                        <i class='bx bx-group'></i>
                        <span class="link_name">Internal Customer<br>Appraisal</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="">Internal Customer Appraisal</a></li>
                    </ul>
                </li>
            @endif

            <li>
                <a href="">
                    <i class='bx bx-cog'></i>
                    <span class="link_name">Settings</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="">Settings</a>
                    </li>
                </ul>
            </li>

            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name text-capitalize">
                            <?php echo "<h6 style='padding-left: 10px;padding-top:7px;'>" . session()->get('full_name') . '</h6>'; ?>
                            <!--<?php //echo "<h6 style='padding-left: 10px;padding-top:7px;'>" . $firstname . " " . $lastname . "</h6>"
                            ?>-->
                        </div>
                        <div class="job">
                            <?php echo "<h6 style='padding-left: 10px;font-size:12px'>" . session()->get('title') . '</h6>'; ?>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link" data-bs-toggle="modal"
                        data-bs-target="#logout-confirmation">
                        <i class='bx bx-log-out'></i>
                    </button>
                </div>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <section class="content-section">
        <div class="content-title">
            <span class="text" id="title-heading">
                @yield('title')
            </span>
        </div>
        <hr class="content-divider">
        <div class="content-body">
            @yield('content')
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade " id="logout-confirmation" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Logout Confirmation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to logout?
                </div>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary" href="">Logout</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        const menuBtn = document.querySelector('.sidebar .logo-details i');
        const sidebar = document.querySelector('.sidebar');
        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('close');
        });

        const dropdownButton = document.querySelector("#editableFormsNav .iocn-link");
        const dropdownContent = document.querySelector("#editableFormsNav .sub-menu");

        dropdownButton.addEventListener("click", function() {
            dropdownContent.style.display = dropdownContent.style.display === "block" ? "none" : "block";
        });
    </script>
</body>

</html>
