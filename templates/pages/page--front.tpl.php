<!--template de la page d accueil-->
 <!--seo-->
 <div id="preheader" style="display:none">
    <?php print $site_name; ?>
    <h1>Master licence abidjan</h1>
</div>
<div id="navlogowrapper" class="ym-wrapper">
  <div id="navlogo" class="ym-wbox">
      <div id="nlogo" class="ym-grid linearize-level-1">
            <div id="logo" class="ym-g20 ym-gl">
              <a rel="dofollow" href="<?php print base_path(); ?>">
                  <img id="logo" src="<?php print $logo; ?>" class="flexible" title="Master licence abidjan" alt="CERAP">
                </a>
            </div><!--logo-->
            <div id="navs" class="ym-g80 ym-gl">
                <?php print render($page['menu']);?>
            </div><!--navs-->
      </div><!--nlogo-->
  </div><!--navlogo-->
</div><!--nlwrapper-->
<div id="sliderwrapper" class="ym-wrapper">
  <div id="slider" class="ym-wbox">
  	<div class="re">
    	<ul id="controlz" class="ym-g25">
                      <li><a id="prev" class="jermaine" href="#">&lt;</a></li>
                      <li><a id="next" class="jermaine" href="#">&gt;</a></li>
                  </ul>
    </div><!--re-->
	<?php print render($page['slider']);?>
  </div><!--slider-->
</div><!--sliderwrapper-->
<div id="midwrapper" class="ym-wrapper module">
  <div id="mid" class="ym-wbox">
                  <ul id="controls" class="ym-g25">
                      <li><a id="preva" class="jermaine" href="#">&lt;</a></li>
                      <li><a id="nexta" class="jermaine" href="#">&gt;</a></li>
                  </ul>
      <div id="boxing" class="ym-grid linearize-level-1">
          <div id="motdudirecteur" class="ym-g25 ym-gl">
          	<div class="ym-gbox">
				<?php print render($page['motdirecteur']);?>
          	</div><!--ym-gbox-->
          </div><!--ym-g25-->
          <div id="differentesections" class="ym-g75 ym-gl">
            <?php print render($page['divisions']);?>
          </div>
      </div><!--ym-grid-->
  </div><!--mid-->
</div><!--midwrapper-->
<div id="centrewrapper" class="ym-wrapper module">
  <div id="centre" class="ym-wbox">

  </div>
</div>
<div id="footerwrapper" class="ym-wrapper module">
footer
</div>
