<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>IU Classifieds</title>
<link href="../less/styles.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
footer {
	position: fixed;
	left: 0px;
	bottom: 0px;
	height: 64px;
	width: 100%;
	background: #333;
}
footer .btn.btn-link {
	font-size: 36px;
	color: #CCCCCC
}
footer .btn.btn-link:hover {
	color: #ffffff
}
.userinfo {
	position: fixed;
	right: 0;
	left: 0;
	margin-right: auto;
	margin-left: auto;
	bottom: -475px;
}
.slide-up {
	bottom: 0px !important;
}
.slide-down {
	bottom: -475px !important;
}
.affix {
	margin-top: 0px;
}
.modaless {
	position: absolute;
	bottom: 0px;
	width: 100%;
	background: #F5F5F5;
	padding-top: 40px;
	padding-bottom: 90px;
	box-shadow: 0 0px 5px 0 rgba(0,0,0,0.26);
	display: none;
}
.blur {
	-webkit-filter: blur(3px);
	-moz-filter: blur(3px);
	-o-filter: blur(3px);
	-ms-filter: blur(3px);
	filter: blur(3px);
}
</style>
</head>
<body id="top">
<div class="wrapper">
    <?php include ('includes/brand-header.php') ?>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="">IU Classifieds</h1>
                </div>
            </div>
        </div>
    </header>
    <section style=" background:#777777; z-index:10"  data-spy="affix" data-offset-top="30" data-offset-bottom="200">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group input-group-lg" style="margin-top:30px;margin-bottom:30px;">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-danger btn-lg" type="button"><span class="hidden-xs">Find It!</span> <span class="visible-xs"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                        </span> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="main-content container" role="main">
        <div class="row" style="margin-top:20px">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well "> Activity </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Announcements </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Collectibles </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Books </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Electronics </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Furniture </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Jobs </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Lost & Found </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Miscellaneous </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Music &amp; Arts </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Rides </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Housing </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Events </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Vehicles </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="well"> Wanted </div>
            </div>
        </div>
    </div>
    <?php include ('includes/modaless-userinfo.php') ?>
    <?php include ('includes/modaless-locations.php') ?>
    <?php include ('includes/modaless-appinfo.php') ?>
    <?php include ('includes/brand-footer.php') ?>
</div>
<script type="text/javascript" src="../js/jquery.js"></script> 
<script type="text/javascript" src="../js/bootstrap.min.js"></script> 
<script>
    $(document).ready(function() {
        $("#toggle_userinfo").click(function() {
            $(".userinfo").slideToggle();
			$(".locations,.appinfo").hide();
			$(".main-content").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_locations").click(function() {
            $(".locations").slideToggle();
			$(".userinfo, .appinfo").hide();
			$(".main-content").toggleClass("blur");
        });
    });
</script> 
<script>
    $(document).ready(function() {
        $("#toggle_appinfo").click(function() {
            $(".appinfo").slideToggle();
			$(".userinfo,.locations").hide();
			$(".main-content").toggleClass("blur");
        });
    });
</script>
</body>
</html>