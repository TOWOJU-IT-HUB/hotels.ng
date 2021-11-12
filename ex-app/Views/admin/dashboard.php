
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">
                    <div class="page-title-box">

                        <div class="row align-items-center ">
                            <div class="col-md-8">
                                <div class="page-title-box">
                                    <p class="page-title">Dashboard</p>
                                    <!-- <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome back <?= session()->get('fullname') ?></li>
                                    </ol> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page-title -->

                    <!-- start top-Contant -->
                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <div class="card badge-info text-white pl-3" style="min-height: 250px">
                                <div class="card-body">
                                    <div class="row align-items-center mb-5">
                                        <div class="rounded-circle align-items-center bg-white">
                                            <i class="fab fa-opencart text-danger m-2 fa-2x p-2"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="text-white pt-1 mb-0">7</h4>
                                            <p class="font-16">Total Orders</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div id="chart2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <div class="card badge-danger text-white pl-3" style="min-height: 250px">
                                <div class="card-body">
                                    <div class="row align-items-center mb-5">
                                        <div class="rounded-circle align-items-center bg-white">
                                            <i class="fas fa-chart-line text-danger m-2 fa-2x p-2"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="text-white pt-1 mb-0">7</h4>
                                            <p class="font-16">Total Earnings</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div id="chart3"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-4">
                            <div class="card bg-success text-white pl-3" style="min-height: 250px">
                                <div class="card-body">
                                    <div class="row align-items-center mb-5">
                                        <div class="rounded-circle align-items-center bg-white">
                                            <i class="fas fa-percentage text-dark fa-2x m-2 p-2"></i>
                                        </div>
                                        <div class="col">
                                            <h4 class="text-white pt-1 mb-0">7</h4>
                                            <p class="font-16">Total Commissions</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div id="chart4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- end top-Contant -->

                    <div class="row">
                        <div class="col-sm-6 col-xl-4">
                            <div class="card card-body" style="min-height: 250px">
                                <div class="row">
                                    <div class="col text-left">
                                        <h6 class="text-dark">Pending Tasks</h6>
                                    </div>
                                    <div class="col text-right">
                                        <div class="btn-group mb-2 mb-sm-0">
                                            <a href="#" class="h3" data-toggle="dropdown" aria-expanded="false">...</a>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>    
                                <div class="align-items-center">
                                    <div class="xcape text-center">
                                        <p class="task-left">0</p>
                                        <h6 class="task-completed">0 Orders need refund</h6>
                                        <h6 class="text-danger">0 Orders need confirmation</h6>
                                        <h6 class="text-dark mb-0">0 Pending withdrawal</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">
                        
                        .xcape .task-left {
                            margin-bottom: 0;
                            font-size: 30px;
                            color: #1b55e2;
                            background: #c2d5ff;
                            font-weight: 600;
                            border-radius: 50%;
                            display: inline-flex;
                            height: 76px;
                            width: 76px;
                            justify-content: center;
                            padding: 13px 0px;
                            border: 5px solid #fff;
                            margin-bottom: 20px;
                            -webkit-box-shadow: 0px 0px 8px 2px #e0e6ed;
                            box-shadow: 0px 0px 8px 2px #e0e6ed; 
                        }
                    </style>
                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->