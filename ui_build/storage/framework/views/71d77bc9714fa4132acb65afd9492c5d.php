
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="<?php echo e(asset('css/dashboard.css')); ?>">


    <title>Glide - Acra Lending Portal</title>


</head>

<body>

    <div class="containerOuterLayout">

        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-default" style="background: white">
            <div class="container-fluid">

                <img src="img/header.png" alt="nav-image" class="ms-4 image-view">
                <form class="d-flex me-auto ms-5 align-items-center searchbtn" role="search">
                    <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
                    <i style="color: #0033A1;" class="fa fa-search" aria-hidden="true"></i>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item d-flex align-items-center me-4">
                            <img src="img/bell_icon.PNG" alt="Notification icon" class="bellicon">
                        </li>
                        <li class="nav-item dropdown me-4 d-flex align-items-center">
                            <div class="ms-4">
                                <img src="img/user_ico.PNG" alt="Notification icon" class="usericon">
                            </div>
                            <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="font: normal normal 600 11px/17px Poppins;"><?php echo e(Session::get('firstname')); ?><span
                                    style="font: normal normal normal 9px/13px Poppins;"><br>Developer</span></a>
                            <a href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span
                                    class="fa fa-angle-down"></span></a>
                            <div>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">View Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

        <nav class="sidebar">
            <header>
                <i id="toggle-button1" style="left: 203px;" class='bx bx-chevron-right toggle'></i>
            </header>

            <div class="menu-bar">
                <div class="container-fluid menu">
                    <ul class="menu-links">
                        <li class="nav-links link-hover"
                            style="width:212px;color: #0033A1;font: normal normal bold 14px/21px Poppins;background: #E3ECF6;border-left: 3px solid #001c58;">
                            <a href="#" class="link-hover" style="width:212px"
                                style="color: #0033A1;font: normal normal bold 14px/21px Poppins;background: #E3ECF6;">

                                <img src="img/list.svg" alt="logo" class="icon"
                                    style="color: #0033A1;font: normal normal bold 14px/21px Poppins;border-left: 2px solid #001c58; border: 1px solid #0033A1; background: #0033A1; border-radius: 5px;">

                                <span class="text nav-text">Pipe Line</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/quick pricing.svg" alt="logo" class="icon">
                                <span class="text nav-text" >Price Scenario</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/g3306.svg" alt="logo" class="icon">
                                <span class="text nav-text">Quick Pricing</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/files-and-folders.svg" alt="logo" class="icon">
                                <span class="text nav-text">Submit Loans</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <span class="icon accounthide"
                                style="color:#343434;font-size: 11px; font-weight:bolder; position:relative; left: 20px;">ACCOUNT</span>
                            <span class="text nav-text"
                                style="color:#343434;font-size: 14px; font-weight:bolder; position:relative; left: 0px;">ACCOUNT</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="img/Group 5718.svg" alt="logo" class="icon">

                                <span class="text nav-text">Settings</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="<?php echo e(route('logout')); ?>" class="link-hover" style="width:212px">
                                <img src="img/Group 5719.svg" alt="logo" class="icon">

                                <span class="text nav-text">Logout</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="dashboard-home ">
            <div class="py-2">
                <div class="row">
                    <div class="col-2" style="text-align:left;">
                        <span style="text-align:left;font-size: 16px;"><b>Pipe Line</b></span>
                    </div>
                    <div class="btn-group" style="position:absolute; margin-left:25%;margin-right:30%">
                        <button class="btn1 active">Scenarios</button>
                        <button class="btn1">Active</button>
                        <button class="btn1">Funded</button>
                        <button class="btn1" style="width: 141px;">Cancelled/Declined</button>
                    </div>
                </div>
            </div>

            <div style="border-radius:5px" >
                <div class="dashboard-search shadow p-1" id="dashboard-table1" style="text-align:left;border-radius:5px">
                    <span class="ms-1" style="text-align:left;font-size: 14px">Search</span>
                    <div class="row ms-1 me-1 align-items-center"
                        style="border-radius:5px;height: 69px; background: #EFF5FC">
                        <form>
                            <div class="row">
                            <div class="col-10" style="text-align:left">
                                <label style="font-size: 14px">Search by</label>
                                <input autocomplete="on" list="list-date" id="date-filter" class="ms-3" name="txtDate" placeholder="mm/dd/yyyy" oninput="updateOptionsDate(event.target.value)">
                                <datalist id="list-date">
                                    
                                </datalist><svg style="color : #9C9C9C" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                                  </svg>
                                <input autocomplete="on" list="list-borrower" id="borrower-name-filter" class="ms-3" name="txtBorrower" placeholder="Borrower Name" oninput="updateOptionsBorrower(event.target.value)">
                                <datalist id="list-borrower">
                                    
                                </datalist><svg style="color : #9C9C9C" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                                  </svg>
                            </div>
                            <div class="col-2">
                                <button class="btnrst" style="position:relative;left:20px;font: normal normal 600 10px/16px Poppins;width: 69px;  height: 30px;border-radius:5px;">Reset</button>
                                <button class="btngo" style="position:relative;left:20px;font: normal normal 600 10px/16px Poppins;width: 37px;  height: 30px;border-radius:5px;">Go</button>
                            </div>
                        </div>
                        <form>
                    </div>
                </div>
            </div>

            <div class="dashboard-table container_table shadow" id="dashboard-table"
                style="border-radius:5px;color: #323E48;background: #E3ECF6 0% 0% no-repeat padding-box;text-align: left;font: normal normal 600 12px/18px Poppins;">
                <div class="tab-header">
                    <button id="reloadButton" class="reloadButton" style="background-color:#FCFCFC;border:none" type="button"><img src="<?php echo e(asset('img/reload.svg')); ?>" alt=""></button>
                </div>
                <div class="pagination-back"></div>
                <table id="glide-table" class="table row-border test-table" style="border-radius:5px;height: 40px;">
                    <thead class="my-table-header" id="dashboard-head1" style="height: 50px;vertical-align:middle">
                        <tr>
                            <th>Scenario Name</th>
                            <th>Borrower Name</th>
                            <th>Date</th>
                            <th>Loan Officer</th>
                            <th>Loan Purpose</th>
                            <th>Broker Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody style="border-radius:5px;background: #FCFCFC  0% 0% no-repeat padding-box;">
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
    integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://kit.fontawesome.com/9a470ccc4c.js" crossorigin="anonymous"></script>
<script src="<?php echo e(asset('js/dashboard.js')); ?>"></script>

</html>

<?php /**PATH D:\Laravel_01\ui_build\resources\views/loan.blade.php ENDPATH**/ ?>