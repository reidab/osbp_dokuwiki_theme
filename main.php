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
<?php @include(dirname(__FILE__).'/topheader.html')?>
<div id="wrapper">
   <div id="header">
      <h1 id='site-title'><?php tpl_link(wl(),$conf['title'],'name="top" accesskey="h" title="[ALT+H]"') ?></h1>
      <div id="site-description">An open source conference in Portland, Oregon | June 17-19, 2009</div>
    </div>
    
    <div id="access">
       <div class="skip-link">
         <a href="#content" title="Skip to content">Skip to content</a>
       </div>
       <div id="menu">
         <ul>
           <li><a href="/">Blog</a>
           <li class="page_item page-item-10"><a href="/about/" title="About">About</a></li>
           <li class="page_item page-item-22"><a href="/contact-us/" title="Contact Us">Contact Us</a></li>
           <li class="page_item page-item-56"><a href="/volunteer/" title="Volunteer">Volunteer</a></li>
           <li class="page_item"><a href="/sponsors/" title="Sponsors">Sponsors</a></li>
           <li class="page_item"><a href="/proposals/">Proposals</a></li>
         </ul>
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
</div>

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

  <div id='footer'></div>
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

</body>
</html>
