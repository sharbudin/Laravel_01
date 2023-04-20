<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.8.2/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.css" rel="stylesheet"/>

  <title>DataTables Custom Pagination</title>
</head>
<body>
  <div class="container">
    <button id="reloadButton" type="button"><i class="fas fa-sync-alt"></i> Reload</button>
    <table id="example" class="table row-border" style="border-radius:5px;width:100%;height: 40px;">
        <thead style="height: 50px;vertical-align:middle">
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
            <tr>
                <td>Scenario-1</td>
                <td>Andy America</td>
                <td>02/22/2023</td>
                <td>George</td>
                <td>Purchase</td>
                <td>Sunal</td>
                <td>Awaiting Income</td>
            </tr>
            <tr>
                <td>Scenario-2</td>
                <td>Andy</td>
                <td>04/12/2023</td>
                <td>Daniel</td>
                <td>Purchase</td>
                <td>Sunal</td>
                <td><a style="color:#8AB7E9" href="#">Initiate Pricing</a></td>
            </tr>
        </tbody>
    </table>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/v/bs5/jq-3.6.0/jszip-2.5.0/dt-1.13.4/af-2.5.3/b-2.3.6/b-colvis-2.3.6/b-html5-2.3.6/b-print-2.3.6/cr-1.6.2/date-1.4.1/fc-4.2.2/fh-3.3.2/kt-2.8.2/r-2.4.1/rg-1.3.1/rr-1.3.3/sc-2.1.1/sb-1.4.2/sp-2.1.2/sl-1.6.2/sr-1.2.2/datatables.min.js"></script>

  <script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable( {
    "dom": '<"row table_header"<"col-md-2"i><"col-md-2"l><"col-md-6"><"col-md-2"p>>t',
    "language": {
      "paginate": {
        "first": "<<",
        "last": ">>",
        "previous": "<",
        "next": ">",
        "sInfo": "_START_ - _END_ of _TOTAL_",
        "sInfoEmpty": "0 - 0 of 0",
        "sInfoFiltered": "",
        "sLengthMenu": "Show _MENU_"
      },
      "sortAscending": ": activate to sort column ascending",
      "sortDescending": ": activate to sort column descending"
    },
    "pagingType": "full_numbers",
    "scrollY": 200,
    "scrollCollapse": true,
    "paging": true,
    "order": [[0, 'asc']],
    "columnDefs": [{
      "targets": '_all',
      "orderable": true,
      "className": "dt-body-center dt-head-center"
    }],
    "drawCallback": function() {
      $('.sorting').removeClass('sorting').addClass('arrow-up-wide-short');
      $('.sorting_asc').removeClass('sorting_asc').addClass('fa-arrow-up-wide-short');
      $('.sorting_desc').removeClass('sorting_desc').addClass('fa-arrow-up-wide-short');
    }
  });
});
  </script>
</body>
</html>
<?php /**PATH D:\Laravel\Laravel_01\ui_build\resources\views/test.blade.php ENDPATH**/ ?>