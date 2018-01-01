<template>
    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left">
            <a href="/admin" class="logo"><img alt="Logo" v-bind:src="logo"  /> <span>Admin</span></a>
        </div>

        <nav class="navbar-custom">

            <ul class="list-inline float-right mb-0">

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-question-circle"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small>Help and Support</small></h5>
                        </div>

                        <!-- item-->
                        <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Do you want custom development to integrate this theme?</b>
                                <span>Contact Us</span>
                            </p>
                        </a>

                        <!-- item-->
                        <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                <span>Try Pike Admin PRO</span>
                            </p>
                        </a>

                        <!-- All-->
                        <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all">
                            <i class="fa fa-link"></i> Visit Pike Admin Website
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Jokn Doe</b>
                                <span>New message received</span>
                                <small class="text-muted">2 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Michael Jackson</b>
                                <span>New message received</span>
                                <small class="text-muted">15 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <p class="notify-details ml-0">
                                <b>Foxy Johnes</b>
                                <span>New message received</span>
                                <small class="text-muted">Yesterday, 13:30</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                        </div>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="../../../assets/pike-admin/images/avatars/avatar2.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>John Doe</b>
                                <span>User registration</span>
                                <small class="text-muted">3 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="../../../assets/pike-admin/images/avatars/avatar3.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michael Cox</b>
                                <span>Task 2 completed</span>
                                <small class="text-muted">12 minutes ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <div class="notify-icon bg-faded">
                                <img src="../../../assets/pike-admin/images/avatars/avatar4.png" alt="img" class="rounded-circle img-fluid">
                            </div>
                            <p class="notify-details">
                                <b>Michelle Dolores</b>
                                <span>New job completed</span>
                                <small class="text-muted">35 minutes ago</small>
                            </p>
                        </a>

                        <!-- All-->
                        <a href="#" class="dropdown-item notify-item notify-all">
                            View All Allerts
                        </a>

                    </div>
                </li>

                <li class="list-inline-item dropdown notif">
                    <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="../../../assets/pike-admin/images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                        </div>

                        <!-- item-->
                        <a href="pro-profile.html" class="dropdown-item notify-item">
                            <i class="fa fa-user"></i> <span>Profile</span>
                        </a>

                        <!-- item-->
                        <a href="#" class="dropdown-item notify-item">
                            <i class="fa fa-power-off"></i> <span>Logout</span>
                        </a>

                        <!-- item-->
                        <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">
                            <i class="fa fa-external-link"></i> <span>Pike Admin</span>
                        </a>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </li>
            </ul>

        </nav>

    </div>
    <!-- End Navigation -->
</template>

<script>
    import logo from '../../../assets/pike-admin/images/logo.png'

    export default {
        name: "header",
        data() {
            return {
                logo: logo
            }
        },
        mounted() {
            console.log('top mounted');

            var $admin = $('#admin');

            !function($) {
                "use strict";

                var Sidemenu = function() {
                    this.$body = $("body"),
                        this.$openLeftBtn = $(".open-left"),
                        this.$menuItem = $("#sidebar-menu a")
                };
                Sidemenu.prototype.openLeftBar = function() {
                    console.log('Slidemenu.openLeftBar');
                    $admin.toggleClass("enlarged");
                    $admin.addClass("forced");

                    if($admin.hasClass("enlarged") && $("body").hasClass("adminbody")) {
                        $("body").removeClass("adminbody").addClass("adminbody-void");
                    } else if(!$admin.hasClass("enlarged") && $("body").hasClass("adminbody-void")) {
                        $("body").removeClass("adminbody-void").addClass("adminbody");
                    }

                    if($admin.hasClass("enlarged")) {
                        $(".left ul").removeAttr("style");
                    } else {
                        $(".subdrop").siblings("ul:first").show();
                    }

                },
                    //menu item click
                    Sidemenu.prototype.menuItemClick = function(e) {
                    console.log('Slidemenu.menuItemClick');
                        if(!$admin.hasClass("enlarged")){
                            if($(this).parent().hasClass("submenu")) {

                            }
                            if(!$(this).hasClass("subdrop")) {
                                // hide any open menus and remove all other classes
                                $("ul",$(this).parents("ul:first")).slideUp(350);
                                $("a",$(this).parents("ul:first")).removeClass("subdrop");
                                $("#sidebar-menu .pull-right i").removeClass("md-remove").addClass("md-add");

                                // open our new menu and add the open class
                                $(this).next("ul").slideDown(350);
                                $(this).addClass("subdrop");
                                $(".pull-right i",$(this).parents(".submenu:last")).removeClass("md-add").addClass("md-remove");
                                $(".pull-right i",$(this).siblings("ul")).removeClass("md-remove").addClass("md-add");
                            }else if($(this).hasClass("subdrop")) {
                                $(this).removeClass("subdrop");
                                $(this).next("ul").slideUp(350);
                                $(".pull-right i",$(this).parent()).removeClass("md-remove").addClass("md-add");
                            }
                        }
                    },

                    //init sidemenu
                    Sidemenu.prototype.init = function() {
                        var $this  = this;

                        var ua = navigator.userAgent,
                            event = (ua.match(/iP/i)) ? "touchstart" : "click";

                        //bind on click
                        this.$openLeftBtn.on(event, function(e) {
                            e.stopPropagation();
                            $this.openLeftBar();
                        });

                        // LEFT SIDE MAIN NAVIGATION
                        $this.$menuItem.on(event, $this.menuItemClick);

                        // NAVIGATION HIGHLIGHT & OPEN PARENT
                        $("#sidebar-menu ul li.submenu a.active").parents("li:last").children("a:first").addClass("active").trigger("click");
                    },

                    //init Sidemenu
                    $.Sidemenu = new Sidemenu, $.Sidemenu.Constructor = Sidemenu

            }(window.jQuery),


//main app module
                function($) {
                    "use strict";

                    var App = function() {
                        this.pageScrollElement = "html, body",
                            this.$body = $("body")
                    };

                    //on doc load
                    App.prototype.onDocReady = function(e) {
                        FastClick.attach(document.body);
                        resizefunc.push("changeptype");

                        $('.animate-number').each(function(){
                            $(this).animateNumbers($(this).attr("data-value"), true, parseInt($(this).attr("data-duration")));
                        });

                        //RUN RESIZE ITEMS
                        $(window).resize(debounce(resizeitems,100));
                        $("body").trigger("resize");

                        // right side-bar toggle
                        $('.right-bar-toggle').on('click', function(e){

                            $('#main').toggleClass('right-bar-enabled');
                        });


                    },
                        //initilizing
                        App.prototype.init = function() {
                            var $this = this;
                            $(document).ready($this.onDocReady);
                            $.Sidemenu.init();
                        },

                        $.App = new App, $.App.Constructor = App

                }(window.jQuery),

//initializing main application module
                function($) {
                    "use strict";
                    $.App.init();
                }(window.jQuery);

        }
    }
</script>

<style scoped>
    .headerbar {
        left: 0;
        position: fixed;
        right: 0;
        top: 0;
        z-index: 999; }

    .headerbar .headerbar-left {
        background: #4980b5;
        float: left;
        text-align: center;
        height: 50px;
        position: relative;
        width: 250px;
        z-index: 1; }

    .headerbar .headerbar-left .logo img {
        max-width: 100px;
        max-height: 30px;
        width: auto;
        height: auto;
    }

    .navbar-custom {
        background-color: #4980b5 ;
        border-radius: 0;
        margin-bottom: 0;
        padding: 0 10px;
        margin-left: 250px;
        min-height: 50px;}

    .navbar-custom .nav-link {
        padding: 0 8px;
        line-height: 50px;
        color: #e9f2ff;
        font-size: 20px; }

    .navbar-custom .dropdown-toggle:after {
        content: initial; }

    .navbar-custom .menu-left {
        overflow: hidden; }

    .logo {
        color: #e3ebf3 !important;
        font-size: 20px;
        font-weight: 200;
        text-transform: uppercase;
        letter-spacing: 1px;
        line-height: 48px; }

    .logo span span {
        color: #fff; }

    .button-menu-mobile {
        background: transparent;
        border: none;
        color: #dde8ef;
        font-size: 28px;
        line-height: 50px;
        padding: 0 5px;
        margin-right: 10px;
        position: relative;
        cursor: pointer;
        display: inline-block;
        overflow: hidden;
        vertical-align: middle;
        z-index: 1;  }
    .button-menu-mobile:hover {
        color: #a2cff7; }

    #admin.enlarged .navbar-custom {
        margin-left: 70px; }
    #admin.enlarged .headerbar .headerbar-left {
        width: 70px !important; }
    #admin.enlarged .headerbar .headerbar-left .logo span {
        display: none;
        opacity: 0; }
    #admin.enlarged .headerbar .headerbar-left .logo i {
        margin-right: 0; }

    .notif {
        margin-left: 0 !important;
    }

    .notif .noti-title {
        border-radius: 0;
        background-color: #3492ea;
        margin: 0;
        width: auto;
        padding: 8px 15px 12px 15px;
    }

    .notif .noti-title h5 {
        color: #ffffff;
        margin: 0;
    }

    .notif .noti-title .label {
        float: right;
    }

    .notif .noti-icon {
        font-size: 22px;
        padding: 0 12px;
        vertical-align: middle;
        color: rgba(255, 255, 255, 0.8);
    }

    .notif .notif-bullet {
        height: 12px;
        width: 12px;
        background-color: #f95200;
        display: inline-block;
        position: absolute;
        top: 13px;
        right: 8px;
        border-radius: 50%;
        border: 2px solid #e2e2e2;
    }

    .notif .notify-item {
        padding: 10px 20px;
    }

    .notif .notify-item .notify-icon {
        float: left;
        height: 36px;
        width: 36px;
        line-height: 36px;
        text-align: center;
        margin-right: 10px;
        border-radius: 50%;
        color: #ffffff;
    }

    .notif .notify-item .notify-icon img {
        margin-top: 4px;
    }

    .notif .notify-item .notify-details {
        margin-bottom: 0;
        overflow: hidden;
        margin-left: 45px;
        text-overflow: ellipsis;
        white-space: inherit;
    }

    .notif .notify-item .notify-details b {
        font-weight: 500;
    }

    .notif .notify-item .notify-details small {
        display: block;
    }

    .notif .notify-item .notify-details span {
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        font-size: 13px;
    }

    .notif .notify-all {
        border-radius: 0;
        margin: 0;
        background-color: #a8c1d8;
        color: #fff;
    }

    .profile-dropdown {
        width: 170px;
    }

    .profile-dropdown i {
        font-size: 17px;
        vertical-align: middle;
        margin-right: 5px;
    }

    .profile-dropdown span {
        vertical-align: middle;
    }

    .nav-user {
        padding: 0 12px !important;
    }

    .nav-user img {
        height: 36px;
        width: 36px;
        margin-bottom: 7px;
    }
</style>