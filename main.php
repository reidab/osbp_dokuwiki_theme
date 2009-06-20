<?php
/**
 * mmClean DokuWiki Template
 *
 * @author Marcin Mierzejewski <marcin.mierzejewski@zenzire.com>
 */

 require_once(dirname(__FILE__).'/tpl_functions.php');
 @include(dirname(__FILE__).'/header.php');
?>
<body>
<?php @include(dirname(__FILE__).'/topheader.html') ?>
<div id="wrapper">
   <div id="header">
      <div class='inner_container'>
         <h1 id="site-title"><span><?php tpl_link(wl(),$conf['title'],'name="top" accesskey="h" title="[ALT+H]"') ?></span></h1>
         <div id="site-description">
            <h2>The conference for open source citizens</h2>
            <p id='conference-date-location'>June 17&ndash;19, 2009 <span class='separator'>|</span> Portland, Oregon</p>
         </div>
      </div>
    </div>

   <div id="access">
    <div class="skip-link">
      <a href="#content" title="Skip to content">Skip to content</a>
    </div>

    <div id="menu">
         <ul>
            <li id="menu_first_item"><a href='/about/' title='About' class=''>About</a></li>
            <li><a href='/attend/' title='Attend' class=''>Attend</a></li>
            <li><a href='/sessions/' title='Sessions' class=''>Sessions</a></li>
            <li><a href="/volunteer/" title="Volunteer">Get Involved</a></li>
            <li><a href="/sponsors/" title="Sponsors">Sponsors</a></li>
            <li><a href="/blog/">Blog</a></li>
            <li><a href="/wiki/">Wiki</a></li>
         </ul>
      </div>

      <div id="subnav" class='navbar'>
         <div class='inner_container'>
            <h2>Planning Wiki</h2>


         </div>
      </div>
   </div>

   <div id="container">
      <?php flush()?>

      <div id="content">
        <?php html_msgarea()?>
        <?php tpl_content()?>
        <div class="meta">
           <div class="doc">
              <?php tpl_pageinfo()?>
           </div>
        </div>
      </div>
  <?php flush()?>


<div class='sidebar'>
   <ul class="xoxo">
      <li id="topbar">
         <h3><?php echo $conf['title']; ?></h3>
         <?php tpl_menu1(); ?>
      </li>

      <li id='wiki_controls'>
         <h3>Wiki Menu</h3>
         <?php tpl_bottombar(); ?>
         <div class="meta">
            <div class="user">
               <?php tpl_userinfo()?>
            </div>
         </div>
       </li>


      <?php if ( true == $conf['tpl_mmClean']['searchForm'] ) { ?>
      <li id='search'>
         <h3>Wiki Search</h3>
         <div class="searchform"> <?php tpl_searchform() ?> </div>
      </li>
      <?php } ?>
      <?php tpl_indexerWebBug();?>
</div>
</div>

   <div id='footer'>
      &copy; 2008&ndash;2009 Open Source Bridge Foundation | <a href='/contact-us'>Contact Us</a>
   </div>
</div>

<script type="text/javascript">
  var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
  document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  var pageTracker = _gat._getTracker("UA-168427-8");
  pageTracker._initData();
  pageTracker._trackPageview();
</script>

<script src="http://static.getclicky.com/79611.js" type="text/javascript"></script>
<noscript><p><img alt="Clicky" width="1" height="1" src="http://static.getclicky.com/79611-db10.gif" /></p></noscript>

</body>
</html>
