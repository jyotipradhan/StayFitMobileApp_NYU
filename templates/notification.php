<?php include "templates/include/header.php" ?>



<section data-role="page" id = "activity">

<div data-role="header" data-position="fixed">
  <h1> Stay Fit</h1>
  <a href="#mypanel" class="ui-btn ui-btn-left ui-btn-icon-notext ui-icon-grid ui-corner-all"></a>
  <a href="<?php echo APP_URL?>?action=logout" data-iconpos="notext" data-icon="power" data-ajax="false">Log Out</a>  
</div> <!--header-->
<article data-role="content">
   <input type="hidden" name="authToken" id="authToken" value="<?php echo $_SESSION['authToken']?>"/>
   <div role="main" class="ui-content" >

<div class="ui-corner-all custom-corners" data-position="fixed">
  <div class="ui-bar ui-bar-a" align="center"> 
    <h3>Set Preference</h3>
  </div>
  <div class="ui-body ui-body-a">

  <form action="<?php echo APP_URL?>" method="post" data-transition="fade">
        <input type="hidden" name="action" value="notify" />
        <input type="hidden" name="notify" value="true" />
   <fieldset data-role="controlgroup" id="radio-choices">
        <h4>Select a time:</h4>
        <input type="radio" name="radio-choice" id="radio-choice-1" value="choice-1" checked="checked" />
        <label for="radio-choice-1">Morning (11 AM)</label>

        <input type="radio" name="radio-choice" id="radio-choice-2" value="choice-2"  />
        <label for="radio-choice-2">Afternoon (2 PM)</label>

        <input type="radio" name="radio-choice" id="radio-choice-3" value="choice-3"  />
        <label for="radio-choice-3">Evening (5 PM)</label>

    </fieldset>  
    <div id="submitButton"><a href="<?php echo APP_URL?>?action=exercise" data-role="button" data-theme="b">Update</a></div> 
  </form>

  </div>
</div>


        
         </div><!-- /content -->
</article><!--content-->
<div data-role="footer" data-position="fixed">
<h1>Copyrights &#169; 2014</h1>
</div><!--footer-->
</section><!--page-->
<?php include "templates/include/footer.php" ?>