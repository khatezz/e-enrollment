<!DOCTYPE html>
<html>
<head>
    <title>Online Enrollment</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link id="style_color" href="/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>

</head>
<body class="login">
    <div class="logo">
        <a href="index.html">
        <img src="../../assets/admin/layout2/img/logo-big.png" alt=""/>
        </a>
    </div>
    <div class="menu-toggler sidebar-toggler">
    </div>

    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" method="POST" action="{{ route('login') }}">
            {!! csrf_field() !!}
            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
            </div>
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <div class="input-icon">
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="email" autocomplete="off" placeholder="Email" name="Email"/>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon">
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} /> Remember me </label>
                <button type="submit" class="btn blue pull-right">
                Login <i class="m-icon-swapright m-icon-white"></i>
                </button>
            </div>
            <div class="create-account">
                <p>
                     Don't have an account yet ?&nbsp; <a href="javascript:;" >
                    Create an account </a>
                </p>
            </div>

        </form>
    </div>
    <div class="copyright">
         2014 &copy; Metronic - Admin Dashboard Template.
    </div>

</body>
    <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    // <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
    jQuery(document).ready(function() {     
      Metronic.init(); // init metronic core components
    Layout.init(); // init current layout
      Login.init();
      Demo.init();
           // init background slide images
           $.backstretch([
            "/assets/admin/pages/media/bg/1.jpg",
            "/assets/admin/pages/media/bg/2.jpg",
            "/assets/admin/pages/media/bg/3.jpg",
            "/assets/admin/pages/media/bg/4.jpg"
            ], {
              fade: 1000,
              duration: 8000
        }
        );
    });
    </script>

</html>