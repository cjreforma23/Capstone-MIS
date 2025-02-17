<?php include('../inc/admin_sidebar.php')?>
<?php include('../inc/header.php')?>



    <title>User Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        
    
        .container {
            margin-top: 20px;
        }
        .table-responsive {
            overflow-x: auto;
        }
        .table th,
        .table td {
            vertical-align: middle;
            text-align: left;
        }
        .btn-group .btn {
            margin-right: 5px;
        }
        .status-select {
            width: 150px;
        }

        /* Action button styles */
        .action-buttons {
            display: flex;
            gap: 5px; /* Space between buttons */
        }

        .action-buttons button {
            padding: 5px 10px; /* Adjust padding as needed */
            font-size: 14px; /* Adjust font size as needed */
        }
        /* Style for address with line breaks */
      
            
    </style>
</head>
<body>
    <div class="container">
    <h1>Manage Users</h1>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="search" placeholder="Search">
                        <button class="btn ml-2" style="background-color: #3B6C2F;" type="button">Search</button>
                    </div>
                    <div class="col-md-6 text-right">                       
                        <button class="btn btn-success fa-plus" type="button"  data-bs-toggle="modal" data-bs-target="#add">Add</button>
                            <!-- Modal -->
                                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="    ">
                                <div class="modal-dialog">
                                    <div class="modal-content"> 
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add User Profile</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                            <div class="modal-body">

                                            <form action="#">
                                                <div class="form-floating">
                                                    <input id="firstname" type="firstname" class="form-control mb-3" placeholder="First Name" required>
                                                    <label for="firstname">First Name</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input id="middlename" type="middlename" class="form-control mb-3" placeholder="Middle Name" required>
                                                    <label for="middlename">Middle Name</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input id="lastname" type="lastname" class="form-control mb-3" placeholder="Last Name" required>
                                                    <label for="lastname">Last Name</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input id="contact" type="contact" class="form-control mb-3" placeholder="Contact Number" required>
                                                    <label for="contact">Contact Number</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input id="address" type="address" class="form-control mb-3" placeholder="Address" required>
                                                    <label for="address">Address</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input id="username" type="username" class="form-control mb-3" placeholder="Username" required>
                                                    <label for="username">Username</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input id="password" type="contact" class="form-control mb-3" placeholder="Password" required>
                                                    <label for="password" >Password</label>
                                                </div>
                                                <div>
                                                    <select name="role" class="form-select form-select mb-3" aria-label="small select example">
                                                        <option value="admin">Admin</option>
                                                        <option value="staff">Staff</option>
                                                        <option value="guard">Guard</option>
                                                        <option value="homeowner">Homeowner</option>
                                                        <option value="guest">Guest</option>
                                                    </select>
                                                </div>
                                            </form>


                                                
                                            </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                                </div>
                               
                        <button class="btn btn-danger ml-2" type="button">
                            <i class="fas fa-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>UID</th>
                                <th>Name</th>
                                <th>Role</th>
                                <th>Address</th>
                                <th>Contact No.</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Action</th> </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>8888</td>
                                <td>Julius Reforma</td>
                                <td>Admin</td>
                                <td class="address-cell">Blk 22 Lot 6 Kingfisher Angono, Rizal</td>
                                <td>12345678910</td>
                                <td>Doedonut@gmail.com</td>
                                <td>Active</td>
                                <td>
                                    <div class="action-buttons">
                                        <button class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></button>
                                        <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>