<template>
    <!-- Left Sidebar -->
    <div class="left main-sidebar">

        <div class="sidebar-inner leftscroll">

            <div id="sidebar-menu">

                <ul>

                    <li class="submenu">
                        <a class="active" href="/admin"><i class="fa fa-fw fa-bars"></i><span> Dashboard </span> </a>
                        <ul class="list-unstyled">
                            <li><router-link :to="'/editor'">Editor</router-link></li>
                            <li><router-link :to="'/media'">Media</router-link></li>
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