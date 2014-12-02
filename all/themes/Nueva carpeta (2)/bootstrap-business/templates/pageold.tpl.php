<?php if ($page['pre_header_first'] || $page['pre_header_second'] || $page['pre_header_third']) : ?>


    <!-- #pre-header -->
    <div id="pre-header" class="clearfix">




        <div class="container">

            <!-- #pre-header-inside -->
            <div id="pre-header-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-4">
                        <?php if ($page['pre_header_first']): ?>
                            <div class="pre-header-area">
                                <?php print render($page['pre_header_first']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-4">
                        <?php if ($page['pre_header_second']): ?>
                            <div class="pre-header-area">
                                <?php print render($page['pre_header_second']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-4">
                        <?php if ($page['pre_header_third']): ?>
                            <div class="pre-header-area">
                                <?php print render($page['pre_header_third']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #pre-header-inside -->

        </div>
        <div class="toggle-control"><a href="javascript:showPreHeader()"><span class="glyphicon glyphicon-plus"></span></a></div>
    </div>
    <!-- EOF: #pre-header -->    
<?php endif; ?>

<header id="header" role="banner" class="clearfix">

    <div class="row">

        <div class="col-md-12">

            <!--VIVE digital-->

          




            </div>

            <?php if ($page['header_top_left'] || $page['header_top_right']) : ?>
                <!-- #header-top -->
                <div id="header-top" class="clearfix">

                    <div class="container">

                        <!-- #header-top-inside -->
                        <div id="header-top-inside" class="clearfix">
                            <div class="row">

                                <?php if ($page['header_top_left']) : ?>
                                    <div class="<?php print $header_top_left_grid_class; ?>">
                                        <!-- #header-top-left -->
                                        <div id="header-top-left" class="clearfix">
                                            <?php print render($page['header_top_left']); ?>
                                        </div>
                                        <!-- EOF:#header-top-left -->
                                    </div>
                                <?php endif; ?>

                                <?php if ($page['header_top_right']) : ?>
                                    <div class="<?php print $header_top_right_grid_class; ?>">
                                        <!-- #header-top-right -->
                                        <div id="header-top-right" class="clearfix">
                                            <?php print render($page['header_top_right']); ?>
                                        </div>
                                        <!-- EOF:#header-top-right -->
                                    </div>
                                <?php endif; ?>

                            </div>
                        </div>
                        <!-- EOF: #header-top-inside -->

                    </div>
                </div>
                <!-- EOF: #header-top -->    
            <?php endif; ?>

            <!-- header -->

            <div class="back img-responsive" style="background-image: url(<?php print base_path() . path_to_theme(); ?>/images/back.png);">
                <?php if ($logo): ?>
                    <div id="logo">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"> <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> </a>
                    </div>
                <?php endif; ?>
            </div>
            <div>
                <?php if ($page['header']) : ?>
                    <?php print render($page['header']); ?>
                <?php endif; ?>
            </div>

           
        </div>


    </div>






    <div class="container">

        <!-- #header-inside -->
        <div id="header-inside" class="clearfix">
            <div class="row">
                <div class="col-md-12">



                    <?php if ($site_name): ?>
                        <div id="site-name">
                            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a>
                        </div>
                    <?php endif; ?>

                    <?php if ($site_slogan): ?>
                        <div id="site-slogan">
                            <?php print $site_slogan; ?>
                        </div>
                    <?php endif; ?>



                </div>
            </div>

            <!-- EOF: #header-inside -->

        </div>

    </div>




</header>


<!-- #main-content -->
<div id="main-content">
    <div class="container">

        <!-- #messages-console -->
        <?php if ($messages): ?>
            <div id="messages-console" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <?php print $messages; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- EOF: #messages-console -->

        <div class="row">

            <?php if ($page['sidebar_first']): ?>
                <aside class="<?php print $sidebar_grid_class; ?>">  
                    <!--#sidebar-first-->
                    <section id="sidebar-first" class="sidebar clearfix">
                        <?php print render($page['sidebar_first']); ?>
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
            <?php endif; ?>


            <section class="<?php print $main_grid_class; ?>">

                <!-- #main -->
                <div id="main" class="clearfix">

                    <?php if ($breadcrumb && theme_get_setting('breadcrumb_display')): ?> 
                        <!-- #breadcrumb -->
                        <div id="breadcrumb" class="clearfix">
                            <!-- #breadcrumb-inside -->
                            <div id="breadcrumb-inside" class="clearfix">
                                <?php print $breadcrumb; ?>
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->
                    <?php endif; ?> 

                    <!-- EOF:#content-wrapper -->
                    <div id="content-wrapper">

                        <?php print render($title_prefix); ?>
                        <?php if ($title): ?>
                                                            <!--<h1 class="page-title"><?php print $title; ?></h1>-->
                        <?php endif; ?>
                        <?php print render($title_suffix); ?>

                        <?php print render($page['help']); ?>

                        <!-- #tabs -->
                        <?php if ($tabs): ?>
                            <div class="tabs">
                                <?php print render($tabs); ?>
                            </div>
                        <?php endif; ?>
                        <!-- EOF: #tabs -->

                        <!-- #action links -->
                        <?php if ($action_links): ?>
                            <ul class="action-links">
                                <?php print render($action_links); ?>
                            </ul>
                        <?php endif; ?>
                        <!-- EOF: #action links -->

                        <?php print render($page['content']); ?>
                        <?php print $feed_icons; ?>

                    </div>
                    <!-- EOF:#content-wrapper -->


                    <?php if ($page['promoted']): ?>
                        <!-- #promoted -->
                        <div id="promoted" class="clearfix">
                            <div id="promoted-inside" class="clearfix">
                                <?php print render($page['promoted']); ?>
                            </div>
                        </div>
                        <!-- EOF: #promoted -->
                    <?php endif; ?>


                </div>
                <!-- EOF:#main -->

            </section>

            <?php if ($page['sidebar_second']): ?>
                <aside class="<?php print $sidebar_grid_class; ?>">
                    <!--#sidebar-second-->
                    <section id="sidebar-second" class="sidebar clearfix">
                        <?php print render($page['sidebar_second']); ?>
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
            <?php endif; ?>

        </div>

    </div>
</div>
<!-- </div> -->
<!-- EOF:#main-content -->

<?php if ($page['bottom_content']): ?>
    <!-- #bottom-content -->
    <div id="bottom-content" class="clearfix">
        <div class="container">

            <!-- #bottom-content-inside -->
            <div id="bottom-content-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <?php print render($page['bottom_content']); ?>
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
<?php endif; ?>

<!-- EOF:#page -->


<?php if ($page['footer_first'] || $page['footer_second'] || $page['footer_third'] || $page['footer_fourth']): ?>
    <!-- #footer -->
    <footer id="footer" class="clearfix">
        <div class="container">

            <!-- #footer-inside -->
            <div id="footer-inside" class="clearfix">
                <div class="row">
                    <div class="col-md-3">
                        <?php if ($page['footer_first']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_first']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-3">
                        <?php if ($page['footer_second']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_second']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-3">
                        <?php if ($page['footer_third']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_third']); ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="col-md-3">
                        <?php if ($page['footer_fourth']): ?>
                            <div class="footer-area">
                                <?php print render($page['footer_fourth']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- EOF: #footer-inside -->

        </div>
    </footer> 
    <!-- EOF #footer -->
    <?php endif; ?>


<div class="container">

    <!-- #subfooter-inside -->
    <div id="subfooter-inside" class="clearfix">
        <div class="row">
            <div class="col-md-12">
                <!-- #subfooter-left -->
                <div class="subfooter-area">
                    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('menu', 'secondary-menu', 'links', 'clearfix')))); ?>                        

                    <?php if ($page['footer']): ?>
                        <?php print render($page['footer']); ?>
                    <?php endif; ?>

                </div>

                <!-- EOF: #subfooter-left -->
            </div>

        </div>

    </div>

    <!-- EOF: #subfooter-inside -->

</div>







<footer class="footer"style="background-image: url(<?php print base_path() . path_to_theme(); ?>/images/footer.png);">

   
    <a href="http://www.totemsconsulting.com"><p>Realizado por:</p><img src="<?php print base_path() . path_to_theme(); ?>/images/logototems.png" class="totems"></a>

</footer>













<!-- EOF:#subfooter -->
