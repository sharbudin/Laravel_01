@if ((Session::has('home')))
{!!Session::forget('send')!!}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-select.min.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-icons@1.6.0/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/sidebar.css">


    <title>Glide - Acra Lending Portal design</title>

    <style>
        input::placeholder {
            font-weight: bold;
            opacity: 0.9;
            color: black;
            font-size: 10px;
        }

        .ui-datepicker {
            font-size: 8pt !important
        }

        body {
            text-align: center;
            background-color: lightgray;
        }

        .dataTables_paginate {
            position: absolute;
            top: 12px;
            margin-left:90%;
            background-color : #FCFCFC;
            padding:2px;
            border:none ;
            border-right:1px #707070;
            color : #707070;
        }
        .dataTables_paginate a {
            color : #707070;
            text-decoration: none;
        }

        .reloadButton {
            position: absolute;
            margin-left:9.5%;
            background-color : #FCFCFC;
            border:none ;
            color: #323E48;
        }
        .dataTables_info {
            position: absolute;
            top:3px;
            margin-left:1.5%;
            background-color : #FCFCFC;
            border:none ;
            color: #323E48;
            text-align: left;
            font: normal normal 600 12px/17px Poppins;
            letter-spacing: 0px;
            color: #323E48;
            opacity: 1;
        }
        .dataTables_length {
            position: absolute;
            top:5px;
            margin-left:-4%;
            background-color : #FCFCFC;
            border:none ;
            color: #323E48;
            text-align: left;
            font: normal normal 600 12px/17px Poppins;
            letter-spacing: 0px;
            color: #323E48;
            opacity: 1;
        }
        .dataTables_length label select {
            position: absolute;

            border-color: #E2DCDC;
            background-color : #F8F8F8;
            top:5px;
            width: 25px;
            height: 25px;
            font: normal normal 600 10px/12px Poppins;
        }
        .dataTables_length label {
            font: normal normal 800 12px/17px Poppins;
            letter-spacing: 0px;
            padding-right: 115px;
            color: #323E48;
            padding-top:9px;
        }

        .containerOuterLayout {
            /* width: 100vw; */
            height: 984px;
            overflow: hidden;
            width: 100%; /* Set your container's initial width to whatever you need */
            transform-origin: top left; /* Set the transform origin to the top left corner */
            transition: transform 0.3s ease-out; /* Add a transition effect for smooth animation */

            /* Optional styles to center the container horizontally */
            background: #FFFFFF 0% 0% no-repeat padding-box;

            position: absolute;
            top: 0;
            left: 0;
            z-index: 9999;

            /* Zoom the container to fit its contents */
            transform: scale(calc(100vw / 100), calc(100vh / 100));
        }
        .sidebar {
            height: 984px;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FFFFFF 0% 0% no-repeat padding-box;
        }

        ::-webkit-scrollbar {
        display: none;
        }

        /* Create a custom scrollbar */
        ::-webkit-scrollbar-track {
        background-color: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
        background-color: #888;
        border-radius: 20px;
        border: 5px solid #f1f1f1;
        }

        /* Optional: Add hover styles to the scrollbar */
        ::-webkit-scrollbar-thumb:hover {
        background-color: #555;
        }

        input[name="txtBorrower"] {
            margin: 0 auto;
            float: none;
            border: none;
            width: 150px;
            border-bottom: 1px solid #000000;
            outline: none;
            border-bottom-color: #A8A8A8;
            background: transparent;
            font-weight: 500;
            color : #585858;
            font-size: 16px;
        }

        input[placeholder="Borrower Name"]::placeholder {
            text-align: left;
            font: normal normal normal 14px/21px Poppins;
            letter-spacing: 0px;
            color: #A8A8A8;
        }

        input[placeholder="mm/dd/yy"]::placeholder {
            text-align: left;
            font: normal normal normal 14px/21px Poppins;
            letter-spacing: 0px;
            color: #A8A8A8;
        }


    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

</head>

<body>

    <div class="containerOuterLayout">

        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-default" style="background: white">
            <div class="container-fluid">

                <img src="images/header.PNG" alt="nav-image" class="ms-4 image-view">
                <form class="d-flex me-auto ms-5 align-items-center searchbtn" role="search">
                    <input type="search" placeholder="Search by Borrower Last Name or Loan Number">
                    <i style="color: #0033A1;" class="fa fa-search" aria-hidden="true"></i>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                        <li class="nav-item d-flex align-items-center me-4">
                            <img src="images/bell_icon.PNG" alt="Notification icon" class="bellicon">
                        </li>
                        <li class="nav-item dropdown me-4 d-flex align-items-center">
                            <div class="ms-4">
                                <img src="images/user_ico.PNG" alt="Notification icon" class="usericon">
                            </div>
                            <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false"
                                style="font: normal normal 600 11px/17px Poppins;">{{Session::get('firstname')}}<span
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
                                    <li><a class="dropdown-item" href="{{route('logout')}}">Logout</a></li>
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

                                <img src="images/list.svg" alt="logo" class="icon"
                                    style="color: #0033A1;font: normal normal bold 14px/21px Poppins;border-left: 2px solid #001c58; border: 1px solid #0033A1; background: #0033A1; border-radius: 5px;">

                                <span class="text nav-text">Pipe Line</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="images/quick pricing.svg" alt="logo" class="icon">
                                <span class="text nav-text" >Price Scenario</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="images/g3306.svg" alt="logo" class="icon">
                                <span class="text nav-text">Quick Pricing</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="#" class="link-hover" style="width:212px">
                                <img src="images/files-and-folders.svg" alt="logo" class="icon">
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
                                <img src="images/Group 5718.svg" alt="logo" class="icon">

                                <span class="text nav-text">Settings</span>
                            </a>
                        </li>
                        <li class="nav-links">
                            <a href="{{route('logout')}}" class="link-hover" style="width:212px">
                                <img src="images/Group 5719.svg" alt="logo" class="icon">

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
                    <div class="col-2">
                        <span style="font-size: 16px;"><b>Pipe Line</b></span>
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
                <div class="dashboard-search shadow p-1" id="dashboard-table1" style="border-radius:5px">
                    <span class="ms-1" style="font-size: 14px">Search</span>
                    <div class="row ms-1 me-1 align-items-center"
                        style="border-radius:5px;height: 69px; background: #EFF5FC">
                        <form>
                            <div class="row">
                            <div class="col-10">
                                <label style="font-size: 14px">Search by</label>
                                <input autocomplete="on" list="list-date" id="date-filter" class="ms-3" name="txtDate" placeholder="mm/dd/yy" oninput="updateOptionsDate(event.target.value)">
                                <datalist id="list-date">
                                    {{-- options --}}
                                </datalist><svg style="color : #9C9C9C" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                                    <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                                  </svg>
                                <input autocomplete="on" list="list-borrower" id="borrower-name-filter" class="ms-3" name="txtBorrower" placeholder="Borrower Name" oninput="updateOptionsBorrower(event.target.value)">
                                <datalist id="list-borrower">
                                    {{-- options --}}
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
                    <button id="reloadButton" class="reloadButton" style="background-color:#FCFCFC;border:none" type="button"><img src="{{asset('img/reload.svg')}}" alt=""></button>
                </div>

                <table id="example" class="table row-border hover" style="border-radius:5px;width:100%;height: 40px;">
                    <thead class="my-table-header" style="height: 50px;vertical-align:middle">
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
                            {{-- Table data retrived from json file  --}}
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
<script src="assets/js/script.js"></script>

<script>
function updateOptionsBorrower(value) {
  const datalist = document.querySelector('#list-borrower');
  datalist.innerHTML = ''; // clear existing options
  if (value.length >= 2) {
    // retrieve options using AJAX
    $.getJSON("{{asset('data/page4data.json')}}", function(data) {
        const uniqueBorrowers = [...new Set(data.map(item => item['Borrower Name']))];

        uniqueBorrowers
        .filter(borrower => borrower.toLowerCase().startsWith(value.toLowerCase()))
        .forEach(borrower => {
        datalist.appendChild(createOptionBorrower(borrower));
        });
    });
  }
}
function createOptionBorrower(value) {
  const option = document.createElement('option');
  option.value = value;
  return option;
}

function updateOptionsDate(value) {
  const datalist = document.querySelector('#list-date');
  datalist.innerHTML = ''; // clear existing options
  if (value.length >= 1) {
    // retrieve options using AJAX
    $.getJSON("{{asset('data/page4data.json')}}", function(data) {
  const uniqueDates = [...new Set(data.map(item => item['Date']))];

  uniqueDates
    .filter(date => {
      const dateStr = date.toLowerCase();
      const monthStr = dateStr.slice(0, 2);
      const monthWithLeadingZero = ("0" + monthStr).slice(-2);
      return (monthStr === "0" + value || monthWithLeadingZero === value) && dateStr.indexOf('/', 3) !== -1;
    })
    .forEach(date => {
      datalist.appendChild(createOptionDate(date));
    });
});
  }
}

function createOptionDate(value) {
  const option = document.createElement('option');
  option.value = value;
  return option;
}


</script>

<script>


$(document).ready(function() {

  var table = $('#example').DataTable( {
    "ajax": {
      "url": "{{asset('data/page4data.json')}}",
      "dataSrc": ""
    },
    "columns": [
      { "data": "Scenario Name" },
      { "data": "Borrower Name" },
      { "data": "Date" },
      { "data": "Loan Officer" },
      { "data": "Loan Purpose" },
      { "data": "Broker Name" },
      { "data": "Action" }
    ],
    "fnInitComplete": function() {
        $('select[name="example_length"]').removeClass('form-select');
    },
    "pagingType": "full_numbers",
    "scrollY": 542,
    "scrollX": true,
    "paging": true,
    "scrollCollapse": true,
    "language": {
      "paginate": {
        "first": '<i class="fa-solid fa-angles-left" style="font-size:12px"></i>',
        "last": '<i class="fa-solid fa-angles-right" style="font-size:12px"></i>',
        "previous": '<i class="fa-solid fa-angle-left" style="font-size:12px"></i>',
        "next": '<i class="fa-solid fa-angle-right" style="font-size:12px"></i>',
        "sInfo": "_START_ - _END_ of _TOTAL_",
        "sInfoEmpty": "0 - 0 of 0",
        "sInfoFiltered": "",
        "sLengthMenu": "Show _MENU_"
      }
    },
    "drawCallback": function(settings) {

      var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
      var pageInfo = $(this).DataTable().page.info();
      var currentPage = pageInfo.page + 1;
      var totalPages = pageInfo.pages;
      var paginationHtml = '';
      paginationHtml += '<a class="paginate_button first" href="#" data-page="first"><i class="fa-solid fa-angles-left" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<a class="paginate_button previous" href="#" data-page="prev"><i class="fa-solid fa-angle-left" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<span class="paginate_button current"> ' + currentPage + '<span style="height:10px;font-size:9px">&nbsp; / &nbsp;</span>' + totalPages + ' </span><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<a class="paginate_button next" href="#" data-page="next"><i class="fa-solid fa-angle-right" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
      paginationHtml += '<a class="paginate_button last" href="#" data-page="last"><i class="fa-solid fa-angles-right" style="font-size:12px"></a>';
      pagination.html(paginationHtml);

      // attach click event listener to navigation links
      pagination.find('a').on('click', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        if (page === 'prev') {
          table.page('previous').draw('page');
        } else if (page === 'next') {
          table.page('next').draw('page');
        } else if (page === 'first') {
          table.page('first').draw('page');
        } else if (page === 'last') {
          table.page('last').draw('page');
        } else {
          table.page(page - 1).draw('page');
        }
      });
    },
    "dom": "<'row'<'col-sm-6 col-md-2'i><'col-sm-6 col-md-2'l><'col-md-6'><'col-sm-6 col-md-2'p>>" + "<'row'<'col-sm-12'tr>>",
    "language": {
      "lengthMenu": "Show&nbsp;&nbsp;&nbsp; _MENU_",
      "info": "_START_ to _END_ of _TOTAL_",
      "sortAsc": '<i class="fa fa-sort-alpha-asc"></i> Ascending',
      "sortDesc": '<i class="fa fa-sort-alpha-desc"></i> Descending'
    }
  });

  $('#reloadButton').on('click', function() {
    table.ajax.reload();
    $('#date-filter').val('');
    $('#borrower-name-filter').val('');
  });

    $(".btn1").click(function () {
        $(".btn1").removeClass("active");
        $(this).addClass("active");
    });


    // $.getJSON("{{asset('data/page4data.json')}}", function(data) {
    //     $.each(data, function(index, item) {
    //         $('#list-borrower').append('<option value="' + item["Borrower Name"] + '">');
    //     });
    // });

    // $.getJSON("{{asset('data/page4data.json')}}", function(data) {
    //     $.each(data, function(index, item) {
    //         $('#list-date').append('<option value="' + item["Date"] + '">');
    //     });
    // });


});


    $(function() {
        $('.btngo').on('click', function() {
        event.preventDefault(); // prevent form submission
        const input1 = $('#date-filter').val();
        const input2 = $('#borrower-name-filter').val();
        $('#example tbody tr').each(function() {
        const column1Value = $(this).find('td:nth-child(3)').text();
        const column2Value = $(this).find('td:nth-child(2)').text();
        if ((input1 === '' || column1Value.includes(input1)) && (input2 === '' || column2Value.includes(input2))) {
                $(this).show();
            }
        else {
            $(this).hide(); // hide the row
        }
        });
    });
    $('button.clear-btn').click(function() {
                $('#input1').val('');
                $('#input2').val('');
                $('#example tbody tr').show();
        });
    });


</script>

<script>
    const container = document.querySelector('.containerOuterLayout');
    const content = document.querySelector('.containerOuterLayout');

    if (content.offsetWidth <= container.offsetWidth) {
    container.style.overflowX = 'hidden'; // hide horizontal scrollbar
    }
</script>
</html>


@else
{!! redirect()->to('verify') !!}
@endif
