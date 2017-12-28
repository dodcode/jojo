<template>
    <!-- Left Sidebar -->
    <div class="left main-sidebar">

        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">

                <ul>

                    <li class="submenu">
                        <a class="active" href="admin.html"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="charts.html"><i class="fa fa-fw fa-area-chart"></i><span> Charts </span> </a>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="tables-basic.html">Basic Tables</a></li>
                            <li><a href="tables-datatable.html">Data Tables</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-tv"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="ui-alerts.html">Alerts</a></li>
                            <li><a href="ui-buttons.html">Buttons</a></li>
                            <li><a href="ui-cards.html">Cards</a></li>
                            <li><a href="ui-carousel.html">Carousel</a></li>
                            <li><a href="ui-collapse.html">Collapse</a></li>
                            <li><a href="ui-icons.html">Icons</a></li>
                            <li><a href="ui-modals.html">Modals</a></li>
                            <li><a href="ui-tooltips.html">Tooltips and Popovers</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-file-text-o"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="forms-general.html">General Elements</a></li>
                            <li><a href="forms-select2.html">Select2</a></li>
                            <li><a href="forms-validation.html">Form Validation</a></li>
                            <li><a href="forms-text-editor.html">Text Editors</a></li>
                            <li><a href="forms-upload.html">Multiple File Upload</a></li>
                            <li><a href="forms-datetime-picker.html">Date and Time Picker</a></li>
                            <li><a href="forms-color-picker.html">Color Picker</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-th"></i> <span> Plugins </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="star-rating.html">Star Rating</a></li>
                            <li><a href="range-sliders.html">Range Sliders</a></li>
                            <li><a href="tree-view.html">Tree View</a></li>
                            <li><a href="sweetalert.html">SweetAlert</a></li>
                            <li><a href="calendar.html">Calendar</a></li>
                            <li><a href="gmaps.html">GMaps</a></li>
                            <li><a href="counter-up.html">Counter-Up</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><i class="fa fa-fw fa-image"></i> <span> Images and Galleries </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="media-fancybox.html"><span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a></li>
                            <li><a href="media-masonry.html">Masonry</a></li>
                            <li><a href="media-lightbox.html">Lightbox</a></li>
                            <li><a href="media-owl-carousel.html">Owl Carousel</a></li>
                            <li><a href="media-image-magnifier.html">Image Magnifier</a></li>

                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-danger float-right">20</span><i class="fa fa-fw fa-copy"></i><span> Example Pages </span></a>
                        <ul class="list-unstyled">
                            <li><a href="page-pricing-tables.html">Pricing Tables</a></li>
                            <li><a target="_blank" href="page-coming-soon.html">Countdown</a></li>
                            <li><a href="page-invoice.html">Invoice</a></li>
                            <li><a href="page-login.html">Login / Register</a></li>
                            <li><a href="page-blank.html">Blank Page</a></li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a href="#"><span class="label radius-circle bg-primary float-right">9</span><i class="fa fa-fw fa-indent"></i><span> Menu Levels </span></a>
                        <ul>
                            <li>
                                <a href="#"><span>Second Level</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><span>Third Level</span> <span class="menu-arrow"></span> </a>
                                <ul style="">
                                    <li><a href="#"><span>Third Level Item</span></a></li>
                                    <li><a href="#"><span>Third Level Item</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu">
                        <a class="pro" href="#"><i class="fa fa-fw fa-star"></i><span> Pike Admin PRO </span> <span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro">Admin PRO features</a></li>
                            <li><a href="pro-settings.html">Settings</a></li>
                            <li><a href="pro-profile.html">My Profile</a></li>
                            <li><a href="pro-users.html">Users</a></li>
                            <li><a href="pro-articles.html">Articles</a></li>
                            <li><a href="pro-categories.html">Categories</a></li>
                            <li><a href="pro-pages.html">Pages</a></li>
                            <li><a href="pro-contact-messages.html">Contact Messages</a></li>
                            <li><a href="pro-slider.html">Slider</a></li>
                        </ul>
                    </li>

                </ul>

                <div class="clearfix"></div>

            </div>

            <div class="clearfix"></div>

        </div>

    </div>
    <!-- End Sidebar -->
</template>

<script>
    export default {
        name: "left"
    }
</script>

<style scoped>
    .main-sidebar {
        top: 50px;
        width: 250px;
        z-index: 10;
        background: #262D33;
        bottom: 70px;
        margin-bottom: -70px;
        margin-top: 0;
        padding-bottom: 70px;
        position: absolute; }

    .main-sidebar.left {
        position: absolute; }

    .sidebar-inner {
        height: 100%; }

    #sidebar-menu, #sidebar-menu ul, #sidebar-menu li, #sidebar-menu a {
        border: 0;
        font-weight: normal;
        line-height: 1;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        text-decoration: none; }

    #sidebar-menu {
        padding-bottom: 30px;
        width: 100%; }
    #sidebar-menu a {
        line-height: 1.3; }
    #sidebar-menu ul li .menu-arrow {
        -webkit-transition: -webkit-transform .15s;
        -o-transition: -o-transform .15s;
        transition: transform .15s;
        position: absolute;
        right: 20px;
        top: 15px;
        display: inline-block;
        font-family: 'FontAwesome';
        text-rendering: auto;
        line-height: 18px;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        -webkit-transform: translate(0, 0);
        -ms-transform: translate(0, 0);
        -o-transform: translate(0, 0);
        transform: translate(0, 0); }
    #sidebar-menu ul li .menu-arrow:before {
        content: "\f105"; }
    #sidebar-menu ul li a.subdrop .menu-arrow {
        -ms-transform: rotate(90deg);
        -webkit-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        transform: rotate(90deg); }
    #sidebar-menu ul ul {
        display: none; }
    #sidebar-menu ul ul li {
        border-top: 0; }
    #sidebar-menu ul ul li.active a {
        color: #f3f3f3; }
    #sidebar-menu ul ul a {
        color: #b5b5b5;
        -webkit-transition: all 0.3s ease-out;
        -moz-transition: all 0.3s ease-out;
        -o-transition: all 0.3s ease-out;
        -ms-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
        display: block;
        padding: 10px 20px 10px 60px; }
    #sidebar-menu ul ul a:hover {
        color: #efefef; }
    #sidebar-menu ul ul a i {
        margin-right: 5px; }
    #sidebar-menu ul ul ul a {
        padding-left: 80px; }
    #sidebar-menu .label {
        margin-top: 2px; }
    #sidebar-menu .subdrop {
        color: #fff !important;
        background-color: #414d58;
        border-left: 2px solid #608ab3; }

    #sidebar-menu .submenu ul .submenu .menu-arrow {
        top: 10px !important; }

    #sidebar-menu > ul > li > a {
        color: #b5b5b5;
        display: block;
        padding: 12px 12px 15px 12px;
        font-weight: 400;
        font-size: 0.90rem;
        border-left: 2px solid transparent;  }

    #sidebar-menu > ul > li > a:hover {
        color: #FFF;
        background-color: #414d58;
        text-decoration: none;
        border-left: 2px solid #608ab3; }

    #sidebar-menu > ul > li > a > span {
        vertical-align: middle; }

    #sidebar-menu ul li a i {
        display: inline-block;
        font-size: 18px;
        line-height: 17px;
        margin-left: 3px;
        margin-right: 15px;
        text-align: center;
        vertical-align: middle;
        width: 20px; }
    #sidebar-menu ul li a .drop-arrow {
        float: right; }
    #sidebar-menu ul li a .drop-arrow i {
        margin-right: 0; }

    #sidebar-menu > ul > li > a.active {
        color: #ffffff !important;
        background-color: #6194c1; }

    body.adminbody .main-sidebar.left {
        bottom: 0px;
        margin-bottom: 0px;
        margin-top: 0;
        padding-bottom: 0px; }





    .menu-title {
        padding: 12px 20px !important;
        letter-spacing: .035em;
        pointer-events: none;
        cursor: default;
        font-size: 13px; }

    #admin.enlarged .menu-title {
        display: none; }
    #admin.enlarged .menu-arrow {
        display: none !important; }

    #admin.enlarged #sidebar-menu ul ul {
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 1px 10px 0 rgba(0, 0, 0, 0.08); }
    #admin.enlarged .left.main-sidebar {
        width: 70px;
        z-index: 5; }
    #admin.enlarged .left.main-sidebar #sidebar-menu > ul > li > a {
        padding-left: 10px; }
    #admin.enlarged .left.main-sidebar #sidebar-menu > ul > li > a:hover {
        background-color: #64b0f2; }
    #admin.enlarged .left.main-sidebar span.pull-right {
        display: none !important; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li {
        position: relative;
        white-space: nowrap; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover > a {
        background-color: #64b0f2;
        position: relative;
        width: 260px; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover > ul {
        display: block;
        left: 70px;
        position: absolute;
        width: 190px;
        padding: 5px 0;
        background: #ffffff; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover > ul a {
        background: #ffffff;
        border: none;
        box-shadow: none;
        padding-left: 15px;
        position: relative;
        width: 190px;
        z-index: 6;
        color: rgba(43, 61, 81, 0.8); }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover > ul a:hover {
        color: #64b0f2; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover a span {
        display: inline; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li > ul {
        display: none; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul ul li:hover > ul {
        display: block;
        left: 190px;
        margin-top: -36px;
        position: absolute;
        width: 190px; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul ul li > a span.pull-right {
        -ms-transform: rotate(270deg);
        -webkit-transform: rotate(270deg);
        position: absolute;
        right: 20px;
        top: 12px;
        transform: rotate(270deg); }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li > a span {
        display: none;
        padding-left: 10px; }
    #admin.enlarged .left.main-sidebar #sidebar-menu > ul > li > a {
        padding: 15px 20px;
        min-height: 52.09px; }
    #admin.enlarged .left.main-sidebar #sidebar-menu > ul > li > a i {
        margin-right: 20px !important;
        font-size: 20px; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover > a {
        position: relative;
        width: 260px;
        background-color: #535b63;
        color: #ffffff; }
    #admin.enlarged .left.main-sidebar #sidebar-menu ul > li:hover > a i {
        color: #ffffff; }

    #admin.enlarged #sidebar-menu > ul > li:hover > a.open :after {
        display: none; }
    #admin.enlarged #sidebar-menu > ul > li:hover > a.active :after {
        display: none; }
</style>