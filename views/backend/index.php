<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Admin Panel - jojo</title>
    <meta name="description" content="Admin Panel | jojo">

    
    <link rel="shortcut icon" href="../src/assets/pike-admin/images/favicon.ico">
<link href="/static/css/backend/index.b6dadf6ca28631bfbee0f8b779e92587.css" rel="stylesheet"></head>
<body class="adminbody">
<div id="admin">
    <top></top>
    <left></left>
    <right></right>
    <bottom></bottom>
</div>

<script>
    var resizefunc = [];

    function executeFunctionByName(functionName, context) {
        var args = [].slice.call(arguments).splice(2);
        var namespaces = functionName.split(".");
        var func = namespaces.pop();
        for(var i = 0; i < namespaces.length; i++) {
            context = context[namespaces[i]];
        }
        return context[func].apply(this, args);
    }

    var w,h,dw,dh;
    var changeptype = function(){
        w = $(window).width();
        h = $(window).height();
        dw = $(document).width();
        dh = $(document).height();

        if(jQuery.browser.mobile === true){
            $("body").addClass("mobile").removeClass("adminbody");
        }

        if(!$("#main").hasClass("forced")){
            if(w > 990){
                $("body").removeClass("smallscreen").addClass("widescreen");
                $("#main").removeClass("enlarged");
            }else{
                $("body").removeClass("widescreen").addClass("smallscreen");
                $("#main").addClass("enlarged");
                $(".left ul").removeAttr("style");
            }
            if($("#main").hasClass("enlarged") && $("body").hasClass("adminbody")){
                $("body").removeClass("adminbody").addClass("adminbody-void");
            }else if(!$("#main").hasClass("enlarged") && $("body").hasClass("adminbody-void")){
                $("body").removeClass("adminbody-void").addClass("adminbody");
            }

        }

    }


    var debounce = function(func, wait, immediate) {
        var timeout, result;
        return function() {
            var context = this, args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) result = func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) result = func.apply(context, args);
            return result;
        };
    }

    function resizeitems(){
        if($.isArray(resizefunc)){
            for (i = 0; i < resizefunc.length; i++) {
                window[resizefunc[i]]();
            }
        }
    }
</script>


<script type="text/javascript" src="/static/js/manifest.1a72893aad87699c08af.js"></script><script type="text/javascript" src="/static/js/vendor.4a4027f8dc3e4367e1cd.js"></script><script type="text/javascript" src="/static/js/backend/index.68ad6ff9f11091ab7670.js"></script></body>
</html>