        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="mobile-menu-toggle"></div>
        <div class="header-container clearfix">
            <header class="wrapper clearfix">
                
                <?php if ($logo): ?>
                    <div class="logo-container">
                    <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                    </a>
                    </div>
                <?php endif; ?>
				
                <div class="nav-container">
                    <nav>
                        <div class="content">
		        <?php print theme('links__system_main_menu', array(
		          'links' => $main_menu,
		          'attributes' => array(
		            'id' => 'main-menu-links',
		            'class' => array('links', 'clearfix'),
		          ),
		          'heading' => array(
		            'text' => t('Main menu'),
		            'level' => 'h2',
		            'class' => array('element-invisible'),
		          ),
		        )); ?>
                        </div>
                    </nav>             
                </div>        
                
                <?php if ($page['header']) : ?>
                    <?php print drupal_render($page['header']); ?>
                <?php endif; ?>
                
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
                
                <?php if ($page['slideshow']) : ?>
                    <div id="slideshow">
                        <?php print drupal_render($page['slideshow']); ?>                    
                    </div>
                <?php endif; ?>
                
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

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
