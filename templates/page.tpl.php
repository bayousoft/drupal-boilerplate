        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container clearfix">
            <header class="wrapper clearfix">
                
                <?php if ($logo): ?>
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                <?php endif; ?>
        
                <?php if ($page['header']) : ?>
                    <?php print drupal_render($page['header']); ?>
                <?php endif; ?>
             
                
                
                <?php 
				if (module_exists('i18n_menu')) {
				    $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
				} else { 
				    $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
				} ?>
				
                <nav>
                    <div class="content">
                        <?php print drupal_render($main_menu_tree); ?>
                    </div>
                </nav>
                
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <?php if ($messages): ?>
                    <div id="messages">
                      <?php print $messages; ?>
                    </div><!-- /#messages -->
                <?php endif; ?>
            
                <?php if ($breadcrumb): ?>
                    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
                <?php endif; ?>
                
                <?php if ($page['sidebar_first']) : ?>
                    <aside id="first-sidebar">
                        <?php print drupal_render($page['sidebar_first']); ?>                    
                    </aside>
                <?php endif; ?>                               
                    
                <article>
                    <section>
                        <?php print render($title_prefix); ?>
                        
                        <?php if ($title): ?>
                        <h1 class="title" id="page-title">
                          <?php print $title; ?>
                        </h1>
                        <?php endif; ?>
                        
                        <?php print render($title_suffix); ?>
                        
                        <?php if ($tabs): ?>
                        <div class="tabs">
                          <?php print render($tabs); ?>
                        </div>
                        <?php endif; ?>
                        
                        <?php print render($page['help']); ?>
                        
                        <?php if ($action_links): ?>
                        <ul class="action-links">
                          <?php print render($action_links); ?>
                        </ul>
                        <?php endif; ?>
                        
                        <?php print render($page['content']); ?>
                        <?php print $feed_icons; ?>                            
                    </section>
                </article>
        
                <?php if ($page['sidebar_second']) : ?>
                    <aside id="second-sidebar">
                        <?php print drupal_render($page['sidebar_second']); ?>                    
                    </aside>
                <?php endif; ?>

            </div> <!-- #main -->
        </div> <!-- #main-container -->
        
        <?php if ($page['footer']) : ?>
            <div class="footer-container">
                <footer class="wrapper">
                    <?php print drupal_render($page['footer']); ?>   
                </footer>
            </div>
        <?php endif; ?>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>