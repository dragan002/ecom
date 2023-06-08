<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin_Panel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>

<body>
    <!-- header section -->
    <header>
        <div class="container-fluid">
            <div class="header-content">

                <!-- sider place of header -->
                <div class="side-head">
                    <span class="text-white">Admin Panel</span> &nbsp;
                    <i class="fas fa-bars menu-btn text-white"></i>
                </div>

                <!-- header navigation tab -->
                <div class="header-nav">
                    <ul>
                        <li><a href=""><i class="fas fa-shopping-basket"></i> Order</a></li>
                        <li><a href=""><i class="fas fa-truck"></i>Delivery</a></li>
                        <li><a href=""> <i class="fas fa-users"></i> User</a></li>
                        <li><a href=""> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <!-- sidebar -->
        <section class="sidebar">
            <ul class="nav-bar">
                <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                <li><a href="#"><i class="fa fa-dolly-flatbed"></i> Brands</a></li>
                <li><a href="#"><i class="fa fa-dolly"></i> Category</a></li>
                <li><a href="#"><i class="fa fa-shopping-basket"></i> Products</a></li>
                <li><a href="#"><i class="fa fa-truck"></i> Orders</a></li>
                <li><a href="#"><i class="fa fa-truck-loading"></i> Delivery</a></li>
                <li><a href="#"><i class="fa fa-images"></i> Slider image</a></li>
                <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-id-badge"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </section>
        <!-- Workingpanel -->
        <section class="working-panel">
            <div class="container-fluid">
                <h1 class="display-4">Welcome to the Dashboard</h1>
                <hr>
                <div class="row">
                    <!-- category widget -->
                    <div class="col-md-3">
                        <div class="card bg-orange-g text-white">
                            <div class="card-body">
                                <h3 class="font-weight-light"> <i class="fa fa-dolly"></i> Category</h3>
                                <hr>
                                <h5>
                                    <b>123456</b>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <!-- brands -->
                    <div class="col-md-3">
                        <div class="card bg-green-g text-white">
                            <div class="card-body">
                                <h3 class="font-weight-light"> <i class="fa fa-dolly-flatbed"></i>All brands</h3>
                                <hr>
                                <h5>
                                    <b>123456</b>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- All users -->
                    <div class="col-md-3">
                        <div class="card bg-primary-g text-white">
                            <div class="card-body">
                                <h3 class="font-weight-light"> <i class="fa fa-users"></i>All Users</h3>
                                <hr>
                                <h5>
                                    <b>123456</b>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <!-- All Authors -->

                    <div class="col-md-3">
                        <div class="card bg-golden-g text-white">
                            <div class="card-body">
                                <h3 class="font-weight-light"> <i class="fa fa-truck"></i>All Orders</h3>
                                <hr>
                                <h5>
                                    <b>300</b>
                                </h5>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- All order table -->
                <div class="all-order mt-5">
                    <hr>
                    <h2>New Orders</h2>
                    <hr>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th scope="col">Order No.</th>
                                <th scope="col">Order name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Date</th>
                                <th scope="col">Paid Status</th>
                                <th scope="col">Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>3</td>
                                <td>23/09/23</td>
                                <td><span class="badge badge-danger">UnPaid</span></td>
                                <td><span class="badge badge-success">Complete</span></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>2</td>
                                <td>22/10/2022</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td><span class="badge badge-info">Process</span></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>5</td>
                                <td>02/05/2022</td>
                                <td><span class="badge badge-success">Paid</span></td>
                                <td><span class="badge badge-danger">Rejected</span></td>
                            </tr>
                        </tbody>
                    </table>

                    <!-- pagination -->
                    <div class="order-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="../js/jquery.js"></script>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>