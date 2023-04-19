<?php if((Session::has('ID'))): ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard</title>
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />

</head>

<div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="exampleModalLabel">Import Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="<?php echo e(route('import')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="mb-3" style="padding:20px">
                    <label for="exampleInputEmail1" class="form-label"><strong>Import</strong></label>
                    <input type="file"  class="form-control"  name="file">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-light">Import</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="col-lg">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="my-2">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="my-2">
                        <label for="post">Post</label>
                        <input type="text" name="post" class="form-control" placeholder="Post" required>
                    </div>
                    <div class="my-2">
                        <label for="avatar">Select Avatar</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="add_employee_btn" class="btn btn-primary">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>



<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    data-bs-backdrop="static" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="emp_id" id="emp_id">
                <input type="hidden" name="emp_avatar" id="emp_avatar">
                <div class="modal-body p-4 bg-light">
                    <div class="row">
                        <div class="col-lg">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name"
                                required>
                        </div>
                        <div class="col-lg">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name"
                                required>
                        </div>
                    </div>
                    <div class="my-2">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    <div class="my-2">
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone" required>
                    </div>
                    <div class="my-2">
                        <label for="post">Post</label>
                        <input type="text" name="post" id="post" class="form-control" placeholder="Post" required>
                    </div>
                    <div class="my-2">
                        <label for="avatar">Select Avatar</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="mt-2" id="avatar">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="edit_employee_btn" class="btn btn-success">Update Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>


<body class="bg-light">
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header bg-primary d-flex justify-content-between align-items-center">
                        <h3 class="text-light">Manage Dashboard</h3>
                        <div>
                            <button class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
                                    class="bi-plus-circle me-2"></i>Add New Data</button>
                            <button class="btn btn-light me-2" data-bs-toggle="modal" data-bs-target="#importModal"><i
                                class="bi-plus-circle me-2" style="color:red"></i>Import Data</button>
                            <a href="<?php echo e(route('export')); ?>" class="btn btn-light me-2">Export Data</a>
                            <button class="btn btn-danger me-2 resetAll" data-bs-toggle="modal" id="resetAll" data-bs-target="#resetModal">Reset ALL</button>

                            <a href="<?php echo e(route('logout')); ?>" class="btn btn-warning me-2">Logout</a>
                        </div>
                    </div>
                    <div class="card-body" id="show_all_employees">
                        <h1 class="text-center text-secondary my-5">Loading...</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(function () {

            // add new employee ajax request
            $("#add_employee_form").submit(function (e) {
                e.preventDefault();
                const fd = new FormData(this);
                $("#add_employee_btn").text('Adding...');
                $.ajax({
                    url: '<?php echo e(route('store')); ?>',
                    method: 'post',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == 200) {
                            Swal.fire(
                                'Added!',
                                'Employee Added Successfully!',
                                'success'
                            )
                            fetchAllEmployees();
                        }
                        $("#add_employee_btn").text('Add Employee');
                        $("#add_employee_form")[0].reset();
                        $("#addEmployeeModal").modal('hide');
                    }
                });
            });

            // edit employee ajax request
            $(document).on('click', '.editIcon', function (e) {
                e.preventDefault();
                let id = $(this).attr('id');
                $.ajax({
                    url: '<?php echo e(route('edit')); ?>',
                    method: 'get',
                    data: {
                        id: id,
                        _token: '<?php echo e(csrf_token()); ?>'
                    },
                    success: function (response) {
                        $("#fname").val(response.first_name);
                        $("#lname").val(response.last_name);
                        $("#email").val(response.email);
                        $("#phone").val(response.phone);
                        $("#post").val(response.post);
                        $("#avatar").html(
                            `<img src="storage/images/${response.avatar}" width="100" class="img-fluid img-thumbnail">`
                            );
                        $("#emp_id").val(response.id);
                        $("#emp_avatar").val(response.avatar);
                    }
                });
            });

            // update employee ajax request
            $("#edit_employee_form").submit(function (e) {
                e.preventDefault();
                const fd = new FormData(this);
                $("#edit_employee_btn").text('Updating...');
                $.ajax({
                    url: '<?php echo e(route('update')); ?>',
                    method: 'post',
                    data: fd,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.status == 200) {
                            Swal.fire(
                                'Updated!',
                                'Employee Updated Successfully!',
                                'success'
                            )
                            fetchAllEmployees();
                        }
                        $("#edit_employee_btn").text('Update Employee');
                        $("#edit_employee_form")[0].reset();
                        $("#editEmployeeModal").modal('hide');
                    }
                });
            });

            // delete employee ajax request
            $(document).on('click', '.deleteIcon', function (e) {
                e.preventDefault();
                let id = $(this).attr('id');
                let csrf = '<?php echo e(csrf_token()); ?>';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '<?php echo e(route('delete')); ?>',
                            method: 'delete',
                            data: {
                                id: id,
                                _token: csrf
                            },
                            success: function (response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                )
                                fetchAllEmployees();
                            }
                        });
                    }
                })
            });


            $(document).on('click', '.resetAll', function (e) {
                e.preventDefault();
                let csrf = '<?php echo e(csrf_token()); ?>';
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'danger',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Erase All Data On Table!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '<?php echo e(route('resetData')); ?>',
                            method: 'delete',
                            data: {
                                _token: csrf
                            },
                            success: function (response) {
                                console.log(response);
                                Swal.fire(
                                    'Deleted!',
                                    'All Data Cleared Successfully .',
                                    'success'
                                )
                                fetchAllEmployees();
                            }
                        });
                    }
                })
            });

            // fetch all employees ajax request
            fetchAllEmployees();

            function fetchAllEmployees() {
                $.ajax({
                    url: '<?php echo e(route('fetchAll')); ?>',
                    method: 'get',
                    success: function (response) {
                        $("#show_all_employees").html(response);
                        $("table").DataTable({
                            order: [0, 'desc']
                        });
                    }
                });
            }
        });

    </script>
</body>

</html>

<?php else: ?>
    {<?php echo redirect()->to('login'); ?>}
<?php endif; ?>
<?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/index.blade.php ENDPATH**/ ?>