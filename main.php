<?php
/**
 * DokuWiki Default Template
 *
 * This is the template you need to change for the overall look
 * of DokuWiki.
 *
 * You should leave the doctype at the very top - It should
 * always be the very first line of a document.
 *
 * @link   http://dokuwiki.org/templates
 * @author Andreas Gohr <andi@splitbrain.org>
 */

// must be run from within DokuWiki
if (!defined('DOKU_INC')) die();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $conf['lang']?>"
 lang="<?php echo $conf['lang']?>" dir="<?php echo $lang['direction']?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
    <?php tpl_pagetitle()?>
    [<?php echo strip_tags($conf['title'])?>]
  </title>

  <?php tpl_metaheaders()?>

  <link rel="shortcut icon" href="<?php echo DOKU_TPL?>images/favicon.ico" />

  <?php /*old includehook*/ @include(dirname(__FILE__).'/meta.html')?>
</head>

<body>
<?php /*old includehook*/ @include(dirname(__FILE__).'/topheader.html')?>

<div id="wrapper">
   <div id="header">
		<h1 id="site-title">
		   <span>
		      <a href="/" title="Open Source Bridge" rel="home">
   		      Open Source Bridge
		      </a>
	      </span>
    </h1>
		<div id="site-description">An Open Source confernece in Portland, OR : June 2009</div>
	</div>
	
	<div id="access">
    <div class="skip-link">
      <a href="#content" title="Skip to content">Skip to content</a>
    </div>
    <div id="menu">
      <ul>
        <li><a href="<%= remote_base %>">Blog</a>
        <li class="page_item page-item-10"><a href="/about/" title="About">About</a></li>
        <li class="page_item page-item-22"><a href="/contact-us/" title="Contact Us">Contact Us</a></li>
        <li class="page_item page-item-56"><a href="/volunteer/" title="Volunteer">Volunteer</a></li>
        <li class="current_page_item"><a href="/proposals">Proposals</a></li>
      </ul>
    </div>
	</div>
	
   <div id="container">
      <div id="content">
      
      <?php if($conf['breadcrumbs']){?>
         <div id="breadcrumbs">
            <?php tpl_breadcrumbs()?>
            <?php //tpl_youarehere() //(some people prefer this)?>
         </div>
      <?php }?>
      <?php if($conf['youarehere']){?>
        <div id="breadcrumbs">
           <?php tpl_youarehere() ?>
        </div>
      <?php }?>
      
         <div class="dokuwiki">
           <h2 class="entry-title"><?php tpl_link(wl($ID,'do=backlink'),tpl_pagetitle($ID,true),'title="'.$lang['btn_backlink'].'"')?></h2>
           <?php html_msgarea()?>
           <?php flush()?>

           <div class="page">
             <!-- wikipage start -->
             <?php tpl_content()?>
             <!-- wikipage stop -->
           </div>

           <?php flush()?>

              <div class="meta">
               <div class="user">
                 <?php tpl_userinfo()?>
               </div>
               <div class="doc">
                 <?php tpl_pageinfo()?>
               </div>
             </div>
        </div>
      </div>
   </div>
   <div class="sidebar dokuwiki">
      <ul class='xoxo'>
         <li>
            <h3>Wiki</h3>
            <ul>
               <li><?php tpl_button('index')?></li>
               <li><?php tpl_button('recent')?></li>
               <li><?php tpl_button('login')?></li>
            </ul>
         </li>
         <li>
            <h3>This Page</h3>
            <ul>
               <li><?php tpl_button('edit')?></li>
               <li><?php tpl_button('history')?></li>
            </ul>
         <li>
            <h3>Search Wiki</h3>
            <?php tpl_searchform()?>
      </ul>

       <?php tpl_button('subscribe')?>
       <?php tpl_button('subscribens')?>
       <?php tpl_button('admin')?>
       <?php tpl_button('profile')?>
     </div>
     <div id='footer'>
      <?php tpl_license(false);?>
     </div>
   </div>
</div>

<div class="no"><?php /* provide DokuWiki housekeeping, required in all templates */ tpl_indexerWebBug()?></div>
   
</body>
</html>
