<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Login | Temper</title>

    <meta name="description" content="User login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

    <!-- text fonts -->
    <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

    <!-- ace styles -->
    <link rel="stylesheet" href="assets/css/ace.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

    <!--[if lte IE 9]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">

                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="widget-main">
                                    <div class="center">
                                        <img src="<?php echo site_url();?>/assets/images/logo.png" alt="Temper" />
                                    </div>

                                    <div class="space-6"></div>
                                        <?php
                                        $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
                                        echo form_open("login/index", $attributes);?>
                                        <fieldset>
                                            <legend>Login</legend>
                                            <div class="form-group">
                                                <div class="row colbox">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <label for="txt_username" class="control-label">Username</label>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="row colbox">
                                                    <div class="col-lg-4 col-sm-4">
                                                        <label for="txt_password" class="control-label">Password</label>
                                                    </div>
                                                    <div class="col-lg-8 col-sm-8">
                                                        <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                                                        <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-lg-12 col-sm-12 text-center">
                                                    <input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
                                                    <input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-danger" value="Cancel" />
                                                </div>
                                            </div>
                                        </fieldset>
                                        <?php echo form_close(); ?>
                                        <?php echo $this->session->flashdata('msg'); ?>
                                </div><!-- /.widget-main -->
                        </div><!-- /.login-box -->
                    </div><!-- /.position-relative -->

                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo site_url();?>/assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="<?php echo site_url();?>/assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo site_url();?>/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', '.toolbar a[data-target]', function(e) {
            e.preventDefault();
            var target = $(this).data('target');
            $('.widget-box.visible').removeClass('visible');//hide others
            $(target).addClass('visible');//show target
        });
    });
</script>
</body>
</html>
