<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="description" content="">
    <meta name="keywords" content="thema bootstrap template, thema admin, bootstrap, admin template, bootstrap admin">

    <meta name="author" content="LanceCoder">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="">
    <title>Thema Admin Boostrap Template</title>

    <!-- Start Global plugin css -->
    <link href="/template/assets/css/theme.css" rel="stylesheet">

    <link href="/template/assets/css/global-plugins.css" rel="stylesheet">
    <link href="/template/assets/vendors/jquery-icheck/skins/all.css" rel="stylesheet" />
    <!-- <link href="/template/assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/css/bootstrap-reset.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/font-awesome/css/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" /> -->
    <!-- <link href="/template/assets/vendors/pe-icon-7-stroke/css/helper.css" rel="stylesheet"/> -->
    <!-- <link href="/template/assets/vendors/jquery-notific8/jquery.notific8.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/line-icons/line-icons.css" rel="stylesheet" /> -->
    <!-- <link href="/template/assets/vendors/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/dropdowns-enhancement/css/dropdowns-enhancement.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/hover/hover.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/animate/animate.css" rel="stylesheet"> -->
    <!-- <link href="/template/assets/vendors/tooltipster/css/tooltipster.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/template/assets/vendors/tooltipster/css/themes/tooltipster-light.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/template/assets/vendors/tooltipster/css/themes/tooltipster-noir.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/template/assets/vendors/tooltipster/css/themes/tooltipster-punk.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/template/assets/vendors/tooltipster/css/themes/tooltipster-shadow.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link href="/template/assets/vendors/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet" /> -->
    <!-- End Global plugin css -->

    <link href="template/assets/css/table-responsive.css" rel="stylesheet"/>
    <link href="template/assets/vendors/datatable/bootstrap/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/template/assets/css/style-responsive.css" rel="stylesheet" />
    <link href="/template/assets/css/class-helpers.css" rel="stylesheet" />

    <!--Color schemes-->
    <link href="/template/assets/css/colors/green.css" rel="stylesheet">
    <link href="/template/assets/css/colors/turquoise.css" rel="stylesheet">
    <link href="/template/assets/css/colors/blue.css" rel="stylesheet">
    <link href="/template/assets/css/colors/amethyst.css" rel="stylesheet">
    <link href="/template/assets/css/colors/cloud.css" rel="stylesheet">
    <link href="/template/assets/css/colors/sun-flower.css" rel="stylesheet">
    <link href="/template/assets/css/colors/carrot.css" rel="stylesheet">
    <link href="/template/assets/css/colors/alizarin.css" rel="stylesheet">
    <link href="/template/assets/css/colors/concrete.css" rel="stylesheet">
    <link href="/template/assets/css/colors/wet-asphalt.css" rel="stylesheet">

    <!--Fonts-->
    <link href="/template/assets/fonts/Indie-Flower/indie-flower.css" rel="stylesheet" />
    <link href="/template/assets/fonts/Open-Sans/open-sans.css?family=Open+Sans:300,400,700" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* Thema Color Schemes
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

* Just add the attribute value to the attribute ID in <body> element
* List of color scheme values that supported to this theme
    - default-scheme - the default is green color
    - alizarin-scheme
    - amethyst-scheme
    - blue-scheme
    - carrot-scheme
    - cloud-scheme
    - concrete-scheme
    - sun-flower-scheme
    - turquoise-scheme
    - wet-asphalt-scheme

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->


<!--
+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
* Thema Layout Options
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *

* Lists of layout options just follow the instructions if you want to use this feature
    > Boxed Page
        - Just add class "fixed-width-unfixed-header" in <body> element 
        - and add class "unfixed-header" also in  <div class="leftside-navigation"> just search "leftside-navigation"
        - and add class also "unfixed-header" to the <section id="main-content"> element just search it
        
    > Boxed Page + Fixed Header
        - Just add class "fixed-width" in <body> element
        - and add class also "boxed-page-fixed-header" to the <section id="main-content"> element just search it

    > Boxed Page + No sidebar
        - Just add class "fixed-width-unfixed-header no-sidebar" in <body> element 
        - and add class also "unfixed-header merge-left" to the <section id="main-content"> element just search it
    
    > Boxed Page + No sidebar + Fixed header
        - Just add class "fixed-width no-sidebar" in <body> element
        - and add class also "merge-left" to the <section id="main-content"> element just search it

    > Full width + Unfixed header
        - Just add class "full-content-unfixed-header" in <body> element
        - and add class also "merge-left" to the <section id="main-content"> element just search it 
    
    > Right Sidebar
        - Just follow the sample page
        - the important to do is replace "<section id="main-content">" to "<section id="main-content-right">"

+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
-->

<body id="default-scheme">

    <!--======== Start Style Switcher ========-->
    <i class="style-switcher-btn fa fa-cogs hidden-xs"></i>
    <div class="style-switcher">
        <div class="style-swticher-header">
            <div class="style-switcher-heading fg-white">Color Switcher</div>
            <div class="theme-close"><i class="icon-close"></i></div>
        </div>

        <div class="style-swticher-body">
            <ul class="list-unstyled">
                <li class="theme-default theme-active" data-style="default"></li>
                <li class="theme-turquoise" data-style="turquoise"></li>
                <li class="theme-blue" data-style="blue"></li>
                <li class="theme-amethyst" data-style="amethyst"></li>
                <li class="theme-cloud" data-style="cloud"></li>
                <li class="theme-sun-flower" data-style="sun-flower"></li>
                <li class="theme-carrot" data-style="carrot"></li>
                <li class="theme-alizarin" data-style="alizarin"></li>
                <li class="theme-concrete" data-style="concrete"></li>
                <li class="theme-wet-ashphalt" data-style="wet-ashphalt"></li>
            </ul>
        </div>
    </div>
    <!--/style-switcher-->
    <!--======== End Style Switcher ========-->

    <section id="container">

        <!--header start-->
        <header class="header fixed-top clearfix">

            <!--logo start-->
            <div class="brand">

                <a href="../index.html" class="logo">
                    Thema Admin
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <div class="top-nav">
                <ul class="nav navbar-nav navbar-right">
                    <li class="search-box">
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="user-profile dropdown-toggle" data-toggle="dropdown"
                            aria-expanded="false">
                            <img src="/template/assets/images/profile.jpg" alt="image">John Doe
                            <span class=" fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-usermenu animated fadeInUp pull-right">
                            <li>
                                <a href="../app-pages/page-profile-dashboard.html" class="hvr-bounce-to-right">
                                    Profile</a>
                            </li>
                            <li>
                                <a href="../app-pages/page-profile-settings.html" class="hvr-bounce-to-right">
                                    <span class="badge bg-red pull-right">50%</span>
                                    <span>Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="hvr-bounce-to-right">Help</a>
                            </li>
                            <li><a href="../app-pages/page-login-2.html" class="hvr-bounce-to-right"><i
                                        class=" icon-login pull-right"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar" class="nav-collapse md-box-shadowed">
                <div class="leftside-navigation leftside-navigation-scroll">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li class="sidebar-profile">

                            <div class="profile-options-container">
                                <p class="text-right profile-options"><span
                                        class="profile-options-close pe-7s-close fa-2x font-bold"></span></p>

                                <div class="profile-options-list animated zoomIn">
                                    <p><a href="app-pages/page-profile-dashboard.html">Profile</a></p>
                                    <p><a href="app-pages/page-profile-settings.html">Settings</a></p>
                                    <p><a href="javascript:void(0)">Help</a></p>
                                    <p><a href="app-pages/page-login-2.html">Log Out</a></p>
                                </div>

                            </div>
                            <div class="profile-main">
                                <p class="text-right profile-options"><i
                                        class="profile-options-open icon-options-vertical fa-2x"></i></p>
                                <p class="image">
                                    <img alt="image" src="/template/assets/images/profile.jpg" width="80">
                                    <span class="status"><i class="fa fa-circle text-success"></i></span>
                                </p>
                                <p>
                                    <span class="name">John Doe</span><br>
                                    <span class="position" style="font-family: monospace;">Administrator</span>
                                </p>
                            </div>
                        </li>
                        <li><a href="{{ route('dashboard.index') }}" class="hvr-bounce-to-right-sidebar-parent"><span
                                    class='icon-sidebar icon-home fa-2x'></span><span>Dashboard</span></a></li>
                         <li><a href="{{ route('surat_balasan.index') }}" class="hvr-bounce-to-right-sidebar-parent"><span
                                    class='icon-sidebar pe-7s-mail fa-2x'></span><span>Surat Balasan</span></a></li>
                         <li><a href="{{ route('history.index') }}" class="hvr-bounce-to-right-sidebar-parent"><span
                                     class="icon-sidebar pe-7s-display2 fa-2x"></span><span>History</span></a></li>
                    </ul>
                </div>  
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                <div class="top-page-header">
                    <div class="c_panel">
                    </div>

                    @yield('abdurrohman_content')

                </div>
            </section>
        </section>
    </section>
    <script src="template/assets/js/tables.js"></script>
    <script src="template/assets/js/table_editable.js"></script>
    <!-- <script src="/template/assets/js/jquery.js"></script>
<script src="/template/assets/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/template/assets/vendors/jquery.cookie/jquery.cookie.js"></script>
<script src="/template/assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="/template/assets/vendors/jquery-easing/jquery.easing.1.3.js"></script>
<script src="/template/assets/vendors/bootstrap/js/bootstrap.js"></script>
<script src="/template/assets/vendors/jquery/dcjqaccordion.2.7.js"></script>
<script src="/template/assets/vendors/jquery/scrollTo.min.js"></script>
<script src="/template/assets/vendors/jquery/slimscroll.js"></script>
<script src="/template/assets/vendors/jquery/nicescroll.js"></script>
<script src="/template/assets/vendors/progressbar/bootstrap-progressbar.min.js"></script>
<script src="/template/assets/vendors/counter/waypoints.min.js" type="text/javascript" ></script>
<script src="/template/assets/vendors/counter/jquery.counterup.min.js" type="text/javascript" ></script>
<script src="/template/assets/vendors/jquery-icheck/icheck.min.js"></script>
<script src="/template/assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="/template/assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="/template/assets/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="/template/assets/vendors/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script src="/template/assets/vendors/summernote/summernote.min.js"></script>
<script src="/template/assets/vendors/jquery.autosize/jquery.autosize.js"></script>
<script src="/template/assets/vendors/jquery.multi-select/js/jquery.multi-select.js"></script>
<script src="/template/assets/vendors/jquery.multi-select/js/jquery.quicksearch.js"></script>
<script src="/template/assets/vendors/typeahead/js/typeahead.bundle.js"></script>
<script src="/template/assets/vendors/typeahead/js/handlebars.min.js"></script>
<script src="/template/assets/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js"></script>
<script src="/template/assets/vendors/select2/select2.min.js"></script>
<script src="/template/assets/vendors/bootstrap-star-rating/js/star-rating.min.js"></script>
<script src="/template/assets/vendors/bootstrap-fileupload/js/bootstrap-fileupload.js"></script>
<script src="/template/assets/vendors/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
<script src="/template/assets/vendors/jquery.validate/jquery.validate.min.js"></script>
<script src="/template/assets/vendors/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script src="/template/assets/vendors/dropzone/dropzone.min.js"></script>
<script src="/template/assets/vendors/plupload/js/plupload.full.min.js"></script>
<script src="/template/assets/vendors/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js"></script>
<script src="/template/assets/vendors/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="/template/assets/vendors/x-editable/inputs-ext/address/address.js"></script>
<script src="/template/assets/vendors/x-editable/inputs-ext/typeaheadjs/typeaheadjs.js"></script>
<script src="/template/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="/template/assets/vendors/magnific-popup/js/jquery.magnific-popup.js"></script>
<script src="/template/assets/vendors/masonry/masonry.pkgd.min.js"></script>
<script src="/template/assets/vendors/moment.min.js"></script>
<script src="/template/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="/template/assets/vendors/raphael-min.js" charset="utf-8" ></script>
<script src="/template/assets/vendors/sweetalert/sweetalert.min.js"></script>
<script src="/template/assets/vendors/word-rotator/jquery.wordrotator.min.js"></script>
<script src="/template/assets/vendors/wow-animations/js/wow.min.js"></script>
<script src="/template/assets/vendors/rwd-table/js/rwd-table.min.js?v=5.0.3"></script>
<script src="/template/assets/vendors/jqueryui.sortable.animation/jquery.ui.sortable-animation.js"></script>
<script src="/template/assets/vendors/tooltipster/js/jquery.tooltipster.js" type="text/javascript" ></script>
<script src="/template/assets/vendors/dropdowns-enhancement/js/dropdowns-enhancement.min.js" type="text/javascript"></script>
<script src="/template/assets/vendors/jquery-notific8/jquery.notific8.js" type="text/javascript"></script>
<script src="/template/assets/vendors/date.js"></script>
<script src="/template/assets/vendors/pogo-slider/js/jquery.pogo-slider.min.js" type="text/javascript" ></script>
<script src="/template/assets/vendors/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript" ></script>
<script src="/template/vendors/nestable/jquery.nestable.js" type="text/javascript" ></script>
<script src="/template/assets/vendors/bstooltip/bstooltip.js"></script>

 
#
# COMMON SCRIPT FOR THIS PAGE
#
##################################################################################-->

    <!--common script init for all pages-->
   

    <script src="/template/assets/js/global-plugins.js"></script>
    <script src="/template/assets/js/theme.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            new WOW().init();

            App.initPage();
            App.initLeftSideBar();
            App.initCounter();
            App.initNiceScroll();
            App.initPanels();
            App.initProgressBar();
            App.initSlimScroll();
            App.initNotific8();
            App.initTooltipster();
            App.initStyleSwitcher();
            App.initMenuSelected();
            App.initRightSideBar();
            App.initSummernote();
            App.initAccordion();
            App.initModal();
            App.initPopover();

        });
    </script>


</body>

</html>

<!--===== Footer End ========-->