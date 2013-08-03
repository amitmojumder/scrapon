<?php include 'header.php'; ?>
<script type="text/javascript">
		   $(document).foundationTabs();
		</script>
        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div class="container">
          <div class="row">            
            <div class="span-content">              
              <div class="alert-box">
                This is an alert box. Should we need to notify one or all users regarding an issue, that alert will be displayed right here. Typically if we send an alert directly to a user, we would also generate a message through the messaging system to them as well. A pink alert box is ALWAYS at the top of the alert box stack.
                <a href="#" class="dashcross"></a>
              </div>
              <div class="dash-header"> <!--dahsheader start here-->
                <h3>Welcome Katja, it's great to see you again!</h3>
              </div>
              <div class="dashboard-nav clearfix">
                <!--<ul class="dash-nav">
                  <li class="active"><a href="#">dashboard</a></li>
                  <li><a href="#">profile</a></li>
                  <li><a href="#">account</a></li>
                  <li><a href="#">my shop</a></li>
                  <li><a href="#">user tools</a></li>
                </ul>-->
                  <ul class="tabs">
                    <li class="active"><a href="#simple1">dashboard</a></li>
                    <li><a href="#simple2">profile</a></li>
                    <li class=""><a href="#simple3">account</a></li>
                    <li class=""><a href="#simple3">my shop</a></li>
                    <li class=""><a href="#simple3">user tools</a></li>
                  </ul>
                  <ul class="tabs-content">
                    <li class="active clearfix" id="simple1Tab">
                      <ul class="tabs-content2">
                      	<li><a href="">dashboard</a></li>
                      	<li><a href="">scrapboxes</a></li>
                      	<li><a href="">messages</a></li>
                      	<li><a href="">comments</a></li>
                      	<li><a href="">following</a></li>
                      	<li><a href="">followers</a></li>
                      </ul>
                    </li>
                    <li class="clearfix" id="simple2Tab">This is simple tab 2s content. Now you see it!</li>
                    <li class="clearfix" id="simple3Tab">This is simple tab 3s content.</li>
                  </ul>
              </div>
              <div class="allert-ve">
                This is a standard alert box. We would use this box to send basic system messages or to tell users of an upcoming event etc. These boxes should be HTML compatible.
                <a href="#" class="all-cross"></a>
              </div>
              <div class="clearfix">
                <div class="active-scrapbox right">
                  <p>You have 3 active Scrapboxes</p>
                  <hr>
                  <p><span class="pink">Backgrounds :</span> 20 products</p>
                  <p><span class="pink">Vintage Photo Corners :</span> 3 products</p>
                  <p><span class="pink">Ideas For Baby Johnny's Announcement :</span> 21 products</p>
                </div>
              </div>
             
            </div>
            <div class="span-sidebar"> <!--category sidebar start here--> 
              <p class="blakish" style="font-size: 16px; margin-top:30px">Quick Jump</p>
              <hr>
              <ul class="quick-list">
                <li class="ed-pro"><a href="#">edit profile</a></li>
                <li class="q-mes"><a href="#">messages:</a><span> 20 new</span></li>
                <li class="q-light"><a href="#">lightboxes</a></li>
                <li class="q-com"><a href="#">my comments:</a><span> 3</span></li>
                <li class="q-fol"><a href="#">following:</a><span> 21</span></li>
                <li class="q-follo"><a href="#">followers:</a><span> 33</span></li>              
              </ul>
            </div> <!--category sidebar end here-->
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   