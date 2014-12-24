<?php include "templates/include/header.php" ?>

  <section data-role="page" id = "exercise-main">

<div data-role="header" data-position="fixed">
  <h1>Stay Fit</h1>
  <a href="#mypanel" class="ui-btn ui-btn-left ui-btn-icon-notext ui-icon-grid ui-corner-all"></a>
  <a href="<?php echo APP_URL?>?action=logout" data-iconpos="notext" data-icon="power" data-ajax="false">Log Out</a>  
</div> <!--header-->
<article data-role="content">
   <input type="hidden" name="authToken" id="authToken" value="<?php echo $_SESSION['authToken']?>"/>
   <div role="main" class="ui-content" >
            <div class="ui-bar ui-bar-a" align="center">
    <h3>Let's Exercise</h3>
  </div>
            
              <ul data-role ="listview" data-inset="true" class="ui-alt-icon">
              <li><a href="<?php echo APP_URL?>?action=stretching">Stretching</a></li>
              <li><a href="<?php echo APP_URL?>?action=breathing">Breathing</a></li>
              <li><a href="<?php echo APP_URL?>?action=walking">Walking</a></li>
              <li><a href="<?php echo APP_URL?>?action=laughing">Laughing</a></li>
            </ul>
    </div><!-- /content -->
</article><!--content-->
<div data-role="footer" data-position="fixed">
<h1>Copyrights &#169; 2014</h1>
</div><!--footer-->
</section><!--page-->

<?php include "templates/include/footer.php" ?>

