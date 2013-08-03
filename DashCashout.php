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
                  <div class="dash-395">
                    <div class="dash-subheader clearfix"> <!--dash sub header start here-->
                      <span class="suv-cash">Cashout</span>                
                    </div> <!--dash sub header end here-->
                    <hr>
                    <p>Your current account balance is: <span class="d-brinj">$45.00</span> of which <span class="d-brinj">$25.00</span> was earned in shop sales and is available for cashout.*</p> <br>
                    <p><strong>Please verify your cashout PayPal account email address</strong></p>
  					<input type="text" class="expand" value="katja@2epic.com" >
					<strong>Cashout amount:   &nbsp;$ &nbsp;</strong><input type="text" value="$30" style="width:83px" >
                    <p><input type="button" class="btn" value="request cashout"></p><br>
                    <hr>
                    <p>* Cashouts are currently available through PayPal transfer only and are processed within 48 hours of request. Only revenue earned through shop sales is  eligible for cashout. Deposits made to your account are for purchases only and do not qualify for the cashout option.

</p>
                  </div>                   
               </div>
            </div>
          </div>
        </div>        
  		
<?php include 'footer.php'; ?>   