<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Codyiizen | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />       
        <link href="<?php echo base_url(); ?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url(); ?>assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css" />
        <?php
        if (!empty($arrJs['css'])) {
            foreach ($arrJs['css'] as $cssPath) {
                ?>
                <link href="<?php echo base_url() . $cssPath; ?>" rel="stylesheet" type="text/css" />
                <?php
            }
        }
        ?>
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
        <style type="text/css">
            @font-face{font-family:'FontAwesome';src:url('<?php echo base_url('assets/global/plugins/font-awesome'); ?>/fonts/fontawesome-webfont.eot_v=4.4.0');src:url('<?php echo base_url('assets/global/plugins/font-awesome'); ?>/fonts/fontawesome-webfont.eot_#iefix&v=4.4.0') format('embedded-opentype'),url('<?php echo base_url('assets/global/plugins/font-awesome'); ?>/fonts/fontawesome-webfont.woff2_v=4.4.0') format('woff2'),url('<?php echo base_url('assets/global/plugins/font-awesome'); ?>/fonts/fontawesome-webfont.woff_v=4.4.0') format('woff'),url('<?php echo base_url('assets/global/plugins/font-awesome'); ?>/fonts/fontawesome-webfont.ttf_v=4.4.0') format('truetype'),url('<?php echo base_url('assets/global/plugins/font-awesome'); ?>/fonts/fontawesome-webfont.svg_v=4.4.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}
        </style>
    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!-- BEGIN HEADER -->
        <?php $this->load->view('_layout/_admin/_header'); ?>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->

        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <?php $this->load->view('_layout/_admin/_sidebar'); ?>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <?php $this->load->view('_layout/_admin/_footer'); ?>
        <!-- END FOOTER -->

        <script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 


<!--        <script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>-->
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="https://eternicode.github.io/bootstrap-datepicker/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>

        <?php
        if (!empty($arrJs['js'])) {
            foreach ($arrJs['js'] as $jsPath) {
                ?>
                <script src="<?php echo base_url() . $jsPath; ?>" type="text/javascript"></script>
                <?php
            }
        }
        ?>
    </body>
</html>
