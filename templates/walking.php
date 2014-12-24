<?php include "templates/include/header.php" ?>

       


<section data-role="page" id = "walking">

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
    <h3>Timer</h3>
  </div>
  <div class="ui-body ui-body-a" align="center">
<script>   
 $(document).ready(function(){
         function getdate(){
                var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
             if(s<10){
                 s = "0"+s;
             }

            $("h1").text(h+" : "+m+" : "+s);
             setTimeout(function(){getdate()}, 500);
            }

        $("container").click(getdate);
    });
</script>

<div id="container1"><button class="container" data-theme="b" onclick=getdate()>Start</button></div> 
<div id="container1"><button class="container" data-theme="b">Stop</button></div> 

  </div>
</div>


        
         </div><!-- /content -->
         
</article><!--content-->
<div data-role="footer" data-position="fixed">
<h1>Copyrights &#169; 2014</h1>
</div><!--footer-->


</section><!--page-->
<?php include "templates/include/footer.php" ?>