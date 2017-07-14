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
	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES -->
	<link href="/assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
	<link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css">
	<link href="/assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
	<link href="/assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
	<link href="/assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">


</head>
<body>
	@yield('content')
</body>
	<script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>

	<script src="/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script type="text/javascript" src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
	<script type="text/javascript" src="/assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


	<script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
	<script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
	<script src="/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
	<script src="/assets/admin/pages/scripts/form-wizard.js"></script>

	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	jQuery(document).ready(function() {     
	  Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
	  Login.init();
	  Demo.init();
	  FormWizard.init();
	});
	</script>

</html>