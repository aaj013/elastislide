<html>
<head>
<style>

.tps-section {
  width: 100%;
  height: 500px;
  -webkit-perspective: 10em;
  -moz-perspective: 10em;
  -ms-perspective: 10em;
  -o-perspective: 10em;
  perspective: 10em;
  -webkit-perspective-origin: center bottom;
  -moz-perspective-origin: center bottom;
  -ms-perspective-origin: center bottom;
  -o-perspective-origin: center bottom;
  perspective-origin: center bottom;
  -webkit-perspective-origin: 50% 50%;
  -moz-perspective-origin: 50% 50%;
  -ms-perspective-origin: 50% 50%;
  -o-perspective-origin: 50% 50%;
  perspective-origin: 50% 50%;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  -o-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.tps-wrapper {
  float: left;
  width: 100%;
  height: 100%;
}

html {
  height: 100%;
}

body {
  background: #cacaca;
  padding: 0;
  text-align: center;
  font-family: 'open sans';
  position: relative;
  margin: 0;
  height: 100%;
}

.wrapper {
  height: auto !important;
  margin-top:100px !important;
  height: 100%;
  margin: 0 auto;
  overflow: hidden;
}

a {
  text-decoration: none;
}

h1, h2 {
  width: 100%;
  float: left;
}

h1 {
  margin-top: 100px;
  color: #999;
  margin-bottom: 5px;
  font-size: 70px;
  font-weight: 100;
}

h2 {
  padding: 00px 20px 30px 20px;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  letter-spacing: 0px;
  color: #888;
  font-size: 20px;
  line-height: 160%;
  font-weight: 100;
  margin-top: 10px;
  margin-bottom: 0;
}

.pointer {
  color: #00B0FF;
  font-family: 'Pacifico';
  font-size: 24px;
  margin-top: 15px;
  position: absolute;
  top: 130px;
  right: -40px;
}

.pointer2 {
  color: #00B0FF;
  font-family: 'Pacifico';
  font-size: 24px;
  margin-top: 15px;
  position: absolute;
  top: 130px;
  left: -40px;
}

pre {
  margin: 80px auto;
}

pre code {
  padding: 35px;
  border-radius: 5px;
  font-size: 15px;
  background: rgba(0, 0, 0, 0.1);
  border: rgba(0, 0, 0, 0.05) 5px solid;
  max-width: 500px;
}

.main {
  float: left;
  width: 100%;
  margin: 0 auto;
}

.main h1 {
  padding: 20px 50px 10px;
  float: left;
  width: 100%;
  font-size: 60px;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  font-weight: 100;
  margin: 0;
  padding-top: 55px;
  font-family: 'Open Sans';
  letter-spacing: -1px;
  text-transform: capitalize;
}

.main h1.demo1 {
  background: #1ABC9C;
}

.reload.bell {
  font-size: 12px;
  padding: 20px;
  width: 45px;
  text-align: center;
  height: 47px;
  border-radius: 50px;
  -webkit-border-radius: 50px;
  -moz-border-radius: 50px;
}

.reload.bell #notification {
  font-size: 25px;
  line-height: 140%;
}

.reload, .btn {
  display: inline-block;
  border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  display: inline-block;
  line-height: 100%;
  padding: 0.7em;
  text-decoration: none;
  width: 100px;
  line-height: 140%;
  font-size: 17px;
  font-family: Open Sans;
  font-weight: bold;
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #4D90FE;
  background-image: -webkit-linear-gradient(top, #4d90fe, #4787ed);
  background-image: -webkit-moz-gradient(top, #4d90fe, #4787ed);
  background-image: linear-gradient(top, #4d90fe, #4787ed);
  border: 1px solid #3079ED;
  color: #FFF;
}

.reload:hover {
  background: #317af2;
}

.btn {
  width: 200px;
  -webkit-box-shadow: none;
  box-shadow: none;
  background-color: #4D90FE;
  background-image: -webkit-linear-gradient(top, #4d90fe, #4787ed);
  background-image: -moz-linear-gradient(top, #4d90fe, #4787ed);
  background-image: linear-gradient(top, #4d90fe, #4787ed);
  border: 1px solid #3079ED;
  color: #FFF;
}

.clear {
  width: auto;
}

.btn:hover, .btn:hover {
  background: #317af2;
}

.btns {
  float: left;
  width: 100%;
  margin: 50px auto;
}

.credit {
  text-align: center;
  color: #888;
  padding: 10px 10px;
  margin: 0 0 0 0;
  background: #f5f5f5;
  float: left;
  width: 100%;
}

.credit a {
  text-decoration: none;
  font-weight: bold;
  color: black;
}

.back {
  position: absolute;
  top: 0;
  left: 0;
  text-align: center;
  display: block;
  padding: 7px;
  width: 100%;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  background: #f5f5f5;
  font-weight: bold;
  font-size: 13px;
  color: #888;
  -webkit-transition: all 200ms ease-out;
  -moz-transition: all 200ms ease-out;
  -o-transition: all 200ms ease-out;
  transition: all 200ms ease-out;
}

.back:hover {
  background: #eee;
}

.page-container {
  float: left;
  width: 100%;
  margin: 0 auto 300px;
  position: relative;
}

.panorama {
  width: 100%;
  float: left;
  margin-top: -5px;
  height: 700px;
}

.panorama .credit {
  background: rgba(0, 0, 0, 0.2);
  color: white;
  font-size: 12px;
  text-align: center;
  position: absolute;
  bottom: 0;
  right: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  float: right;
}

.main {
  margin-bottom: 350px;
  overflow: hidden;
}

.tps-section {
  width: 100% !important;
  max-width: 1000px;
  margin: 0 auto;
  height: 500px;
}

.tps-section .tps-wrapper {
  border-radius: 5px;
}

.tps-section .tps-wrapper h1 {
  position: relative;
  height: 100%;
  position: absolute;
}

.tps-section .tps-wrapper h1 a {
  color: white;
  position: absolute;
  background: rgba(0, 0, 0, 0.25);
  width: 100%;
  height: 100%;
  top: 0;
  padding-top: 225px;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  left: 0;
  font-weight: bold;
  text-transform: uppercase;
  letter-spacing: 4px;
  font-size: 20px;
  font-size: 14px;
  line-height: 190%;
}

.tps-section .tps-wrapper h1 a small {
  text-transform: none;
  font-style: italic;
  font-weight: 400;
  font-family: noto serif;
  letter-spacing: 1px;
  font-size: 14px;
}

.tps-section:nth-child(1n+1) .tps-wrapper {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/151734/demo7.jpg) center center;
  background-size: cover;
}

.tps-section:nth-child(2n+1) .tps-wrapper {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/151734/demo6.jpg) center center;
  background-size: cover;
}

.tps-section:nth-child(3n+1) .tps-wrapper {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/151734/demo5.jpg) center center;
  background-size: cover;
}

.tps-section:nth-child(4n+1) .tps-wrapper {
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/151734/demo8.jpg) center center;
  background-size: cover;
}

.header {
  overflow: hidden;
  clear: both;
}
</style>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <div class="wrapper">
        <div class="main">
                <section class="page1">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll Once.<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page2">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll more.<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page3">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll More & More<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page4">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll More & More<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page5">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll More & More<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page6">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll More & More<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page7">
                    <div class="page_container">
                        <h1><a href=
                        "#">Scroll More & More<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>

                <section class="page8">
                   <div class="page_container">
                        <h1><a href=
                        "#">Scroll More & More<br>
                        <small>It's the journey that counts always.</small></a></h1>
                    </div>
                </section>
        </div>
    </div>

<script>
! function ($) {
     var defaults = {
         sectionContainer: "> section",
         angle: 50,
         opacity: true,
         scale: true,
         outAnimation: true,
         pageContainer: '.page_container',
         pageOpacity: true
     };
     $.fn.tiltedpage_scroll = function (options) {
         var settings = $.extend({}, defaults, options),
             el = $(this);
         el.find(settings.sectionContainer).addClass("tps-section");
         el.find('.tps-section').each(function () {
             var el2 = $(this);
             el2.wrapInner("<div class='tps-wrapper'></div>");
         });

         function isElementInViewport(el3) {
             var docViewTop = $(window).scrollTop(),
                 docViewBottom = docViewTop + $(window).height(),
                 elemTop = el3.offset().top,
                 elemBottom = elemTop + el3.outerHeight(true);
             return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
         }

         function elementVisibilityMayChange(el4) {
             if (isElementInViewport(el4)) {
                 el4.addClass("tps-inview")
             } else {
                 el4.removeClass("tps-inview")
             }
         }
         $(window).on('DOMContentLoaded load resize scroll', function () {
             el.find(settings.sectionContainer).each(function () {
                 elementVisibilityMayChange($(this));
             });
             el.find('.tps-section.tps-inview > .tps-wrapper').each(function (index) {
                 var el2 = $(this),
                     elc = el2.find(settings.pageContainer),
                     opacity = 0,
                     opacity2 = 0,
                     st = $(window).scrollTop(),
                     deg = ((el2.parent().offset().top - el2.parent().height()) - st) / $(window).height() * (settings.angle * 3),
                     scale = ((st + $(window).height() - (el2.parent().offset().top - el2.parent().height())) / ($(window).height()));
                 if (scale > 1) scale = 1;
                 if (deg < 0) deg = 0;
                 if (st > el2.parent().offset().top) {
                     if (settings.outAnimation == false) {
                         opacity = 1;
                         opacity2 = 1;
                         if (opacity < 0) {
                           opacity = 0;
                           opacity2 = 0;
                         }
                         if (deg < 0) deg = 0;
                     } else {
                         opacity = ((el2.parent().offset().top + ($(window).height() * 1.2) - st)) / ($(window).height());
                         opacity2 = opacity;
                         opacity = Math.pow(opacity, 25);
                         opacity2 = Math.pow(opacity2, 25);
                         //console.log('- '+opacity2);
                         deg = (el2.parent().offset().top - st) / $(window).height() * (settings.angle * 3);
                         scale = ((st + $(window).height() - el2.parent().offset().top) / ($(window).height()));
                     }
                 } else {
                     if (index != 0) {
                         opacity = ((st + $(window).height() - el2.parent().offset().top + (el2.height() / 2)) / $(window).height());
                       opacity2 = opacity / 2;
                       opacity2 = opacity2 < 0.4 ? opacity2/2 : opacity2;
                         //console.log(opacity2);
                         if (opacity > 1) {
                             opacity = 1;
                             opacity2 = 1;
                         }
                     } else {
                         opacity = 1;
                         opacity2 = 1;
                         deg = 0;
                         scale = 1;
                     }
                 } if (settings.scale == false) scale = 1;
                 if (settings.angle == false) deg = 0;
                 if (settings.opacity == false) {
                   opacity = 1;
                   opacity2 = 1;
                 }
                 el2.css({
                     'transform': 'rotateX(' + deg + 'deg) scale(' + scale + ', ' + scale + ')',
                     opacity: opacity
                 });
                 elc.css({opacity: opacity2});
             });
         });
     }
 }(window.jQuery);

$(document).ready(function(){
  $(".main").tiltedpage_scroll({
    angle: 20
  });
});
</script>
</body>
</html>
