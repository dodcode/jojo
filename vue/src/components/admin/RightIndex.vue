<template>
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Info!</h4>
                <p>Do you want custom development to integrate this theme in your project? Or add new features? Contact us on <a target="_blank" href="https://www.pikeadmin.com"><b>Pike Admin Website</b></a></p>
                <p>Or try our PRO version: <b>Save over 50 hours of development with our Pro Framework: Registration / Login / Users Management, CMS, Front-End Template (who will load contend added in admin area and saved in MySQL database), Contact Messages Management, manage Website Settings and many more, at an incredible price!</b></p>
                <p>Read more about all PRO features here: <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro"><b>Pike Admin PRO features</b></a></p>
            </div>

            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-default">
                        <i class="fa fa-file-text-o float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Orders</h6>
                        <h1 class="m-b-20 text-white counter">1,587</h1>
                        <span class="text-white">15 New Orders</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-warning">
                        <i class="fa fa-bar-chart float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Visitors</h6>
                        <h1 class="m-b-20 text-white counter">250</h1>
                        <span class="text-white">Bounce rate: 25%</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-info">
                        <i class="fa fa-user-o float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Users</h6>
                        <h1 class="m-b-20 text-white counter">120</h1>
                        <span class="text-white">25 New Users</span>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-danger">
                        <i class="fa fa-bell-o float-right text-white"></i>
                        <h6 class="text-white text-uppercase m-b-20">Alerts</h6>
                        <h1 class="m-b-20 text-white counter">58</h1>
                        <span class="text-white">5 New Alerts</span>
                    </div>
                </div>
            </div>
            <!-- end row -->



            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-line-chart"></i> Items Sold Amount</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                        </div>

                        <line-chart></line-chart>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div><!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-bar-chart-o"></i> Colour Analytics</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                        </div>

                        <pie-chart></pie-chart>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div><!-- end card-->
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-bar-chart-o"></i> Colour Analytics 2</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                        </div>

                        <doughnut-chart></doughnut-chart>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div><!-- end card-->
                </div>

            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-users"></i> Staff details</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non luctus metus. Vivamus fermentum ultricies orci sit amet sollicitudin.
                        </div>
                        <data-table></data-table>

                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-star-o"></i> Tasks progress</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>

                        <div class="card-body">
                            <p class="font-600 m-b-5">Task 1 <span class="text-primary pull-right"><b>95%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="95"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 2 <span class="text-primary pull-right"><b>88%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="88"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 3 <span class="text-info pull-right"><b>75%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 78%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 4 <span class="text-info pull-right"><b>70%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 5 <span class="text-warning pull-right"><b>68%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 68%" aria-valuenow="68" aria-valuemin="0" aria-valuemax="68"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 6 <span class="text-warning pull-right"><b>65%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-warning" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 7 <span class="text-danger pull-right"><b>55%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55"></div>
                            </div>

                            <div class="m-b-20"></div>

                            <p class="font-600 m-b-5">Task 8 <span class="text-danger pull-right"><b>40%</b></span></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped progress-xs bg-danger" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
                    </div><!-- end card-->
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-3">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fa fa-envelope-o"></i> Latest messages</h3>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </div>

                        <div class="card-body">

                            <div class="widget-messages nicescroll" style="height: 400px;">
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">John Doe</p>
                                        <p class="message-item-msg">Hello. I want to buy your product</p>
                                        <p class="message-item-date">11:50 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar5.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Ashton Cox</p>
                                        <p class="message-item-msg">Great job for this task</p>
                                        <p class="message-item-date">14:25 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar6.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Colleen Hurst</p>
                                        <p class="message-item-msg">I have a new project for you</p>
                                        <p class="message-item-date">13:20 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Fiona Green</p>
                                        <p class="message-item-msg">Nice to meet you</p>
                                        <p class="message-item-date">15:45 PM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Donna Snider</p>
                                        <p class="message-item-msg">I have a new project for you</p>
                                        <p class="message-item-date">15:45 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar5.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Garrett Winters</p>
                                        <p class="message-item-msg">I have a new project for you</p>
                                        <p class="message-item-date">15:45 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar6.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Herrod Chandler</p>
                                        <p class="message-item-msg">Hello! I'm available for this job</p>
                                        <p class="message-item-date">15:45 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Jena Gaines</p>
                                        <p class="message-item-msg">I have a new project for you</p>
                                        <p class="message-item-date">15:45 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar2.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Airi Satou</p>
                                        <p class="message-item-msg">I have a new project for you</p>
                                        <p class="message-item-date">15:45 AM</p>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="message-item">
                                        <div class="message-user-img"><img src="../../assets/pike-admin/images/avatars/avatar10.png" class="avatar-circle" alt=""></div>
                                        <p class="message-item-user">Brielle Williamson</p>
                                        <p class="message-item-msg">I have a new project for you</p>
                                        <p class="message-item-date">15:45 AM</p>
                                    </div>
                                </a>
                            </div>

                        </div>
                        <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
                    </div><!-- end card-->
                </div>

            </div>



        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->
</template>

<script>
    import LineChart from "./LineChart";
    import PieChart from "./PieChart";
    import DoughnutChart from "./DoughnutChart";
    import DataTable from "./DataTable";

    import "waypoints/lib/jquery.waypoints.min";
    import "counterup/jquery.counterup.min";

    export default {
        name: "right-index",
        components: {
            DoughnutChart,
            PieChart,
            LineChart,
            DataTable
        },
        mounted () {
            // counter-up
            $('.counter').counterUp({
                delay: 10,
                time: 600
            });

            $(".nicescroll").niceScroll({cursorcolor:"#858586"});
        }
    }
</script>

<style scoped>

</style>