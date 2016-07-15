<?php $page_title = "Home" ?>

<!DOCTYPE html>
<html lang="en-us">
<head>
<?php include ('includes/head-meta.php') ?>
<?php include ('includes/styles.php') ?>
<?php include ('includes/scripts.php') ?>
</head>
<body id="top" >
<?php include ('includes/brand-header2.php') ?>
<?php include ('includes/header2.php') ?>
<div class="main-content container" role="main">
<div id="main-content">
<div class="tcptdp-header">
    <div class="media-body">
        <h2 class="media-heading">All up to date?</h2>
        <div class="controls">
            <div class="dropdown"> <a id="drop6" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Help <span class="caret"></span> </a>
                <ul id="menu3" class="dropdown-menu" aria-labelledby="drop6">
                    <li><a href="#">What are IU Verifications?</a></li>
                    <li><a href="#">Help Link 2</a></li>
                    <li><a href="#">Help Link 3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<p> Your login has been interrupted for the purpose of verifying important information. For more information on why you are seeing this page, <a href="https://uits.iu.edu/cas-interrupts" target="_blank">click here</a> to read more about CAS Interrupts. </p>
<div class="well">
    <div class="row">
        <div class="col-xs-6">
            <h4>IU Notify</h4>
        </div>
        <div class="col-xs-6" style="padding-top:10px"> </div>
    </div>
    <p class="verify-desc"> Displayed below is the contact information on file for you. Please review and update or correct it is to receive critical alerts from IU. For more information, see about emergency notifications at Indiana University.</p>
    <hr>
    <div class="form-horizontal">
        <div class="alert alert-danger" role="alert" id="alert-error" style="display:none">Some items in this section have not been fully verified. Select 'edit' to complete verification, and then refresh this section.</div>
        <div class="alert alert-info alert-dismissible" role="alert" id="alert-success" style="display:none">
            <button type="button" class="close" id="close-alert-success"><span aria-hidden="true">&times;</span></button>
            Verification is complete.</div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">IU Office:</label>
            <div class="col-sm-9">
                <p class="form-control-static">812-855-5555</p>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Home:</label>
            <div class="col-sm-9">
                <p class="form-control-static">812-336-0510</p>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Secondary Home:</label>
            <div class="col-sm-9">
                <p class="form-control-static">Not Specified</p>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Mobile 1:</label>
            <div class="col-sm-9">
                <p class="form-control-static">812-369-9664</p>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Mobile 2:</label>
            <div class="col-sm-9">
                <p class="form-control-static">Not Specified</p>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Mobile 3:</label>
            <div class="col-sm-9">
                <p class="form-control-static">Not Specified</p>
            </div>
        </div>
        <div class="form-group form-group-sm form-section-control">
            <div class="col-sm-offset-2 col-sm-10 text-right"> <a href="#" class="btn btn-xs btn-default" id="refresh">Refresh</a> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Non-IU Email:</label>
            <div class="col-sm-9">
                <p class="form-control-static">thrclark@gmail.com</p>
            </div>
        </div>
        <div class="form-group form-group-sm">
            <label class="col-sm-3 control-label">Recieve notices from:</label>
            <div class="col-sm-9">
                <p class="form-control-static">IU Bloomington<br>
                    IU Kokomo </p>
            </div>
        </div>
        <div class="form-group form-group-sm form-section-control">
            <div class="col-sm-offset-2 col-sm-10 text-right"> <a href="#" class="btn btn-xs btn-default">Refresh</a> <a href="#" class="btn btn-xs btn-primary">Edit</a> </div>
        </div>
    </div>
</div>
<div class="submission">
    <div class="radio">
        <input id="box1" type="checkbox" class="with-font" />
        <label for="box1" class="lead">I have verified that the above information is up to date and correct.</label>
    </div>
    <div class="row">
        <div class="col-md-12 text-center" style="padding-bottom:15px; padding-top:15px;">
            <button class="btn btn-lg btn-primary" id="submit"> Submit</button>
        </div>
    </div>
</div>
<?php include ('includes/brand-footer.php') ?>
<script>
    $(document).ready(function() {
        $("#submit").click(function() {
            $("#alert-error").fadeIn("slow", function() {
            });
        });
		
		$("#refresh").click(function() {
            $("#alert-error").hide(000, function() {
            });
			$("#alert-success").slideDown(000, function() {
            });
        });
		$("#close-alert-success").click(function() {
            $("#alert-success").slideUp(000, function() {
            });
			
        });
    });
</script>
</body>
</html>
