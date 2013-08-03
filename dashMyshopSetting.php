<?php include 'header.php'; ?>
<script type="text/javascript">
$(document).ready(function($){
	  $('#accordion-1').dcAccordion({
		  eventType: 'click',
		  autoClose: true,
		  saveState: true,
		  disableLink: true,
		  speed: 'slow',
		  showCount: true,
		  autoExpand: true,
		  cookie	: 'dcjq-accordion-1',
		  classExpand	 : 'dcjq-current-parent'
	  });
});
</script>
        <div class="container">
          <div class="row">
            <div class="span-sidebar"> <!--category sidebar start here-->            
              <div class="dash-cat">
                <ul class="accordion"  id="accordion-1">
                  <li class="dashboard"><a href="#">dashboard</a><span class="menu-arrow"></span></li>
                  <li class="purchase"><a href="#">purchase<span class="pink"> 2 new! </span></a></li>
                  <li class="message"><a href="#">message <span class="pink"> 20 new! </span></a>                    
                  </li>
                  <li class="account"><a href="#">my account</a>
                    <ul>
                      <li><a href="#">profile</a></li>
                      <li><a href="#">change password</a></li>
                      <li><a href="#">email preferences</a> </li>
                      <li><a href="#">account history</a></li>
                    </ul>
                  </li>
                  <li class="myshop"><a href="#">my shop</a>
                    <ul>
                      <li><a href="#">shop settings</a></li>
                      <li><a href="#">my products</a></li>
                      <li><a href="#">new product</a></li>
                      <li><a href="#">sales</a></li>
                      <li><a href="#">cashout</a></li>
                    </ul>
                  </li>
                  <li class="scrapbox"><a href="#">scrapbox</a></li>
                  <li class="following"><a href="#">following</a></li>
                  <li class="follwers"><a href="#">followers</a></li>
                  <li class="comments"><a href="#">my comments</a></li>
                </ul>
              </div>
            </div> <!--category sidebar end here-->
            <div class="span-content">
               <div class="dash-header"> <!--dahsheader start here-->
                  <h3>Welcome Katja, it's great to see you again!</h3>
               </div> <!--dash header end here-->
               <div class="clearfix dashboard-phase">
                <form>
                  <div class="dash-395">
                    <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-set">Shop Settings</span>                
                    </div> <!--dash sub header end here-->
                    <hr>
                    <div class="shop-setting">
                         <label for="p-s-name">shop name</label>
                         <input class="expand" type="text" id="p-s-name" placeholder="ScrapKat" /><br><br>
                         <label for="p-s-message">shop welecome message</label>
                         <input class="expand" type="text" id="p-s-message" placeholder="Wolecome to the Scrapkat Shop" />
                         <label for="p-s-subline">shop welecome subline</label>
                         <input class="expand" type="text" id="p-s-subline" placeholder="We'd really love it if you'd buy a bunch of stuff from us so we c..." />
                        
                         <input type="button" class="btn" value="update settings" /> 
                    </div>
                  </div> 
                  <div class="dash-325">
                    <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-pic">Shop Cover Image</span>
                    </div> <!--dash sub header end here-->
                    <hr>
                    <p>This image should be a 1000x275px jpg. Uploading another size will result in automatic cropping.</p>
                    <img src="image/shop-cover.jpg" class="img-border" alt="shop-cover" />
                    <div class="upload clearfix">
                      <a href="#" class="btn">upload</a> 
                      <a href="#">delete</a>
                    </div>
                     <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-fiture">Feature Artist Image</span>
                    </div> <!--dash sub header end here-->
                    <hr>
                    <p>Featured Artist image must be a 750x300px jpg.</p>
                    <img src="image/featured-artist.jpg" class="img-border" alt="shop-cover" />
                    <div class="upload clearfix">
                      <a href="#" class="btn">upload</a> 
                      <a href="#">delete</a>
                    </div>
                   
                  </div>
                </form>             
               </div>
            </div>
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   