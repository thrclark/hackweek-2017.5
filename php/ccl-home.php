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
	width: 100%;
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
/**** LAYOUT ****/
.list-inline>li {
	padding: 0 10px 0 0;
}
.container-pad {
	padding: 30px 15px;
}
/**** MODULE ****/
.bgc-fff {
	background-color: #fff!important;
}
.box-shad {
	-webkit-box-shadow: 1px 1px 0 rgba(0,0,0,.2);
	box-shadow: 1px 1px 0 rgba(0,0,0,.2);
}
.brdr {
	border: 1px solid #ededed;
}
/* Font changes */
.fnt-smaller {
	font-size: .9em;
}
.fnt-lighter {
	color: #bbb;
}
/* Padding - Margins */
.pad-10 {
	padding: 10px!important;
}
.mrg-0 {
	margin: 0!important;
}
.btm-mrg-10 {
	margin-bottom: 10px!important;
}
.btm-mrg-20 {
	margin-bottom: 20px!important;
}
/* Color  */
.clr-535353 {
	color: #535353;
}
.media-left, .media>.pull-left {
	padding-right: 0px;
}

/**** MEDIA QUERIES ****/
@media only screen and (max-width: 991px) {
.property-listing {
	padding: 5px!important;
}
.property-listing a {
	margin: 0;
}
.property-listing .media-body {
	padding: 10px;
}
}

@media only screen and (min-width: 992px) {
.property-listing img {
	max-widthhhh: 180px;
}
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
                    <div class="input-group input-group-lg" style="margin-top:15px;margin-bottom:15px;">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                        <button class="btn btn-danger btn-lg" type="button" id="searchbutton"><span class="hidden-xs">Find It!</span> <span class="visible-xs"><i class="fa fa-search" aria-hidden="true"></i></span></button>
                        </span> </div>
                </div>
            </div>
        </div>
    </section>
 
    <div class="main-content container" role="main" style="display:block" id="view_home">
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
    
    
       <div class="main-content container" role="main" style=" display:none" id="view_searchreturn">
        <div class="row">
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car4.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/bike1.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car1.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/bike2.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car2.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/bike3.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car3.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                    <div class="media"> <a class="pull-left" href="#" target="_parent"> <img alt="image" class="img-responsive" src="../img/car5.png"></a>
                        <div class="clearfix visible-sm"></div>
                        <div class="media-body fnt-smaller"> <a href="#" target="_parent"></a>
                            <h4 class="media-heading"> <a href="#" target="_parent">$11,900 <small class="pull-right">Selling</small></a></h4>
                            <p> <strong>2011 Mini Cooper</strong> - Runs great, fun to drive, no major issues. 78,000 miles, all service records available
                                ...</p>
                            <span class="fnt-smaller fnt-lighter fnt-arial">(317)4037263 | filoo@yandex.ru </span> </div>
                    </div>
                </div>
            </div>
            
            <!-- End Col --> 
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
        $("#searchbutton").click(function() {
         
			$("#view_home").hide();
			$("#view_searchreturn").show();
		
        });
    });
</script> 


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