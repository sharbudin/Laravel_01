const body = document.querySelector("body"),
    sidebar = document.querySelector(".sidebar"),
    toggle = document.querySelector(".toggle"),
    searchBtn = document.querySelector(".search-box");


toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    var chkwidth = document.getElementById("dashboard-table").style.width;
    var link_hover = document.getElementsByClassName("link-hover")[1].style.width;
    var chkleft = document.getElementById("toggle-button1").style.left;
    if (chkwidth > "1100px") {
        document.getElementById("dashboard-table").style.width = '1100px';
        document.getElementById("dashboard-table").style.left = '10px';
        document.getElementById("dashboard-table1").style.width = '1100px';
        document.getElementById("dashboard-table1").style.left = '10px';
        document.getElementById("glide-table_wrapper").style.width = '1100px';
        document.getElementsByClassName("dataTables_scrollHeadInner")[0].style.width = '1100px';
        document.getElementsByClassName("test-table")[0].style.width = '1100px';
        document.getElementsByClassName("test-table")[1].style.width = '1100px';

    } else {
        document.getElementById("dashboard-table").style.left = '25px';
        document.getElementById("dashboard-table").style.width = '1250px';
        document.getElementById("dashboard-table1").style.left = '25px';
        document.getElementById("dashboard-table1").style.width = '1250px';
        document.getElementById("glide-table_wrapper").style.width = '1250px';
        document.getElementsByClassName("dataTables_scrollHeadInner")[0].style.width = '1250px';
        document.getElementsByClassName("test-table")[0].style.width = '1250px';
        document.getElementsByClassName("test-table")[1].style.width = '1250px';
    }
    if (link_hover == "212px") {
        for (let i = 0; i <= 6; i++) {
            document.getElementsByClassName("link-hover")[i].style.width = '60px';
        }

    } else {
        for (let i = 0; i <= 6; i++) {
            document.getElementsByClassName("link-hover")[i].style.width = '212px';
        }
    }
    if (chkleft == "203px") {
        document.getElementById("toggle-button1").style.left = '52px';
    } else {
        document.getElementById("toggle-button1").style.left = '203px';
    }
});


function buttonColor() {
    document.getElementById("button").style.backgroundColor = '#0033A1';
}




function updateOptionsBorrower(value) {
    const datalist = document.querySelector('#list-borrower');
    datalist.innerHTML = ''; // clear existing options
    if (value.length >= 2) {
        // retrieve options using AJAX
        $.getJSON("../data/page4data.json", function (data) {
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
        $.getJSON("../data/page4data.json", function (data) {
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



$(document).ready(function () {

    var table = $('#glide-table').DataTable({
        "ajax": {
            "url": "../data/page4data.json",
            "dataSrc": ""
        },
        "columns": [{
                "data": "Scenario Name"
            },
            {
                "data": "Borrower Name"
            },
            {
                "data": "Date"
            },
            {
                "data": "Loan Officer"
            },
            {
                "data": "Loan Purpose"
            },
            {
                "data": "Broker Name"
            },
            {
                data: null,
                render: function (data, type, row) {
                    if ((data.Action).toLowerCase() == "initiate pricing" || (data.Action).toLowerCase() == "submit loan" || (data.Action).toLowerCase() == "approved") {
                        return '<a style="font: normal normal normal 11px/17px Poppins;letter-spacing: 0px;color: #8AB7E9;" href="#">' + data.Action + '</a>';
                    } else {
                        return data.Action;
                    }
                }
            }
        ],
        "fnInitComplete": function () {
            $('select[name="glide-table_length"]').removeClass('form-select');
            $('#glide-table').find('.my-table-header').hide();
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
        "drawCallback": function (settings) {
            $('#glide-table').find('.my-table-header').hide();
            var pagination = $(this).closest('.dataTables_wrapper').find('.dataTables_paginate');
            var pageInfo = $(this).DataTable().page.info();
            var currentPage = pageInfo.page + 1;
            var totalPages = pageInfo.pages;
            var paginationHtml = '';
            paginationHtml += '<a class="paginate_button first" style="position:relative ;left:-20px" href="#" data-page="first"><i style="opacity: 0;" class="fa-solid fa-angles-left" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<a class="paginate_button previous" style="position:relative ;left:-22px" href="#" data-page="prev"><i style="opacity: 0;" class="fa-solid fa-angle-left" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<span class="paginate_button current" style="position:absolute ;top:4px;left:39px;font-size:10px"> ' + currentPage + '<span style="height:10px;font-size:8px">&nbsp; / &nbsp;</span>' + totalPages + ' </span><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<a class="paginate_button next" style="position:relative ;left:0px" href="#" data-page="next"><i style="opacity: 0;" class="fa-solid fa-angle-right" style="font-size:12px"></i></a><span>&nbsp;&nbsp;&nbsp;</span>';
            paginationHtml += '<a class="paginate_button last" style="position:relative ;left:-3px" href="#" data-page="last"><i style="opacity: 0;" class="fa-solid fa-angles-right" style="font-size:12px"></a>';
            pagination.html(paginationHtml);

            // attach click event listener to navigation links
            pagination.find('a').on('click', function (e) {
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

    $('#reloadButton').on('click', function () {
        table.ajax.reload();
        $('#date-filter').val('');
        $('#borrower-name-filter').val('');
    });

    $(".btn1").click(function () {
        $(".btn1").removeClass("active");
        $(this).addClass("active");
    });


    // $.getJSON("../data/page4data.json", function(data) {
    //     $.each(data, function(index, item) {
    //         $('#list-borrower').append('<option value="' + item["Borrower Name"] + '">');
    //     });
    // });

    // $.getJSON("../data/page4data.json", function(data) {
    //     $.each(data, function(index, item) {
    //         $('#list-date').append('<option value="' + item["Date"] + '">');
    //     });
    // });


});


$(function () {
    $('.btngo').on('click', function () {
        event.preventDefault(); // prevent form submission
        const input1 = $('#date-filter').val();
        const input2 = $('#borrower-name-filter').val();
        $('#glide-table tbody tr').each(function () {
            const column1Value = $(this).find('td:nth-child(3)').text();
            const column2Value = $(this).find('td:nth-child(2)').text();
            if ((input1 === '' || column1Value.includes(input1)) && (input2 === '' || column2Value.includes(input2))) {
                $(this).show();
            } else {
                $(this).hide(); // hide the row
            }
        });
    });
    $('button.clear-btn').click(function () {
        $('#input1').val('');
        $('#input2').val('');
        $('#glide-table tbody tr').show();
    });
});


const container = document.querySelector('.containerOuterLayout');
const content = document.querySelector('.containerOuterLayout');

if (content.offsetWidth <= container.offsetWidth) {
    container.style.overflowX = 'hidden'; // hide horizontal scrollbar
}
