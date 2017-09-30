<?php
/**
 * Created by SAIED-LOAI-LAKHDAR.
 * User: DjelfaNetwork
 * Date: 29-09-2017
 * Time: 15:01
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>U-Tech | Corporation</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="U-Tech">

    <!-- Google Fonts -->
    <link href='css/font.css' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/w3.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-icons.css" />
    <link rel="stylesheet" href="css/settings.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/color.css" />
    <link rel="stylesheet" href="css/main-rtl.css" />
    <link rel="stylesheet" href="css/spacings.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/lo-reg.css" />
    <link rel="stylesheet" href="vegas/vegas.min.css" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/logo-250x250.png">


</head>

<body data-spy="scroll" data-offset="60">

    <!-- Preloader -->
    

    <!--[ main Wrapper ]-->
    <!-- Top content -->
    <div class="w3-display-middle top-content">

        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0 form-box" style="height: 450px;">
                        <div class="form-top">
                            
                        </div>
                        <div class="form-bottom">
                            <form class="material">
                                <div class="group">
                                    <input type="text" required><span class="highlight"></span><span class="bar"></span>
                                    <label>إسم المستخدم</label>
                                </div>
                                <div class="group">
                                    <input type="password" required><span class="highlight"></span><span class="bar"></span>
                                    <label>كلمة المرور</label>
                                </div>
                                <button type="button" class="button buttonBlue">دخول
                                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                                </button>

                                <h3 class="register">ليس لديك حساب ؟ <a href="register.php">سجل</a></h3>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 ">
                        <div class="utech" style="height: 70px;" >
                            <a href="index.php">
                            <h2 class="neon h" style="margin-top: 10px;">U-Tech</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>




    <div id="back-to-top">
        <a href="#top"><i class="fa fa-angle-up"></i></a>
    </div>

    <script src="http://zeptojs.com/zepto.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/rev-slider.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    <script type="text/javascript" src="vegas/vegas.min.js"></script>

    <script type="text/javascript" >
    //
    $(window).load(function() {

        // slider background
        $("#login-wrap,body").vegas({
            slides: [
            { src: "img/login1.jpg" },
            { src: "img/login2.jpg" },
            { src: "img/login3.jpg" },
            { src: "img/login4.jpg" }
            ]
        });


    });

    // Login form
    $(window, document, undefined).ready(function() {

        $('input').blur(function() {
            var $this = $(this);
            if ($this.val())
                $this.addClass('used');
            else
                $this.removeClass('used');
        });

        var $ripples = $('.ripples');

        $ripples.on('click.Ripples', function(e) {

            var $this = $(this);
            var $offset = $this.parent().offset();
            var $circle = $this.find('.ripplesCircle');

            var x = e.pageX - $offset.right;
            var y = e.pageY - $offset.top;

            $circle.css({
                top: y + 'px',
                right: x + 'px'
            });

            $this.addClass('is-active');

        });

        $ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
            $(this).removeClass('is-active');
        });

    });

</script>


</body>
</html>