<template>
    <nav class="navbar navbar-expand-md fixed-top navbar-transparent" color-on-scroll="500">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <a class="navbar-brand" href="#">jojo</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="jojo" data-placement="bottom" href="https://github.com/dodcode/jojo" target="_blank">
                            <i class="fa fa-github"></i>
                            <p class="d-lg-none">jojo</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" rel="tooltip" title="about" data-placement="bottom" href="#" target="_blank">
                            <i class="fa fa-user-circle"></i>
                            <p class="d-lg-none">about</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    import $ from 'jquery'

    export default {
        name: "top",
        mounted() {
            var searchVisible = 0;
            var transparent = true;

            var transparentDemo = true;
            var fixedTop = false;

            var navbar_initialized = false;

            // Returns a function, that, as long as it continues to be invoked, will not
            // be triggered. The function will be called after it stops being called for
            // N milliseconds. If `immediate` is passed, trigger the function on the
            // leading edge, instead of the trailing.

            function debounce(func, wait, immediate) {
                var timeout;
                return function() {
                    var context = this, args = arguments;
                    clearTimeout(timeout);
                    timeout = setTimeout(function() {
                        timeout = null;
                        if (!immediate) func.apply(context, args);
                    }, wait);
                    if (immediate && !timeout) func.apply(context, args);
                };
            };

            $(document).ready(function(){
                // window_width = $(window).width();

                // Navbar color change on scroll
                if($('.navbar[color-on-scroll]').length != 0){
                    $(window).on('scroll', pk.checkScrollForTransparentNavbar)
                }

                // Init Collapse Areas
                pk.initCollapseArea();

            });
            var pk = {
                misc:{
                    navbar_menu_visible: 0
                },

                checkScrollForTransparentNavbar: debounce(function() {
                    if($(document).scrollTop() > $(".navbar").attr("color-on-scroll") ) {
                        if(transparent) {
                            transparent = false;
                            $('.navbar[color-on-scroll]').removeClass('navbar-transparent');
                        }
                    } else {
                        if( !transparent ) {
                            transparent = true;
                            $('.navbar[color-on-scroll]').addClass('navbar-transparent');
                        }
                    }
                }, 17),

                initCollapseArea: function(){
                    $('[data-toggle="pk-collapse"]').each(function () {
                        var thisdiv = $(this).attr("data-target");
                        $(thisdiv).addClass("pk-collapse");
                    });

                    $('[data-toggle="pk-collapse"]').hover(function(){
                            var thisdiv = $(this).attr("data-target");
                            if(!$(this).hasClass('state-open')){
                                $(this).addClass('state-hover');
                                $(thisdiv).css({
                                    'height':'30px'
                                });
                            }

                        },
                        function(){
                            var thisdiv = $(this).attr("data-target");
                            $(this).removeClass('state-hover');

                            if(!$(this).hasClass('state-open')){
                                $(thisdiv).css({
                                    'height':'0px'
                                });
                            }
                        }).click(function(event){
                        event.preventDefault();

                        var thisdiv = $(this).attr("data-target");
                        var height = $(thisdiv).children('.panel-body').height();

                        if($(this).hasClass('state-open')){
                            $(thisdiv).css({
                                'height':'0px',
                            });
                            $(this).removeClass('state-open');
                        } else {
                            $(thisdiv).css({
                                'height':height + 30,
                            });
                            $(this).addClass('state-open');
                        }
                    });
                },

            }

            $(document).on('click', '.navbar-toggler', function(){
                var $toggle = $(this);
                if(pk.misc.navbar_menu_visible == 1) {
                    $('html').removeClass('nav-open');
                    pk.misc.navbar_menu_visible = 0;
                    setTimeout(function(){
                        $toggle.removeClass('toggled');
                        $('#bodyClick').remove();
                    }, 550);
                } else {
                    setTimeout(function(){
                        $toggle.addClass('toggled');
                    }, 580);

                    var div = '<div id="bodyClick"></div>';
                    $(div).appendTo("body").click(function() {
                        $('html').removeClass('nav-open');
                        pk.misc.navbar_menu_visible = 0;
                        $('#bodyClick').remove();
                        setTimeout(function(){
                            $toggle.removeClass('toggled');
                        }, 550);
                    });

                    $('html').addClass('nav-open');
                    pk.misc.navbar_menu_visible = 1;
                }
            });
        }
    }
</script>

<style lang="scss" scoped>
    .navbar[class*="bg-"] .navbar-toggler .navbar-toggler-bar, .navbar.navbar-transparent .navbar-toggler .navbar-toggler-bar {
        background: #66615B;
    }

    .navbar-transparent .navbar-nav .nav-item .nav-link:not(.btn), [class*="bg"] .navbar-nav .nav-item .nav-link:not(.btn) {
        color: #66615B;
    }
    .navbar {
        &.navbar-transparent {
            background-color: #fff !important;
            .navbar-brand {
                color: #66615B;
            }
            .navbar-toggler {
                .navbar-toggler-bar {
                    color: #66615B;
                }
            }
        }

        .navbar-collapse {
            border-left: 1px solid #fff;
        }
    }
</style>