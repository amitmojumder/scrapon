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
                 <form class="custom">
                   <div class="dash-half">
                      <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                        <span class="suv-dep">Deposit Credit</span>                
                      </div> <!--dash sub header end here-->
                      <hr> 
                      <p><strong>How much would you like to deposit?</strong></p>
                      <div class="clearfix">
                         <label for="radio1"><input name="radio1" type="radio" id="radio1" style="display:none;"><span class="custom radio"></span> $20</label>
                         <label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio"></span> $20</label>
                         <label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio"></span> $20</label>
                         <label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio"></span> $20</label>
                         <label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio"></span> $20</label>
                         <label for="radio2"><input name="radio1" type="radio" id="radio2" style="display:none;"><span class="custom radio"></span> $20</label>
                      </div>                       
                      <div class="paypal-block">
                        <span class="c-deposit">Complete your deposit</span>
                        <div class="deposit">
                          <div class="doller left">
                             $20
                          </div>
                          <div class="paypal right">
                            <a href="#"><img src="image/paypal.jpg" alt="paypal" /></a>
                            <a href="#"><img src="image/americalexpress.jpg" alt="amr express" /></a>
                            <a href="#"><img src="image/vissa.jpg" alt="vissa"/></a>
                            <a href="#"><img src="image/mastercard.jpg" alt="master card" /></a>
                          </div>
                          <p><a href="#" class="btn">checkout and complete your deposit</a></p>
                          *no paypal account required
                        </div>
                      </div>
                   </div>
                   <div class="dash-half">
                      <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                       <span class="suv-pol">Deposit Polocy</span>                
                      </div> <!--dash sub header end here-->
                      <hr> 
                      <p>ScrapOn Credits can be used throughout the site like cash to buy stuff you want. Charge up your account and enjoy quick and easy purchasing.</p><br>

<p>ScrapOn credits are non-refundable, but never expire, so charge up and start shoping today.</p><br>

<p>We use PayPal for both Credit Card and payments made with your PayPal balance. If you have a ScrapOn shop, we also use PayPal to send you your Cashout payments.</p>
                    </div>
                 </form> 
               </div>
            </div>
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   