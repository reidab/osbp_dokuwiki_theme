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
<div class="page">
   <b class="rtop"><b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b></b>
     <div class="container">



    <div class="header">
		<b class="rtop"><b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b></b>
      <div class="logo">
        <?php tpl_link(wl(),$conf['title'],'name="top" accesskey="h" title="[ALT+H]"') ?>
				
				<?php if ( true == $conf['tpl_mmClean']['searchForm'] ) { ?>
					<div class="searchform" style="margin-top: 60px;"> <?php tpl_searchform() ?> </div>
				<?php } ?>
      </div>
      <div class="topbar">
				<?php tpl_menu1(); ?>
      </div>
  <b class="rbottom"><b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b></b>

    </div>
    <?php /*old includehook*/ @include(dirname(__FILE__).'/header.html')?>

  <?php flush()?>

  <?php /*old includehook*/ @include(dirname(__FILE__).'/pageheader.html')?>
  <?php
    if ( !tpl_isMenu2() )
    { 
  ?>
      <div class="content">
  			<?php html_msgarea()?>
        <?php tpl_content()?>
      </div>
  <?php 
    } 
    else 
    { 
  ?>
      <div class="content_with_sidebar">
        <?php tpl_content()?>
  		<?php html_msgarea()?>
      </div>
      <div class="sidebar">
      <b class="rtop"><b class="r1"></b><b class="r2"></b><b class="r3"></b><b class="r4"></b></b>
      <?php tpl_menu2() ?>
      <b class="rbottom"><b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b></b>
      </div>
  <?php } ?>

  <div class="clearer">&nbsp;</div>

  <?php flush()?>

  <?php if ($INFO['perm'] > AUTH_READ || true == $conf['tpl_mmClean']['wikiBar']  ) { ?>
  <div class="stylefoot">
    <div class="meta">
      <div class="doc">
        <?php tpl_pageinfo()?>
      </div>
      <div class="user">
        <?php tpl_userinfo()?>
      </div>
    </div>
    <?php tpl_bottombar(); ?>
    <?php /*old includehook*/ @include(dirname(__FILE__).'/pagefooter.html')?>
  </div>
  <?php } ?>

<?php /*old includehook*/ @include(dirname(__FILE__).'/footer.php')?>

</div>
<b class="rbottom"><b class="r4"></b><b class="r3"></b><b class="r2"></b><b class="r1"></b></b>
</div>

<?php tpl_indexerWebBug();?>

</body>
</html>
