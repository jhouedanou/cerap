<header id="header" class="ym-wrapper">
  <div class="ym-wbox">
    <div id="logosearch" class="ym-grid linearize-level-1">
      <div id="logo" class="ym-g66 ym-gl">
        <div id="logowrapper" class="ym-grid linearize-level-1">
          <!--logo & sitename-->
          <!--logo-->
           <div id="logounmalawi" class="ym-g20 ym-gl">
              <a rel="dofollow"  href="<?php print base_path(); ?>"><img id="logo" src="<?php print $logo; ?>" class="flexible" title="United Nations Malawi" alt="United Nations Malawi"></a>
            </div>
          <!--sitename-->
           <div id="name" class="ym-g80 ym-gr">
              <div id="innername" class="ym-gbox">
                <h1 class="sitename"><?php print $site_name; ?></h1>
              </div>
          </div>
        </div>
      </div><!--logo-->
      <div id="searchsocia" class="ym-g33 ym-gr linearize-level-1">
          <div id="search">
              <!--searchbox region-->
              <?php print render($page['searchbox']);?>
          </div><!--search-->
          <div id="social">
              <!--web 2.0 icons-->
                <?php print render($page['socialnetwork']);?>
         </div><!--social-->
      </div><!--searchsocia-->
    </div><!--logosearch-->
  </div><!--ym-wbox-->
<div id="menu" class="ym-wrapper">
  <!--contenu du header ici-->
  <div id="menuinner" class="ym-wbox">
    <?php print render($page['menualt']);?>
  </div><!--ym-wbox-->
</div><!--menu-->
<nav id="navigation" class="ym-wrapper">
    <div class="ym-wbox">
        <!--navigation-->
        <?php print render($page['navbar']);?>
    </div>
</nav>
</header><!--ym-wrapper-->
