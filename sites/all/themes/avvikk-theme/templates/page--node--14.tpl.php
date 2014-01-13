<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>
<!-- ______________________ HEADER _______________________ -->
  <header id="header">
    <?php if ($logo && false): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>"/>
      </a>
    <?php endif; ?>
    <?php if (($site_name || $site_slogan) && false): ?>
      <div id="name-and-slogan">
        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </div>
          <?php else: /* Use h1 when the content title is empty */ ?>
            <h1 id="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div id="site-slogan"><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
    <?php if ($page['header']): ?>
      <div id="header-region">
        <?php print render($page['header']); ?>
      </div>
    <?php endif; ?>
  </header> <!-- /header -->
   <?php if (($main_menu || $secondary_menu || $page['navbar']) && false): ?>
      <nav id="navigation" class="menu <?php !empty($main_menu) ? print "with-primary" : ''; !empty($secondary_menu) ? print " with-secondary" : ''; ?>">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
        <?php print theme('links', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary', 'class' => array('links', 'clearfix', 'sub-menu')))); ?>
        <?php if ($page['navbar']): ?>
          <div id="navbar" class="clear">
            <?php print render($page['navbar']); ?>
          </div>
        <?php endif; ?>
      </nav>
    <?php endif; ?>
  <div id="main" class="clearfix" role="main">
    <div id="content">
      <div id="content-inner" class="inner column center">
        <?php if ($page['content_top']): ?>
              <div id="content_top"><?php print render($page['content_top']) ?></div>
        <?php endif; ?>
        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
          <div id="content-header">
            <?php print $breadcrumb; ?>
            <?php if ($title && false): ?>
              <h1 class="title"><?php print $title; ?></h1>
            <?php endif; ?>
            <?php global $user; if(isset($user->roles[3])) print $messages; ?>
            <?php print render($page['help']); ?>
            <?php if ($tabs): ?>
              <div class="tabs"><?php print render($tabs); ?></div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            <?php if ($page['highlight']): ?>
              <div id="highlight"><?php print render($page['highlight']) ?></div>
            <?php endif; ?>
          </div> <!-- /#content-header -->
        <?php endif; ?>
        <div id="content-area">


          <table>
            <tr class="first_header">
              <th colspan="2">EU</th>
              <th colspan="2">US</th>
              <th colspan="2">UK</th>
              <th colspan="2">JP</th>
            </tr>
            <tr class="second_header">
              <th>Men</th>
              <th>Women</th>
              <th>Men</th>
              <th>Women</th>
              <th>Men</th>
              <th>Women</th>
              <th>Men</th>
              <th>Women</th>
            </tr>
            <tr>
              <td>41</td>
              <td>36</td>
              <td>8</td>
              <td>6</td>
              <td>7</td>
              <td>3</td>
              <td>26</td>
              <td>23</td>
            </tr>
            <tr>
              <td>42</td>
              <td>37</td>
              <td>9</td>
              <td>7</td>
              <td>8</td>
              <td>4</td>
              <td>26,5</td>
              <td>24</td>
            </tr>
            <tr>
              <td>43</td>
              <td>38</td>
              <td>10</td>
              <td>8</td>
              <td>9</td>
              <td>5</td>
              <td>27,5</td>
              <td>25</td>
            </tr>
            <tr>
              <td>44</td>
              <td>39</td>
              <td>11</td>
              <td>9</td>
              <td>10</td>
              <td>6</td>
              <td>28,5</td>
              <td>26</td>
            </tr>
            <tr>
              <td>45</td>
              <td>40</td>
              <td>12</td>
              <td>10</td>
              <td>11</td>
              <td>7</td>
              <td>29,5</td>
              <td>27</td>
            </tr>
            <tr>
              <td>46</td>
              <td>41</td>
              <td>13</td>
              <td>11</td>
              <td>12</td>
              <td>8</td>
              <td>30,5</td>
              <td>28</td>
            </tr>
          </table>
          <div class="size_note">
            <p>PLEASE NOTE:</p>
            <p>Size EU refers to the italian size.</p>
          </div>


        </div>
        <?php print $feed_icons; ?>
        <?php if ($page['content_bottom']): ?>
              <div id="content_bottom"><?php print render($page['content_bottom']) ?></div>
        <?php endif; ?>
      </div>
    </div> <!-- /content-inner /content -->
    <?php if ($page['sidebar_first']): ?>
      <aside id="sidebar-first" class="column sidebar first">
        <div id="sidebar-first-inner" class="inner">
          <?php print render($page['sidebar_first']); ?>
        </div>
      </aside>
    <?php endif; ?> <!-- /sidebar-first -->
    <?php if ($page['sidebar_second']): ?>
      <aside id="sidebar-second" class="column sidebar second">
        <div id="sidebar-second-inner" class="inner">
          <?php print render($page['sidebar_second']); ?>
        </div>
      </aside>
    <?php endif; ?> <!-- /sidebar-second -->
  <!-- ______________________ FOOTER _______________________ -->
    <?php if ($page['footer']): ?>
      <footer id="footer">
        <?php print render($page['footer']); ?>
      </footer> <!-- /footer -->
    <?php endif; ?>
  </div> <!-- /main -->
  <?php if ($page['absolute_right']): ?>
  <div id="absolute_right">
    <?php print render($page['absolute_right']); ?>
  </div>
<?php endif; ?>
  <?php if ($page['absolute_left']): ?>
  <div id="absolute_left">
    <?php print render($page['absolute_left']); ?>
  </div>
<?php endif; ?>
</div> <!-- /page -->
